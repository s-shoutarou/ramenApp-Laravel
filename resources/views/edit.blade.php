<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
	<div class="form-wrapper">
		<h1>編集</h1>
		<form method="post" enctype="multipart/form-data">
			<div class=" form-item">
				<label for="name"></label>
				<input type="text" name="name" required="required" placeholder="店名" value="{{$items->name}}"></input>

				<p></p>

			</div>

			<div class="form-item">
				<label for="address"></label>
				<input type="text" name="address" required="required" placeholder="住所" value="{{$items->address}}"></input>

				<p></p>

			</div>

			<div class="form-item">
				<label for="taste"></label>
				<select name="taste" required="required" placeholder="味" class="taste">
					<option value="0">味を選択して下さい</option>


					<option value="" selected></option>

					<option value=""></option>


				</select>


				<p></p>

			</div>

			<div class="form-item">
				<label for="taste"></label>
				<select name="price" required="required" placeholder="価格" class="price">
					<option value="0">価格帯を選択して下さい</option>

					<option value="" selected></option>

					<option value=""></option>

				</select>

				<p></p>

			</div>


			<div class="form-item">
				<p>画像を変更する場合は選択して下さい</p>
				<label for="pic"></label>
				<input id="pic" type="file" name="pic" placeholder="Pic"></input>

				<p></p>


				<div class="prev" style="margin-top: 10px"><img width='150px' height='150px' src="{{asset('storage/'.$items->pic)}}" alt=""></div>
			</div>

			<div class="form-item">
				<p>煙草について</p>

				<label for="smoke"><input type="radio" name="smoke" value="禁煙" class="detail-radio" checked>禁煙 </label>
				<label for="smoke"><input type="radio" name="smoke" value="喫煙席有" class="detail-radio">喫煙席有</label>

				<label for="smoke"><input type="radio" name="smoke" value="禁煙" class="detail-radio">禁煙</label>
				<label for="smoke"><input type="radio" name="smoke" value="喫煙席有" class="detail-radio" checked>喫煙席有</label>


			</div>

			<div class="form-item option-form">
				<p>その他の情報</p>

			</div>

			<div class="form-item">
				<textarea name="introduction" id="" cols="70" rows="10" placeholder="ラーメンに対する評価、ご感想をお書きください">{{$items->text}}</textarea>

				<p></p>

			</div>

			<div class="button-panel">
				<input type="submit" class="button" title="post" value="投稿する"></input>
			</div>
		</form>

		<div class="form-footer">
		</div>


		<input type="hidden" value="" class="option-hidden">


		<script src=""></script>
</body>

</html>