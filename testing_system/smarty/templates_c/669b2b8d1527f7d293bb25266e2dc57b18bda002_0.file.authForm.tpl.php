<?php /* Smarty version 3.1.27, created on 2015-07-28 11:06:51
         compiled from "Z:\home\localhost\www\testing_system\templates\authForm.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2081855b7381b2f2f48_04614713%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '669b2b8d1527f7d293bb25266e2dc57b18bda002' => 
    array (
      0 => 'Z:\\home\\localhost\\www\\testing_system\\templates\\authForm.tpl',
      1 => 1437558940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2081855b7381b2f2f48_04614713',
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55b7381b331759_84396098',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55b7381b331759_84396098')) {
function content_55b7381b331759_84396098 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2081855b7381b2f2f48_04614713';
?>
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
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
  </head>
  <body>
   <div class="row imi-prozrachen-row"><img src="img/imi_prozrachen.png" class="imi-prozrachen"></div>
    <div class="row form-row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8 form-bg">
           <?php if ($_smarty_tpl->tpl_vars['message']->value == 'Wrong Login/Password') {?>
                    <h5 style='color:red;'>Неверный Логин/Пароль</h5>
                    <img src="img/836597_fanatik-prezhde-chem-ubivat-nevernogo.jpg" style="width:300px;">
                    <?php }?>
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
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
  </body>
</html><?php }
}
?>