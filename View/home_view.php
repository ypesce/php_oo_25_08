<html>
    <head>
        <?php
        include 'Parts/stylesheets.html'
        ?>
    </head>
<?php
include '../include.php'
?>
    <body>
    <div class="container">
    <a href="../index.php?controller=car&action=addForm">
        <button style="margin-bottom:10px;" class="btn btn-success">Ajouter une voiture</button>
    </a>
    <table class="table">
        <thead>
            <td>Marque</td>
            <td>Modèle</td>
            <td>Energie</td>
            <td>Automatique ?</td>
        </thead>

        <tbody>
            <?php
                foreach ($cars as $car) {
                    ?>
                    <tr>
                        <td><?php echo $car->getId()?></td>
                        <td><?php echo $car->getMarque()?></td>
                        <td><?php echo $car->getModele()?></td>
                        <td><?php echo $car->getEnergie()?></td>
                        <td><?php echo $car->getAutomatique()?></td>

                        <td>
                            <a href="../index.php?controller=article&action=delete&id=<?php echo $car->getId()?>">Supprimer</a>
                            <a href="../index.php?controller=article&action=updateForm&id=<?php echo $car->getId()?>">Modifier</a>
                        </td>
                    </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>
    </div>
    <?php
    include 'Parts/scripts.html'
    ?>
    </body>
</html>