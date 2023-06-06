<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/dashboard-style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Uportfolio | @yield('title')</title>
</head>

<body>
    <div class="dashboard-wrap">
        @include('components.dashboard.sidebar')

        <div class="content">
            @yield('dashboard-content')
        </div>
    </div>
</body>

</html>