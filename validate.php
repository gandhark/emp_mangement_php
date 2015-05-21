<?php 
class Validate{
public $err_name="";
public $err_age="";
public $err_accupation="";
public $err_address="";

function valid_name(){
//var regex = /^[a-zA-Z ]*$/;
	 
		if(empty($_POST["P_name"])){
			$err_name = "*pls enter a valid name!";
			return $err_name;
		}		
		//^[a-z]$/.test($_POST["P_name"])
		return false;	
	}
	
	
function valid_age(){
		if(empty($_POST["P_age"]) || $_POST["P_age"]<15 || $_POST["P_age"]>100){
			$err_age = "*pls enter a valid age!";
			return $err_age;
		}		
		return false;	
	}
	
	
function valid_occup(){
		if(empty($_POST["P_occup"])){
			$err_occupation = "*pls enter a valid occupation!";
			return $err_occupation;
		}		
		return false;	
	}
	
	
function valid_addr(){
		if(empty($_POST["P_addr"])){
			$err_address = "*pls enter a valid address!";
			return $err_address;
		}		
		return false;	
	}
}  
?>
