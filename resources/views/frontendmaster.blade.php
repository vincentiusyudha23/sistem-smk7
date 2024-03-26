<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')
    @vite('resources/css/app.css')
    @stack('style')
</head>
<body class="p-0 m-0">
    <div class="w-full">
        @yield('content')
    </div>
    @stack('script')
</body>
</html>