<?php

include 'Connector.php';

class Queries
{
    function printAll() {
        $db = new Connector();
        $sql = "SELECT * FROM Utenti";
        $result = mysqli_query($db->getConnector(), $sql);
        while ($row = mysqli_fetch_array($result)) {
            echo $row['Nome'];
            echo $row['Cognome'];
            echo $row['Eta'];
        }
    }










}