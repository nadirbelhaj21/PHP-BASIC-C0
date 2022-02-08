<!DOCTYPE html>
<html>
<body>

<?php
$test1 = 20;
$test2 = 12;
if($test1 == $test2){
    echo "<ul> <li>gelijk</li> </ul>";
}

if($test1 != $test2){
    echo "<ul> <li>Ongelijk</li> </ul>";
}

if($test1 === $test2){
    echo "<ul> <li>hetzelfde</li> </ul>";
}

if($test1 > $test2){
    echo "<ul> <li>Test1 is groter dan test2</li> </ul>";
}

if($test1 < $test2){
    echo "<ul> <li>Test1 is kleiner dan test2</li> </ul>";
}

if($test1 >= $test2){
    echo "<ul> <li>Test1 is groter of gelijk met test2</li> </ul>";
}

if($test1 <= $test2){
    echo "<ul> <li>Test1 is kleiner of gelijk met test2</li> </ul>";
}

?>

</body>
</html> 