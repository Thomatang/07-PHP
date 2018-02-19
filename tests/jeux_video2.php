<?php
if(isset($_GET['console']))
{
$bdd = new PDO('mysql:host=localhost;dbname=tester','root', 'popo8989', array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION) ); // last array added to better detect errors and debug
$request = $bdd->prepare('SELECT * FROM jeux_video WHERE console= ?');
$request -> execute(array($_GET['console']));
while ($donnees = $request -> fetch()) // while loop that will fetch data while there are entries left
{
    echo "<p>". $donnees['console']. " - " . $donnees['nom'] ." - " . $donnees['prix'] ." euros ". "</p>";
}

}

?>