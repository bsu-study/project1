<?php /* Smarty version 3.1.27, created on 2015-07-28 11:28:26
         compiled from "Z:\home\localhost\www\testing_system\templates\questions.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1759955b73d2a75c320_08785334%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fc1bfa7ea6c966874e806330ed372067486264b' => 
    array (
      0 => 'Z:\\home\\localhost\\www\\testing_system\\templates\\questions.tpl',
      1 => 1438072098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1759955b73d2a75c320_08785334',
  'variables' => 
  array (
    'question' => 0,
    'answers' => 0,
    'answer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55b73d2a7a66b3_88074345',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55b73d2a7a66b3_88074345')) {
function content_55b73d2a7a66b3_88074345 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1759955b73d2a75c320_08785334';
?>
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
            <form method="POST" action="">
            <h3><b>Вопрос № <?php echo $_smarty_tpl->tpl_vars['question']->value['question_id'];?>
</b></h3>
            <p><?php echo $_smarty_tpl->tpl_vars['question']->value['question_text'];?>
</p>
            <!-- ВЫВОДИМ ОТВЕТЫ-->
            <?php
$_from = $_smarty_tpl->tpl_vars['answers']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['answer'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['answer']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['answer']->value) {
$_smarty_tpl->tpl_vars['answer']->_loop = true;
$foreach_answer_Sav = $_smarty_tpl->tpl_vars['answer'];
?>
                <?php if ($_smarty_tpl->tpl_vars['question']->value['question_type'] == 1) {?>
                      <input type="radio" name="answer" value="<?php echo $_smarty_tpl->tpl_vars['answer']->value['answer_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['answer']->value['answer_text'];?>
 <br>
                <?php } else { ?>
                      <input type="checkbox" name="check_<?php echo $_smarty_tpl->tpl_vars['answer']->value['answer_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['answer']->value['answer_text'];?>
 <br>
                <?php }?>
            <?php
$_smarty_tpl->tpl_vars['answer'] = $foreach_answer_Sav;
}
?>
            <input type="hidden" name="question_id" value="<?php echo $_smarty_tpl->tpl_vars['question']->value['question_id'];?>
">
            <input type="submit" value="send  ">
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