<?php
    include_once("../model/E_Department.php");
    include_once("../model/M_Department.php");

    class Ctrl_Department{
        function __construct() 
		{          
			$this->objsm =  new Model_Department();
		}
        public function invoke(){
            $option='show';
            if(isset($_GET['option'])){
                if($_GET['option']='show'){
                    if(isset($_GET['idpb'])){
                        $employees= $this->objsm->GetAllEmployeeWithIDPB($_GET['idpb']);
                        include_once("../view/EmployeeList.php");
                    }
                    else{
                        $departmentList = $this->objsm->GetAllPhongBan();
                        include_once("../view/DepartmentList.php");
                    }
                }
            }
        }   
    };
    $C_Department = new Ctrl_Department();
    $C_Department->invoke();
?>