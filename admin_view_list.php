
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
    
  </head>
  <body>

<div class="main-div">
<a class="btn btn-primary" href="admin_search.php" role="button">Search single data</a>
<br>
<br>
<h1>List of employee candidate</h1>
<div class ="center-div">
<div class="table-responsive">
<table>
<thead>
<tr>
<th>Id</th>
<th>Name</th>
<th>email</th>
<th>designation</th>
<th>dateofjoining</th>
<th>phone</th>
<th>address</th>
</tr>
</thead>
<tbody>
<?php
$con = mysqli_connect("localhost", "root", "", "attendance");
/*if (isset($_GET['emp_designation'])) {
    $desg = $_GET['emp_designation'];*/
    $sql= "SELECT emp_id, emp_name, emp_email,emp_designation,emp_dateofjoining,emp_phone,emp_address FROM employee_details";
    $query=mysqli_query($con,$sql);
    if($query !== false &&mysqli_num_rows($query)>0){
while($res=mysqli_fetch_assoc($query)){
   


?>

<tr>
<td><?php $res['emp_id']?></td>
<td><?php $res['emp_name']?></td>
<td><?php $res['emp_email']?></td>
<td><?php $res['emp_designation']?></td>
<td><?php $res['emp_dateofjoining']?></td>
<td><?php $res['emp_phone']?></td>
<td><?php $res['emp_address']?></td>
</tr>
<?php 
}
    }
?>

</tbody>
</table>
</div>
</div>
</div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
  </body>
</html>