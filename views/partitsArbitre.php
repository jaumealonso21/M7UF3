<?php require("common/header.php"); ?>

<?php require'../control/mostrarArbitres.php'; ?>
<div>
    <p>Detalls de l'àrbitre:</p>
    <table border="1">
        <tr><td>Nom àrbitre</td><td>Nom estadi</td><td>Data match</td>
            <td>Equip Local</td><td>Equip Visitant</td><td>Resultat</td></tr>
    <?php detallsArbitre(); ?>
    </table>
</div>

<?php require("common/footer.php"); ?>
