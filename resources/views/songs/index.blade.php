<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Index</title>
@vite('resources/css/app.css')
</head>
<body class="bg-gray-200">
<div class="flex flex-col items-center justify-center h-screen" >
    <h1 class="text-4xl font-bold">songs:</h1>
    <p>title - artist</p>
    @foreach ($songs as $song)
        {{ $song->title }} - {{$song->singer}}
        <div class="flex">
            <form action="{{ route('songs.destroy', ['id' => $song->id]) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Delete" class="text-red-500 font-bold" >
            </form>
            &nbsp;
            <form action="{{ route('songs.edit',['id' => $song->id]) }}">
                <input type="submit" value="edit" class="text-green-600 font-bold" >
            </form>
        </div>
    @endforeach
    <form action="/songs/create" method="get">
        <button class="bg-green-700 hover:bg-green-900 text-white font-bold py-1 px-16 rounded " type="submit">add song</button>
    </form>
</div>
</body>
</html>
