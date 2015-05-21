<HTML>
<HEAD>
<script scr="Validation.js"></script>
</HEAD>
<BODY>
<form name="Add_emp" method="post" action="Employee.php" onsubmit= "return validateform(this)">

<center><head><h1>Employee Details</h1></head></center><br>
<center>Name: <input type="text" id= "P_name" name="P_name"> <span style="color:red"><?php /*if(isset($result['name'])) echo $result['name'];*/?></span></center><br>
<center>Age: <input type="text" id= "P_age" name="P_age"> <span style="color:red"><?php /*if(isset($result['age'])) echo $result['age'];*/?></span></center><br>
<center>Occupation: <input type="text" id= "P_occup" name="P_occup" ><span style="color:red"><?php/* if(isset($result['occupation'])) echo $result['occupation'];*/?></span></center><br>
<center>Address: <input type="text" id= "P_addr" name="P_addr" ><span style="color:red"><?php/* if(isset($result['address'])) echo $result['address'];*/?></span></center><br>

<input type="hidden" name="operation" value="add"/>
<center><input type="submit" class="button" name="Add" value="submit"/></center><br>

</BODY>

</HTML>

