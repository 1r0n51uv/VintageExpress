<?php

session_start();
echo $_SESSION['Username'];
unset($_SESSION['Username']);
if (isset($_SESSION['Username'])) {
    header("location: HomeReal.php");

} else {
    echo "unsetted";
    header("location: HomeReal.php");
    $_SESSION = array();

}


?>