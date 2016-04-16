<?php 
	class Controleur {
		
		protected $ListAction = array();
		
		// Variable contenant le json de la langue de l'user
		public $txt;
        
        public $userLanguage = 'en';
        
        public $languages = array(
            array('en', 'English'),
            array('fr', 'Français')
        );
		
		function __construct()
		{
			// Get user language
			$_json = file_get_contents(DIR_LANGUAGE.DEFAULT_LANGUAGE.".json");
			if(!empty($_COOKIE['lang'])) {
				if(file_exists(DIR_LANGUAGE.htmlentities($_COOKIE['lang']).".json")) {
					$_json = file_get_contents(DIR_LANGUAGE.htmlentities($_COOKIE['lang']).".json");
					$this->userLanguage = htmlentities($_COOKIE['lang']);
				}
            }
            /*echo '<pre>'.$_json.'</pre>';
			$this->txt = json_decode($_json);
            echo json_last_error();
            exit;*/
            $this->txt = json_decode($_json);
			//
		}
		
		function getLanguageSelector()
        {
            echo '<select onchange="changeLanguage(this.value)">';
            for($i=0;$i<count($this->languages);$i++) {
                echo '<option value="'.$this->languages[$i][0].'"';
                if($this->languages[$i][0] == $this->userLanguage)
                    echo ' selected';
                echo '>'.$this->languages[$i][1].'</option>';
            }
            echo '</select>';
        }
	}
?>