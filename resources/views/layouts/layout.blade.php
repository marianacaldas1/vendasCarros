<!DOCTYPE html>
<html>
<head>
    <title>Admin Area</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .sidebar { width: 200px; float: left; }
        .content { margin-left: 210px; }
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
