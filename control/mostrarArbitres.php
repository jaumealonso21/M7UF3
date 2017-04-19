<?php require '../model/conArbitres.php'; ?>
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

//Funció que crea la tabla de tots els àrbitres
function totsArbitres() {
    global $resultat04;

    // bucle per recuperar resultats
    while ($fila = $resultat04->fetch_assoc()) {
        // mostra els noms dels àrbitres per files
        echo "<option value='".$fila['REFE_LicenseNumber']."'>".$fila['REFE_FullName']."</option>";
    }
    //Lliberar el conjunt de resultats
    $resultat04->free();
}

//Funció que crea la tabla de tots els jugadors per equip seleccionat
function totsJugadors() {
    global $resultat02;

    // bucle per recuperar resultats
    while ($fila = $resultat02->fetch_assoc()) {
        // mostra els noms dels jugadors per files
        echo "<option value='".$fila['PLAY_ID']."'>".$fila['PLAY_FullName']."</option>";
    }
    //Lliberar el conjunt de resultats
    $resultat02->free();
}

//Funció que crea la tabla de minuts jugats/partit, gols marcats/partit per jugador seleccionat
function detallsJugador() {
    global $resultat03;
    //echo $resultat03;
    //echo 'djskjdkjskdjasjdkjaskdjkas';
    // bucle per recuperar resultats
    while ($fila = $resultat03->fetch_assoc()) {
        // mostra el detall del jugador per files
        echo "<tr><td>".$fila['PLAY_Fullname']."</td><td>".$fila['MinutsJugats'].
                "</td><td>".$fila['Matc_Team_countrylocal']."</td><td>".
                $fila['Matc_Team_countryforeign']."</td></tr>";
//        echo $fila['PLAY_Fullname'].$fila['MinutsJugats'].$fila['Matc_Team_countrylocal'].$fila['Matc_Team_countryforeign'];
    }
    //Lliberar el conjunt de resultats
    $resultat03->free();
}

//Funció que crea nom àrbitre, el nom de l'estadi, data del match, equips i resultat finalonat
function detallsArbitre() {
    global $resultat05;
    // bucle per recuperar resultats
    while ($fila = $resultat05->fetch_assoc()) {
        // mostra el detall de l'àrbitre per files
        echo "<tr><td>".$fila['REFE_FullName']."</td><td>".$fila['STAD_Name'].
                "</td><td>".$fila['MATC_Datetime']."</td><td>".
                $fila['MATC_TEAM_CountryLocal']."</td><td>".
                $fila['MATC_TEAM_CountryForeign']."</td><td>".
                $fila['MATC_Attendance']."</td></tr>";
    }
    //Lliberar el conjunt de resultats
    $resultat05->free();
}


