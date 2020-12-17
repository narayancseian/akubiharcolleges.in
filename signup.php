<?php
$con=mysqli_connect("148.72.232.176:3306","login_and_signup","Abhi84200@1","dball");
if($con)
{
	echo "";
}
else
{
	echo "Server Error !! Go Back";
}
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$clg_name=$_POST['clg_name'];
	$psw=$_POST['psw'];
	$sql="insert into usertable (name,email,clg_name,password) values('$name','$email','$clg_name','$psw')";
	$result=mysqli_query($con,$sql);
	if($result)
	{
		echo "Registered sucessfully ";
		header("location: signin.html");
	}
	else
	{
		echo "Email Already Exist !!! Try Another Email";
	}
}
?>
 