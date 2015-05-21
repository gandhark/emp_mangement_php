<?php
include "Employee.php";
$emp = new Employee(); 
$row = $emp->listEmployees();

?>
<html>
<head><title>User List PAGE</title></head>
<body>
<?php if(!empty($row))
{
?>
<table>
<tr>
<td>Name</td>
<td>Age</td>
<td>Occupation</td>
<td>Address</td>
<td>Action</td>
</tr>

<?php foreach($row as $result){
?>
	<tr>
	<td><?php echo $result['name']?></td>
	<td><?php echo $result['age']?></td>
	<td><?php echo $result['occupation']?></td>
	<td><?php echo $result['address']?></td>
	<td><?php echo '<a href="emp.php?id=' . $result['id'] . '">Edit/</a>'?><a>Delete</a></td>
	</tr>
<?php } ?>
</table>

<?php } else{
echo "<script>alert('sorry ..no table found')</script>";
}?>

<button type="button" name="add" onclick="document.location='http://localhost:81/assignment/src_code/Add_emp.php'">Add Employee</button>

</body>
</html>

