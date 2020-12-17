<?php
$con=mysqli_connect("148.72.232.176:3306","login_and_signup","Abhi84200@1","dball");
if($con)
{
	echo "";
}
else
{
	echo "Server Error !! Go Back\n";
}

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $result = mysqli_query($con,"SELECT * FROM usertable where email='" . $_POST['email'] . "'");
    $row = mysqli_fetch_assoc($result);
	$fetch_email=$row['email'];
	$email=$row['email'];
	$password=$row['password'];
	if($email==$fetch_email) {
				$to = $email;
                $subject = "Password";
                $txt = "Your password is : $password.";
                $headers = "From: akubiharcollege@gmail.com" . "\r\n" ;
               
                mail($to,$subject,$txt,$headers);
		echo"<h1>Email sent.  Check your Email and use that password to login</h1>";
			}
				else{
					echo 'invalid userid';
				}
}
?>