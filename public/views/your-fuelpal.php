<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="public/css/global.css">
    <link rel="stylesheet" href="public/css/yourfuelpal.css">

    <script src="https://kit.fontawesome.com/996b7b3bef.js" crossorigin="anonymous"></script>
    <script src="public/js/fuelnote_v2.js" defer></script>

    <title>yourfuelpal</title>
</head>
<body onload="loadData()">
<?php
include 'common/nav.php'
?>


<main>
    <section class="mycars">
        <div class="logo">
            <h2>My<span>Fuel</span>Pal</h2>
        </div>


        <div class="your-cars-top-bar">
            <p>Your Fuelpal</p>
            <a class="add-new-car" href="/addfuelnote">Add new</a>
        </div>

        <div id="fuel-notes">
        </div>
    </section>
</main>




</body>

</html>