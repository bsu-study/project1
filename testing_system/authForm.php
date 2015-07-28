<?	
    require_once('smarty/libs/Smarty.class.php');//Подключили библиотеку
    $smarty = new Smarty();
    $smarty->template_dir = 'templates/';
    $smarty->compile_dir ='smarty/templates_c/';
    $smarty->config_dir = 'smarty/configs/';
    $smarty->cache_dir = 'smarty/cache/';
	if (isset($_GET['message'])){
		$smarty->assign("message",'Wrong Login/Password');
	}
    $smarty->display('templates/authForm.tpl');
?>