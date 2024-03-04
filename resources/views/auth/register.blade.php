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
    <form action="{{ route('register') }}" method="post" class="mt-10">
        @csrf
        <input type="text" name="name" id="name" class="text-black bg-gray-500">
        <input type="email" name="email" id="email" class="text-black bg-gray-500">
        <input type="password" name="password" id="password" class="text-black bg-gray-500" >
        <label for=""> ROLE :</label>
        @foreach($roles as $role)
            @if($role->id != 2)
                <input type="radio" name="role_id" value="{{ $role->id }}"> {{ $role->name }}
            @endif
        @endforeach
        <button type="submit">Register</button>
    </form>
</body>
</html>
