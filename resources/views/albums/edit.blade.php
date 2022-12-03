<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit</title>
    @vite('resources/css/app.css')
</head>
<body>
<h1>Edit album</h1>

<body class="bg-gray-200">
<div class="flex flex-col items-center justify-center h-screen" >
    <form class="border-2 border-black rounded-lg p-3 flex flex-col gap-4" action="{{ route('albums.storesongs', $album_id = $albums->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <select name="song_id" id="song_id"  class="bg-gray-200 border-gray-600 border-2 rounded px-14">
            @foreach($songs as $song)
                <option value="{{$song->id}}">{{$song->title}}</option>
            @endforeach
        </select>
        <button type="submit" class="bg-green-700 hover:bg-green-900 text-white font-bold py-1 px-24 rounded">Opslaan</button>
    </form>
    <br><br><br><br>
    <form action="{{ route('albums.update', $albums->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="name">name</label>&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" id="name" name="name" placeholder="&nbsp;{{$albums->name}}" class="bg-gray-200 border-gray-600 border-2 rounded">
        </div>
        <br>
        <div class="form-group">
            <label for="genre">year</label>&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" id="year" name="year" placeholder="&nbsp;{{$albums->year}}" class="bg-gray-200 border-gray-600 border-2 rounded "  >
        </div>
        <br>
        <div class="form-group">
            <label for="founded">times sold</label>
            <input type="text" id="times_sold" name="times_sold" placeholder="&nbsp;{{$albums->times_sold}}" class="bg-gray-200 border-gray-600 border-2 rounded">
        </div>
        <br>

        <br>
            <div>
                <button type="submit" class="bg-green-700 hover:bg-green-900 text-white font-bold py-1 px-24 rounded">Opslaan</button>
            </div>
    </form>

</div>
</body>
</body>
</html>
