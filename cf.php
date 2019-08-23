<?php
	$servername="localhost";
	$username="root";
	$password="shinchan";
	$dbname = "colfoot";

	$conn = new mysqli($servername, $username, $password , $dbname);

	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully";

	$work="";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
    	if (empty($_POST["name"])=="") {
	$work = $_POST["name"];    	
	}
    	else {
        $work = "Missing work name";
    	}
	}
	echo"<br><br>";
	echo"<font size =5><center>Work Name : $work </font></center>";
	echo"<hr>";

	//take all inputes

	$footno = $_POST["fn"];
	echo"<font size =4> Footing Number  : $footno </font>";
	
	echo"<br>";
	$nooffoot = $_POST["numf"];
	echo"<font size =4> Number of footing  : $nooffoot </font>";
	
	echo"<br>";
	$flength = $_POST["fl"];
	echo"<font size =4> Footing Leangth  : $fleangth </font>";
	
	echo"<br>";
	$fbreadth = $_POST["fb"];
	echo"<font size =4> Footing Breadth  : $fbreadth </font>";
	
	echo"<br>";
	$fdebth = $_POST["fd"];
	echo"<font size =4> Footing Debth  : $fdebth </font>";
	
	echo"<br>";
	$dshortb = $_POST["dsb"];
	echo"<font size =4> Short bar Dia  : $dshortb </font>";
	
	echo"<br>";
	$nshortb = $_POST["nsb"];
	echo"<font size =4> Number of Short bar  : $nshortb </font>";
	
	echo"<br>";
	$dlongb = $_POST["dlb"];
	echo"<font size =4> Long bar Dia  : $dlongb </font>";
	
	echo"<br>";
	$nlongb = $_POST["nlb"];
	echo"<font size =4> Number of Long bar  : $nlongb </font>";
	
	echo"<br>";
	$colnum = $_POST["cn"];
	echo"<font size =4> Column number : $colnum </font>";
	
	echo"<br>";
	$noofcol = $_POST["numc"];
	echo"<font size =4> Number of Column : $noofcol </font>";
	
	echo"<br>";
	
	$colb = $_POST["cb"];
	echo"<font size =4> Column Breadth : $colb </font>";
	
	echo"<br>";
	
	$coldeb = $_POST["cd"];
	echo"<font size =4> Column Debth : $coldeb </font>";
	
	echo"<br>";
	
	$hftp = $_POST["hftp"];
	echo"<font size =4> Column height footing to plinth : $hftp </font>";
	
	echo"<br>";

	$dmainb = $_POST["dmb"];
	echo"<font size =4> Main bar dia : $dmainb </font>";
	
	echo"<br>";

	$nmainb = $_POST["nmb"];
	echo"<font size =4> Number of main bar : $nmainb </font>";
	
	echo"<br>";

	$dstr = $_POST["ds"];
	echo"<font size =4> Stirrups dia : $dstr </font>";
	
	echo"<br>";

	$nstr = $_POST["ns"];
	echo"<font size =4> Number of stirrups : $nstr </font>";
	
	echo"<br>";
	
	echo"<hr>";

	$colb1 = $_POST["cb1"];
	echo"<font size =4> Column Breadth : $colb1 </font>";
	
	echo"<br>";
	
	$coldeb1 = $_POST["cd1"];
	echo"<font size =4> Column Debth : $coldeb1 </font>";
	
	echo"<br>";
	
	$hptg = $_POST["hptg"];
	echo"<font size =4> Column height plinth to footing : $hptg </font>";
	
	echo"<br>";

	$dmainb1 = $_POST["dmb1"];
	echo"<font size =4> Main bar dia : $dmainb1 </font>";
	
	echo"<br>";

	$nmainb1 = $_POST["nmb1"];
	echo"<font size =4> Number of main bar : $nmainb1 </font>";
	
	echo"<br>";

	$dstr1 = $_POST["ds1"];
	echo"<font size =4> Stirrups dia : $dstr1 </font>";
	
	echo"<br>";

	$nstr1 = $_POST["ns1"];
	echo"<font size =4> Number of stirrups : $nstr1 </font>";
	
	echo"<br>";
	
	echo"<hr>";

	$colb2 = $_POST["cb2"];
	echo"<font size =4> Column Breadth : $colb2 </font>";
	
	echo"<br>";
	
	$coldeb2 = $_POST["cd2"];
	echo"<font size =4> Column Debth : $coldeb2 </font>";
	
	echo"<br>";
	
	$hgtf = $_POST["hgtf"];
	echo"<font size =4> Column height of ground to footing : $hgtf </font>";
	
	echo"<br>";

	$dmainb2 = $_POST["dmb2"];
	echo"<font size =4> Main bar dia : $dmainb2 </font>";
	
	echo"<br>";

	$nmainb2 = $_POST["nmb2"];
	echo"<font size =4> Number of main bar : $nmainb2 </font>";
	
	echo"<br>";

	$dstr2 = $_POST["ds2"];
	echo"<font size =4> Stirrups dia : $dstr2 </font>";
	
	echo"<br>";

	$nstr2 = $_POST["ns2"];
	echo"<font size =4> Number of stirrups : $nstr2 </font>";
	
	echo"<br>";
	
	echo"<hr>";




	//CALCULATION PART 
	echo"<br>";

	//Length of short bar 
	
	$lshortb = $fbreadth + 0.1;
	
	
	//Length of long bar
	
	$llongb = $flength + 0.1;

	
	
	//footing top to plinth 


	//Length of mainbar 

	$lmainbm = $hftp + $fdebth + 0.55 + (69 * ($dmainb / 1000)) ;
		
	$lmainb = round($lmainbm , 2);
	//Single Stirrups 
	$d = $dstr /1000;		
	
		
	$sstru = (($colb + $coldeb) * 2) - 0.32 + (2 * (8 * $d));
	
	$sstr = round($sstru,2);
	
	
	//Double Stirrups 
		$r = $coldeb / 2 ;

	 $dsstrs = ($colb + $r) * 2 - 0.24 +  2 * (8 * ($dstr / 1000));
	
	$dsstr = round($dsstrs , 2);
	
	//PIN
	
	$pinr = $colb - 0.08 +  2 * (8 * $dstr / 1000);
	
	$pin = round($pinr,2);
	
	//same foe plinth to ground 
		

	//Length of mainbar 

	$m1 = $hptg + 69 * ($dmainb1 / 1000)  ;
		
	$lmainb1  = round($m1 , 2); 	

	//Single Stirrups 
	
	$d1 = $dstr1 /1000;		
	
		
	$sstru1 = (($colb1 + $coldeb1) * 2) - 0.32 + (2 * (8 * $d1));
	

	$sstr1 =  round($sstru1,2);
	
	//Double Stirrups 
		$r1 = $coldeb1 / 2 ;
	
	$dsstrs1  = ($colb1 + $r1) * 2 - 0.24 +  2 * (8 * ($dstr1 / 1000));
	 
	$dsstr1 = round($dsstrs1 , 2);
	//PIN
	
	$pinr1 = $colb1 - 0.08 +  2 * (8 * $dstr1 / 1000);
	
	$pin1 = round($pinr1 ,2);
		

	//same for ground to first 
		

	//Length of mainbar 

	$m2 = $hgtf + 69 * ($dmainb2 / 1000)  ;
	
	$lmainb2 = round($m2 ,2);	

	//Single Stirrups 
	
	
	$d2 = $dstr2 /1000;		
	
		
	$sstru2 = (($colb2 + $coldeb2) * 2) - 0.32 + (2 * (8 * $d2));
	
	
	$sstr2 = round($sstru2,2);;
	
	//Double Stirrups 
		$r2 = $coldeb2 / 2 ;
	
	$dsstrs2  = ($colb2 + $r2) * 2 - 0.24 +  2 * (8 * ($dstr2 / 1000));

	 $dsstr2 = round($dsstrs2 , 2);
	
	//PIN
	
	$pinr2 = $colb2 - 0.08 +  2 * (8 * $dstr2 / 1000);
	
	$pin2 =round($pinr2 ,2) ;
	//Number of stirrups
	
	//height from footing to plinth

	$strn = (($hftp + $fdebth) / $nstr) ;

	$ans  =  $strn / 2 ;
	
	$stirrupn = round($ans) + 1;
	
	//double stirrups
	
	$dstirrupn = round($ans);
	
	//pin
	
	
	$pins = $dstirrupn ;

	
	//height from plinth to ground

	$strn1 = ($hptg / $nstr1) / 2 ;
	
	$stirrupn1 = round($strn1) + 1;
	
	//double stirrups
	
	$dstirrupn1 = round($strn1);
	
	//pin
	
	
	$pins1 = $dstirrupn1 ;

	//height from ground to first

	$strn2 = ($hgtf / $nstr2) / 2 ;
	
	$stirrupn2 = round($strn2) + 1;
	
	//double stirrups
	
	$dstirrupn2 = round($strn2);
	
	//pin
	
	
	$pins2 = $dstirrupn2 ;

	

	//input data in database
	
	//Short bar
	
	$sb = round($nshortb * $nooffoot * $lshortb,2) ;
	
	if($dshortb == 8){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Short bar' , 8 , '$nooffoot x $nshortb' ,$lshortb , $sb , NULL , NULL , NULL , NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dshortb == 10){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Short bar' , 10 , '$nooffoot x $nshortb' ,$lshortb , NULL , $sb , NULL , NULL , NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dshortb == 12){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Short bar' , 12 , '$nooffoot x $nshortb' ,$lshortb , NULL , NULL , $sb , NULL , NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	
	
	if($dshortb == 16){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Short bar' , 16 , '$nooffoot x $nshortb' ,$lshortb , NULL , NULL , NULL , $sb , NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	
	
	if($dshortb == 20){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Short bar' , 20 , '$nooffoot x $nshortb' ,$lshortb , NULL , NULL , NULL , NULL , $sb ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dshortb == 25){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Short bar' , 25 , '$nooffoot x $nshortb' ,$lshortb , NULL , NULL , NULL , NULL , NULL , $sb)";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	
	
	//Long bar
	
	$lb = round($nlongb * $nooffoot * $llongb,2) ;
	
	if($dlongb == 8){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Long bar' , 8 , '$nooffoot x $nlongb' ,$llongb , $lb , NULL , NULL , NULL , NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dlongb == 10){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Long bar' , 10 , '$nooffoot x $nlongb' ,$llongb , NULL , $lb , NULL , NULL , NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dlongb == 12){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Long bar' , 12 , '$nooffoot x $nlongb' ,$llongb , NULL , NULL , $lb , NULL , NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	
	
	if($dlongb == 16){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Long bar' , 16 , '$nooffoot x $nlongb' ,$llongb , NULL , NULL , NULL , $lb , NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	
	
	if($dlongb == 20){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Long bar' , 20 , '$nooffoot x $nlongb' ,$llongb , NULL , NULL , NULL , NULL , $lb ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dlongb == 25){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Long bar' , 25 , '$nooffoot x $nlongb' ,$llongb , NULL , NULL , NULL , NULL , NULL , $lb)";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	
	
	$sql = "INSERT INTO cfoot VALUES(NULL,'' ,'Footing to plinth' , NULL , '' ,NULL , NULL , NULL , NULL , NULL , NULL , NULL)";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	
	
	
	//Main bar 
	
	$lm = $nmainb * $nooffoot * $lmainb;
	
	
	if($dmainb == 8){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Main bar' , 8 , '$nooffoot x $nmainb' ,$lmainb , $lm , NULL , NULL , NULL , NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dmainb == 10){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Main bar' , 10 , '$nooffoot x $nmainb' ,$lmainb , NULL , $lm , NULL , NULL , NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dmainb == 12){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Main bar' , 12 , '$nooffoot x $nmainb' ,$lmainb , NULL , NULL , $lm , NULL , NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	
	
	if($dmainb == 16){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Main bar' , 16 , '$nooffoot x $nmainb' ,$lmainb , NULL , NULL , NULL , $lm , NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	
	
	if($dmainb == 20){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Main bar' , 20 , '$nooffoot x $nmainb' ,$lmainb , NULL , NULL , NULL , NULL , $lm ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dmainb == 25){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Main bar' , 25 , '$nooffoot x $nmainb' ,$lmainb , NULL , NULL , NULL , NULL , NULL , $lm)";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	
	
	
	//single stirrups
	
	$stirrup = $nooffoot * $sstr * $stirrupn ;
	
	
	if($dstr == 8){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Single stirrup' , 8 , '$nooffoot x $stirrupn' ,$sstr , $stirrup , NULL , NULL , NULL , 
						NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dstr == 10){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Single stirrup' , 10 , '$nooffoot x $stirrupn' ,$sstr, NULL ,$stirrup, NULL , NULL , 
						NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dstr == 12){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Single stirrup' , 12 , '$nooffoot x $stirrupn' ,$sstr, NULL , NULL ,$stirrup, NULL , 
						NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	
	
	if($dstr == 16){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Single stirrup' , 16 , '$nooffoot x $stirrupn' ,$sstr, NULL , NULL , NULL ,$stirrup, 
						NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	
	
	if($dstr == 20){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Single stirrup' , 20 , '$nooffoot x $stirrupn' ,$sstr, NULL , NULL , NULL , NULL ,
						$stirrup,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dstr == 25){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Single stirrup' , 25 , '$nooffoot x $stirrupn' ,$sstr, NULL , NULL , NULL , NULL , NULL ,
						$stirrup)";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	
	// Double Stirrups

	$doubles = $dstirrupn * 2 *  $nooffoot * $dsstr;

	if ($nmainb == 6 || $nmainb > 6){
	
	if($dstr == 8){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Double stirrup' , 8 , '$nooffoot x 2 x $dstirrupn ' ,$dsstr , $doubles , NULL , NULL , NULL , 
						NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dstr == 10){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Double stirrup' , 10 , '$nooffoot x 2 x $dstirrupn' ,$dsstr, NULL ,$doubles, NULL , NULL , 
						NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dstr == 12){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Double stirrup' , 12 , '$nooffoot x 2 x $dstirrupn' ,$dsstr, NULL , NULL ,$doubles, NULL , 
						NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	
	
	if($dstr == 16){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Double stirrup' , 16 , '$nooffoot x 2 x $dstirrupn' ,$dsstr, NULL , NULL , NULL ,$doubles, 
						NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	
	
	if($dstr == 20){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Double stirrup' , 20 , '$nooffoot x 2 x $dstirrupn' ,$dsstr, NULL , NULL , NULL , NULL ,
						$doubles,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dstr == 25){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Double stirrup' , 25 , '$nooffoot x 2 x $dstirrupn' ,$dsstr, NULL , NULL , NULL , NULL , NULL ,
						$doubles)";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 
	

	//pins ....
	
		
	$pans = $nooffoot * 2 * $stirrupn * $pin ;
	
	if($dstr == 8){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'C links' , 8 , '$nooffoot x 2 x $stirrupn ' ,$pin,$pans  , NULL , NULL , NULL , 
						NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dstr == 10){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'C links' , 10 , '$nooffoot x 2 x $stirrupn' ,$pin, NULL ,$pans, NULL , NULL , 
						NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dstr == 12){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'C links' , 12 , '$nooffoot x 2 x $stirrupn' ,$pin, NULL , NULL ,$pans, NULL , 
						NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	
	
	if($dstr == 16){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'C links' , 16 , '$nooffoot x 2 x $stirrupn' ,$pin, NULL , NULL , NULL ,$pans, 
						NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	
	
	if($dstr == 20){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'C links' , 20 , '$nooffoot x 2 x $stirrupn' ,$pin, NULL , NULL , NULL , NULL ,
						$pans,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dstr == 25){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'C links' , 25 , '$nooffoot x 2 x $stirrupn' ,$pin, NULL , NULL , NULL , NULL , NULL ,
						$pans)";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	
	$sql = "INSERT INTO cfoot VALUES(NULL,'' ,'Plinth to G.F.' , NULL , '' ,NULL , NULL , NULL , NULL , NULL , NULL , NULL)";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	
}
	
	//Plinth to G.F
	
	
	//Main bar  ...
	
	$lm1 = $nmainb1 * $nooffoot * $lmainb1;
	
	
	if($dmainb1 == 8){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Main bar' , 8 , '$nooffoot x $nmainb1' ,$lmainb1 , $lm1 , NULL , NULL , NULL , NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dmainb1 == 10){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Main bar' , 10 , '$nooffoot x $nmainb1' ,$lmainb1 , NULL , $lm1 , NULL , NULL , NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dmainb1 == 12){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Main bar' , 12 , '$nooffoot x $nmainb1' ,$lmainb1 , NULL , NULL , $lm1 , NULL , NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	
	
	if($dmainb1 == 16){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Main bar' , 16 , '$nooffoot x $nmainb1' ,$lmainb1 , NULL , NULL , NULL , $lm1 , NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	
	
	if($dmainb1 == 20){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Main bar' , 20 , '$nooffoot x $nmainb1' ,$lmainb1 , NULL , NULL , NULL , NULL , $lm1 ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dmainb1 == 25){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Main bar' , 25 , '$nooffoot x $nmainb1' ,$lmainb1 , NULL , NULL , NULL , NULL , NULL , $lm1)";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	
	
	
	//single stirrups
	
	$stirrup1 = $nooffoot * $sstr1 * $stirrupn1 ;
	
	
	if($dstr1 == 8){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Single stirrup' , 8 , '$nooffoot x $stirrupn1' ,$sstr1 , $stirrup1 , NULL , NULL , NULL , 
						NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dstr1 == 10){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Single stirrup' , 10 , '$nooffoot x $stirrupn1' ,$sstr1, NULL ,$stirrup1, NULL , NULL , 
						NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dstr1 == 12){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Single stirrup' , 12 , '$nooffoot x $stirrupn1' ,$sstr1, NULL , NULL ,$stirrup1, NULL , 
						NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	
	
	if($dstr1 == 16){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Single stirrup' , 16 , '$nooffoot x $stirrupn1' ,$sstr1, NULL , NULL , NULL ,$stirrup1, 
						NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	
	
	if($dstr1 == 20){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Single stirrup' , 20 , '$nooffoot x $stirrupn1' ,$sstr1, NULL , NULL , NULL , NULL ,
						$stirrup1,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dstr1 == 25){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Single stirrup' , 25 , '$nooffoot x $stirrupn1' ,$sstr1, NULL , NULL , NULL , NULL , NULL ,
						$stirrup1)";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	
	// Double Stirrups

	$doubles1 = $dstirrupn1 * 2 *  $nooffoot * $dsstr1;

	if ($nmainb1 == 6 || $nmainb1 > 6 ){
	
	if($dstr1 == 8){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Double stirrup' , 8 , '$nooffoot x 2 x $dstirrupn1 ' ,$dsstr1 , $doubles1 , NULL , NULL , NULL , 
						NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dstr1 == 10){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Double stirrup' , 10 , '$nooffoot x 2 x $dstirrupn1' ,$dsstr1, NULL ,$doubles1, NULL , NULL , 
						NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dstr1 == 12){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Double stirrup' , 12 , '$nooffoot x 2 x $dstirrupn1' ,$dsstr1, NULL , NULL ,$doubles1, NULL , 
						NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	
	
	if($dstr1 == 16){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Double stirrup' , 16 , '$nooffoot x 2 x $dstirrupn1' ,$dsstr1, NULL , NULL , NULL ,$doubles1, 
						NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	
	
	if($dstr1 == 20){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Double stirrup' , 20 , '$nooffoot x 2 x $dstirrupn1' ,$dsstr1, NULL , NULL , NULL , NULL ,
						$doubles1,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dstr1 == 25){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Double stirrup' ,25, '$nooffoot x 2 x $dstirrupn1' ,$dsstr1, NULL , NULL , NULL , NULL , NULL ,
						$doubles1)";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	}

	 	


	//pins ....
	
		
	$pans1 = $nooffoot * 2 * $stirrupn1 * $pin1 ;
	
	if($dstr1 == 8){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'C links' , 8 , '$nooffoot x 2 x $stirrupn1 ' ,$pin1,$pans1  , NULL , NULL , NULL , 
						NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dstr1 == 10){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'C links' , 10 , '$nooffoot x 2 x $stirrupn1' ,$pin1, NULL ,$pans1, NULL , NULL , 
						NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dstr1 == 12){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'C links' , 12 , '$nooffoot x 2 x $stirrupn1' ,$pin1, NULL , NULL ,$pans1, NULL , 
						NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	
	
	if($dstr1 == 16){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'C links' , 16 , '$nooffoot x 2 x $stirrupn1' ,$pin1, NULL , NULL , NULL ,$pans1, 
						NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	
	
	if($dstr1 == 20){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'C links' , 20 , '$nooffoot x 2 x $stirrupn1' ,$pin1, NULL , NULL , NULL , NULL ,
						$pans1,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dstr1 == 25){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'C links' , 25 , '$nooffoot x 2 x $stirrupn1' ,$pin1, NULL , NULL , NULL , NULL , NULL ,
						$pans1)";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	
	$sql = "INSERT INTO cfoot VALUES(NULL,'' ,'G.F. to F.F.' , NULL , '' ,NULL , NULL , NULL , NULL , NULL , NULL , NULL)";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	

		
	
	// G.F.    to    F.F. 

	
		//Main bar  ...
	
	$lm2 = $nmainb2 * $nooffoot * $lmainb2;
	
	
	if($dmainb2 == 8){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Main bar' , 8 , '$nooffoot x $nmainb2' ,$lmainb2 , $lm2 , NULL , NULL , NULL , NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dmainb2 == 10){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Main bar' , 10 , '$nooffoot x $nmainb2' ,$lmainb2 , NULL , $lm2 , NULL , NULL , NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dmainb2 == 12){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Main bar' , 12 , '$nooffoot x $nmainb2' ,$lmainb2 , NULL , NULL , $lm2 , NULL , NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	
	
	if($dmainb2 == 16){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Main bar' , 16 , '$nooffoot x $nmainb2' ,$lmainb2, NULL , NULL , NULL , $lm2 , NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	
	
	if($dmainb2 == 20){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Main bar' , 20 , '$nooffoot x $nmainb2' ,$lmainb2 , NULL , NULL , NULL , NULL , $lm2 ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dmainb2 == 25){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Main bar' , 25 , '$nooffoot x $nmainb2' ,$lmainb2 , NULL , NULL , NULL , NULL , NULL , $lm2)";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	
	
}
	
	//single stirrups
	
	$stirrup2 = $nooffoot * $sstr2 * $stirrupn2 ;
	
	
	if($dstr2 == 8){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Single stirrup' , 8 , '$nooffoot x $stirrupn2' ,$sstr2 , $stirrup2 , NULL , NULL , NULL , 
						NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dstr2 == 10){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Single stirrup' , 10 , '$nooffoot x $stirrupn2' ,$sstr2, NULL ,$stirrup2, NULL , NULL , 
						NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dstr2 == 12){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Single stirrup' , 12 , '$nooffoot x $stirrupn2' ,$sstr2, NULL , NULL ,$stirrup2, NULL , 
						NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	
	
	if($dstr2 == 16){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Single stirrup' , 16 , '$nooffoot x $stirrupn2' ,$sstr2, NULL , NULL , NULL ,$stirrup2, 
						NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	
	
	if($dstr2 == 20){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Single stirrup' , 20 , '$nooffoot x $stirrupn2' ,$sstr2, NULL , NULL , NULL , NULL ,
						$stirrup2,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dstr1 == 25){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Single stirrup' , 25 , '$nooffoot x $stirrupn2' ,$sstr2, NULL , NULL , NULL , NULL , NULL ,
						$stirrup2)";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	
	// Double Stirrups

	$doubles2 = $dstirrupn2 * 2 *  $nooffoot * $dsstr2;

	if ($nmainb2 == 6 || $nmainb2 > 6){
	
	if($dstr2 == 8){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Double stirrup' , 8 , '$nooffoot x 2 x $dstirrupn2 ' ,$dsstr2 , $doubles2 , NULL , NULL , NULL , 
						NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dstr2 == 10){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Double stirrup' , 10 , '$nooffoot x 2 x $dstirrupn2' ,$dsstr2, NULL ,$doubles2, NULL , NULL , 
						NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dstr2 == 12){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Double stirrup' , 12 , '$nooffoot x 2 x $dstirrupn2' ,$dsstr2, NULL , NULL ,$doubles2, NULL , 
						NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	
	
	if($dstr2 == 16){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Double stirrup' , 16 , '$nooffoot x 2 x $dstirrupn2',$dsstr2, NULL , NULL , NULL ,$doubles2, 
						NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	
	
	if($dstr2 == 20){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Double stirrup' , 20 , '$nooffoot x 2 x $dstirrupn2' ,$dsstr2, NULL , NULL , NULL , NULL ,
						$doubles2,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dstr2 == 25){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'Double stirrup' ,25, '$nooffoot x 2 x $dstirrupn2' ,$dsstr2, NULL , NULL , NULL , NULL , NULL ,
						$doubles2)";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	




	//pins ....
	
		
	$pans2 = $nooffoot * 2 * $stirrupn2 * $pin2 ;
	
	if($dstr2 == 8){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'C links' , 8 , '$nooffoot x 2 x $stirrupn2 ' ,$pin2,$pans2, NULL , NULL , NULL , 
						NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dstr2 == 10){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'C links' , 10 , '$nooffoot x 2 x $stirrupn2' ,$pin2, NULL ,$pans2, NULL , NULL , 
						NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dstr2 == 12){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'C links' , 12 , '$nooffoot x 2 x $stirrupn2' ,$pin2, NULL , NULL ,$pans2, NULL , 
						NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	
	
	if($dstr2 == 16){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'C links' , 16 , '$nooffoot x 2 x $stirrupn2' ,$pin2, NULL , NULL , NULL ,$pans2, 
						NULL ,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	
	
	if($dstr2 == 20){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'C links' , 20 , '$nooffoot x 2 x $stirrupn2' ,$pin2, NULL , NULL , NULL , NULL ,
						$pans2,NULL )";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 	

	if($dstr2 == 25){
	
	$sql = "INSERT INTO cfoot VALUES(1,'$footno' ,'C links' , 25 , '$nooffoot x 2 x $stirrupn2' ,$pin2, NULL , NULL , NULL , NULL , NULL ,
						$pans2)";
	if ($conn->query($sql) === TRUE) {
    	//  echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	} 
		
}		 
?>

	<html>
<head> <title> result </title></head>
	<body>

	
<?php
	echo"<br>";
	$sql = "SELECT * FROM cfoot";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	// output data of each row

?>

	<table border=1 >
	<tr>	
		<th align="center"> Sr.No.</th>
	 	<th width="12" align="center">Footing No</th><th align="center"> Discription</th><th width="12" align="center">Diameter of bar
		</th>
		<th align="center">No of bars</th><th align="center">Length</th><th align="center">8mm</th>
		<th align="center">10mm</th><th align="center">12mm</th><th align="center">16mm</th><th align="center">20mm</th>
		<th align="center">25mm</th>
	</tr>
	
<?php
    	while($row = $result->fetch_assoc()) {
?>	
	
	<tr width="10">	
		<td align="center"><?php echo  $row['srno']; ?></td>
		<td align="center"><?php echo  $row['Footing_No'];?></td>
		<td align="justify"><?php echo  $row['Discription']; ?></td> 
		<td align="center"><?php echo  $row['Dia_of_bar']; ?></td> 
		<td align="center"><?php echo  $row['no_of_bar']; ?></td>
		<td align="center"><?php echo  $row['Length']; ?></td>
		<td align="center"><?php echo  $row['8mm']; ?></td>
		<td align="center"><?php echo  $row['10mm']; ?></td> 
		<td align="center"><?php echo  $row['12mm']; ?></td>
		<td align="center"><?php echo  $row['16mm']; ?></td>
		<td align="center"><?php echo  $row['20mm']; ?></td>
		<td align="center"><?php echo  $row['25mm']; ?></td>
		

        </tr>

<?php	
	
    	}
	} 	
	else {
    	echo "0 results";
	}
	
	

?>
</table>
<a href=colfoot.php><input type = submit value= ADD style="font-size:25;color:white;background-color:#00FF00;border:1" ></a>
<form action=finish.php>
<input type = submit value= Finish style="font-size:25;color:black;background-color:white;border:1" >
</form>
</body>
</html>






