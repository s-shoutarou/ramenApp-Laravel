<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

@include('components.head')

<body class="is-preload">
	<!-- Wrapper -->
	<div id="wrapper">

		@include('components.header')

		@include('components.sidebar')

		<!-- Main -->
		<div id="main">
			<div class="inner">
				<header>
					<h1>This is Ramen-App, a free, fully responsive site</h1>
					<p>Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod sit amet nisi euismod sed cursus arcu elementum ipsum arcu vivamus quis venenatis orci lorem ipsum et magna feugiat veroeros aliquam. Lorem ipsum dolor sit amet nullam dolore.</p>
				</header>

				<section class="tiles">
					@foreach($items as $item)
					<article class="style1">
						<span class="image">
							<img src="{{asset('storage/'.$item->pic)}}" alt="" width="360" height="270" />
						</span>
						@if(request()->is('*mypage*'))
						<a href="{{route('edit.index',['id'=>$item->id])}}">
							@else
							<a href="{{route('detail.index',['id'=>$item->id])}}">
								@endif
								<h2>{{$item->name}}</h2>
								<div class="content">
									<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
								</div>
							</a>
					</article>
					@endforeach
				</section>

			</div>
		</div>

		<!-- Footer -->
		<footer id="footer">
			<div class="inner">
				<section>
					<h2>Get in touch</h2>
					<form method="get" action="{{url('/search')}}">
						<div class="fields">
							<div class="field">
								<textarea name="search" id="search" placeholder="Search"></textarea>
							</div>
						</div>
						<ul class="actions">
							<li><input type="submit" value="Search" class="primary" /></li>
							<!--
							<li>
								<div class="col-4 col-12-small">
									<input type="radio" id="AND" name="ANDOR" value=0 checked>
									<label for="AND">AND</label>
								</div>
							</li>
							<li>
								<div class="col-4 col-12-small">
									<input type="radio" id="OR" name="ANDOR" value=1>
									<label for="OR">OR</label>
								</div>
							</li>
						</ul>
								-->

					</form>
				</section>
				<section>
					<h2>Follow</h2>
					<ul class="icons">
						<li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon brands style2 fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="#" class="icon brands style2 fa-500px"><span class="label">500px</span></a></li>
						<li><a href="#" class="icon solid style2 fa-phone"><span class="label">Phone</span></a></li>
						<li><a href="#" class="icon solid style2 fa-envelope"><span class="label">Email</span></a></li>
					</ul>
				</section>
				<ul class="copyright">
					<li>&copy; Untitled. All rights reserved</li>
					<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
				</ul>
			</div>
		</footer>

	</div>

	<!-- Scripts -->
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<script src="{{asset('js/browser.min.js')}}"></script>
	<script src="{{asset('js/breakpoints.min.js')}}"></script>
	<script src="{{asset('js/util.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>

</body>

</html>