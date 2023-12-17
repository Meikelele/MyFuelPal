<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link rel="stylesheet" href="public/css/global.css">
    <link rel="stylesheet" href="public/css/dashboard.css">

    <script src="https://kit.fontawesome.com/996b7b3bef.js" crossorigin="anonymous"></script>
    
    <title>dashboard</title>
</head>
<body>
    <div class="base-container">
        <nav>
            <div class="logo">
                <p>MyFuelPal</p>
            </div>
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
        </nav>

        <main>
            <section class="mycars">
            <div class="your-cars-top-bar">
                <p>Yours cars</p>
                <a href="#view-all-cars">View all</a>
            </div>

            <div class="car-tile">
                <img src="public/auto_sokrates.jpg" alt="gruz_sokrates.jpg">
                <div>
                    <h2>nazwa_gruza</h2>
                    <p>marka_model_pojemnoscSilnika_silnik</p>
                </div>
                <div class="license_plate">
                    <div class="country_section">PL</div>
                    <div class="license_number">BL 19957</div>
                </div>
            </div>

            </section>
            <section class="myfuelpal-bar"></section>
        </main>
    </div>




</body>




</html>