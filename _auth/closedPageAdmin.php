<?
	session_start();
	if ($_SESSION['logged']==1&&$_SESSION['status']==1){
		echo "Only for admin";
	   	echo "<hr>";
	   	print_r($row);
	   	echo "<hr>";
	   	echo "<a href='quit.php'>Quit</a>";
	}
	else{
		echo "CLOSED page NOT available";
	}

?>