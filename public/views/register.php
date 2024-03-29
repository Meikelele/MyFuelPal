<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link rel="stylesheet" href="public/css/global.css">
    <link rel="stylesheet" href="public/css/login.css">
    <link rel="stylesheet" href="public/css/register.css">

    <script type="text/javascript" src="../public/js/script.js" defer></script>
    
    <title>SingUp</title>
</head>
<body>
    <main class="flex-column-center">



        <div class="container-text-header">
            <p>Let's start here</p>
            <p class="container-subtext">Fill in yur details to begin</p>
        </div>

       <form class="form" action="register" method="POST" onsubmit="return validateForm()">
           <div class="messages">
               <?php
               if(isset($messages)){
                   foreach($messages as $message) {
                       echo $message;
                   }
               }
               ?>
           </div>
           <input name="name" type="text" placeholder="Name">
           <input name="surname" type="text" placeholder="Surname">
           <input name="email" type="text" placeholder="Email">
           <input name="password" type="password" placeholder="Password">
           <input name="confirmedPassword" type="password" placeholder="Confirm Password">

           <button type="submit">Sing up</button>

        </form>
        
        <div class="footer">
            <p>By singing in, I agree with <span class="important">Terms of Use</span> and <span class="important">Privacy Policy</span></p>
        </div>

    </main>

</body>
</html>

<!-- 
SHIFT + ENTER  wstawienie nowej lini
SHITD + OPTION + D skopiowanie aktualnej linii w dol


-->