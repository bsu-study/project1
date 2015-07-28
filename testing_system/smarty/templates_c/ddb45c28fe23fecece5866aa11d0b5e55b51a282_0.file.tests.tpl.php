<?php /* Smarty version 3.1.27, created on 2015-07-28 11:09:35
         compiled from "Z:\home\localhost\www\testing_system\templates\tests.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:258555b738bf8382c7_19866715%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddb45c28fe23fecece5866aa11d0b5e55b51a282' => 
    array (
      0 => 'Z:\\home\\localhost\\www\\testing_system\\templates\\tests.tpl',
      1 => 1437564932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '258555b738bf8382c7_19866715',
  'variables' => 
  array (
    'tests' => 0,
    'test_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55b738bf8a1a51_84778189',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55b738bf8a1a51_84778189')) {
function content_55b738bf8a1a51_84778189 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '258555b738bf8382c7_19866715';
?>
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
            <h3 class="h3-title"><b>Выберете тест</b></h3>
            <?php
$_from = $_smarty_tpl->tpl_vars['tests']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['test_id'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['test_id']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['test_id']->value) {
$_smarty_tpl->tpl_vars['test_id']->_loop = true;
$foreach_test_id_Sav = $_smarty_tpl->tpl_vars['test_id'];
?>
            <?php if ($_smarty_tpl->tpl_vars['test_id']->value['test_id']%2 == 1) {?>
            <div class="row">
            <?php }?>
                <div class="col-lg-6">
                    <div class="thumbnail">
                        <div class="caption">
                            <h4><?php echo $_smarty_tpl->tpl_vars['test_id']->value['test_title'];?>
</h4>
                            <p><?php echo $_smarty_tpl->tpl_vars['test_id']->value['test_discription'];?>
</p>
                            <p><a href="testSelect.php?testid=<?php echo $_smarty_tpl->tpl_vars['test_id']->value['test_id'];?>
" class="btn btn-primary" role="button">Пройти</a>
                        </div>
                    </div>
                </div>
            <?php if ($_smarty_tpl->tpl_vars['test_id']->value['test_id']%2 == 0) {?>
            </div>
            <?php }?>
            <?php
$_smarty_tpl->tpl_vars['test_id'] = $foreach_test_id_Sav;
}
?>
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