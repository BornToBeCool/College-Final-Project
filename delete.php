<?php
    include 'includes/autoload.inc.php';
    
    session_start();

    $User_ID = $_SESSION['User_ID'];

    $users = new Users("","","","","","","","","");
    $login = new Login();

    $users->deleteUser($User_ID);
    $login->deleteLogin($User_ID);

    $_SESSION = array();
    session_destroy();
    header("Location:index.php");

?>