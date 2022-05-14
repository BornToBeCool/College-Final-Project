<?php
    $found = false;
    session_start();
    if(isset($_SESSION['User_ID'])){
        $found = true;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/body.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/registrationForm.css">
    <title> Bike King Borders - HOME </title>
</head>

<?php
    include 'includes/autoload.inc.php';
    include "includes/updateHeader.inc.php";
    $user = new Users("","","","","","","","","");
    if(isset($_SESSION['User_ID'])){
        $userID = $_SESSION['User_ID'];
        if(isset($_POST['update'])){
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $houseNumber = $_POST['houseNumber'];
            $street = $_POST['street'];
            $city = $_POST['city'];
            $postCode = $_POST['postCode'];
            if(isset($_POST['subscription'])){
                $subscription = 1;
            }
            else
            {
                $subscription = 0;
            }
            $user->upDateUser($userID, $firstName, $lastName, $houseNumber, $street,
                              $city, $postCode, $subscription);
            header('Location: index.php');
        }else {
    
            $foundUser = $user->getUser($userID);
            if($foundUser){
                $firstName = $user->getFirstName();
                $lastName = $user->getLastName();
                $houseNumber = $user->getHouseNumber();
                $street = $user->getStreet();
                $city = $user->getCity();
                $postCode = $user->getPostCode();
                $subscription = $user->getSubscription();
            } else {
                echo 'User not found';
            }
        }
    }
?>
<section>
    <div class="formContainer">
        <div class="title">Update</div>
            <form class="form" action="update.php" method="post" onsubmit="validateRegForm()" name="edit">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">First Name</span>
                        <input class="input" type="text" name="firstName" id="firstName" value="<?= $firstName ?>" required autofocus>
                    </div>
                    <div class="input-box">
                        <span class="details">Last Name</span>
                        <input class="input" type="text" name="lastName" id="lastName" value="<?= $lastName ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">House Number</span>
                        <input class="input" type="text" name="houseNumber" id="houseNumber" value="<?= $houseNumber ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Street</span>
                        <input class="input" type="text" name="street" id="street" value="<?= $street ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">City</span>
                        <input class="input" type="text" name="city" id="city" value="<?= $city ?>" required> 
                    </div>
                    <div class="input-box">
                        <span class="details">Post Code</span>
                        <input class="input" type="text" name="postCode" id="postCode" value="<?= $postCode ?>" required>
                    </div>
                </div>
                <div class="button">
                <input class="button" type="submit" name="update" id="update" value="Update"> 
            </div>
        </form>
    </div>
</section>
