<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Выбор теста</title>


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
            <h3 class="h3-title"><b>Выберете тест</b></h3>
            {foreach item=test_id from=$tests}
            {if $test_id.test_id%2==1}
            <div class="row">
            {/if}
                <div class="col-lg-6">
                    <div class="thumbnail">
                        <div class="caption">
                            <h4>{$test_id.test_title}</h4>
                            <p>{$test_id.test_discription}</p>
                            <p><a href="testSelect.php?testid={$test_id.test_id}" class="btn btn-primary" role="button">Пройти</a>
                        </div>
                    </div>
                </div>
            {if $test_id.test_id%2==0}
            </div>
            {/if}
            {/foreach}
        </div>
    </div>
    <div class="row footer">
            <p>Система для тестиования студентов разработана в Лаборатории Разработки Програмных Систем Бурятского Государственного Университета. Главный разработчик: Рабданов Аюр.</p>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>