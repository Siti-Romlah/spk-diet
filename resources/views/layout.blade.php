<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'makanan')</title>
    <!-- Tambahkan CSS atau meta tags di sini -->
    <style>
        body {
            display: flex;
        }
        header, footer {
            width: 100%;
            text-align: center;
            padding: 1rem;
            background: #eee;
        }
        .sidebar {
            width: 300px;
            padding: 1rem;
            background: #f4f4f4;
        }
        .content {
            flex: 1;
            padding: 1rem;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <header>
        <h1>My Diet App</h1>
    </header>

    <div class="sidebar">
        @yield('sidebar')
    </div>

    <div class="content">
        @yield('content')
    </div>

    <footer>
        <p>&copy; 2024 My Diet App</p>
    </footer>
</body>
</html>
