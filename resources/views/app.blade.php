<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/a2045487ee.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title> Mato Grosso Urgente </title>
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/{{ session('theme', 'cerulean') }}/bootstrap.min.css" rel="stylesheet">
</head>
 <body>
    <form action="{{ route('themes.update') }}" method="PUT">
        @csrf
        @method('PUT')
        <select name="theme">
           <option value="darkly">Dark</option>
           <option value="cerulean">Light</option>
        </select>
     </form>
</body>
</html>