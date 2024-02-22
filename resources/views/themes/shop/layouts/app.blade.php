<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <title>AsiaMarket | Official Site</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/views/themes/shop/assets/css/main.css', 'resources/views/themes/shop/assets/plugins/jqueryui/jquery-ui.css', 'resources/views/themes/shop/assets/js/main.js', 'resources/views/themes/shop/plugins/jqueryui/jquery-ui.min.js'])

</head>

<body>
    @include('themes.shop.shared.header')
    @yield('content')
    @include('themes.shop.shared.footer')

</body>

</html>
