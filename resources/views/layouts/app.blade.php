<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'POS' }} | Laravel POS</title>
    <style>
        body { font-family: system-ui, sans-serif; margin: 0; color: #222; background: #f5f6f8; }
        nav { background: #1f2937; padding: 0 1.5rem; display: flex; gap: .25rem; align-items: center; }
        nav .brand { color: #fff; font-weight: 700; margin-right: 1.5rem; }
        nav a { color: #d1d5db; text-decoration: none; padding: 1rem .9rem; }
        nav a:hover { color: #fff; }
        nav a.active { color: #fff; border-bottom: 3px solid #3b82f6; }
        main { max-width: 960px; margin: 2rem auto; padding: 0 1.5rem; }
        h1 { margin-top: 0; }
        table { width: 100%; border-collapse: collapse; background: #fff; box-shadow: 0 1px 3px rgba(0,0,0,.1); }
        th, td { padding: .7rem .9rem; text-align: left; border-bottom: 1px solid #e5e7eb; }
        th { background: #f3f4f6; }
        footer { text-align: center; color: #6b7280; padding: 2rem 0; font-size: .85rem; }
    </style>
</head>
<body>
    <nav>
        <span class="brand">Laravel POS</span>
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
        <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
        <a href="{{ route('customers.index') }}" class="{{ request()->routeIs('customers.*') ? 'active' : '' }}">Customer Accounts</a>
        <a href="{{ route('users.index') }}" class="{{ request()->routeIs('users.*') ? 'active' : '' }}">User Accounts</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>IT0049 &ndash; TFA5 &ndash; Laravel POS Foundations</footer>
</body>
</html>
