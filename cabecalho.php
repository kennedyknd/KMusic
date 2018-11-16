<?php

session_start();
include_once '../usuario/Usuario.php';

$possuiAcesso = (new Usuario())->possuiAcesso();

if (!$possuiAcesso) {
    header('location: ../usuario/login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>KMusic - O seu portal da música</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <link rel="stylesheet" href="../kmusic.css"/>
    <link rel="stylesheet" href="../js/chosen/chosen.css"/>
    <script type="text/javascript" src="../js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="../js/jquery.maskedinput.js"></script>
    <script type="text/javascript" src="../js/sweetalert2.all.js"></script>
    <script src="../js/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../js/bootstrap/css/bootstrap.css"/>
    <script type="text/javascript" src="../js/chosen/chosen.jquery.js"></script>

    <script>
        $(function(){
            $('.chosen').chosen();
        })
    </script>

    <style>
        body {font-family: "Lato", sans-serif}
        .mySlides {display: none}
    </style>
</head>

<?php if (!empty($_SESSION['usuario'])) { ?>

<body>

<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-black w3-card">
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        <a href="../index.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
        <a href="#sobre" class="w3-bar-item w3-button w3-padding-large w3-hide-small">SOBRE</a>
        <a href="#contato" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTATO</a>
        <div class="w3-dropdown-hover w3-hide-small">
            <button class="w3-padding-large w3-button" title="More">NOVO CADASTRO <i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a href="../musica/add.php#musica" class="w3-bar-item w3-button">Música</a>
                <a href="../artista/add.php#artista" class="w3-bar-item w3-button">Artista</a>
                <a href="../banda/add.php#banda" class="w3-bar-item w3-button">Banda</a>
                <a href="../album/add.php#album" class="w3-bar-item w3-button">Album</a>
                <a href="../genero/add.php#genero" class="w3-bar-item w3-button">Gênero</a>
                <a href="../gravadora/add.php#gravadora" class="w3-bar-item w3-button">Gravadora</a>
            </div>
        </div>
        <div class="w3-dropdown-hover w3-hide-small">
            <button class="w3-padding-large w3-button" title="More">VISUALIZAR <i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a href="../musica/index.php#musica" class="w3-bar-item w3-button">Música</a>
                <a href="../artista/index.php#artista" class="w3-bar-item w3-button">Artista</a>
                <a href="../banda/index.php#banda" class="w3-bar-item w3-button">Banda</a>
                <a href="../album/index.php#album" class="w3-bar-item w3-button">Album</a>
                <a href="../genero/index.php#genero" class="w3-bar-item w3-button">Gênero</a>
                <a href="../gravadora/index.php#gravadora" class="w3-bar-item w3-button">Gravadora</a>
            </div>
        </div>

        <div class="w3-dropdown-hover w3-hide-small">
            <button class="w3-padding-large w3-button" title="More">ADMINISTRADOR <i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a href="../pagina/index.php" class="w3-bar-item w3-button">Página</a>
                <a href="../perfil/index.php" class="w3-bar-item w3-button">Perfil</a>
                <a href="../usuario/index.php" class="w3-bar-item w3-button">Usuário</a>
            </div>
        </div>

        <div>
            <li>
                <ul class="nav navbar-nav navbar-right user-nav">
                    <li class="user-name"><span><?= $_SESSION['usuario']['nome']; ?></span></li>
                    <li><a title="Sair" href="../usuario/processamento.php?acao=deslogar" class="opener-right-menu"><span class="fa fa-sign-out"></span></a></li>
                </ul>
            </li>
        </div>
    </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
    <a href="#sobre" class="w3-bar-item w3-button w3-padding-large">SOBRE</a>
    <a href="#cadastro" class="w3-bar-item w3-button w3-padding-large">CADASTRO</a>
    <a href="#contato" class="w3-bar-item w3-button w3-padding-large">CONTATO</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

    <!-- Automatic Slideshow Images -->
    <div class="mySlides w3-display-container w3-center">
        <img src="../imagens/Music_is_my_Life_www.FullHDWpp.com_.jpg" style="width:100%">
        <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            <h3>KMusic</h3>
            <p><b>O seu portal de informações sobre música.</b></p>
        </div>
    </div>
    <div class="mySlides w3-display-container w3-center">
        <img src="../imagens/54650.jpg" style="width:100%">
        <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            <h3>Publicidade</h3>
            <p><b>Cadastre sua banda e música.</b></p>
        </div>
    </div>
    <div class="mySlides w3-display-container w3-center">
        <img src="../imagens/music-desktop-wallpaper-48718-50334-hd-wallpapers.jpg" style="width:100%">
        <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            <h3>Você antenado!</h3>
            <p><b>Fique por dentro das novidades da música.</b></p>
        </div>
    </div>
<?php } ?>