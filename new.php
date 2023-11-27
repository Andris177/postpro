<?php
/*for ($i = 1; $i <= 5; $i++) {
    echo $i . " "; 
}

$cars = ["Opel","Nissan","Toyota"];
foreach ($cars as $car) {
    echo $car;
}

$szam  = 1;

while ($szam <=5) {
    echo $szam . " ";
    $szam++;
}*/

$text = "Az ipafai papnak fapipája van";
$length = strlen($text);

$betuk = [];

for ($i = 0; $i < strlen($text); $i++) 
{
    $karakter = strtolower($text[$i]);
    if (isset($betuk["karakter"])) {
        $betuk["karakter"] += 1;
    } else {
        $betuk["karakter"] = 1;
    }
}

foreach ($betuk as $betu => $db) {
    echo "$betu-ból/ből összesen $db van <br>";
}
?>