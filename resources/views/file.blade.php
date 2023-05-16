<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body class="flex justify-center items-center h-screen subway-bg">
    <div class="max-w-md mx-auto bg-white rounded-md shadow-md p-8">
        <h1 class="text-3xl font-bold mb-6 text-center">test</h1>
        <form method="post" action="/test" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="name" class="block mb-2">Username</label>
                <input type="text" value="{{ old('first_name') }}" id="name" name="email" placeholder="John" class="w-full px-4 py-2 rounded-md bg-gray-200 focus:outline-none">
                @error('email')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="block mb-2">Password</label>
                <input type="file" value="{{ old('last_name') }}" id="email" name="file" placeholder="Doe" class="w-full px-4 py-2 rounded-md bg-gray-200 focus:outline-none">
                @error('file')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-green-500 text-white font-bold py-2 px-4 rounded-md hover:bg-green-600 transition duration-200">add file</button>
            </div>
        </form>


        <br>
        <form enctype="multipart/form-data" action="/delete" method="post">
            @csrf
            <input type="submit" value="delete">
        </form>

    </div>
</body>
</html>