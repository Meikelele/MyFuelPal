
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

    <title>add-car</title>
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
            <p>Adding car</p>
            <!--            <button>View all</button>-->
        </div>

        <section class="project-form">
            <form action="addVehicle" method="POST" ENCTYPE="multipart/form-data">
                <?php
                if(isset($messages)){
                    foreach ($messages as $message){
                        echo $message;
                    }
                }
                ?>
<!--                <input type="file" name="Choose file">-->
                <input name="nickname" type="text" placeholder="Nickname">
<!--                <input name="brand" type="text" placeholder="Brand">-->
                <select name="brand">
                    <option value=""></option>
                    <option value="1">BMW</option>
                    <option value="2">AUDI</option>
                </select>
                <input name="model" type="text" placeholder="Model">
                <input name="course" type="text" placeholder="Course">
                <input name="license_number" type="text" placeholder="License number">
                <input name="cof" type="text" placeholder="Country of origin">
                <input name="type_of_fuel" type="text" placeholder="Type of fuel">
                <textarea name="description" rows="5" placeholder="Some note..."></textarea>

                <button type="submit">SAVE</button>
            </form>
        </section>

    </section>
</main>




</body>




</html>