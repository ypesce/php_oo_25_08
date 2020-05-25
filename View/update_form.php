<html>
<head>
    <?php
    include 'Parts/stylesheets.html'
    ?>
</head>

<body>
<div class="container">
    <h1>Mise à jour de l'article <?php echo $car->getMarque();?></h1>

    <a href="../index.php?controller=default&action=home">
        <button style="margin-bottom:10px;" class="btn btn-success">Revenir en arrière</button>
    </a>

    <form method="post" action="../index.php?controller=article&action=updateArticle&id=<?php echo $car->getId()?>">
        <label>Titre</label>
        <input name="titre" value="<?php echo $car->getMarque()?>" class="form-control">

        <label>Contenu</label>
        <input name="contenu" value="<?php echo $car->getModele()?>" class="form-control">
        <input class="btn btn-success" type="submit" value="valider">
    </form>
</div>
<?php
include 'Parts/scripts.html'
?>
</body>