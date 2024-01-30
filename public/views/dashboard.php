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
                    <a href="/yourcars">View all</a>
                </div>

                <div class="car-tiles">
                    <div class="car-tile">
                        <img src="public/images/lemon_lambo.jpeg" alt="gruz_sokrates.jpg">
                        <div class="car-tile-box">
                            <h2>Gruzik</h2>
                            <p>Gowno w papierku po cukierku</p>
                        </div>
                        <div class="license_plate">
                            <div class="country_section">PL</div>
                            <div class="license_number">KPR 14901</div>
                        </div>
                    </div>
                    <div class="car-tile">
                        <img src="public/images/triss-merigold-avatar.jpeg" alt="gruz_sokrates.jpg">
                        <div class="car-tile-box">
                            <h2>Gruzik</h2>
                            <p>Gowno w papierku po cukierku</p>
                        </div>
                        <div class="license_plate">
                            <div class="country_section">PL</div>
                            <div class="license_number">KPR 14901</div>
                        </div>
                    </div>
                    <div class="car-tile">
                        <img src="public/images/triss-merigold-avatar.jpeg" alt="gruz_sokrates.jpg">
                        <div class="car-tile-box">
                            <h2>Gruzik</h2>
                            <p>Gowno w papierku po cukierku</p>
                        </div>
                        <div class="license_plate">
                            <div class="country_section">PL</div>
                            <div class="license_number">KPR 14901</div>
                        </div>
                    </div>
                    <div class="car-tile">
                        <img src="public/images/triss-merigold-avatar.jpeg" alt="gruz_sokrates.jpg">
                        <div class="car-tile-box">
                            <h2>Gruzik</h2>
                            <p>Gowno w papierku po cukierku</p>
                        </div>
                        <div class="license_plate">
                            <div class="country_section">PL</div>
                            <div class="license_number">KPR 14901</div>
                        </div>
                    </div>
                    <div class="car-tile">
                        <img src="public/images/triss-merigold-avatar.jpeg" alt="gruz_sokrates.jpg">
                        <div class="car-tile-box">
                            <h2>Gruzik</h2>
                            <p>Gowno w papierku po cukierku</p>
                        </div>
                        <div class="license_plate">
                            <div class="country_section">PL</div>
                            <div class="license_number">KPR 14901</div>
                        </div>
                    </div>
                </div>


                <div class="just-line"></div>

                <div class="your-cars-top-bar">
                        <p>Your Fuelpal</p>
                    <a href="/yourfuelpal">View all</a>
                </div>

                <div class="fuel-notes">
                    <div class="fuel-note">
                        <div class="fuel-note-top">
                            <div class="first">
                                <i class="fa-solid fa-clock"></i>
                                <div class="first-date">
                                    <p class="first-text">10:25</p>
                                    <p class="first-subtext">Monday, 10th Oct 2023 Gruz - E36</p>

                                </div>
                            </div>
                            <!--                        <div class="fuel-note-standing-line"></div>-->
                            <div class="second">
                                <i class="fa-solid fa-gas-pump"></i>
                                <div class="second-date">
                                    <p class="second-text">200 zł</p>
                                    <p class="second-subtext">34,5 L</p>
                                </div>

                            </div>
                        </div>
                        <div class="fuel-note-horizontal-line"></div>
                        <div class="third">
                            <p>Lorem ipsum cos tam cos tam nie wiem. cos mondrego</p>
                        </div>
                    </div>
                    <div class="fuel-note">
                        <div class="fuel-note-top">
                            <div class="first">
                                <i class="fa-solid fa-clock"></i>
                                <div class="first-date">
                                    <p class="first-text">10:25</p>
                                    <p class="first-subtext">Monday, 10th Oct 2023 Gruz - E36</p>

                                </div>
                            </div>
                            <!--                        <div class="fuel-note-standing-line"></div>-->
                            <div class="second">
                                <i class="fa-solid fa-gas-pump"></i>
                                <div class="second-date">
                                    <p class="second-text">200 zł</p>
                                    <p class="second-subtext">34,5 L</p>
                                </div>

                            </div>
                        </div>
                        <div class="fuel-note-horizontal-line"></div>
                        <div class="third">
                            <p>Lorem ipsum cos tam cos tam nie wiem. cos mondrego</p>
                        </div>
                    </div>
                    <div class="fuel-note">
                        <div class="fuel-note-top">
                            <div class="first">
                                <i class="fa-solid fa-clock"></i>
                                <div class="first-date">
                                    <p class="first-text">10:25</p>
                                    <p class="first-subtext">Monday, 10th Oct 2023 Gruz - E36</p>

                                </div>
                            </div>
                            <!--                        <div class="fuel-note-standing-line"></div>-->
                            <div class="second">
                                <i class="fa-solid fa-gas-pump"></i>
                                <div class="second-date">
                                    <p class="second-text">200 zł</p>
                                    <p class="second-subtext">34,5 L</p>
                                </div>

                            </div>
                        </div>
                        <div class="fuel-note-horizontal-line"></div>
                        <div class="third">
                            <p>Lorem ipsum cos tam cos tam nie wiem. cos mondrego</p>
                        </div>
                    </div>
                    <div class="fuel-note">
                        <div class="fuel-note-top">
                            <div class="first">
                                <i class="fa-solid fa-clock"></i>
                                <div class="first-date">
                                    <p class="first-text">10:25</p>
                                    <p class="first-subtext">Monday, 10th Oct 2023 Gruz - E36</p>

                                </div>
                            </div>
                            <!--                        <div class="fuel-note-standing-line"></div>-->
                            <div class="second">
                                <i class="fa-solid fa-gas-pump"></i>
                                <div class="second-date">
                                    <p class="second-text">200 zł</p>
                                    <p class="second-subtext">34,5 L</p>
                                </div>

                            </div>
                        </div>
                        <div class="fuel-note-horizontal-line"></div>
                        <div class="third">
                            <p>Lorem ipsum cos tam cos tam nie wiem. cos mondrego</p>
                        </div>
                    </div>
                    <div class="fuel-note">
                        <div class="fuel-note-top">
                            <div class="first">
                                <i class="fa-solid fa-clock"></i>
                                <div class="first-date">
                                    <p class="first-text">10:25</p>
                                    <p class="first-subtext">Monday, 10th Oct 2023 Gruz - E36</p>

                                </div>
                            </div>
                            <!--                        <div class="fuel-note-standing-line"></div>-->
                            <div class="second">
                                <i class="fa-solid fa-gas-pump"></i>
                                <div class="second-date">
                                    <p class="second-text">200 zł</p>
                                    <p class="second-subtext">34,5 L</p>
                                </div>

                            </div>
                        </div>
                        <div class="fuel-note-horizontal-line"></div>
                        <div class="third">
                            <p>Lorem ipsum cos tam cos tam nie wiem. cos mondrego</p>
                        </div>
                    </div>
                    <div class="fuel-note">
                        <div class="fuel-note-top">
                            <div class="first">
                                <i class="fa-solid fa-clock"></i>
                                <div class="first-date">
                                    <p class="first-text">10:25</p>
                                    <p class="first-subtext">Monday, 10th Oct 2023 Gruz - E36</p>

                                </div>
                            </div>
                            <!--                        <div class="fuel-note-standing-line"></div>-->
                            <div class="second">
                                <i class="fa-solid fa-gas-pump"></i>
                                <div class="second-date">
                                    <p class="second-text">200 zł</p>
                                    <p class="second-subtext">34,5 L</p>
                                </div>

                            </div>
                        </div>
                        <div class="fuel-note-horizontal-line"></div>
                        <div class="third">
                            <p>Lorem ipsum cos tam cos tam nie wiem. cos mondrego</p>
                        </div>
                    </div>
