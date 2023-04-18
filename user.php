<?php
include 'connect.php';//1st connect with database
//always remember the value inside the post is equal to the value given to name attribute
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$mobile=$_POST['password'];

$sql="INSERT into `crud` (name,email,mobile,password) values('$name','$email','$mobile','$mobile')";//query
$result=mysqli_query($con,$sql);
if($result){
// echo "data inserted successfull";
header('location:display.php');
}else{
    die(mysqli_error($con));
}
}
//the meaning of above code is ...whenever we click submit button then only the information(which is given in the form) get stored in database

?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container my-5">

    <form method="post">
        <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control"  name="name"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter your name" autocomplete="off">
    </div>
        <div class="form-group">
    <label >Email</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter your email" autocomplete="off">
    </div>
        <div class="form-group">
    <label >mobile</label>
    <input type="text" class="form-control" name="mobile" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter your mobile" autocomplete="off">
    </div>
        <div class="form-group">
    <label >password</label>
    <input type="password" class="form-control" name="password" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter your password" autocomplete="off">
    </div>
        <br>
 
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
   
  </body>
</html>