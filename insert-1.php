<?php 
$con=mysqli_connect("localhost","root","","db1");
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

$sql="insert into table1(id,name) values('$id','$name')";
if(!mysqli_query($con,$sql))
{
echo "not inserted";
}
else
{
echo "inserted";
}

?>