<!--                    <div class="fuel-note">-->
<!--                        <div class="fuel-note-top">-->
<!--                            <div class="first">-->
<!--                                <i class="fa-solid fa-clock"></i>-->
<!--                                <div class="first-date">-->
<!--                                    <p class="first-text">10:25</p>-->
<!--                                    <p class="first-subtext">Monday, 10th Oct 2023 Gruz - E36</p>-->
<!---->
<!--                                </div>-->
<!--                            </div>-->
<!--                                                 <div class="fuel-note-standing-line"></div>-->
<!--                            <div class="second">-->
<!--                                <i class="fa-solid fa-gas-pump"></i>-->
<!--                                <div class="second-date">-->
<!--                                    <p class="second-text">200 zł</p>-->
<!--                                    <p class="second-subtext">34,5 L</p>-->
<!--                                </div>-->
<!---->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="fuel-note-horizontal-line"></div>-->
<!--                        <div class="third">-->
<!--                            <p>Lorem ipsum cos tam cos tam nie wiem. cos mondrego</p>-->
<!--                        </div>-->
<!---->
<!---->
<!--                    </div>-->
                </div>




            <!-- <div class="car-tile">
                <img src="public/uploads/<?= $project->getImage() ?>" alt="gruz_sokrates.jpg">
                <div>
                    <h2><?= $project->getTitle() ?></h2>
                    <p><?= $project->getDescription() ?></p>
                </div>
                <div class="license_plate">
                    <div class="country_section">PL</div>
                    <div class="license_number">BL 19957</div>
                </div>
            </div> -->

            </section>
        </main>
</body>
</html>