<?php      
   $hostname="148.72.232.176:3306"; 
   $username="login_and_signup";   
   $password="Abhi84200@1";        
   $database="dball"; 

   $con=mysql_connect($hostname,$username,$password,$database);
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  