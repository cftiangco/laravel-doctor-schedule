<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Alpine Template</title>

    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('build/assets/app.bd11e820.css') }}"/> -->
    @vite('resources/css/app.css')
    
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>

<body class="bg-gray-100 font-mono">

    @include('partials.header')

    <div class="flex mt-16">
        @include('partials.sidebar')
        <div class="container ml-8 md:ml-32">
            @yield('content')
        </div>
    </div>
    
    <script>
        @yield('js')
    </script>
</body>

</html>