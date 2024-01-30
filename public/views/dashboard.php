<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CZCIONKI -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,400;0,600;0,700;0,900;1,400;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- ARKUSZE STYLOW - CSS -->
    <link rel="stylesheet" href="public/css/global.css">
    <link rel="stylesheet" href="public/css/dashboard.css">

    <!-- SKRYPTY - JS -->
    <script src="https://kit.fontawesome.com/996b7b3bef.js" crossorigin="anonymous" defer></script>
    <script type="text/javascript" src="../public/js/mobile-menu.js" defer></script>
    <script src="public/js/fuelnote_v2.js" defer></script>

    <title>dashboard</title>
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
                    <p>Yours cars</p>
                    <a href="/yourcars">View all</a>
                </div>

                <div id="cars">
                    <?php if (!empty($vehicles)) : ?>
                        <?php foreach ($vehicles as $vehicle) : ?>
                            <div class="car-tile">
                                <img src="public/images/triss-merigold-avatar.jpeg" alt="gruz_sokrates.jpg">
                                <div>
                                    <h2><?= $vehicle->getNickname(); ?></h2>
                                    <p><?= $vehicle->getNote(); ?></p>
                                </div>
                                <div class="license_plate">
                                    <div class="country_section"><?= $vehicle->getCountryoforigin(); ?></div>
                                    <div class="license_number"><?= $vehicle->getPlatenumber(); ?></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <p>Nothing is here.</p>
                    <?php endif; ?>


                </div>


                <div class="just-line"></div>

                <div class="your-cars-top-bar">
                        <p>Your Fuelpal</p>
                    <a href="/yourfuelpal">View all</a>
                </div>
            </section>
            <div id="fuel-notes"></div>
        </main>
</body>
</html>