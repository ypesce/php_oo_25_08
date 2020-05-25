<html>
<head>
    <?php
    include 'Parts/stylesheets.html'
    ?>
</head>

<body>
<div class="container">
<h1>Ajout d'une voiture</h1>

    <a href="../index.php?controller=default&action=home">
        <button style="margin-bottom:10px;" class="btn btn-success">Revenir en arrière</button>
    </a>

<form method="post" action="../index.php?controller=car&action=addArticle">
<label>Titre</label>
<input name="titre" class="form-control">

<label>modèle</label>
<input name="modele" class="form-control">
    <input class="btn btn-success" type="submit" value="valider">
</form>
</div>
<?php
 include 'Parts/scripts.html'
?>
</body>