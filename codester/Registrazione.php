<?php
/**
 * Created by PhpStorm.
 * User: Severino
 * Date: 07/12/16
 * Time: 15:22
 */
include "Connector.php";

$nome = $_POST['Nome'];
$email = $_POST['Email'];
$pass = $_POST['Password'];
$db = new Connector();
$sql = "INSERT INTO `Utente` (`Codice`, `Nome`, `Username`, `Password`) VALUES (NULL, '$nome', '$email', '$pass')";
$result = mysqli_query($db->getConnector(), $sql);


$sql2 = "SELECT * FROM Utente";
$result2 = mysqli_query($db->getConnector(), $sql2);
$num_righe = mysqli_num_rows($result2);
for ($i = 0; $i < $num_righe; $i++) {
    $riga = mysqli_fetch_row($result2);
    echo $riga[1];
    echo $riga[2];
    echo $riga[3];
}


?>