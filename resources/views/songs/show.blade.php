<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Show</title>
    @vite('resources/css/app.css')
</head>

<body>
<div class="flex flex-col items-center justify-center h-screen text-gray-700">
<h1 class="text-3xl font-bold">Song :</h1>
<b>Singer: </b>{{ $song->singer }}
<b>Title: </b>{{ $song->title }}
</div>


</body>
</html>
