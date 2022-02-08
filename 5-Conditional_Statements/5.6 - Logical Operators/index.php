<!DOCTYPE html>
<html>
<body>

<?php
$var1 = 5;
$var2 = 10;

if($var1 < 25 && $var2 > 10) {
    echo "Het getal zit tussen de 25 en de 10";
} else{
    echo "het getal is groter dan 25 of kleiner dan 10!";
}
echo "<br>";
if($var1 = 20 || $var2 > 10){
    echo "Of het één";
} else{
    echo "Of het ander";
}
echo "<br>";
if($var1 == 6 xor $var2 > 10){
    echo "XOR 1";
} else{
    echo "XOR 2";
}
echo "<br>";
if($var1 != 6 && $var2 > 10){
    echo "True als de vergelijking niet waar is";
} else{
    echo "False";
}
?>

</body>
</html> 