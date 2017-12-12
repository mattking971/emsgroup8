<?php
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$DOB=$_POST['DOB'];
$email=$_POST['email'];
$address=$_POST['address'];
$insComp=$_POST['insComp'];
$userID=$_POST['userID'];
$psw=$_POST['psw'];
$psw-repeat=$_POST['psw-repeat'];

mysql_connect('52.14.0.23','root','Duq350');
mysql_select_db("Patient");

$select="insert into patientInfo(firstName,lastName,DOB,email,address,insComp,userID,psw,psw-repeat) values('".$firstName"','".$lastName"','".$DOB"','".$email"','".$address"','".$insComp"','".$userID"','".$psw"','".$psw-repeat"')";

$sql=mysql_query($select)
mysql_close();

?>