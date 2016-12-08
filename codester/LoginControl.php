<?php

include "Connector.php";

$email = $_POST['Username'];
$pass = $_POST['Password'];

$db = new Connector();
$sql2 = "SELECT * FROM Utente";
$result2 = mysqli_query($db->getConnector(), $sql2);
$num_righe = mysqli_num_rows($result2);
for ($i = 0; $i < $num_righe; $i++) {
    $riga = mysqli_fetch_row($result2);
    if ($riga[2] == $email && $riga[3] == $pass) {
        echo "LOGIN OK";
    } else {
        echo "no";
    }
}


?>