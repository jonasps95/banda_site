<!DOCTYPE html>
<html>
<head>
    <title>Nome do meu site</title>
    <link rel="shotcut icon" type="image-x/png" href="image/minilogo.ico" /> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="css/slick.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <meta name="description" content="Conteúdo do meu site.">
    <meta name="keywords" content="palavras,separadas,por,virgula">
    <meta name="author" content="Guilherme" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0" />
    <meta charset="utf-8" />
</head>
<body>
<header>
    <div class="container">
        <div class="logo"><img src="image/logo.png"></div>
        <nav class="menuDesktop">
            <ul>
                <li><a href="home">Home</a></li>
                <li><a href="sobre">Sobre</a></li>
                <li><a href="agenda">Agenda</a></li>
                <li><a href="contato">Contatos</a></li>
                <li><a href="loja">Loja</a></li>
                <li><a href="galeria">Galeria</a></li>
            </ul>
        </nav><!--menuDesktop-->
        
        <nav class="menuMobile">
            <ul>
                <li><a href="home">Home</a></li>
                <li><a href="sobre">Sobre</a></li>
                <li><a href="agenda">Agenda</a></li>
                <li><a href="contato">Contatos</a></li>
                <li><a href="loja">Loja</a></li>
                <li><a href="galeria">Galeria</a></li>
            <div class="miniredes">
                <a href="https://www.facebook.com/ChamamentodeCristo/"><img src="image/facebook.png"></a>
                <a href="https://www.instagram.com/bandachamamentodecristo/"><img src="image/instagram.png"></a>
                <a href="https://wa.me/5551999999999?text=Olá%20Faça%20Seu%20Pedido!"><img src="image/whats.png"></a>
            </div>
            </ul>
        </nav><!--menuMobile-->
        <div class="clear"></div>
    </div><!--container-->
</header>


<?php
	if(isset($_GET['url'])){
		if(file_exists($_GET['url']).'.html'){
			include($_GET['url'].'.html');
		}else{
			include('404.html');
		}
	}else{
		include('home.html');
	}
?>

<footer>
    <div class="container">
        <div class="footer-logo">  </div><!--footer-logo-->
        <div class="refs">
            <p>Deus Seja Louvado!</p>
        </div><!--refs-->
        <div class="minis">
            <a href="https://www.facebook.com/ChamamentodeCristo/"><img src="image/facebook.png"></a>
            <a href="https://www.instagram.com/bandachamamentodecristo/"><img src="image/instagram.png"></a>
            <a href="https://wa.me/5551999999999?text=Olá%20Faça%20Seu%20Pedido!"><img src="image/whats.png"></a>
        </div><!--minis-->
    </div><!--container-->
    <div class="cop">
    <a href=""><p>©jp.progdev@gmail.com</p></a> 
    </div><!--cop-->
    <div class="clear"></div>



<script src="js/jquery.js"></script>
<script src="js/slick.js"></script>
<script src="js/functions.js"></script>
</footer>

</body>
</html>
<!--
-->