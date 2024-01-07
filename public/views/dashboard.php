<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link rel="stylesheet" href="public/css/global.css">
    <link rel="stylesheet" href="public/css/dashboard.css">

    <script src="https://kit.fontawesome.com/996b7b3bef.js" crossorigin="anonymous" defer></script>
    <script type="text/javascript" src="../public/js/mobile-menu.js" defer></script>
    
    <title>dashboard</title>
</head>
<body>
    <div class="base-container">
        <nav>
            <div class="logo">
                <p>MyFuelPal</p>
            </div>

            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>

        <div id="myLinks">
            <ul>
                <li>
                    <i class="fa-solid fa-house"></i>
                    <a href="#home" class="button">Home</a>
                </li>

                <li>
                    <i class="fa-solid fa-car"></i>
                    <a href="#home" class="button">My Cars</a>
                </li>

                <li>
                    <i class="fa-solid fa-gas-pump"></i>
                    <a href="#home" class="button">My Fuelpal</a>
                </li>

                <li>
                    <i class="fa-solid fa-user"></i>
                    <a href="#home" class="button">Profile</a>
                </li>

                <li>
                    <i class="fa-solid fa-gear"></i>
                    <a href="#home" class="button">Settings</a>
                </li>
            </ul>

        </div>

        </nav>

        <main>
            <section class="mycars">

            <div class="your-cars-top-bar">
                <p>Yours cars</p>
                <button>View all</button>
            </div>
            <div class="just-line"></div>
            <div class="your-fuelpal-bar">
                    <p>Your Fuelpal</p>
                    <button>View all</button>
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
                    <div class="fuel-note-standing-line"></div>
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
    </div>




</body>

</html>