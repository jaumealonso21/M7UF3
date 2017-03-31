<?php require '../model/conEquips.php'; ?>
<?php

//Funció que crea la tabla de tots els equips
function totsEquips() {
    global $resultat01;

    // bucle per recuperar resultats
    while ($fila = $resultat01->fetch_assoc()) {
        // mostra els noms dels equips per files
        echo "<option value='".$fila['TEAM_Country']."'>".$fila['TEAM_Country']."</option>";
    }
    //Lliberar el conjunt de resultats
    $resultat01->free();
}

//Funció que crea la tabla de tots els jugadors per equip seleccionat
function totsJugadors() {
    global $resultat02;

    // bucle per recuperar resultats
    while ($fila = $resultat02->fetch_assoc()) {
        // mostra els noms dels equips per files
        echo "<option value='".$fila['PLAY_ID']."'>".$fila['PLAY_FullName']."</option>";
    }
    //Lliberar el conjunt de resultats
    $resultat02->free();
}

//Funció que crea la tabla de minuts jugats/partit, gols marcats/partit per jugador seleccionat
function detallsJugador() {
    
}