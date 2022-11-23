<?php
    include_once("../model/E_Employee.php");
    include_once("../model/M_Employee.php");

    class Ctrl_Employee{
        function __construct() 
		{          
			$this->objsm =  new Model_Employee();
		}
        public function invoke(){
            $act = isset($_GET['option']) ? $_GET['option'] : NULL;
			switch ($act) 
			{
                case 'add' :                    
					$this->insert();
					break;						
				case 'update':
					$this->update();
					break;				
				case 'delete' :					
					$this -> delete();
					break;	
                case 'search' :					
					$this -> search();
					break;								
                case 'show' :
                    $this->list();
                    break;
                default:
                    break;

			}
            
        }   
        public function update(){
            $option=$_GET['option'];
            if(isset($_REQUEST['updatebtn'])){
                $employee=new Entity_Employee($_REQUEST['IDNV'],$_REQUEST['Hoten'],$_REQUEST['IDPB'],$_REQUEST['Diachi']);
                $this->objsm->updateRecord($employee);
                header("location:C_Employee.php?option=update");
            }
            if(isset($_GET['IDNV'])){
                $employee= $this->objsm->GetEmployee($_GET['IDNV'])[0];
                include_once("../view/update.php");
            }
            else{
                $employees = $this->objsm->GetEmployee(0);
                include_once("../view/EmployeeList.php");
            }
        }
        public function insert(){
            if(isset($_POST['Hoten'],$_POST['IDPB'],$_POST['Diachi'])){
                $employee= new Entity_Employee("*",$_POST['Hoten'],'pb0'.$_POST['IDPB'],$_POST['Diachi']);
                $this->objsm->insertRecord($employee);
                header("location:C_Employee.php");
            }
        }
        public function delete(){
            $option=$_GET['option'];
            if(isset($_GET['IDNV'])){
                $this->objsm->deleteRecord($_GET['IDNV']);
                header("location:C_Employee.php?option=delete");
            }
            else{
                $employees = $this->objsm->GetEmployee(0);
                include_once("../view/EmployeeList.php");
            }
        }
        public function list(){
            $option=$_GET['option'];
            if(isset($_GET['IDNV'])){
                $employee= $this->objsm->GetEmployee($_GET['IDNV']);
                include_once("../view/EmployeeDetail.php");
            }
            else{
                $employees = $this->objsm->GetEmployee(0);
                include_once("../view/EmployeeList.php");
            }
        }
        public function search(){
            if(isset($_POST['attri'],$_POST['info'])){
                $employees= $this->objsm->SearchEmployee($_POST['attri'],$_POST['info']);
                include_once("../view/EmployeeList.php");
            }
        }
    };
    $C_Student = new Ctrl_Employee();
    $C_Student->invoke();
?>