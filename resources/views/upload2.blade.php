<!DOCTYPE html>
<html>

<head>
	<title>Laravel File Upload</title>
</head>

<body>
	@if(session('success'))
	<div class="alert alert-success">
		{{ session('success') }}
		<br>

		@foreach(json_decode(session('files')) as $file)
		<img src="{{ asset('storage/uploads/' . $file) }}" alt="Uploaded File" style="max-width: 200px;">
		@endforeach
	</div>


	@elseif(session('fail'))

	<div class="fail">
		{{ session('fail') }}

	</div>

	<!--@elseif(session('invalid'))
	<div class="invalid">
		{{ session('invalid') }}
		<h1>tesst</h1>
	</div>-->
	@else
	<h1>Please enter</h1>

	@endif
	<form action="/upload2" method="POST" enctype="multipart/form-data">
		@csrf
		<input type="file" name="files[]" multiple>
		<br>

		<label for="text">name:</label>
		<input type="text" name="item">
		<br>

		<label for="text">reporter name:</label>
		<input type="text" name="reporter_name">
		<br>

		<label for="text">detail:</label>
		<textarea name="detail" cols="30" rows="10"></textarea>
		<br>

		<!--<label for="img_path">img:</label>-->
		<br>
		<select id="type" name="type">
			<option value="key">กุญแจ</option>
			<option value="money">เงิน</option>
		</select>
		<br>
        <label for="contact">contact</label><br>
        <input type="text" name = "contact"><br>

        <label for="location">location</label><br>
        <input type="text" name = "location"><br>
		<button type="submit">Upload</button>
	</form>

</body>

</html>
