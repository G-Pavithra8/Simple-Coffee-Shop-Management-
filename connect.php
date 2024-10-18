<?php
$a=$_POST['n'];
$b=$_POST['i'];
$c=$_POST['q'];
$d=$_POST['r'];
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'zyx');
$sql=("insert into it(n,i,q,r) values('$a','$b','$c','$d')");
mysqli_query($con,$sql);
echo("registration successfully.....");
include('register.php');

mysqli_close($con);
?>
