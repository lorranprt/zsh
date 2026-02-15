<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ZSH</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
<header>@include('partials.navbar')</header>

<main>
    @yield('content')
</main>

<footer>@include('partials.footer')</footer>

</body>
</html>