<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="public/css/global.css">
    <link rel="stylesheet" href="public/css/profile.css">

    <script src="https://kit.fontawesome.com/996b7b3bef.js" crossorigin="anonymous"></script>

    <title>profile</title>
</head>
<body>

<?php
include 'common/nav.php'
?>

    <main>
        <section class="profile">
            <div class="logo">
                <h2>My<span>Fuel</span>Pal</h2>
            </div>

            <div class="profile-logo">
                 <img src="public/images/triss-merigold-avatar.jpeg" alt="profile-logo.png">
            </div>

            <div class="profile-name-with-email">
                <p class="header">
                    <?php
                        session_start();
                        echo $_SESSION['User']->getName()." ".$_SESSION['User']->getSurname();

//                        echo $_SESSION['User'];
                    ?>
                    </p>
                <p class="email-text">
                    <?php
                        echo $_SESSION['User']->getEmail();
                    ?>
                </p>
            </div>
            <a href="/logout">Logout</a>
            
            
            
            
        </section>
    </main>




</body>




</html>