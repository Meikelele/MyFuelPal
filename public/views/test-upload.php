<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="public/css/global.css">
    <link rel="stylesheet" href="public/css/test-upload.css">

    <script src="https://kit.fontawesome.com/996b7b3bef.js" crossorigin="anonymous"></script>

    <title>test-upload</title>
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

            <section class="project-form">
            <h1>UPLOAD</h1>
            <form action="addProject" method="POST" ENCTYPE="multipart/form-data">
                <?php
                if(isset($messages)){
                    foreach ($messages as $message){
                        echo $message;
                    }
                }
                ?>
                <input name="title" type="text" placeholder="title">
                <textarea name="description" rows="5" placeholder="description"></textarea>

                <input type="file" name="file">
                <button type="submit">SEND</button>


            </form>
            </section>

        </section>
        <section class="myfuelpal-bar"></section>
    </main>
</div>




</body>




</html>