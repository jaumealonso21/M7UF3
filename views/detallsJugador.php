<?php require("common/header.php"); ?>

<?php require'../control/mostrarEquips.php'; ?>
<div>
    <p>Detalls del jugador:</p>
    <table border="1">
        <tr><td>Nom jugador</td><td>Minus jugats</td><td>Equip local</td><td>Equip visitant</td></tr>
    <?php detallsJugador(); ?>
    </table>
    <?php detallsJugador(); ?>
</div>

<?php require("common/footer.php"); ?>
