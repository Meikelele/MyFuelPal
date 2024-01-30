<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="public/css/global.css">
    <link rel="stylesheet" href="public/css/addfuelnote.css">

    <script src="https://kit.fontawesome.com/996b7b3bef.js" crossorigin="anonymous"></script>
    <script src="public/js/fuelnote.js" defer></script>

    <title>add-fuel-note</title>
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
            <p>Adding fuel note</p>
<!--            <button>View all</button>-->
        </div>

        <section class="project-form">
            <form action="addfuelnote" method="POST" ENCTYPE="multipart/form-data">
                <?php
                if(isset($messages)){
                    foreach ($messages as $message){
                        echo $message;
                    }
                }
                ?>
                <input name="price" type="text" placeholder="Price">
                <input name="liters" type="text" placeholder="Liters">
                <input name="time" type="time" placeholder="hour">
                <input name="date" type="date" placeholder="date">

                <select name="car">
                </select>

                <textarea name="description" rows="5" placeholder="Some note..."></textarea>


                <button type="submit">SAVE</button>
            </form>
        </section>

    </section>
</main>




</body>




</html>