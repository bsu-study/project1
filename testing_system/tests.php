<?php
    require_once('smarty/libs/Smarty.class.php');//Подключили библиотеку
    $smarty = new Smarty();
    $smarty->template_dir = 'templates/';
    $smarty->compile_dir ='smarty/templates_c/';
    $smarty->config_dir = 'smarty/configs/';
    $smarty->cache_dir = 'smarty/cache/';
    //-----------------------------------bd------------------------------
        $base="testing_system";//Имя вашей базы
        $user="root";//имя пользователя
        $pswd="";//пароль
        $host="localhost";//хост
        $DBH=new PDO("mysql:host=".$host.";dbname=".$base,$user,$pswd);
        $DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        $STH=$DBH->prepare("SELECT * FROM tests");
        $STH->execute();
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $data = $STH->fetchAll();
    //-------------------------------------------------------------------
        $smarty->assign('tests',$data);
    $smarty->display('templates/tests.tpl');
?>