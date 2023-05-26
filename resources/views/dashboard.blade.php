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
    <div class="bg-blue-200 grid grid-cols-1 gap-4 justify-items-center">
        <div>
            <h2>Agent : {{ $infos['data']['symbol']}}</h2>
        </div>
        <div>
            <h2>Affiliation : {{ $infos['data']['startingFaction']}}</h2>
        </div>
        <div>
            <h2>Crédits : {{ $infos['data']['credits']}}</h2>
        </div>
        <div>
            <h2>Coordonnée du QG : {{ $infos['data']['headquarters']}}</h2>
        </div>
</body>