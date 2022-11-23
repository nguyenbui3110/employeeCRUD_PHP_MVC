<?php
    class Entity_Department
    {
        public $IDPB;
        public $tenpb;
        public $mota;
        
        public function __construct( $_id, $_name, $_mota){
            $this->IDPB = $_id;
            $this->tenpb = $_name;
            $this->mota = $_mota;
        }
    }
?>