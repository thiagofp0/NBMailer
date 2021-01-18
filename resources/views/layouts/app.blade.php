<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>NB Mailer</title>
        <link rel="icon" type="image/png" href="{{ asset("/assets/img/icon.ico") }}"/>
        <link rel="stylesheet" href="{{ asset("/css/app.css") }}">
    </head>
    <body>
        <nav id="menu">
            <div id="logoDiv">
                <a href="{{ route('templates.index') }}"><img src="{{ asset("/assets/img/logo.png") }}" alt="logo" id="logo"></a>
            </div>
            <ul>
                <li><a href="{{ route('templates.index') }}">Templates</a></li>
                <li><a href="{{ route('receivers.index') }}">Endereços</a></li>
                <li><a href="#">Opções</a>
                    <ul>
                        <li><a href="#">Configurações</a></li>
                        <li><a href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                </li>       
            </ul>
        </nav>
        <main>
            {{ $content }}
        </main>
        <footer>
            <img src="{{ asset("/assets/img/pwd.png") }}" alt="" id="logoNB">
            <h6 id="credits">Desenvolvido por Thiago Ferreira</h6>
        </footer>
    </body>
</html>
