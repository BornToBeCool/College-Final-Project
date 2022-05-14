<?php
    include 'includes/autoload.inc.php';
    include "includes/loginhead.inc.php";
    include "includes/header.inc.php";

    $found = false;
    $msg = null;

    session_start();

    if(isset($_SESSION['User_ID'])){
        header('Location:index.php');
    }

    if(isset($_POST['submit'])){

        $login = new Login();

        $emailAddress = $_POST['email'];
        $password = $_POST['password'];

        $found = $login->validateLogin($emailAddress, $password);

        if($found){
            $user = new Users("", $emailAddress, "","","","","","","");
            $name = $user->getName();
            $userID = $user->getUserID();
            $_SESSION['User_ID'] = $userID;
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $emailAddress;

            if(!isset($_COOKIE["user"])){
                $lastVisitDate = date("d/m/y");
                setcookie("user", $name, time()+(60*60*24*30));
                setcookie("visitDate", $lastVisitDate, time()+(60*60*24*30));
                setcookie("active", "true", time()+(60*60*24));
            }
        }
    }
    if($found){
        header('Location:index.php');
    }

    include "includes/mainlogin.inc.php";
    include "includes/footer.inc.php";
?>
    