<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Вопрос1</title>


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
            <form method="POST" action="">
            <h3><b>Вопрос № {$question.question_id}</b></h3>
            <p>{$question.question_text}</p>
            <!-- ВЫВОДИМ ОТВЕТЫ-->
            {foreach item=answer from=$answers}
                {if $question.question_type==1}
                      <input type="radio" name="answer" value="{$answer.answer_id}">{$answer.answer_text} <br>
                {else}
                      <input type="checkbox" name="check_{$answer.answer_id}">{$answer.answer_text} <br>
                {/if}
            {/foreach}
            <input type="hidden" name="question_id" value="{$question.question_id}">
            <input type="submit" value="send  ">
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