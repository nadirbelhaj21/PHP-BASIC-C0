<!DOCTYPE html>
<html>
<body>

<?php
function mijnNaamisGroot(){
    $mijn_naam = "Mijn naam is ";
    $voornaam = "Nadir ";
    $achternaam = "Belhaj";
    $geheleNaam = $mijn_naam . $voornaam . $achternaam;
    echo strtoupper ($geheleNaam);
}

mijnNaamisGroot();
?>

</body>
</html> 