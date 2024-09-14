<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Area')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .sidebar {
            width: 200px;
            float: left;
            background-color: #f4f4f4;
            padding: 15px;
            height: 100vh;
        }
        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }
        .sidebar ul li {
            margin: 10px 0;
        }
        .sidebar ul li a {
            text-decoration: none;
            color: #333;
        }
        .content {
            margin-left: 220px;
            padding: 15px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <ul>
            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('admin.users') }}">Users</a></li>
            <li><a href="{{ route('admin.reports') }}">Reports</a></li>
            <li><a href="{{ route('admin.settings') }}">Settings</a></li>
            <li><a href="{{ route('admin.profile') }}">Profile</a></li>
        </ul>
    </div>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
