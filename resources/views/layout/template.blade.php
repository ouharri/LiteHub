<!doctype html>
<html lang="en" :class="isDark ? 'dark' : 'light'"
      x-data="{ isDark: window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches }">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>@yield('title', config('app.name') )</title>

</head>

<body
    class="font-montserrat text-sm bg-white dark:bg-zinc-900 transition duration-1000 ease-linear">

<div
    class="flex min-h-screen  2xl:max-w-screen-2xl 2xl:mx-auto 2xl:border-x-2 2xl:border-gray-200 dark:2xl:border-zinc-700 w-full dark:bg-gray-800 dark:text-gray-200 overflow-x-hidden  transition duration-1000 ease-linear">

    @yield('body')

</div>

</body>
</html>
