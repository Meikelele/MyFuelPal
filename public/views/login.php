<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

                <!-- ==========================================
                              Font, images import
                    ========================================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link rel="stylesheet" href="public/css/global.css">
    <link rel="stylesheet" href="public/css/login.css">

    <title>login-page</title>
</head>
<body>
    <main class="flex-column-center">

        <div class="container-text-header">
            <p>Welcome back!</p>
            <p class="container-subtext">Fill in yur details to login</p>
        </div>

            <form class="flex-column-center" action="login" method="POST">
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

                <button type="submit">
                    <p>LOGIN</p>
                </button>
            </form>

<!--       <form class="form" action="login" method="POST">-->
<!--            <div class="input-group">-->
<!--                <input type="text" class="input">-->
<!--                <label class="placeholder">Login</label>    -->
<!--            </div>-->
<!--        </form> -->
<!---->
<!--        <form class="form">-->
<!--            <div class="input-group">-->
<!--                <input type="password" class="input">-->
<!--                <label class="placeholder">Password</label>    -->
<!--            </div>-->
<!--        </form> -->
<!---->
<!---->
<!--        <button class="container-button-login" type="submit">Login</button>-->


        

    </main>
    

</body>
</html>

<!-- 
SHIFT + ENTER  wstawienie nowej lini
SHITD + OPTION + D skopiowanie aktualnej linii w dol


-->