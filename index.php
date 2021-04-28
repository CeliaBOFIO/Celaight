<?php
$app_nom ="Celiaight";
?>
<!Doctype html>
<html>
<head>
<title><?php echo $app_nom ?></title>
<body>
    <h1 class="en-tete">Inscription</h1>
    <div class="contenu">
    <form id="formulaire-inscription" method="post" action="">
    <label for="inscription-email">E-mail</label>
    <input type="email" mame="email" id="inscription-email" placeholder="Entrez votre email">
    <br>
    <label for="inscription-mot-passe">mot de passe</label>
    <input type="password" mame="code-secret" id="inscription-mot-passe" placeholder="Entrez votre mot de passe">
    <br>
    <button type="submit">S'inscrire</button>
    </form>
    </div>

</body>

</head>
</html>