<nav class="{{ isset($class) ? $class : 'menu_solid' }} navbar navbar-fixed-top">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/"><img src="/image/logo.png"></a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1" style="margin:0 auto">
			<ul class="nav navbar-nav home ">
				<li><a href="/results">Results</a></li>
				<li><a href="/details">Details</a></li>
				<li><a href="/profile">Profile</a></li>
				<li><a href="/education">Education</a></li>
				<li><a href="/experience">Experience</a></li>
				<li><a href="/subject">Subject</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right login">
				{{-- <!-- <li><a href="#">Login</a></li>
				<li><a href="#">Register</a></li> -->
				<button type="button" class="btn btn-default" data-toggle="modal" data-target="#login">Login</button>
				<a href="/register"><button type="button" class="btn btn-default">Register</button></a> --}}
				@if(Auth::guest())
				<!-- Qonaq -->
				<button type="button" class="btn btn-info" data-toggle="modal" data-target="#login">Login</button>
				<a href="/register_page"><button type="button" class="btn btn-info">Register</button></a>
				<!-- Qonaq -->
				@else
				<!-- Login Olunmush -->

				<div class="form-group ">
					<div class="dropdown">
						<button class="seherdrop btn btn-primary dropdown-toggle"
						type="button" id="dropdownMenu1" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">
						{{ Auth::user()->name.((Auth::user()->type == 0) ? " müəllim" : "")}}
						</button>
						<ul class="dropdown-menu">
							<li><a href="/profile">Profil</a></li>
							<li><a href="/logout">Çıxış</a></li>
						</ul>
					</div>
				</div>
				
				<!-- <a href="/logout"><button type="button" class="btn btn-info">
					{{-- @if(Auth::user()->type == 0)
					{{Auth::user()->name." müəllim"}}
					@else
					{{Auth::user()->name}}
					@endif --}}
					
					
				</button></a> -->
				<!-- Login Olunmush -->
				@endif
			</ul>
			</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>