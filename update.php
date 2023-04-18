<?php
include 'connect.php';
//1st connect with database
//always remember the value inside the post is equal to the value given to name attribute
$id=$_GET['updateid'];
// if(isset($_GET['updateid'])){

// $id=$_GET['updateid'];
// }
$sql="select * from crud where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];






if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];

$sql="update `crud` set id=$id,name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";//query
$result=mysqli_query($con,$sql);
if($result){
//echo "updated successfull";
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

    <form method="POST" action="">
        <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control"  name="name"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter your name" autocomplete="off" value=<?php echo $name;?>>
    </div>
    <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control"  name="name"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter your name" autocomplete="off" value=<?php echo $name;?>>
    </div>
        <div class="form-group">
    <label >Email</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter your email" autocomplete="off" value=<?php echo $email;?>>
    </div>
        <div class="form-group">
    <label >mobile</label>
    <input type="text" class="form-control" name="mobile" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter your mobile" autocomplete="off" value=<?php echo $mobile;?>>
    </div>
        <div class="form-group">
    <label >password</label>
    <input type="password" class="form-control" name="password" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter your password" autocomplete="off" value=<?php echo $password;?>>
    </div>
        <br>
 
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>
   
  </body>
</html>