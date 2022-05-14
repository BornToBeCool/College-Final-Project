<?php
    $found = false;
    session_start();
    if(isset($_SESSION['User_ID'])){
        $found = true;
    }
?>
<?php
    include "includes/updateHeader.inc.php";
    if(isset($_POST['yes'])){
        session_start();
        $_SESSION = array();
        session_destroy();
        header("Location:index.php");
        }
        if(isset($_POST['no'])){
        header("Location:index.php");
    }
?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <title>Title Here</title>
            <meta name="author" content="Your name here">
            <meta name="description" content="Description here">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="css/logingout.css">
            <link rel="stylesheet" href="css/header.css">
            <link rel="stylesheet" href="css/body.css">
            <link rel="stylesheet" href="css/footer.css">
            <link rel="stylesheet" href="css/normalize.css">
            <link rel="stylesheet" href="css/all.css">
            <link rel="stylesheet" href="css/logingout.css">
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Roboto&display=swap" rel="stylesheet">
            <script src="https://kit.fontawesome.com/3830352c3e.js" crossorigin="anonymous"></script>
        </head>
<body>
    <main>
        <section class="formContainer">
            <div class="data-form">
                <h1 class="data-form-header">Logout</h1>
                    <form class="form" method="post" action="logout.php" name="logout">
                        <p class="logout_1">Do you wish to logout?</p>
                        <input class="button yes" type="submit" name="yes" value="Yes">
                        <input class="button no" type="submit" name="no" value="No">
                        <div class="updateDelete">
                            <a href="update.php"><i class="fa fa-check"> Update     </i></a>
                            <a href="delete.php"><i class="fa fa-ban"> Delete     </i></a>
                        </div>
                    </form>
            </div>
        </section>
    </main>
</body>
</html>