<html>
<head> 
	<title> calculation </title> 
	<style type="text/css">
	.mad {
	background-color:white;
	}
	body {
	margin: 0;
	padding:0;
	width: 100%;
	height: 100%;
	}

	.mad input[type=number] {
	   	position: relative;
    		width: 60px; 
	}
	table{
	width:50%; 
	background-color: #f1f1c1;
	text-align: justify;
	}	
    </style>
<head>
	<body bgcolor="#261460">
		<font color=white><center><u><h1>COLUMN FOOTING STEEL </h1></u></center></font>
	<div class="mad"><br>
		<form  method="post" action=cf.php name="cf1">
		<hr>
		&nbsp;&nbsp;&nbsp;&nbsp;<font size = 5 > Name of Work :</font><input type="text" size="50" style="font-size:25" name="name"><br>
		<hr>
		<font color="darkblue">
		<center><h2> FOOTING DETAILS</h2></center>
		&nbsp;&nbsp;&nbsp;&nbsp; Footing Number :<input type="text" size="20" name="fn"> &nbsp;&nbsp;
		Number of Footing :<input type="number"  width="100" hight ="50" name="numf"><br><br>
		&nbsp;&nbsp;&nbsp;&nbsp; Footing size : Length = <input type="number" step="0.001" size="20" name="fl" placeholder="L">&nbsp;m
		&nbsp;&nbsp;
		Breadth = <input type="number" step="0.001" size="20" name="fb" placeholder="B">&nbsp;m &nbsp;&nbsp;
		Depth = <input type="number" step="0.001" size="20" name="fd" placeholder="D">&nbsp;m &nbsp;&nbsp;<br><br>
		<center>
		<table border=1>
			<tr>
			<th>Description</th><th>Dia of Bar </th><th>No of Bar</th>
			</tr>
			<tr>
			<th>Short bar</th><td><select  name="dsb">
					<option value="8">8</option>
  					<option value="10">10</option>
  					<option value="12">12</option>
					<option value="16">16</option>
					</select>&nbsp;mm</td>
			<td><input type="number" step="0.001" size="20" name="nsb"></td>
			</tr>
			<tr>
			<th>Long bar</th><td><select  name="dlb">
					<option value="8">8</option>
  					<option value="10">10</option>
  					<option value="12">12</option>
					<option value="16">16</option>
					</select>&nbsp;mm</td>
			<td><input type="number" step="0.001" size="20" name="nlb"></td>
			</tr>	
		</table>
		</center><br>
		<hr>
		<center><h2> FOOTING TO PLINTH DETAILS</h2></center> 
		&nbsp;&nbsp;&nbsp;&nbsp; Column Number :<input type="text" size="20" name="cn"> &nbsp;&nbsp;
		Number of Column :<input type="number"  width="100" hight ="50" name="numc"><br><br>
		&nbsp;&nbsp;&nbsp;&nbsp; Column size : Breadth = <input type="number" step="0.001" size="20" name="cb" placeholder="b">&nbsp;m 
		&nbsp;&nbsp;
		Depth = <input type="number" step="0.001" size="20" name="cd" placeholder="d">&nbsp;m &nbsp;&nbsp;
		Height =<input type="number" step="0.001" size="20" name="hftp">&nbsp;m &nbsp;&nbsp;<br><br>
		<center>
		<table border=1>
			<tr>
			<th>Description</th><th>Dia of Bar </th><th>No of Bar</th>
			</tr>
			<tr>
			<th>Main bars</th><td><select  name="dmb">
  					<option value="12">12</option>
					<option value="16">16</option>
					<option value="20">20</option>
					<option value="25">25</option>
					</select>&nbsp;mm</td>
			<td><input type="number" step="0.001" size="20" name="nmb"></td>
			</tr>
			<tr>
			<th>Stirrups</th><td><select  name="ds">
					<option value="8">8</option>
  					<option value="10">10</option>
  					<option value="12">12</option>
					</select>&nbsp;mm</td>
			<td><input type="number" step="0.001" size="20" name="ns">C/C</td>
			</tr>	
		</table>
		</center><br>
		<hr>
		<center><h2> PLINTH TO G.F. DETAILS</h2></center>
		&nbsp;&nbsp;&nbsp;&nbsp; Column size : Breadth = <input type="number" step="0.001" size="20" name="cb1">&nbsp;m &nbsp;&nbsp;
		Depth = <input type="number" step="0.001" size="20" name="cd1">&nbsp;m &nbsp;&nbsp;
		Height = <input type="number" step="0.001" size="20" name="hptg">&nbsp;m &nbsp;&nbsp;<br><br>
		<center>
		<table border=1>
			<tr>
			<th>Description</th><th>Dia of Bar </th><th>No of Bar</th>
			</tr>
			<tr>
			<th>Main bars</th><td><select name="dmb1" >
  					<option value="12">12</option>
					<option value="16">16</option>
					<option value="20">20</option>
					<option value="25">25</option>
					</select>&nbsp;mm</td>
			<td><input type="number" step="0.001" size="20" name="nmb1"></td>
			</tr>
			<tr>
			<th>Stirrups</th><td><select  name="ds1">
					<option value="8">8</option>
  					<option value="10">10</option>
  					<option value="12">12</option>
					</select>&nbsp;mm</td>
			<td><input type="number" step="0.001" size="20" name="ns1">C/C</td>
			</tr>	
		</table>
		</center><br>
		<hr>
		<center><h2> G.F TO F.F DETAILS</h2></center>
		&nbsp;&nbsp;&nbsp;&nbsp; Column size : Breadth = <input type="number" step="0.001" size="20" name="cb2">&nbsp;m &nbsp;&nbsp;
		Depth = <input type="number" step="0.001" size="20" name="cd2">&nbsp;m &nbsp;&nbsp;
		Height = <input type="number" step="0.001" size="20" name="hgtf">&nbsp;m &nbsp;&nbsp;<br><br>
		<center>
		<table border=1>
			<tr>
			<th>Description</th><th>Dia of Bar </th><th>No of Bar</th>
			</tr>
			<tr>
			<th>Main bars</th><td><select  name="dmb2">
  					<option value="12">12</option>
					<option value="16">16</option>
					<option value="20">20</option>
					<option value="25">25</option>
					</select>&nbsp;mm</td>
			<td><input type="number" step="0.001" size="20" name="nmb2"></td>
			</tr>
			<tr>
			<th>Stirrups</th><td><select  name="ds2">
					<option value="8">8</option>
  					<option value="10">10</option>
  					<option value="12">12</option>
					</select>&nbsp;mm</td>
			<td><input type="number" step="0.001" size="20" name="ns2">C/C</td>
			</tr>	
		</table>
		</center><br>
		<hr>
		<center><input type = submit name=submit style="font-size:25;color:white;background-color:#FF0000;border:1"></center>
		</font>		
		</form>	
		
	<br><br>
	</div>	
	
	</body>
<html>
<?php 
	$servername="localhost";
	$username="root";
	$password="shinchan";
	
	$conn = new mysqli($servername,$username,$password);
	
	if($conn->connection_error){
	die("Connection failed: " . $conn->connect_error);
	}
	else {
	echo"connection successful";	
	}
	
	$sql = "CREATE DATABASE colfoot";			
	if ($conn->query($sql) === TRUE) {
    	echo "Database created successfully";
	} 
	else{
    	echo "Error creating database: " . $conn->error;
	}
	$sql = "USE colfoot";
	if ($conn->query($sql) === TRUE) {
    	echo "Using successfully";
	} 
	else{
    	echo "Not using " . $conn->error;
	}
	
	$sql =" CREATE TABLE cfoot(srno INT ,Footing_No VARCHAR(200) , Discription VARCHAR(100) ,Dia_of_bar INT,no_of_bar VARCHAR(10),
	 		Length FLOAT , 8mm FLOAT , 10mm FLOAT ,12mm FLOAT , 16mm FLOAT , 20mm FLOAT ,25mm FLOAT )";

	if ($conn->query($sql) === TRUE) {
    	echo "Table created successfully";
	} 
	else{
	echo "Error creating table: " . $conn->error;
	}
	



?>



