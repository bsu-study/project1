<?	
	if (isset($_GET['message'])){
		echo "<b style='color:red;'>".$_GET['message']."</b><br><br> <hr>";
	}
?>
<html>
<body>
	<form method="POST" action="authPage.php">
		<input name="login"><br>
		<input name="password" type="password"><br>
		<input type="submit" value="GO!">
	</form>	
</body>
</html>