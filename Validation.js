function validateform()
{
	 var P_name = document.forms['Add_emp']['P_name'].value;
	 var P_age = document.forms['Add_emp']['P_age'].value;
	 var P_occup = document.forms['Add_emp']['P_occup'].value;
	 var P_address = document.forms['Add_emp']['P_addr'].value;
     var regex = /^[a-zA-Z ]*$/;
	 
		if(P_name == '' || P_name == null)
		 {
			alert('Name cannot be empty');
			return false;
		 }
		
         if(!regex.test(P_name))
         {
		    alert('pls enter a valid name');
           return false;		 
		 }		 
		 
		 
		 if(P_age=='' || P_age==null || P_age < 15 || P_age > 100)
		 {
		 alert('Enter a valid age');
		 return false;
		 }
		 		
		 if(P_occup=='' || P_occup==null)
		 {
		 alert('occupation cannot be empty');
		 return false;
		 }
		 
		if(P_address == '' || P_address == null)
		{
			alert('address cannot be empty');
			return false;
		} 	
	}