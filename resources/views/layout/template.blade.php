<!doctype html>
<html lang="en" :class="isDark ? 'dark' : 'light'" x-data="{ isDark: false }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{--    <script src="https://cdn.tailwindcss.com"></script>--}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <title>@yield('title', config('app.name') )</title>

</head>

<body class="font-montserrat text-sm bg-white dark:bg-zinc-900">

<div class="flex min-h-screen  2xl:max-w-screen-2xl 2xl:mx-auto 2xl:border-x-2 2xl:border-gray-200 dark:2xl:border-zinc-700 ">
    @yield('body')
</div>

</body>
</html>
