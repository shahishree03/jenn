<?php
$_SESSION["emp_id"] = "11abc";
$con = mysqli_connect("localhost", "root", "", "attendance");


if(isset($_POST['submit'])){
$emp_id=$_SESSION["emp_id"];
$old_pass = $_POST['current_password'];
$new_pass = $_POST['new_password'];
$new_pass1 = $_POST['confirm_new_password'];

$sql1="SELECT * from employee_details where emp_id='$emp_id' and emp_password='$old_pass'";
$r1=mysqli_query($con, $sql1);
$count = mysqli_num_rows($r1);


if(($count==1)&&($new_pass==$new_pass1))
{
	$sql2 = "UPDATE employee_details SET emp_password= '$new_pass' WHERE emp_id='$emp_id'";
    $r2=mysqli_query($con, $sql2);
  
}
else if($new_pass!=$new_pass1)
{
   echo "<script>alert('confirm password is wrong..');</script>";
}
else
{
	 echo "<script>alert('old password is wrong..');</script>";
}

	

echo "<script> window.location.assign('admin_page_index1.php'); </script>";
 
 }
mysqli_close($con);

?>