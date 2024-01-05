<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Adicione aqui suas folhas de estilo, scripts, etc. -->
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        main {
            margin: 0;
            justify-content: center;
            width: 100%;
            display: flex;
            flex-direction: row;
            align-items: center;
            min-height: 50vh;
        }
        header {
            background-color: #333;
            padding: 10px;
            color: white;
            align-content: flex-start;
        }

        .header-content {
            display: flex;
            justify-content: flex-start;
        }

        header img {
            width: 50px;
            margin-right: 10px;
            margin-left: 20%;
        }

        nav {
            display: flex;
            align-items: flex-start;
            align-self: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .user-section {
            display: flex;
            align-items: center;
        }

        .login-button {
            margin-left: 1000%;
            padding: 8px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .credits {
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="header-content">
            <img src="{{ asset('/assets/logo.png') }}" alt="Logo">
            <nav>
                <a href="{{ url('/') }}">Início</a>
            </nav>
            <div class="user-section">
                @if(auth()->check())
                    <p>Bem-vindo, {{ auth()->user()->name }}</p>
                @else
                    <button class="login-button">Login</button>
                @endif
            </div>
        </div>
    </header>

    <main>
        <!-- Corpo -->
        @yield('content')
    </main>

    <footer>
        <!-- Rodapé -->
        <div class="credits">
                <p>2013 - 2024. Procuradoria da Republica no Rio Grande do Norte.</p>
        </div>
    </footer>
</body>
</html>
