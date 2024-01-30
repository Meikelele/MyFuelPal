<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="public/css/global.css">
    <link rel="stylesheet" href="public/css/settings.css">

    <script src="https://kit.fontawesome.com/996b7b3bef.js" crossorigin="anonymous"></script>

    <title>settings</title>
</head>
<body>

<?php
include 'common/nav.php'
?>

    <main>
        <div class="logo">
            <h2>My<span>Fuel</span>Pal</h2>
        </div>
        <section class="settings">
            <div class="settings-text">
                <p class="header">Settings</p>
            </div>

            <div class="chapter">
                <div class="title-header">
                    <p>Security</p>
                </div>
                <div class="option">
                    <p>Change password</p>
                    <button>change</button>
                </div>
                <div class="option">
                    <p>Change username</p>
                    <button>change</button>
                </div>
                <div class="option">
                    <p>Change email</p>
                    <button>change</button>
                </div>
                <div class="option" style="margin-top: 1.5rem;">
                    <p>Destroy all cookies</p>
                    <button style="background-color: crimson; color: beige;">Destroy</button>
                </div>
            </div>



        </section>

    </main>





</body>




</html>