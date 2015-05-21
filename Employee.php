<?php
include "DB_connection.php";
include "Validate.php";

class Employee{
public $key=array("name", "age", "occupation", "address");

	function __construct(){	
		$db=new DB_Connection();	
		}
	
	function listEmployees(){
		$db= new DB_Connection();		
		$sql='SELECT * FROM '.config::TABLENAME;
		
		$result_arr = $db->query($sql);		
		$array = array();
			while($row = mysql_fetch_array($result_arr)){
				array_push($array, $row);		
				}						
				return $array; 
			
		} 
		
	function addEmployee($val){		 
		$db= new DB_Connection();
        	
		$sql= "INSERT INTO ".config::TABLENAME." (".$this->key[0].",".$this->key[1].",".$this->key[2].",".$this->key[3].") VALUES ($val[0], $val[1], $val[2], $val[3]);";		
		
		$add_emp=$db->query($sql);
		
		if($add_emp){
			$db->close();			
		}
		else{
			echo"<script><alert>('Whoopps!!Operation failed...addEmployee()')</alert></script>";
		}		
					
	}
	
	function deleteEmployee(){
	}
	
	function updateEmployeeDetails(){
	}
}

if($_POST){
	if($_POST['operation']== 'add'){
	
		$validt = new Validate();
		$err_name = $validt->valid_name();
		$err_age = $validt->valid_age();
	    $err_occupation = $validt->valid_occup();
		$err_address= $validt->valid_addr();
		  
	    $result=array();
    	   if($err_name == true ){
			$result['name'] = $err_name;
		    }  
			
		   if($err_age ==true ) {
				$result['age'] = $err_age;
		    }  
		   
		   if($err_occupation ==true ){
				$result['occupation'] = $err_occupation;
		    }  
		   
		   if($err_address ==true ){
				$result['address'] = $err_address;
		    }  
		
		   if(empty($result)){	
		   
				$db1= new Employee();
				$val=array('"'.$_POST['P_name'].'"', '"'.$_POST['P_age'].'"', '"'.$_POST['P_occup'].'"', '"'.$_POST['P_addr'].'"');
				$db1->addEmployee($val);
				
			}
			else{
				echo("Please validate your data!");exit;
			}
	    }
	}	
?>