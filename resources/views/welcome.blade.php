<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh; /* Use 100vh to make sure it covers the entire viewport height */
            margin: 0; /* Remove default margin to prevent any unwanted spacing */
            background: url('path/to/your/background-image.jpg') center center;
            background-size: cover;
        }

        .login-buttons {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .login-buttons a {
            margin: 10px;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: 600;
            text-align: center;
            text-decoration: none;
            color: #374151;
            background-color: #F3F4F6;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .login-buttons a:hover {
            background-color: #4d0303;
            color: white;
        }
    </style>

</head>
<body>
    <div class="login-buttons">
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            @else
                <a href="{{ route('login') }}">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        @endif
    </div>
</body>
</html>
