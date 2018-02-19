<?php
$bdd = new PDO('mysql:host=localhost;dbname=tester','root', 'popo8989', array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION) ); // last array added to better detect errors and debug
$reponse = $bdd->query('SELECT * FROM jeux_video WHERE console="NES" OR console="PC" ORDER BY prix DESC LIMIT 5');
while ($donnees = $reponse -> fetch()) // while loop that will fetch data while there are entries left
{
    echo "<p>". $donnees['console']. " - " . $donnees['nom'] ." - " . $donnees['prix'] ." euros ". "</p>";
}
?>