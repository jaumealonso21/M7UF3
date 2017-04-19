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
    	LEFT JOIN matches ON MATC_ID=LNUP_MATC_ID
    WHERE PLAY_ID = '".$mysqli->real_escape_string($jugador)."'";
//Selecciono tots els àrbitres
$query04 = "SELECT * FROM referees";
//Capturo la variable àrbitre enviat per mètode 'POST' provinent d'àrbitres
$arbitre = filter_input(INPUT_POST, 'nomArbitre', FILTER_SANITIZE_SPECIAL_CHARS);
//echo ($arbitre);
//Cerca detalls nom àrbitre, el nom de l'estadi, data del match, equips i resultat final
$query05 = "SELECT * FROM referees JOIN officiating "
        . "ON REFE_LicenseNumber = OFFI_REFE_LicenseNumber JOIN matches "
        . "ON OFFI_MATC_ID = MATC_ID JOIN stadiums "
        . "ON MATC_STAD_ID = STAD_ID WHERE REFE_LicenseNumber = ".
        $mysqli->real_escape_string($arbitre)."'";
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
        case "/M7UF3/views/arbitres.php":
            $resultat04 = $mysqli->query($query04);
            break;
        case "/M7UF3/views/partitsArbitre.php":
            $resultat05 = $mysqli->query($query05);
            break;
    }
}
catch (Exception $e) {
    throw $e->getMessage();
}

// tancar la connexió 
$mysqli->close();
?>