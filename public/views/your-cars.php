<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link rel="stylesheet" href="public/css/global.css">
    <link rel="stylesheet" href="public/css/yourcars.css">

    <script src="https://kit.fontawesome.com/996b7b3bef.js" crossorigin="anonymous"></script>
    
    <title>dashboard</title>
</head>
<body>

<?php
include 'common/nav.php'
?>

    <main>
            <section class="mycars">
                <div class="logo">
                    <h2>My<span>Fuel</span>Pal</h2>
                </div>

                <div class="your-cars-top-bar">
                    <p>Yours cars</p>
                    <a class="add-new-car" href="/addcar">Add new</a>
                </div>
                <div id="cars">
                    <?php foreach ($vehicles as $vehicle) : ?>
                        <div class="car-tile">
                            <img src="public/images/triss-merigold-avatar.jpeg" alt="gruz_sokrates.jpg">
                            <div>
                                <h2>Gruzik</h2>
                                <p>Gowno w papierku po cukierku</p>
                            </div>
                            <div class="license_plate">
                                <div class="country_section">PL</div>
                                <div class="license_number">KPR 14901</div>
                            </div>
                        </div>
                    <?php endforeach; ?>
<!--                    <div class="car-tile">-->
<!--                        <img src="public/images/triss-merigold-avatar.jpeg" alt="gruz_sokrates.jpg">-->
<!--                        <div>-->
<!--                            <h2>Gruzik</h2>-->
<!--                            <p>Gowno w papierku po cukierku</p>-->
<!--                        </div>-->
<!--                        <div class="license_plate">-->
<!--                            <div class="country_section">PL</div>-->
<!--                            <div class="license_number">KPR 14901</div>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>



<!--            <div class="car-tile">-->
<!--                <img src="public/uploads/--><?php //= $project->getImage() ?><!--" alt="gruz_sokrates.jpg">-->
<!--                <div>-->
<!--                    <h2>--><?php //= $project->getTitle() ?><!--</h2>-->
<!--                    <p>--><?php //= $project->getDescription() ?><!--</p>-->
<!--                </div>-->
<!--                <div class="license_plate">-->
<!--                    <div class="country_section">PL</div>-->
<!--                    <div class="license_number">BL 19957</div>-->
<!--                </div>-->
<!--            </div>-->

            </section>

                
        </main>

    <nav class="mobile-menu">
        <a href="#home">
            <i class="fa-solid fa-house"></i>
        </a>
        <a href="#mycars">
            <i class="fa-solid fa-car"></i>
        </a>
        <a href="#myfuelpal">
            <i class="fa-solid fa-gas-pump"></i>
        </a>
        <a href="#profile">
            <i class="fa-solid fa-user"></i>
        </a>
        <a href="#setting">
            <i class="fa-solid fa-gear"></i>
        </a>




</body>

</html>