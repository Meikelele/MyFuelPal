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
    <link rel="stylesheet" href="public/css/login.css">

    <!-- SKRYPTY - JS -->
    <script src="https://kit.fontawesome.com/996b7b3bef.js" crossorigin="anonymous" defer></script>

    <title>login-page</title>
</head>
<body>
    <main>
        <div class="logo">
            <h2>Welcome back!</h2>
        </div>
        <div class="under-logo">
            <h3>Fill in yur details to login</h3>
        </div>


            <form class="formula" action="login" method="POST">
                <div class="messages">
                    <?php
                    if(isset($messages)){
                        foreach ($messages as $message){
                            echo $message;
                        }
                    }
                    ?>
                </div>

                <input name="email" type="text" placeholder="email@email.com">
                <input name="password" type="password" placeholder="password">

                <button class="but-login" type="submit">
                    Login
                </button>
            </form>
    </main>
</body>
</html>
