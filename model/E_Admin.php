<?php
    class Entity_Admin
    {
        public $ID;
        public $username;
        public $password;
        
        public function __construct( $_id, $_username, $_password){
            $this->ID = $_id;
            $this->username = $_username;
            $this->password = $_password;
        }
    }
?>