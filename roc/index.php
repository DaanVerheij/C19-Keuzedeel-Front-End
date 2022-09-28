<?php
echo "<pre>";
var_dump($_POST);



$database_lokatie     = 'localhost';
$database_naam        = 'crud-challenge';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$database_connectie = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);




//gegevens uit een formulier ophalen met de post method.
$naam = $_POST['form_naam'];
$klas = $_POST['form_klas'];
$minutentelaat = $_POST['form_minutentelaat'];
$redentelaat = $_POST['form_redentelaat'];



// !! De onderstaande code voegt gebruikers toe en geen producten. Pas de code aan.!!
$sql = "INSERT INTO crud (naam, klas, minutentelaat, redentelaatat) VALUES (:ph_naam , :ph_klas , :ph_minutentelaat , :ph_redentelaat)" ;//sql query met PLACEHOLDERS
//een ID slaan we niet op, deze wordt automatisch aangemaakt door MySQL
$stmt = $database_connectie->prepare($sql); //stuur naar mysql.
$stmt->bindParam(":ph_naam", $naam ); //verbind de waardes
$stmt->bindParam(":ph_klas", $klas );
$stmt->bindParam(":ph_minutentelaat", $minutentelaat );
$stmt->bindParam(":ph_redentelaat", $redentelaat ); 

$stmt->execute();



if (!isset($_SESSION['user_id']))
{
header("Location: index.html");
}


?>