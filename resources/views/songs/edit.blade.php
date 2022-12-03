<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit</title>
@vite('resources/css/app.css')
</head>
<body class="bg-gray-200">


<div class="flex flex-col items-center justify-center h-screen" >
<form action="{{ route('songs.update', $song->id) }}" method="POST">
    @csrf
    @method('put')
    <h1 class="text-3xl font-bold">Edit New Song:</h1>
    <div class="form-group">
        <label for="title">title</label>&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" id="title" name="title" placeholder="&nbsp;{{ $song->title }}" class="bg-gray-200 border-gray-600 border-2 rounded">
    </div>
    <br>
    <div class="form-group">
        <label for="singer">singer</label>
        <input type="text" id="singer" name="singer" placeholder="&nbsp;{{ $song->singer }}" class="bg-gray-200 border-gray-600 border-2 rounded "  >
    </div>
    <br>
    <div>
        <button type="submit" class="bg-green-700 hover:bg-green-900 text-white font-bold py-1 px-24 rounded">Opslaan</button>
    </div>
</form>
</div>
</body>
</html>
