<?php

class Connector
{

    public function getConnector() {
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $db = 'vintage';
        return mysqli_connect($host, $user, $pass, $db);
    }


}