<?php require("common/header.php"); ?>

<?php require'../control/mostrarArbitres.php'; ?>
<div>
    <p>Escull el nom de l'àrbitre:</p> 
    <form method="post" action="partitsArbitre.php">
        <label for="nomArbitre">Nom de l'àrbitre</label>
        <select name="nomArbitre">
            <?php totsArbitres();?> <!-- Mostra les files amb el resultat -->
        </select>
        <input type="submit" value="Enviar" />
    </form>
</div>

<?php require("common/footer.php"); ?>
