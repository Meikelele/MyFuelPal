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
    <link rel="stylesheet" href="public/css/welcome.css">

    <!-- SKRYPTY - JS -->
    <script src="https://kit.fontawesome.com/996b7b3bef.js" crossorigin="anonymous" defer></script>
    <script type="text/javascript" src="../public/js/mobile-menu.js" defer></script>

    <title>welcome</title>
</head>
<body>
    <main>
        <div class="logo">
            <h2>My<span>Fuel</span>Pal</h2>
        </div>

        <div class="under-logo">
            <h3>Track your fuel history</h3>
        </div>

        <a href="/register" class="but-singup">
            Sign up
        </a>

        <div class="under-logo">
            <h3>or</h3>
        </div>

        <a href="/login" class="but-login">
            Login
        </a>

        <!-- TODO: Facebook api-->
        <a class="but-login-with-fb">
            <i class="fa-brands fa-facebook"></i>
            Connect with Facebook
        </a>

    </main>
    

</body>
</html>