<?php
include_once("E_Admin.php");

class Model_Admin
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
         public function Login($username,$password)
        {
            $this->open_db();
            $query=$this->condb->prepare("SELECT * FROM admin where username=? and password=?");	
            $query->bind_param("ss",$username,$password);	
			$query->execute();
			 $res=$query->get_result();
            return mysqli_num_rows($res);
            $this->close_db();
        }
}
?>