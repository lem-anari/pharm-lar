<!DOCTYPE HTML>
<html>
	<head>
		<title>@yield ('title')</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{asset('assets/css/main.css')}}"/>
		<link rel="stylesheet" href="{{asset('assets/css/style_detail.css')}}"/>
		<noscript><link rel="stylesheet" href="{{asset('assets/css/noscript.css')}}"/></noscript>
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">
					<!-- Nav -->
						<nav id="nav">
							<ul>
                            @if (\Auth::check () && \Auth::user()->role_ == 1)
								<li><a href="{{route('employees')}}">Представители</a></li>
								<li><a href="{{route('audits')}}">Аудиты</a></li>
								<li><a href="{{route('pharmacies')}}">Аптеки</a></li>
								<li>
								<a href="{{route('statistics')}}">Статистика</a>
								<ul>
										<li><a href="#">Lorem ipsum dolor</a></li>
										<li><a href="#">Magna phasellus</a></li>
										<li><a href="#">Etiam dolore nisl</a></li>
										<li><a href="#">Veroeros feugiat</a></li>
									</ul>
									</li>
								
                                @elseif (\Auth::check () && \Auth::user()->role_ == 2)
									<p>Войдите в систему с мобильного приложения!</p>
								@endif
								<li>@if (\Auth::check ()){{\Auth::user()->name}} 
									<ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout 
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                    @else <a href="{{route('login')}}">Sign In @endif</a></li>
							</ul>
						</nav>
						@yield ('content')
						<div id="footer">
		<div class="container">
			@yield ('footer')
		<hr />
			<div class="row">
				<div class="col-12">
					<!-- Contact -->
						<section class="contact">
							<header>
								<h3>Have any questions?</h3>
							</header>
							<p>You can contact us through social networks.</p>
							<ul class="icons">
								<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon brands fa-pinterest"><span class="label">Pinterest</span></a></li>
								<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
								<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">Linkedin</span></a></li>
							</ul>
						</section>
					<!-- Copyright -->
						<div class="copyright">
							<ul class="menu">
								<li>&copy; Pharma Control. All rights reserved.</li><li>Design: Anastasi</li>
							</ul>
						</div>
				</div>
			</div>
			</div>
				</div>
				</div>
				</div>
		</div>
			<script src="{{asset('assets/js/jquery.min.js')}}"></script>
			<script src="{{asset('assets/js/jquery.dropotron.min.js')}}"></script>
			<script src="{{asset('assets/js/jquery.scrolly.min.js')}}"></script>
			<script src="{{asset('assets/js/jquery.scrollex.min.js')}}"></script>
			<script src="{{asset('assets/js/browser.min.js')}}"></script>
			<script src="{{asset('assets/js/breakpoints.min.js')}}"></script>
			<script src="{{asset('assets/js/util.js')}}"></script>
			<script src="{{asset('assets/js/main.js')}}"></script>
	</body>
</html>