<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Вход в систему</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mycss.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   <div class="row imi-prozrachen-row"><img src="img/imi_prozrachen.png" class="imi-prozrachen"></div>
    <div class="row form-row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8 form-bg">
           {if $message=='Wrong Login/Password'}
                    <h5 style='color:red;'>Неверный Логин/Пароль</h5>
                    <img src="img/836597_fanatik-prezhde-chem-ubivat-nevernogo.jpg" style="width:300px;">
                    {/if}
            <h3><b>Войти в систему</b></h3>
            <form action="auth.php" method="POST">
                <div class="form-group">
                    <input name="login" class="form-control enter-forms" placeholder="Логин"><br/>
                    <input name="password" class="form-control enter-forms" placeholder="Пароль" type="password"><br/>
                    <div class="row">
                        <a href="registration.html" class="btn btn-default enter-buttons" role="button">Регистрация</a>
                        <input type="submit" class="btn btn-primary enter-buttons">
                    </div>
                </div>     
            </form>
        </div>
    </div>
    <div class="row footer">
            <p>Система для тестиования студентов разработана в Лаборатории Разработки Програмных Систем Бурятского Государственного Университета. Главный разработчик: Рабданов Аюр.</p>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>