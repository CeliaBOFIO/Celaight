<?php
require_once __DIR__ . DIRECTORY_SEPARATOR. 'init.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=devise-width, initial-scale=1.0">
        <title><?= $Page_title ?? $My_app_name ?></title>
        
        <meta name="description" content="Bienvenue chez Celia Architecture et Design"/>
        <link rel="stylesheet" href="/style.css"/>
    </head>
    <body>
        <header class="head">
            <h1><a href="/"><?= $My_app_name ?></a></h1>
            <div class="search bar">
                <form action="/search.php" method="GET">
                    <input type="text" id="SearchQuery" name="query" class="entry" placeholder="Retrouvez quelque chose...">
                    <button class="button" name="button" type="submit">Rechercher</button>
                </form>
            </div>
        </header>
        <main class="body">
            <div class="heading">
                <h1>Bienvenue dans l'univers de l'art, du design et de l'architecture</h1>
            </div>
            <div class="content">
                <p><?= $My_app_name ?> vous permet d'acheter ou de vendre des produits et services en art, architecture ou design d'intérieur.</p>
                <ul class="list buttons">
                    <li class="item"><a class="button" href="/connexion.php">Se connecter</a></li>
                    <li class="item"><a class="button" href="/inscription.php">S'inscrire</a></li>
                </ul>
                <!--https://i.pinimg.com/originals/6b/14/1e/6b141e4497231a8e4359541d189d7cd9.jpg-->
            </div>
        </main>
        <footer class="foot">
            <nav class="tabs">
                <ul class="list links">
                    <li class="item"><a class="link" href="/apropos.php">A propos</a></li>
                    <li class="item"><a class="link" href="/politiques.php">Politiques</a></li>
                    <li class="item"><a class="link" href="/aide.php">Aide</a></li>
                    <li class="item"><a class="link" href="/contact.php">Contact</a></li>
                </ul>
            </nav>
            <p class="copyright">Copyright &copy; 2021 <?= $My_app_name ?></p>
        </footer>
    </body>
</html>