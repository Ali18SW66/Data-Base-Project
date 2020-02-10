<?php
$user=$_POST['UserName'];
$pass=$_POST['pass'];

if ($user=='jawad'&& $pass=='jawad') {
	echo '<script>window.open("http://localhost/dbs%20project/Home.html");</script>';
}
else{
	echo '<Script>alert("access denied")</script>';
 	echo '<Script>alert("Try Again")</script>';
	echo '<script>window.open("http://localhost/dbs%20project/login.html");</script>';
    
}


?>