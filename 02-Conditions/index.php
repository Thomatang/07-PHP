<?php
echo "<h2>Exercise 1</h2>";
$age = 25;
if($age >= 18){
    echo "You are an adult";
}
else {
    echo "You are minor";
}
?>

<?php
echo "<h2>Exercise 2 </h2>";
$isEasy = true;
if ( $isEasy ==true) {
    echo "This is easy!";
}
else {
    echo "This is difficult!";
}
?>

<?php
echo "<h2>Exercise 3</h2>";
$age= 18;
$gender = "female";
if ($age >= 18 && $gender ==="male") {
    echo "Well done, you're a grown-ass man!";
}
elseif ($age < 18 && $gender ==="male") {
    echo " Oh dang, you a little man, buddy!";
}
elseif ($age < 18 && $gender ==="female") {
    echo " Oh dang, you a little woman, girl!";
}
else {
    echo " Well done, you're a grown-ass woman!";
}

?>

<?php
echo "<h2>Exercise 4</h2>";
$magnitude = 9;
switch ($magnitude) {
    case 1:
    echo "Micro-séisme impossible à ressentir.";
    break;
    case 2:
    echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres";
    break;
    case 3:
    echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
    break;
    case 4:
    echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats";
    break;
    case 5:
    echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
    break;
    case 6:
    echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
    break;
    case 7:
    echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
    break;
    case 8:
    echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
    break;
    case 9:
    echo "Séisme capable de tout détruire sur une très vaste zone.";
    break;
}
?>

<?php
echo "<h2>Exercise 5</h2>";
$myVariable = "female";
if ( $myVariable != "male") {
    echo "She's a developper!";
}
else {
    echo "He's a developper!";
}
?>

<?php
echo "<h2>Exercise 6</h2>";
$myAge = 15;
if($myAge >= 18) {
    echo " You are an adult.";
}
else {
    echo "You are a minor.";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>