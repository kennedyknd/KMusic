<!DOCTYPE html>
<html>
<head>
    <title>KMusic - O seu portal da música</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <link rel="stylesheet" href="kmusic.css"/>
    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/jquery.maskedinput.js"></script>
    <script type="text/javascript" src="js/sweetalert2.all.js"></script>
    <script src="js/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="js/bootstrap/css/bootstrap.css"/>
    <style>
        body {font-family: "Lato", sans-serif}
        .mySlides {display: none}
    </style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-black w3-card">
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        <a href="index.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
        <a href="#sobre" class="w3-bar-item w3-button w3-padding-large w3-hide-small">SOBRE</a>
        <a href="#cadastro" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CADASTRO</a>
        <a href="#contato" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTATO</a>
    </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
    <a href="#sobre" class="w3-bar-item w3-button w3-padding-large">SOBRE</a>
    <a href="#cadastro" class="w3-bar-item w3-button w3-padding-large">CADASTRO</a>
    <a href="#contato" class="w3-bar-item w3-button w3-padding-large">CONTATO</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">MERCH</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

    <!-- Automatic Slideshow Images -->
    <div class="mySlides w3-display-container w3-center">
        <img src="imagens/Music_is_my_Life_www.FullHDWpp.com_.jpg" style="width:100%">
        <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            <h3>KMusic</h3>
            <p><b>O seu portal de informações sobre música.</b></p>
        </div>
    </div>
    <div class="mySlides w3-display-container w3-center">
        <img src="imagens/54650.jpg" style="width:100%">
        <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            <h3>Publicidade</h3>
            <p><b>Cadastre sua banda e música.</b></p>
        </div>
    </div>
    <div class="mySlides w3-display-container w3-center">
        <img src="imagens/music-desktop-wallpaper-48718-50334-hd-wallpapers.jpg" style="width:100%">
        <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            <h3>Você antenado!</h3>
            <p><b>Fique por dentro das novidades da música.</b></p>
        </div>
    </div>

    <!-- The Sobre Section -->
    <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="sobre">
        <h2 class="w3-wide">KMusic</h2>
        <p class="w3-opacity"><i>Nós amamos MÚSICA.</i></p>
        <p class="w3-justify">O Kmusic é o melhor site para pesquisa de músicas, bandas e artistas do Brasil.
            Cadastre sua música e sua banda e já comece a ter seu trabalho reconhecido por milhares de pessoas
            que vistam o portal todos os dias. Venha ser também um KMusic.</p>
        <div class="w3-row w3-padding-32">
            <div class="w3-third">
                <p>Alok</p>
                <img src="imagens/24b6a6fcc3b928875258ac5c480f3d94--alok-dj.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
            </div>
            <div class="w3-third">
                <p>Evanescence</p>
                <img src="imagens/evanescence" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
            </div>
            <div class="w3-third">
                <p>David Guetta</p>
                <img src="imagens/david_guetta__painting__by_mohammedazzam-d5sssis.jpg" class="w3-round" alt="Random Name" style="width:60%">
            </div>
        </div>
    </div>

    <!-- The Cadastro Section -->
    <div class="w3-black w3-container w3-center" id="cadastro">
        <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
            <h2 class="w3-wide w3-center">CADASTRO</h2>
            <p class="w3-opacity w3-center"><i>O que deseja cadastrar?</i></p><br>

            <div class="w3-row w3-padding-32">
                <div class="w3-third">
                    <p>Nova Música</p>
                    <a href="musica/add.php#musica"><img src="imagens/1.png" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%"></a>
                </div>
                <div class="w3-third">
                    <p>Novo Artista</p>
                    <a href="artista/add.php#artista"><img src="imagens/2.png" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%"></a>
                </div>
                <div class="w3-third">
                    <p>Nova Banda</p>
                    <a href="banda/add.php#banda"><img src="imagens/3.png" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%"></a>
                </div>
            </div>
            <div class="w3-row w3-padding-32">
                <div class="w3-third">
                    <p>Novo Gênero</p>
                    <a href="genero/add.php#genero"><img src="imagens/4.png" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%"></a>
                </div>
                <div class="w3-third">
                    <p>Nova Gravadora</p>
                    <a href="gravadora/add.php#gravadora"><img src="imagens/5.png" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%"></a>
                </div>
                <div class="w3-third">
                    <p>Novo Album</p>
                    <a href="album/add.php#album"><img src="imagens/6.png" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%"></a>
                </div>
            </div>

        </div>
    </div>

    <!-- The Contato Section -->
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contato">
        <h2 class="w3-wide w3-center">CONTATO</h2>
        <p class="w3-opacity w3-center"><i>Gostou do que viu? Entre em contato!</i></p>
        <div class="w3-row w3-padding-32">
            <div class="w3-col m6 w3-large w3-margin-bottom">
                <i class="fa fa-map-marker" style="width:30px"></i> Brasília, Brasil<br>
                <i class="fa fa-phone" style="width:30px"></i> Telefone: 61 9 9199 8496<br>
                <i class="fa fa-envelope" style="width:30px"> </i> Email: kennedyalves.ka@gmail.com<br>
            </div>
        </div>
    </div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
    <p class="w3-medium">Desenvolvido por Kennedy Alves Soares</p>
</footer>
</div>
<script>
    // Automatic Slideshow - change image every 4 seconds
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 4000);
    }

    // Used to toggle the menu on small screens when clicking on the menu button
    function myFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }

    // When the user clicks anywhere outside of the modal, close it
    var modal = document.getElementById('ticketModal');
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

</body>
</html>
