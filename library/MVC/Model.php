<?php
    class Model {
        
        protected $_InstancePDO;
        protected $_ListModel = array();
        
        function __construct() {
            $this->_InstancePDO = new PDO('mysql:host='.confBDD::hostDefaut.';dbname='.confBDD::bddDefault,confBDD::userDefaut,confBDD::passDefaut);
        }
    }
?>