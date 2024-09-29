	<!-- As a link -->
<nav class="navbar navbar-expand-md px-3 py-0 navbar-light bg-dark" id="navBarContianer">
	<a class="navbar-brand" href="#">Navbar</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<ul class="navbar-nav mr-auto mb-2 mb-lg-0">
			<li class="nav-item">
			<a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="#">About</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="#">Services</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="#">Contact</a>
			</li>
		</ul>
		<ul class="navbar-nav mb-2 mb-lg-0 ml-auto">
			<li class="nav-item">
				@guest
					<a class="nav-link" href="{{route('login')}}">Login</a>
				@endguest
				@auth
					<a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
				 </a>

					<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
						@csrf
					</form>
				@endauth
			</li>
			<li class="nav-item">
			<a class="nav-link" href="register.html">Register</a>
			</li>
		</ul>
	</div>

</nav>