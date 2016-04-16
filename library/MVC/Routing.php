<?php 
class Routing {

	private static $instance;
	
	public static function getInstance() {
		if (!isset(self::$instance)) {
			$c = __CLASS__;
			self::$instance = new $c;
		}

		return self::$instance;
	}

	function route() {
		
		$appel_url = addslashes($_SERVER['REQUEST_URI']);

		// On garde que les parties dont on a besoin dans l'url
		$appel_url = str_replace("/photon", "", $appel_url);
        
		$arguments = explode('/', $appel_url);
		// On enleve les eventuels "/" inutiles
		$this->clear_empty_value($arguments);
		// Nombre d'arguments
		$nbArgs = count($arguments);

		if($nbArgs == 0 || $nbArgs > 8) // Pas d'arguments ou trop, on affiche la page par d�faut
		{
			$_controller = DEFAULT_CONTROLLER;
			$_function = DEFAULT_FUNCTION;
		}
		else
		{
			$_controller = $arguments[0];
			
			if($nbArgs > 1)
			{

				$_function = $arguments[1].'Action';
				if($nbArgs > 2)
				{
					for($i = 2; $i < $nbArgs; $i++)
					{
						$params[$i-2] = $arguments[$i];
					}
				}
			}
		}

		if (!file_exists(DIR_CLASS.'/'.$_controller.'.php'))
		{
			$class = ERROR_CONTROLLER;
			$method = $_controller;
		}		
		else
		{
			require_once(DIR_CLASS.'/'.$_controller.'.php');
		}

		if (!class_exists($_controller))
		{
			echo 'Erreur : La classe '.$_controller.' n\'est pas définie.';
		}
		else
		{
			$_class = new $_controller();
			if(!empty($_function))
			{
				if(!method_exists($_class, $_function))
				{
					echo 'Erreur : La m�thode '.$_function.' n\'est pas d�finie.';
				}
				else
				{
					if(!empty($params))
					{
						$nbParams = count($params);
						$r = new ReflectionMethod($_class, $_function);
						
						if($r->getNumberOfRequiredParameters() > $nbParams)
						{
							echo 'Erreur : Impossible d\'appeler la m�thode '.$_function.'.';
						}
						else
						{
							switch($nbParams) {
                                case 1:
                                    $_class->$_function($params['0']);
                                    break;
                                case 2:
                                    $_class->$_function($params['0'], $params['1']);
                                    break;
                                case 3:
                                    $_class->$_function($params['0'], $params['1'], $params['2']);
                                    break;
                                case 4:
                                    $_class->$_function($params['0'], $params['1'], $params['2'], $params['3']);
                                    break;
                                case 5:
                                    $_class->$_function($params['0'], $params['1'], $params['2'], $params['3'], $params['4']);
                                    break;
                                case 6:
                                    $_class->$_function($params['0'], $params['1'], $params['2'], $params['3'], $params['4'], $params['5']);
                                    break;
                                case 7:
                                    $_class->$_function($params['0'], $params['1'], $params['2'], $params['3'], $params['4'], $params['5'], $params['6']);
                                    break;
                                case 8:
                                    $_class->$_function($params['0'], $params['1'], $params['2'], $params['3'], $params['4'], $params['5'], $params['6'], $params['7']);
                                    break;
                            }
						}
					}
					else
					{
						$r = new ReflectionMethod($_class, $_function);
						if($r->getNumberOfRequiredParameters() > 0)
						{
							echo 'Erreur : Impossible d\'appeler la m�thode '.$_function.'.';
						}
						else
						{
							$_class->$_function();
						}
					}
				}
			}
			else
			{
				// Existence methode "DefaultAction" ? Si oui, on l'appelle
				if(method_exists($_class, "DefaultAction"))
					$_class->DefaultAction();
			}
		}

	}
	
	function clear_empty_value(&$array)
	{
		foreach ($array as $key => $value)
		{
			if (empty($value))
				unset($array[$key]);
		}
		$array = array_values($array);
	}
}
?>