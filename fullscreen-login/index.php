<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>

        <meta charset="utf-8">
        
        <title>Fullscreen Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
        <link rel="stylesheet" href="../fullscreen-login/assets/css/reset.css">
        <link rel="stylesheet" href="../fullscreen-login/assets/css/supersized.css">
        <link rel="stylesheet" href="../fullscreen-login/assets/css/style.css">
        

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>

    <body>
        <div class="w3-top">
            <div class="w3-bar w3-green w3-wide w3-padding w3-card-2">
                <a href="../index.html" class="w3-bar-item w3-button"><b>Montorín</b> RR.HH.</a>
                
           
  </div>
</div>
        <div class="page-container">

             <div class="imgcontainer">
             

              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <a href="../index.html"><img src="../imagenes/logoEmpresa.png" alt="Avatar" class="avatar" width="300px" heigth="300px"></a>
            </div>

            <!-- <h1>Login</h1> -->
            <form action="../modelo/login.php" method="post">
                <input type="text" name="login" class="us" placeholder="Username">
                <input type="password" name="password" class="pa" placeholder="Password">
                <button type="submit">Iniciar sesión</button>
                <div class="error"><span>+</span></div>
            </form>
            <!-- <div class="connect">
                <p>Or connect with:</p>
                <p>
                    <a class="facebook" href=""></a>
                    <a class="twitter" href=""></a>
                </p>
            </div> -->
        </div>

        <!-- Javascript -->
        <script src="../fullscreen-login/assets/js/jquery-1.8.2.min.js"></script>
        <script src="../fullscreen-login/assets/js/supersized.3.2.7.min.js"></script>
        <script src="../fullscreen-login/assets/js/supersized-init.js"></script>
        <script src="../fullscreen-login/assets/js/scripts.js"></script>

    </body>

</html>