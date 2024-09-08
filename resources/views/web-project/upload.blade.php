<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel File Upload</title>
</head>
<body>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }} <br>

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
    <form action="/upload" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="files[]" multiple>
        <br>

        <label for="text">Reporter name:</label>
        <input type="text" name="reporter_name" required>
        <br>

        <label for="text">Item:</label>
        <input type="text" name="name" required>
        <br>

        Type: <select id="" name="type">
            <option value="key">กุญแจ</option>
            <option value="money">เงิน</option>
        </select>
        <br>

        <label for="text">detail:</label>
        <textarea name="detail" cols="30" rows="10"></textarea>
        <br>

        <label for="text">Location:</label>
        <input type="text" name="location" required>
        <br>

        <!--<label for="img_path">img:</label>-->
        <label for="text">Contact:</label>
        <input type="text" name="contact" required>
        <br>
        

        {{-- <input type="submit" value="Upload"> --}}
        <button type="submit">Upload</button>
    </form>
</body>
</html>