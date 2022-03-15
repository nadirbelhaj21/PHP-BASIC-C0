<!DOCTYPE html>
<html>
<body>

<?php
function TienProcentKorting($koopPrijs){
    $totaal = "100";
    $korting = "10";
    return ($koopPrijs/$totaal)*$korting;
}

function ZetAllesGroot(){
    $koopPrijs = 75;
        $totaalkorting = $koopPrijs - TienProcentKorting($koopPrijs);
        echo "Het totaalbedrag is $totaalkorting";
}

ZetAllesGroot();
?>

</body>
</html> 