<!DOCTYPE html>
<html>

<head>
    <title>Mobile Weather Device</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
@vite(['resources/css/app.css', 'resources/js/app.js'])
<body>

    <!-- Navigation -->
    <div class="nav">
        <aside>
            <div class="logo">
                <h1>Mobile Weather Device</h1>
            </div>

            <nav>
                <a href="/">Dashboard</a>
                <a href="/forecast">Forecast</a>
                <a href="/planner">Planner</a>
            </nav>
        </aside>
    </div>

    <hr>

    <div>
        @yield('content')
    </div>

</body>

</html>
