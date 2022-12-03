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
<body class="bg-gray-200">
<div class="flex flex-col items-center justify-center h-screen text-gray-700">
    <h1 class="text-3xl font-bold">Band :</h1>
    <p><b class="font-bold">id:</b> {{$albums->id}}</p>
    <p><b class="font-bold">Name:</b> {{$albums->name }}</p>
    <p><b class="font-bold">year:</b> {{$albums->year}} </p>
    <p><b class="font-bold">times_sold:</b> {{$albums->times_sold}}</p>
</div>
</body>
</html>
