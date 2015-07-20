<?
	session_start();
	if ($_SESSION['logged']==1){
		echo "CLOSED page available";
		$base="testbase";//Имя вашей базы
		$user="root";//имя пользователя
		$pswd="";//пароль
		$host="localhost";//хост
		$DBH=new PDO("mysql:host=".$host.";dbname=".$base,$user,$pswd);
		$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		$id=$_SESSION['user'];
		$STH=$DBH->prepare("SELECT *  FROM user WHERE id='".$id."'");
		$STH->execute();
		$STH->setFetchMode(PDO::FETCH_ASSOC);//задаём способ формирования результирующего набора
	   	$row = $STH->fetch();
	   	echo "<hr>";
	   	if ($_SESSION['status']==1){
	   		echo "You administrator!";
	   	}
	   	else{
	   		echo "You moderator!";
	   	}
	   	echo "<hr>";
	   	print_r($row);
	   	echo "<hr>";
	   	echo "<a href='quit.php'>Quit</a>";
	}
	else{
		echo "CLOSED page NOT available";
	}

?>