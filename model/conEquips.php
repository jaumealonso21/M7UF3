<?php require 'conector.php'; ?>

<?php

//Selecciono tots els jugadors
$query01 = "SELECT * FROM teams";
//Capturo la variable equip enviat per mètode 'POST' provinent d'equips
$equip = filter_input(INPUT_POST, 'nomEquip', FILTER_SANITIZE_SPECIAL_CHARS);
//Cerca tots els jugadors per equip seleccionat
$query02 = "SELECT * FROM players WHERE PLAY_TEAM_Country = '".$mysqli->real_escape_string($equip)."'";
//Capturo la variable jugador enviat per mètode 'POST' provinent de jugadors
$jugador = filter_input(INPUT_POST, 'nomJug', FILTER_SANITIZE_SPECIAL_CHARS);
//Cerca minuts jugats/partit, gols marcats/partit per jugador seleccionat
$query03 = "SELECT PLAY_Fullname, (IFNULL(LNUP_MinuteOut,90) - LNUP_MinuteIn+1) AS MinutsJugats,
    Matc_Team_countrylocal,Matc_Team_countryforeign
    FROM players LEFT JOIN lineups ON LNUP_PLAY_ID = PLAY_ID
    	LEFT JOIN matches on MATC_ID=LNUP_MATC_ID
    WHERE PLAY_ID = '".$mysqli->real_escape_string($jugador)."'";
try {
    //$url= $_SERVER["REQUEST_URI"];
    $url = filter_input(INPUT_SERVER, "REQUEST_URI");
    // executar la consulta depenent la pàgina on es situï
    switch ($url){
        case "/M7UF3/views/equips.php":
            $resultat01 = $mysqli->query($query01);
            break;
        case "/M7UF3/views/jugadors.php":
            $resultat02 = $mysqli->query($query02);
            //echo ($equip);
            break;
        case "/M7UF3/views/detallsJugador.php":
            $resultat03 = $mysqli->query($query03);
            //echo($jugador);
            break;
    }
}
catch (Exception $e) {
    throw $e->getMessage();
}

// tancar la connexió 
$mysqli->close();
?>