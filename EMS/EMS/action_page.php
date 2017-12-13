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

mysql_connect('localhost','root','Duq350');
mysql_select_db("Patient");

$query = "SELECT * FROM `patientList` WHERE `uID`='$uID' and `uPass`='$uPass'"


$sql=mysql_query($query)
if($sql){
header('Location: signUP.html');
}else{
header('Location: website.html');
}
mysql_close();

?>