<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SpaceTraders - Board</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="bg-blue-200">
        <div class="bg-blue-200">
            Welcome captain! Please enter your personal token to get acces to your dashboard.
            <form action="/login" method="post">
                @csrf
                <input type="text" name="token" id="token" placeholder="Token">
                <input type="submit" value="Submit">
        </div>
    </div>
</body>

</html>