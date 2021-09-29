<?php
ini_set('error_reporting', E_ALL);
error_reporting(-1);
header("Content-Type: text/html;charset=utf-8");
if(include_once 'server/link.php'){
    //echo "contacto Link";
}else{
    echo "No hemos conectado link.php";
}
if(include_once 'server/funciones.php'){
    //echo "contacto Link";
}else{
    echo "No hemos conectado funciones.php";
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Nat Córdoba</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/app.css">
        <link rel="stylesheet" type="text/css" href="css/animaciones.css">
        <link rel="stylesheet" type="text/css" href="css/masonry.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <!-- GOOGLE FONTS -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        
        <!-- META DESCRIPTION -->
        <meta name="description" content="Natt Córdoba - Make Up - Blog De Natt - Influenser">
        
        <meta property="og:url"           content="https://natcordoba.com.ar" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="Nat Córdoba - Make Up Artist - Hairdresser" />
        <meta property="og:description"   content="Nat Córdoba - El Blog De Natt - Make Up Artist - Hairdresser" />
        <meta property="og:image"         content="https://natcordoba.com.ar/img/seo.jpg" />
    </head>
    <body>
            <?php //include_once "templates/ads.php";?>
            <?php include_once "templates/top-nav-comun.php";?>
            <?php include_once "templates/carousel-arriba.php";?>
        
            <?php include_once "templates/menu.php";?>
            <?php include_once "templates/portfolio-ajax.php";?>
            <?php //include_once "templates/frase.php";?>
            <?php include_once "templates/bio.php";?>
            <?php include_once "templates/blog.php";?>
            <?php include_once "templates/self-makeup.php";?>
            <?php include_once "templates/formulario.php";?>
            <?php include_once "templates/footer.php";?>
            
        
        
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
        
        <!--<script src="lib/masonry/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"></script>-->
        <!--<script src="js/ads.js"></script>-->
        <script src="js/app.js"></script>
        <script src="js/blog.js"></script>
        <script src="js/bio.js"></script>
        <script src="js/self.js"></script>
        <script src="js/archivos.js"></script>
        <script src="js/contact.js"></script>
        <script src="js/carousel.js"></script>
        <script src="js/menu.js"></script>
        
       
    </body>
</html>
