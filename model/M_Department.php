<?php
include_once("E_Department.php");
include_once("E_Employee.php");
class Model_Department
{
    		// set database config for mysql
		function __construct()
		{
			$this->host = 'localhost';
			$this->user = 'root';
			$this->pass =  '';
			$this->db = 'dulieu';            					
		}
		// open mysql data base
		public function open_db()
		{
			$this->condb=new mysqli($this->host,$this->user,$this->pass,$this->db);
			mysqli_set_charset($this->condb,'UTF8');
			if ($this->condb->connect_error) 
			{
    			die("Erron in connection: " . $this->condb->connect_error);
			}
		}
		// close database
		public function close_db()
		{
			$this->condb->close();
		}	
        // select record     
		public function GetAllPhongBan()
		{
			try
			{
                $this->open_db();
                $query=$this->condb->prepare("SELECT * FROM phongban");		
				$query->execute();
				$res=$query->get_result();	
				$i=0;
				while($row = mysqli_fetch_array($res)){
					$apartments[$i++]=new Entity_Department($row['IDPB'],$row['Tenpb'],$row['mota']);
				}

				$query->close();				
				$this->close_db();                
                return $apartments;
			}
			catch(Exception $e)
			{
				$this->close_db();
				throw $e; 	
			}
			
		}
		public function GetAllEmployeeWithIDPB($IDPB)
		{
			try
			{
                $this->open_db();
                $query=$this->condb->prepare("SELECT * FROM nhanvien where IDPB=$IDPB");		
				$query->execute();
				$res=$query->get_result();	
				$i=0;
				while($row = mysqli_fetch_array($res)){
					$employees[$i++]=new Entity_Employee($row['IDNV'],$row['Hoten'],$row['IDPB'],$row['Diachi']);
				}

				$query->close();				
				$this->close_db();                
                return $employees;
			}
			catch(Exception $e)
			{
				$this->close_db();
				throw $e; 	
			}
			
		}
}
