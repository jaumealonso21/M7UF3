<?php require("common/header.php"); ?>

<?php require'../control/mostrarEquips.php'; ?>
<div>
    <p>Escull el nom del jugador:</p> 
    <form method="post" action="detallsJugador.php">
        <label for="nomJug">Nom del Jugador</label>
        <select name="nomJug">
            <?php totsJugadors();?> <!-- Mostra les files amb el resultats -->
        </select>
        <input type="submit" value="Enviar" />
    </form>
</div>

<?php require("common/footer.php"); ?>