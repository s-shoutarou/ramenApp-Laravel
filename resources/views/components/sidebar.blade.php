		<!-- Menu -->
		<nav id="menu">
			<h2>Menu</h2>
			<ul>
				<li><a href="{{action('IndexController@index')}}">Home</a></li>
				@auth
				<li><a href="{{route('post.index')}}">Post</a></li>
				<li><a href="{{url('/mypage')}}">Mypage</a></li>
				<li><a href="{{url('/logout')}}">Logout</a></li>
				<li><a href=" {{url('/unsubscribe')}}">Unsubscribe</a></li>
				@else
				<li><a href="{{url('/login')}}">Login</a></li>
				<li><a href="{{url('/register')}}">Sign up</a></li>
				@endauth
			</ul>
		</nav>