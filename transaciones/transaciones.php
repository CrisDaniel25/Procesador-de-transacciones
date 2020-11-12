<?php 
    class transaciones {

        public $Id;
        public $FechaHora;
        public $Monto;
        public $Descripcion;

        private $cookieName = "transacciones";

        public function GetList(){

            $listTransition = array();

            if(isset($_COOKIE[$this->cookieName;])){

                $listTransition = json_decode($_COOKIE[$this->cookieName;],false);
            }
            else {
                setcookie($this->cookieName;, json_encode($listTransition));
            }

            return $listTransition;
        }
    }
?>