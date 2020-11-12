<?php
    class transacionesService {
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

        public function Add(){

            $listTransition = $this->getList();
            $id_Transition = 1;

            if(!empty($listTransition)){
                $last_transition = $this->;
            }
        }
    }
?>