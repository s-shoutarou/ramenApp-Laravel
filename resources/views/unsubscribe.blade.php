<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>


	<div class="form-wrapper">
		<h1>退会</h1>

		<p style="text-align: center"></p>

		<form method="post" action="{{url('/unsubscribe')}}">
			@csrf
			<div class="form-item">
				<label for="user_name"></label>
				<input type="tezt" name="user_name" required="required" placeholder="USER NAME"></input>

			</div>
			<div class="form-item">
				<label for="pass"></label>
				<input type="password" name="pass" required="required" placeholder="Password"></input>
			</div>
			<div class="button-panel">
				<input type="submit" class="button" title="Login" value="退会"></input>
			</div>
		</form>
		<div class="form-footer">
		</div>
	</div>
</body>

</html>