<?php
    include 'includes/autoload.inc.php';
    include "includes/registerhead.inc.php";
    include "includes/header.inc.php";

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];

        /*if(isset($_POST['subscription'])){
            $subscription = 1;
        }
        else{
            $subscription = 0;
        }*/

        $password = $_POST['password'];

        $user = new Users("",$email, $firstname, $lastname, "", "", "", "", "");
        $update = $user->addUser();

        if($update){
            $login = new login();
            $login->setEmailAddress($email);
            $login-> setPassword($password);
            $login->addLogin();
            header('Location:login.php');
        }
    }
    
    include "includes/mainregister.inc.php";
    include "includes/footer.inc.php";
    
?>

