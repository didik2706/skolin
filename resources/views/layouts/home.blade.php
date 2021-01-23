<!doctype html>
<html class="no-js" lang="id">
<head>
	<meta charset="utf-8">
	<!--====== Title ======-->
	<title>@yield('title') | Skolin</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ url('assets\images\fav.png') }}" type="image/png">
    
    {{-- Style --}}
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')
</head>

<body>
    {{-- Navigation --}}
    @include('includes.modal')

    <header class="header-area">
		<div class="header-top">
			<div class="container">
				<div class="header-top-wrapper d-flex flex-wrap justify-content-sm-between">
					<div class="header-top-left mt-10">
						<ul class="header-meta">
								{{-- @if(Auth::guard('useradmin'))
									<li>
										<a href="#">{{ Auth::guard('useradmin')->user()->sekolah->nama_sekolah }}</a>
									</li>
								@else
									<li><a href="#">{{ Auth::user()->nama }}</a></li>
								@endif --}}
						</ul>
					</div>
					<div class="header-top-right mt-10">
						<div class="header-link">
							@guest
								<a class="login" href="#" data-target="#loginModal" data-toggle="modal">Login</a>
								<a class="register" href="#" data-target="#registerModal" data-toggle="modal">Register</a>	
							@endguest
							{{-- @if (Auth::guard('useradmin'))
										<a class="notice" href="{{ url('/sekolah') }}">Dashboard</a>
								@else
										<a class="notice" href="{{ url('/dashboard') }}">Dashboard</a>
								@endif --}}
						</div>
					
					</div>
				</div>
			</div>
		</div>
    {{-- Navigation --}}
    @include('includes.navbar')
    </header>

    {{-- Page Content --}}
    @yield('content')
    
    {{-- Footer --}}
    @include('includes.footer')
    
    {{-- Script --}}
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
</body>
</html>