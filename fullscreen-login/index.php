
<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>

        <meta charset="utf-8">
        <title>Fullscreen Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel="stylesheet" href="../fullscreen-login/assets/css/reset.css">
        <link rel="stylesheet" href="../fullscreen-login/assets/css/supersized.css">
        <link rel="stylesheet" href="../fullscreen-login/assets/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="page-container">

             <div class="imgcontainer">
              <br>
              <br>

                <img src="../imagenes/logoEmpresa.png" alt="Avatar" class="avatar" width="300px" heigth="300px">
            </div>

            <!-- <h1>Login</h1> -->
            <form action="../modelo/login.php" method="post">
                <input type="text" name="login" class="username" placeholder="Username">
                <input type="password" name="password" class="password" placeholder="Password">
                <button type="submit">Sign me in</button>
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

