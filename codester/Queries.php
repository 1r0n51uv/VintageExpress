<?php

include 'Connector.php';

class Queries
{

    function printAll() {
        $db = new Connector();
        $sql = "SELECT * FROM Utente";
        $result = mysqli_query($db->getConnector(), $sql);
        $num_righe = mysqli_num_rows($result);
        for ($i = 0; $i < $num_righe; $i++) {
            $riga = mysqli_fetch_row($result);
            echo $riga[0];
            echo $riga[1];
            echo $riga[2];
        }
    }

    function getCars() {
        $db = new Connector();
        $sql = "SELECT * FROM Annuncio";
        $result = mysqli_query($db->getConnector(), $sql);
        $num_righe = mysqli_num_rows($result);
        for ($i = 0; $i < $num_righe; $i++) {
            $riga = mysqli_fetch_row($result);
            echo $riga[0];
            echo $riga[1];
            echo $riga[2];
        }


    }




}