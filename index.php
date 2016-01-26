<?php require 'Vistas.php';?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Aplicación CRUD (Create, Read, Update
                   ,Delete con filosofia MVC desarrolada en PHP MySql y Ajax)">
        <title>Aplicación CRUD Super Héroes.</title>
        <link href="Css/SuperHeroes.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header id="cabecera">
            <h1>Super Héroes</h1>
            <div><img src="Img/super-heroes.png" alt="SuperHeroes"/></div>
            <a href="#" id="insertar">Insertar!</a>
        </header>
        <section id="contenido">
            <div id="respuesta"></div>
            <div id="precarga"></div>
            <?php mostrarHeroes(); ?>
        </section>
        <script src="Scripts/SuperHeroes.js" type="text/javascript"></script>
       
    </body>
</html>
