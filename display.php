<?php
include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>crud operation</title>
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add user</button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">sno</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">mobile</th>
      <th scope="col">password</th>
      <th scope="col">operation</th>
    </tr>
  </thead>

  <tbody>

  <?php
  $sql="select * from `crud`";
  $result=mysqli_query($con,$sql);
  if($result){
    // $row=mysqli_fetch_assoc($result);
    // echo $row['name'];
    // $row=mysqli_fetch_assoc($result);
    // echo $row['name'];
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $password=$row['password'];?>
       <tr>
        <th scope="row"><?php echo $id?></th>
        <td><?php echo $name?></td>
        <td><?php echo $email?></td>
        <td><?php echo $mobile?></td>
        <td><?php echo $password?></td>
        <td>
        <button class="btn btn-primary"><a href="update.php?updateid=<?php echo $id;?>" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>

        </td>
      </tr>;
   <?php     
    }
  }
  
  ?>

  </tbody>
</table>    
    </div>
</body>
</html>