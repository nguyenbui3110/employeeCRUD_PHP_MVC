<?php
    include_once("../model/E_Admin.php");
    include_once("../model/M_Admin.php");
    session_start();
    class Ctrl_admin{
        function __construct() 
		{          
			$this->objsm =  new Model_Admin();
		}
        public function invoke(){
            if($_SESSION['valid']){
                header("location:C_Employee.php?option=show");
            }
            $act = isset($_GET['option']) ? $_GET['option'] : NULL;
            switch ($act) {
                case 'login':
                    $this->login();
                    break;
                
                case 'logout':
                    $this->logout();
                    break;
            }
            
        }   
        public function login()
        {
            if(isset($_REQUEST['submitbtn'])){
                    
                $username=$_REQUEST['username'];
                $password=$_REQUEST['password'];
                $check=$this->objsm->login($username,$password);
                if($check>0){
                    $_SESSION['valid'] = true;
                    header("location:C_Employee.php?option=show");
                }
                else{
                    header("location:C_admin.php?option=login");
                }
            }
            else{
                include_once("../view/login.php");    
            }
        }
        public function logout()
        {
            $_SESSION['valid']=false;
            header("location:C_admin.php?option=login");
        }
    };
    $C_admin = new Ctrl_admin();
    $C_admin->invoke();
?>