<?php
    class Entity_Employee
    {
        public $IDNV;
        public $Hoten;
        public $IDPB;
        public $Diachi;
        
        public function __construct( $_id, $_name, $_IDPB, $_Diachi){
            $this->IDNV = $_id;
            $this->Hoten = $_name;
            $this->IDPB = $_IDPB;
            $this->Diachi = $_Diachi;
        }
    }
?>