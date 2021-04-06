
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <link rel="stylesheet" href="admin_view_list.css">
    <center>
        <h1> Search for single data /record</h1>
        <div class="container">
            <form action="" method ="POST">
            <input type ="text"  class="btn" name="emp_id"|placeholder="Enter By Id"/>
            <input type="submit" name="search" class="btn" value="search by id">
</form>

<table>

<tr>
<th>Id</th>
<th>Name</th>
<th>email</th>
<th>designation</th>
<th>dateofjoining</th>
<th>phone</th>
<th>address</th>
</tr>
<br>
<?php 

$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,'attendance');
if(isset($_POST['search']))
{
 
$id=$_POST["emp_id"];
$query="SELECT * FROM employee_details where emp_id='$id'";
$query_run=mysqli_query($con,$query);
while($row=mysqli_fetch_array($query_run))
{
    ?>
    
<tr>
<td><?php $row['emp_id']?></td>
<td><?php $row['emp_name']?></td>
<td><?php $row['emp_email']?></td>
<td><?php $row['emp_designation']?></td>
<td><?php $row['emp_dateofjoining']?></td>
<td><?php $row['emp_phone']?></td>
<td><?php $row['emp_address']?></td>
</tr>
<?php
}
}
?>

</table>
        </div>
    </center>
  </head>
  <body>
  </body>
</html>