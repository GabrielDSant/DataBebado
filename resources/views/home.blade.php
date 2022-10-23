<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>DataBebado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel='icon' type='image/x-icon' href="{{ URL::asset('favicon.ico') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale="1.0">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/.css') }}">
    <link rel="stylesheet" href="{{ asset('css/.css') }}">
</head>

<header>
        <nav class="header-Home">
            <a href="#">
                <img src="{{ asset('images/DataBebadoFundoPreto.svg') }}" width="245px" height="106.25">
            </a>
            <a href="#">
                <span class="Menu-item">Home</span>
            </a>

            <a href="#">
                <span class="Menu-item"> Envie Sua Historia</span>
            </a>

            <a href="#">
                <span class="Menu-item"> Conheça o Bot</span>
            </a>

            <a href="#">
                <span class="Menu-item">Desenvolvedor do Projeto</span>
            </a>
        </nav>
</header>

<body>

<main class="homeBackground">

    <section class="titulo-Home">
        <center>
            <h1>VAI REGISTRAR COISA BOA EM ALBUM DE FAMILIA!
            <p>AQUI SÓ ACEITAMOS REGISTROS DE CONFUSÕES E MALUQUICES</p>
            </h1>
        </center>
    </section>

    <section class="imagem-home">
        <img src="{{ asset('images/HomeDB.svg') }}">
    </section>

</main>

<main class="sobreBackGround">

    <section class="imagem-Sobre">
    <img src="{{ asset('images/ImgSobre.svg') }}" width="325px" height="537px">
    </section>

    <section class="texto-Sobre">
        <h4>Sobre o Projeto</h4>
        <span>DataBebado É Um Banco De Dados Que Armazena Historias De Bebedeira Enviadas Pelos Usuários.</span>
        <br>
        <span>O Objetivo É Desenvolver Um Bot No Discord Capaz De Contar Essas Histórias Pelos Servidores Que Pertencer.</span>
        <br><br>
        <input class="btn btn-warning btn-lg botão-Sobre" type="button" value="Envie Sua História">
        <input class="btn btn-warning btn-lg botão-Sobre" type="button" value="Conheça O Bot">
    </section>
    
</main>

<main class="envieDiv">
    
    <div class="tituloDiv">
        <h5>Envie Sua História</h5>
        <br>
        <h4>Relaxa...</h4>
        <h4>Vai Todo Mundo Te Julgar Pelo Que Você Vai Escrever Ai Embaixo.</h4>
        <br>
    </div>
    
    <img class="BonecosEsquerda" src="{{asset('images/BonecosForm/BonecosEsquerda.svg')}}">
    <img class="BonecosDireita" src="{{asset('images/BonecosForm/BonecosDireita.svg')}}">



    <div class="formBackground">
        <img class="avisoForm" src="{{asset('images/AvisoForm.svg')}}">
        
        <form class="InputEnvie" action="{{ route('criarHistoria') }}" method="POST">
            
            @csrf

            <section class="linha-Input1">

                <label for="NomeInput">Autor da Peripécia
                <input type="text" placeholder="De quem tá contando não de quem bebeu demais..." id="NomeInput" name="NomeInput" required/>
                </label>

                <label for="CidadeInput">Cidade Onde Passa... Para Fins Turisticos :)
                <input type="text" placeholder="Para fins turisticos..." id="CidadeInput" name="CidadeInput" required/>
                </label>

            </section>

            <label for="TituloInput">Uma História Sem Titulo Não É Uma História
            <input type="text" placeholder="Um titulo memoravel" id="TituloInput" name="TituloInput" required/>
            </label>

            <label for="HistoriaInput">Quanto mais detalhes melhor...
            <textarea name="HistoriaInput" cols="40" rows="5" placeholder="Era uma vez..." id="HistoriaInput" required></textarea>
            </label>

            <div class="buttonForm">
                <input class="btn btn-warning btn-md" type="submit" value="clickme">
            </div>

        </form>

    </div>

</main>

<main class="Bot">
    <section class="bot-Esquerda">
        <h3>Conheça o Bot</h3>
        <h5>DataBeba.Bot</h5>

        <button class="btn btn-success" onclick=" window.open('http://google.com','_blank')">Bot</button>

        <h4> Comandos </h4>
        <p>!DB ContaUma</p>
        <p>O bot responde com uma historia selecionada aleatóriamente do Databebado</p>
        <p>!DB Link</p>
        <p>O bot envia o link da sua plataforma no chat do servidor</p>
    </section>

    <img class="bot-Direita" src="{{asset('images/BotRobo.svg')}}">
</main>

<script src="{{ asset('js/EnviaHistoria.js') }}"></script>

</body>

<footer>
    <section class="infosMinhas">
        <img src="{{ asset('images/Minhafoto.png')}} ">
        <h4><b>Desenvolvedor Do Projeto</b></h4>
        <h5><b>GabrielDSant</b></h5>
    </section>

    <section class="sociaisMinhas">

        <a href="https://www.linkedin.com/in/sant-seginfo/" target="_blank">
        <img src="{{ asset('images/LinkedinLogo.svg')}}">
        <p><h5>Linkedin</h5></p>
        </a>

        <a href="https://tryhackme.com/p/trvo" target="_blank">
        <img src="{{ asset('images/ThmLogo.svg')}}">
        <p><h5>TryHackMe</h5></p>
        </a>

        <a href="https://github.com/GabrielDSant" target="_blank">
        <img src="{{ asset('images/GitLogo.svg')}}">
        <p><h5>Github</h5></p>
        </a>  
    </section>

    <p class="textoFooter"><b>Meu nome é Gabriel 👋 Aluno de segurança da informação 👨‍🎓 Novo no mundo da Segurança 🔐 Gosto de praticar em CTF's 🏳</b></p>

</footer>

</html>