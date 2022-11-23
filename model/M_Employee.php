<?php
include_once("E_Employee.php");
class Model_Employee
{
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

		// insert record
		public function insertRecord($obj)
		{
			try
			{	
				$this->open_db();
				$query=$this->condb->prepare("INSERT INTO nhanvien (Hoten,Diachi,IDPB) VALUES (?, ?,?)");
				$query->bind_param("sss",$obj->Hoten,$obj->Diachi,$obj->IDPB);
				$query->execute();
				$res= $query->get_result();
				$last_id=$this->condb->insert_id;
				$query->close();
				$this->close_db();
				return $last_id;
			}
			catch (Exception $e) 
			{
				$this->close_db();	
            	throw $e;
        	}
		}
        //update record
		public function updateRecord($obj)
		{
			try
			{	
				$this->open_db();
				$query=$this->condb->prepare("UPDATE nhanvien SET Hoten=?,Diachi=?,IDPB=? WHERE IDNV=?");
				$query->bind_param("sssi", $obj->Hoten,$obj->Diachi,$obj->IDPB,$obj->IDNV);
				$query->execute();
				$res=$query->get_result();						
				$query->close();
				$this->close_db();
				return true;
			}
			catch (Exception $e) 
			{
            	$this->close_db();
            	throw $e;
        	}
        }
         // delete record
		public function deleteRecord($id)
		{	
			try{
				$this->open_db();
				$query=$this->condb->prepare("DELETE FROM nhanvien WHERE IDNV=?");
				$query->bind_param("i",$id);
				$query->execute();
				$res=$query->get_result();
				$query->close();
				$this->close_db();
				return true;	
			}
			catch (Exception $e) 
			{
            	$this->close_db();
            	throw $e;
        	}		
        }   
        // select record     
		public function GetEmployee($id)
		{
			try
			{
                $this->open_db();
                if($id>0)
				{	
					$query=$this->condb->prepare("SELECT * FROM nhanvien WHERE IDNV=?");
					$query->bind_param("i",$id);
				}
                else
                {$query=$this->condb->prepare("SELECT * FROM nhanvien");	}		
				
				$query->execute();
				$res=$query->get_result();	
				$i=0;
				while($row = mysqli_fetch_array($res)){
					$employee[$i]=new Entity_Employee($row['IDNV'],$row['Hoten'],$row['IDPB'],$row['Diachi']);
					$i++;
				}
				$query->close();				
				$this->close_db();                
                return $employee;
			}
			catch(Exception $e)
			{
				$this->close_db();
				throw $e; 	
			}
			
		}
		public function SearchEmployee($attri,$value)
		{
			try
			{
                $this->open_db();
				$query=$this->condb->prepare("SELECT * FROM nhanvien WHERE $attri=?");
				$query->bind_param("s",$value);
				$query->execute();
				$res=$query->get_result();	
				$i=0;
				while($row = mysqli_fetch_array($res)){
					$employee[$i++]=new Entity_Employee($row['IDNV'],$row['Hoten'],$row['IDPB'],$row['Diachi']);
				}
				$query->close();				
				$this->close_db();                
                return $employee;
			}
			catch(Exception $e)
			{
				$this->close_db();
				throw $e; 	
			}
			
		}
}
