<?php
$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$MannagerId=$_POST['MannagerId'];
$Cnic=$_POST['Cnic'];
$Age=$_POST['Age'];
$Gender=$_POST['Gender'];
$CityName=$_POST['CityName'];
$Address=$_POST['Address'];
$Contact=$_POST['Contact'];
$work=$_POST['work'];

//creating Connection
$Conn =new mysqli('localhost','root','','mcdonald');
if ($Conn->connect_error) {
die('connection failed'.$conn->connect_error);
}
else{
	$st=$Conn->prepare("insert into workers(FirstName,LastName,MannagerId,Cnic,Age,Gender,CityName,Address,Contact,work) values(?,?,?,?,?,?,?,?,?,?)");
	$st->bind_param("ssiiisssss",$FirstName,$LastName,$MannagerId,$Cnic,$Age,$Gender,$CityName,$Address,$Contact,$work);	
	$st->execute();
	echo '<script>alert("Success Fully addedd")</script>';
	echo '<script>window.open("http://localhost/dbs%20project/Home.html","_self")</script>';



	$st->close();
	$Conn->close();

	}	



?>