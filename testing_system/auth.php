<?php
    session_start();
    $login=$_POST['login'];
	$password=$_POST['password'];
    $base="testing_system";//Имя вашей базы
    $user="root";//имя пользователя
    $pswd="";//пароль
    $host="localhost";//хост
    $DBH=new PDO("mysql:host=".$host.";dbname=".$base,$user,$pswd);
    $DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $STH=$DBH->prepare("SELECT COUNT(*) AS num FROM user WHERE user_login='".$login."' AND user_password='".$password."'");
    $STH->execute();
    $STH->setFetchMode(PDO::FETCH_ASSOC);
    $row = $STH->fetch();
	if ($row['num']>0){
		$_SESSION['logged']=1;		
		$STH=$DBH->prepare("SELECT * FROM user WHERE user_login='".$login."' AND user_password='".$password."'");
		$STH->execute();
		$STH->setFetchMode(PDO::FETCH_ASSOC);
	   	$row = $STH->fetch();
	   	$_SESSION['status']=$row['status'];	   	
	   	$_SESSION['user']=$row['id'];
		header("Location:tests.php");
	}
	else{
		header("Location:authForm.php?message='Wrong password/login'");	
	}
?>