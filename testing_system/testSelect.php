<?php
     require_once('smarty/libs/Smarty.class.php');//Подключили библиотеку
    $smarty = new Smarty();
    $smarty->template_dir = 'templates/';
    $smarty->compile_dir ='smarty/templates_c/';
    $smarty->config_dir = 'smarty/configs/';
    $smarty->cache_dir = 'smarty/cache/';
    $testid = $_GET['testid'];
	if (isset($_GET['question_id'])&&is_numeric($_GET['question_id'])){
	//ТУТ БЫ ПРОВЕРИТЬ ЧТО ТАКОЙ ВОПРОС ЕСТЬ И ЧТО ОН ПРИКРЕПЛЁН К ЭТОМУ ТЕСТУ
		$question_id=$_GET['question_id'];
	}
	else{
	//А ТУТ НЕ ПРОСТО ЕДИНИЧКУ СУВАТЬ А БРАТЬ ПЕРВЫЙ ВОПРОС ИЗ ТЕСТА
		$question_id=1;
	}
    
        $base="testing_system";//Имя вашей базы
        $user="root";//имя пользователя
        $pswd="";//пароль
        $host="localhost";//хост
        $DBH=new PDO("mysql:host=".$host.";dbname=".$base,$user,$pswd);
        $DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );    
		//дёрнули вопрос
        $STH=$DBH->prepare("SELECT * FROM questions WHERE question_id=".$question_id);
		$STH->execute();
		$STH->setFetchMode(PDO::FETCH_ASSOC);
	   	$row = $STH->fetch();
		$smarty->assign('question',$row);
		//дёрнули ответы
		$STH=$DBH->prepare("SELECT A.* FROM answer AS A,question_connect AS B WHERE A.answer_id=B.answer_id AND question_id=".$question_id);
		$STH->execute();
		$STH->setFetchMode(PDO::FETCH_ASSOC);
		$answers=array();
		while($row = $STH->fetch()){
			array_push($answers,$row);
		}		
	   	$smarty->assign('answers',$answers);
    $smarty->display('templates/questions.tpl');
?>