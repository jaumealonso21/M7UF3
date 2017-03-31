<?php require("common/header.php"); ?>

<?php require'../control/mostrarEquips.php'; ?>
<div>
    <p>Escull el nom del país:</p> 
    <form method="post" action="jugadors.php">
        <label for="nomEquip">Nom del País</label>
        <select name="nomEquip">
            <?php totsEquips();?> <!-- Mostra les files amb el resultat -->
        </select>
        <input type="submit" value="Enviar" />
    </form>
</div>

<?php require("common/footer.php"); ?>