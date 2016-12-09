<?php

include "Connector.php";
$db = new Connector();

$code = null;
session_start();
$user = $_SESSION['Username'];
$sql2 = "SELECT * FROM Utente";
$result2 = mysqli_query($db->getConnector(), $sql2);
$num_righe = mysqli_num_rows($result2);
for ($i = 0; $i < $num_righe; $i++) {
    $riga = mysqli_fetch_row($result2);
    $code = $riga[0];
}

$target = "/img/".basename($_FILES['image']['name']);
$marca = $_POST['Marca'];
$modello = $_POST['Modello'];
$prezzo = $_POST['Prezzo'];
$posizione = $_POST['Posizione'];
$descrizione = $_POST['Description'];
$image = $_FILES['image']['name'];
$imageb = $_FILES['image']['name'];

if(move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    echo "ok";
} else {
    echo "no";
}


$sql = "INSERT INTO `Annuncio` (`Marca`, `Modello`, `Prezzo`, `Posizione`, `Image`, `Imageb`, `Description`, `Id`) VALUES 
(NULL, '$marca', '$modello', '$prezzo', '$posizione', '$image', '$imageb', '$descrizione', '$code')";
$result = mysqli_query($db->getConnector(), $sql);
echo $sql;




?>