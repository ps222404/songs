<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Show</title>
    @vite('resources/css/app.css')
</head>
<style>
</style>
<body>
<div class="flex flex-col items-center justify-center h-screen text-gray-700">
    <h1 class="text-3xl font-bold">Band :</h1>
   <p><b class="font-bold">id:</b> {{$bands->id}}</p>
    <p><b class="font-bold">Name:</b> {{$bands->name }}</p>
    <p><b class="font-bold">genre:</b> {{$bands->genre}} </p>
    <p><b class="font-bold">founded:</b> {{$bands->founded}}</p>
    <p><b class="font-bold">active till:</b> {{$bands->active_till}} </p>
    <p><b class="font-bold">created at:</b> {{$bands->created_at}}</p>
    <p><b class="font-bold">update at:</b> {{$bands->updated_at}}</p>
    <p class="font-bold"><b>Albums:</b>@foreach ($bands->albums as $album){{ $album->name }} @endforeach</p>

</div>
</body>
</html>
