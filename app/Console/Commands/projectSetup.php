<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;

class projectSetup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'project:setup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Runs all necessary commands to set up the project';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        DB::beginTransaction(); // Start the transaction

        try {
            // Run migrations
            $this->info('Running migrations...');
            $this->call('migrate');

            // Seed the database
            $this->info('Seeding the database...');
            $this->call('db:seed');

            // Run npm install
            $this->info('Installing npm dependencies...');
            $this->runNpmCommand('install');

            // Build front-end assets
            $this->info('Building front-end assets...');
            $this->runNpmCommand('run', ['script' => 'dev']);

            // If everything is fine, commit the transaction
            DB::commit();

            $this->info('Project setup is complete!');
        } catch (Exception $e) {
            // Rollback all database changes
            DB::rollBack();

            // Display error message
            $this->error("Setup failed: " . $e->getMessage());

            // Log the error
            Log::error('Project setup failed', ['error' => $e->getMessage()]);
        }
    }

        /**
     * Helper function to run external npm commands
     *
     * @param string $command
     * @param array $params
     * @throws Exception
     */
    private function runNpmCommand($command, $params = [])
    {
        // Prepare the command
        $npmCommand = "npm $command";

        // If there are parameters, add them to the command
        if (!empty($params)) {
            $npmCommand .= ' ' . implode(' ', $params);
        }

        // Execute the command and get the output
        $output = [];
        $exitCode = 0;
        exec($npmCommand, $output, $exitCode);

        // Check if the command was successful
        if ($exitCode !== 0) {
            throw new Exception("Command '$npmCommand' failed with exit code $exitCode. Output: " . implode("\n", $output));
        }

        $this->info(implode("\n", $output)); // Output npm command results to console
    }

    /**
     * Helper function to run external Artisan or npm commands
     * 
     * @param string $command
     * @param array $params
     * @throws Exception
     */
    private function runExternalCommand($command, $params = [])
    {
        $exitCode = $this->call($command, $params);

        if ($exitCode !== 0) {
            throw new Exception("Command '$command' failed with exit code $exitCode");
        }
    }
}
