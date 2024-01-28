<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/images/dc-logo.png" type="image/x-icon">
    <title>DC Comics</title>
    @vite('resources/js/app.js')
</head>

<body>
    @include('/partials/header')

    @yield('main')

    @include('/partials/footer')
</body>

</html>