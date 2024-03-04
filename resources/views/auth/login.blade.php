<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    
    <form action="{{ route('login') }}" method="post" class="mt-10">
        @csrf
    <input type="email" name="email" id="email" class="text-black bg-gray-500">
    <input type="password" name="password" id="password" class="text-black bg-gray-500">
    <button type="submit">Login</button>
    </form>
</body>
</html>