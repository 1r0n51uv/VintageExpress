<?php
include 'Login.php';
include 'Queries.php';
session_start();
$db = new Connector();
$sql = 'SELECT * FROM Utente';
$result = mysqli_query($db->getConnector(), $sql);
$num_righe = mysqli_num_rows($result);
$tbl_name='Utente';

mysqli_connect("$host", "$Username", "$Password")or die('impossibile collegarsi');
mysqli_select_db("$db_name")or die("#");

$Username = $_POST['Username'];
$Password = $_POST ['Password'];
$sql= "SELECT * FROM '$tbl_name' WHERE Username='$Username' and Password='$Password'";
$result = mysqli_query($sql);
$count=mysqli_num_rows($result);
if($count==1){
    session_register("Username");
    session_register("Password");
    header('location: /HomeLoggato.php');
}
else {
    echo "Attenzione username o password errati";
}
?>