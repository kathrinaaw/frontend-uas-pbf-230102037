<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Dashboard')</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
        }

        .sidebar {
            width: 220px;
            background-color: #2c3e50;
            color: white;
            padding: 20px;
        }

        .sidebar h2 {
            font-size: 20px;
            margin-bottom: 20px;
        }

        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 10px 0;
        }

        .sidebar a:hover {
            background-color: #34495e;
        }

        .content {
            flex: 1;
            padding: 30px;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <h2>Menu</h2>
        <a href="/">Dashboard</a>
        <a href="/pasien">Data Pasien</a>
        <a href="/obat">Data Obat</a>
    </div>

    <div class="content">
        @yield('content')
    </div>

</body>
</html>
