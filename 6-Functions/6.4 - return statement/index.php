<!DOCTYPE html>
<html>
<body>

<?php
function TienProcentKorting(){
    $totaal = "100";
    $koopPrijs = "75";
    $korting = "10";
    return ($koopPrijs/$totaal)*$korting;
}

function ZetAllesGroot(){
    $koopPrijs = 75;
        $totaalkorting = $koopPrijs - TienProcentKorting();
        echo "Het totaalbedrag is $totaalkorting";
}

ZetAllesGroot();
?>

</body>
</html> 