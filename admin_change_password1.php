<?php
$_SESSION["emp_id"] = "11abc";
$con = mysqli_connect("localhost", "root", "", "attendance");


if(isset($_POST['submit'])){
$emp_id=$_SESSION["emp_id"];
$old_pass = $_POST['currentPassword'];
$new_pass = $_POST['newPassword'];
$new_pass1 = $_POST['confirmPassword'];

$sql1="SELECT emp_password from employee_details where emp_id='$emp_id'";
$r1=mysqli_query($con, $sql1);
$count = mysqli_num_rows($r1);


if(($count==1)&&($new_pass==$new_pass1))
{
	$sql2 = "UPDATE employee_details SET emp_password= '$new_pass' WHERE emp_id='$emp_id'";
    $r2=mysqli_query($con, $sql2);
  
}
else if($new_pass!=$new_pass1)
{
   echo "<script>alert('Confirm password is wrong..');</script>";
}
else if($sql1!="$old_pass")
{
	 echo "<script>alert('Old password is wrong..');</script>";
}

	
 echo "<script>alert('Password changed..');</script>";
 echo "<script> window.location.assign('admin_change_password.php'); </script>";
 
 }
mysqli_close($con);

?>
