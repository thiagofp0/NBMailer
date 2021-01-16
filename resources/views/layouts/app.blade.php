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
            <a href="/"><img src="{{ asset("/assets/img/logo.png") }}" alt="logo" id="logo"></a>
            <div class="pages">
                <a href="{{ route("dashboard") }}" class="page" id="fristPage">Templates</a>
                <<a href="{{ route("receivers.index") }}" class="page" id="page">Endereços</a>
                <a href="{{ route("logout") }}" class="page">Logout</a>
            </div>
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
