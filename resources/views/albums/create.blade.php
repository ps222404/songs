<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-200">
<div class="flex flex-col items-center justify-center h-screen text-gray-700">
    <h1 class="text-3xl font-bold">Create New album:</h1>
    <br>
    <form action="{{ route('albums.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" id="name" name="name" placeholder="&nbsp;name" class="bg-gray-200 border-gray-600 border-2 rounded">
        </div>
        <br>
        <div class="form-group">
            <label for="year">year</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" id="year" name="year" placeholder="&nbsp;year" class="bg-gray-200 border-gray-600 border-2 rounded "  >
        </div>
        <br>
        <div class="form-group">
            <label for="times sold">times sold</label>
            <input type="text" id="times sold" name="times sold" placeholder="&nbsp;times sold" class="bg-gray-200 border-gray-600 border-2 rounded">
        </div>
        <br>
        <div>
            <button type="submit" class="bg-green-700 hover:bg-green-900 text-white font-bold py-1 px-24 rounded">Opslaan</button>
        </div>

        <div class="container">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert"><br>
                        {{$error}}
                    </div>
        @endforeach
        @endif
    </form>
</div>
</body>
</html>
