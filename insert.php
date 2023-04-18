<?php 
$con=mysqli_connect("localhost","root","","srinu");
if(!$con)
{
echo "error";
}
else
{
echo "done";
}

$id=$_POST['sid'];
$name=$_POST['sname'];

$sql="insert into student(sid,sname) values('$id','$name')";
if(!mysqli_query($con,$sql))
{
echo "not inserted";
}
else
{
echo "inserted";
}

?>
