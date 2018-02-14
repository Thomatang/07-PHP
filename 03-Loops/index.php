<?php
echo "<h2>Exercise 1</h2>";
$omega = 0;
for ( $omega=0; $omega<=10; $omega++){
    echo "omega is $omega</br>";
}
?>

<?php
echo "<h2>Exercise 2</h2>";
$numberOne = 0;
$numberTwo = 50;

for ($numberOne=0;$numberOne<=20;$numberOne++) {
    $result = $numberOne * $numberTwo;
    echo " $numberOne * $numberTwo = $result</br>";
}
?>

<?php
echo "<h2>Exercise 3</h2>";
$numberFirst = 100;
$numberSecond = 37;

for ($numberFirst=100;$numberFirst>10;$numberFirst--) {
    $result = $numberFirst * $numberSecond;
    echo " $numberFirst * $numberSecond = $result</br>";
}
?>

<?php
echo "<h2>Exercise 4</h2>";
$numberToHalve= 1;
for ($numberToHalve=1; $numberToHalve < 10; $numberToHalve+= $numberToHalve/2) {
    echo "$numberToHalve </br>";
}
?>

<?php
echo "<h2>Exercise 5</h2>";
$steps= 1;
for ($steps=1; $steps<=15; $steps++){
    if ($steps<15){
        echo "You're getting there, one step at a time</br>";
    }
    else {
        echo "You have arrived!";
    }
}
?>

<?php
echo "<h2>Exercise 6</h2>";
$steps2= 20;
for ($steps2=20; $steps2>=0; $steps2--){
    if ($steps2>0){
        echo "Almost there</br>";
    }
    else {
        echo "You have arrived!";
    }
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