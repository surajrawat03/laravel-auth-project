<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Model\role;

class rolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rolesData = [
            [
                'roleName' => 'super admin',
                'isVisible' => 1,
            ],
            [
                'roleName' => 'admin',
                'isVisible' => 1,
            ],
            [
                'roleName' => 'user',
                'isVisible' => 1,
            ]
        ];

        foreach ($rolesData as $role) {
            role::create($role);
        }
    }
}
