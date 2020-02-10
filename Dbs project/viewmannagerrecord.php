<?php
//make Connection
mysql_connect('localhost','root','');
//select db
mysql_select_db('mcdonald');
$sql="SELECT * FROM mannagers";
$records=mysql_query($sql);


?>


<html>
<head>
	<title>Mannagers Record</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

 <table align="center">
        <tr>
    <th colspan="9"><h2>Mannagers Records</h2></th>
</tr>
    </table>

<table class="w3-table-all">
<tr>
<th>FirstName</th>	
<th>LastName</th>	
<th>MannagerId</th>   
<th>Cnic</th>	
<th>Age</th>	
<th>Gender</th>	
<th>CityName</th>	
<th>Adress</th>	
<th>Contact</th>	
	
</tr>
<?php

while ($wo=mysql_fetch_assoc($records)) {
	echo "<tr>";
    echo"<td>".$wo['FirstName']."</td>";
    echo"<td>".$wo['LastName']."</td>";
    echo"<td>".$wo['MannagerId']."</td>";
    echo"<td>".$wo['Cnic']."</td>";
    echo"<td>".$wo['Age']."</td>";
    echo"<td>".$wo['Gender']."</td>";
    echo"<td>".$wo['CityName']."</td>";
    echo"<td>".$wo['Address']."</td>";
    echo"<td>".$wo['Contact']."</td>";
    echo "</tr>";
}

?>
</table>
</body>
</html>