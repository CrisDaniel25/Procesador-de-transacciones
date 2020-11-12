<?php 
    class transaciones {

        public $Id;
        public $FechaHora;
        public $Monto;
        public $Descripcion;

        public function InitData($Id, $FechaHora, $Monto, $Descripcion){
            $this->Id = $Id;
            $this->FechaHora = $FechaHora;
            $this->Monto = $Monto;
            $this->Descripcion = $DEscripcion;
        }
    }
?>