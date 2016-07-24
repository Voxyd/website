<?php
function autoloader($nomClass) {
	$rootPath = ROOT . DS;
	$_tabDossier = array(
			'./config/',
			'./application/models/',
			'./application/controllers/',
			'./library/',
			'./library/MVC/'
	);

	foreach($_tabDossier as $chemindossier) {
		//Test l'existence de la class dans le dossier
		if(file_exists($chemindossier.$nomClass.'.php')) {
			require_once($chemindossier.$nomClass.'.php');

			return;
		}
	}
}

spl_autoload_register('autoloader');

?>
