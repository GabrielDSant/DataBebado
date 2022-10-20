<html lang="pt-br">

<head>
    <title>DataBebado</title>
    <link rel='icon' type='image/x-icon' href="{{ URL::asset('favicon.ico') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale="1.0">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bolhas.css') }}">
    <link rel="stylesheet" href="{{ asset('css/TopBar.css') }}">

</head>

<body>

    <!-- Animação Bolhas -->
    <div class="wrapper">
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
        <div><span class="dot"></span></div>
    </div>

    <!-- Barra navegação -->
    <header class="topnav">
        
        <script src="https://kit.fontawesome.com/628c8d2499.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

        <nav>

            <div>
                <img src="{{asset('images/DataBebadoFundoBranco.svg') }}" class="LogoTopo">
            </div>

            <div class="menu-item highlight">
                <div class="menu-text">
                    <a href="#">
                        <span>Home</span>
                        <div class="liquid"></div>
                    </a>
                </div>
            </div>

            <div class="menu-item highlight">
                <div class="menu-text">
                    <a href="#">Sobre o DataBebado</a>
                </div>
            </div>

            <div class="menu-item highlight">
                <div class="menu-text">
                    <a href="#">
                        <span>Convide o Bot</span>
                        <div class="liquid"></div>
                    </a>
                </div>
            </div>


            <div class="menu-item highlight">
                <div class="menu-text">
                    <a href="#">Envie Sua História</a>
                </div>
            </div>

            <div class="menu-item highlight">
                <div class="menu-text">
                    <a href="#">Linkedin</a>
                </div>
            </div>

        </nav>
    </header>

    <!-- Bem-vindo -->
    <section>
        <div>
            <h1>Bem vindo</h1>
        </div>
    </section>

    <!-- Sobre o projeto -->
    <section>
        <h1> Sobre o Projeto </h1>
    </section>

    <!-- Conheça o bot -->
    <section>
        <h1>Conheça o bot</h1>
    </section>

    <!-- Form Envia História -->
    <section>

        <div class="CopoInput">
            <script src="{{ asset('js/EnviaHistoria.js') }}"></script>

            <form>

            <br><br>

            <label for="Name"> Nome do Autor </label>
            <input type="text" placeholder="De quem tá contando não de quem bebeu demais..." id="NomeInput" required/>

            <br><br>

            <label for="City">Cidade</label>
            <input type="text" placeholder="Para fins turisticos..." id="CidadeInput" required/>

            <br><br>

            <label for="Tittle"> Titulo </label>
            <input type="text" placeholder="Um titulo memoravel" id="TituloInput" required/>

            <br><br>

            <label for="TextHistory"> Historia</label>
            <input type="text" placeholder="Era uma vez..." id="HistoriaInput" required/>

            <br><br>

            <input type="button" onclick="ColetaInputs()" value="clickme">
            <input type="button" value="Resetar">

            </form>
        </div>
    </section>

</body>

<footer>
    <h2>Footer</h2>
</footer>

</html>