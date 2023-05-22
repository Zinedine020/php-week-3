<?php


$myArray = ['auto', 'fiets', 'brommer', 'bus', 'vliegtuig', 'trein'];


$myArray[] = 'boot';


foreach ($myArray as $value) {
    echo $value . '<br>';
}

echo '<br>';


$myArray = ['auto', 'fiets', 'brommer', 'bus', 'vliegtuig', 'trein'];


$count = count($myArray);
echo "1. Het array heeft $count elementen.<br>";


$myArray[] = 'boot';


$count = count($myArray);
echo "1. Het array heeft $count elementen.<br>";

echo '<br>';


echo "2. {$myArray[1]}<br>";
echo "5. {$myArray[4]}<br>";
echo "8. {$myArray[7]}<br>";
echo "9. {$myArray[8]}<br>";
echo "12. {$myArray[11]}<br>";
echo "19. {$myArray[18]}<br>";

echo '<br>';


$numbers = [7, 8, 9];
$average = round(array_sum($numbers) / count($numbers), 1);
echo "Het gemiddelde is: $average<br>";

?>

