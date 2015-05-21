<?php
include ("config.php");

class DB_Connection{
	function __construct() {
		$con = mysql_connect(config::HOST,config::USER,config::PASSWORD) or die("failed to establish connection....!");
	    mysql_select_db(config::DATABASE);
	}
	
	function query($sql){
		return mysql_query($sql);
	}
	function fetch($sql){		
		return mysql_fetch_array($sql);
	}
	
	function close(){
		mysql_close();
		echo"Thankyou!!!..hope you like our service :):)";exit;
	}
	

}