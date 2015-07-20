<?
	session_start();
	$login=$_POST['login'];
	$password=$_POST['password'];
	//Работаем с базами данных
	$base="testbase";//Имя вашей базы
	$user="root";//имя пользователя
	$pswd="";//пароль
	$host="localhost";//хост
	$DBH=new PDO("mysql:host=".$host.";dbname=".$base,$user,$pswd);
	$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	$STH=$DBH->prepare("SELECT COUNT(*) AS num FROM user WHERE login='".$login."' AND password='".$password."'");
	$STH->execute();
	$STH->setFetchMode(PDO::FETCH_ASSOC);//задаём способ формирования результирующего набора
   	$row = $STH->fetch();
	if ($row['num']>0){
		$_SESSION['logged']=1;		
		$STH=$DBH->prepare("SELECT * FROM user WHERE login='".$login."' AND password='".$password."'");
		$STH->execute();
		$STH->setFetchMode(PDO::FETCH_ASSOC);//задаём способ формирования результирующего набора
	   	$row = $STH->fetch();
	   	$_SESSION['status']=$row['status'];	   	
	   	$_SESSION['user']=$row['id'];
		header("Location:closedPage.php");
	}
	else{
		header("Location:authPageForm.php?message='Wrong password/login'");	
	}

?>