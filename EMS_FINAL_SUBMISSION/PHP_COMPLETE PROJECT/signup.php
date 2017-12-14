<!DOCTYPE html>
<?php include "../inc/dbinfo.inc" ?>
<html>
<head>

<!-- your webpage info goes here -->

    <title>Emergency Medical System</title>
	
	<meta name="author" content="your name" />
	<meta name="description" content="" />

<!-- you should always add your stylesheet (css) in the head tag so that it starts loading before the page html is being displayed -->	
	<link rel="stylesheet" href="style.css" type="text/css" />
	
</head>
<body>

<!-- webpage content goes here in the body -->

	<div id="page">
		<div id="logo">
			<h1>Emergency Medical System</h1>
		</div>
		<div id="nav">
			<ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="Doctor_Directory.html">Doctor Directory</a></li>
                <li><a href="FAQ.html">FAQ</a></li>
                <div class="dropdown">
                    <li><a<button onclick="patientDrop()" class="dropbtn">Patient Pages</button></a></li>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="Account_Information.html">Account Information</a>
                        <a href="Reservations.html">Reservations</a>
                    </div>
                    <div class="dropdown2">
                        <li><a<button onclick="staffDrop()" class="dropbtn2">Staff Pages</button></a></li>
                        <div id="myDropdown2" class="dropdown-content2">
                            <a href="Pt_dir.html">Patient Directory</a>
                            <a href="processPayment.html">Process Payment</a>
                            <a href="confirmRes.html">Patient Reservations</a>
                            <a href="docNaptNotes.html">Appointment Notes/Docs</a>
                        </div>
                    </div>
                </div>
                
                <script>
                    function patientDrop() {
                        document.getElementById("myDropdown").classList.toggle("show");
                    }
                
                function staffDrop() {
                    document.getElementById("myDropdown2").classList.toggle("show");
                }
                
                // Close the dropdown menu if the user clicks outside of it
                window.onclick = function(event) {
                    if (!event.target.matches('.dropbtn')) {
                        
                        var dropdowns = document.getElementsByClassName("dropdown-content");
                        var i;
                        for (i = 0; i < dropdowns.length; i++) {
                            var openDropdown = dropdowns[i];
                            if (openDropdown.classList.contains('show')) {
                                openDropdown.classList.remove('show');
                            }
                            
                        }
                    }
                    if (!event.target.matches('.dropbtn2')) {
                        
                        var dropdowns = document.getElementsByClassName("dropdown-content2");
                        var i;
                        for (i = 0; i < dropdowns.length; i++) {
                            var openDropdown = dropdowns[i];
                            if (openDropdown.classList.contains('show')) {
                                openDropdown.classList.remove('show');
                            }
                            
                        }
                    }
                }
                
                    </script>
            </ul>	
        </div>
		<h2>>Calendar/Appointment Confirmations<</h2>
		<div id="content">
			<p>
			</p>
		</div>
	</div>
	<div id="footer">
	<p>
		Web Application developed by [CS3423-Team8]

	</p>
	</div>
<?PHP
	$conn = new mysqli("west2-mysql-instance1.c8a5hfgkvtms.us-east-2.rds.amazonaws.com:3306", "Duq350", "Duq35000", "patientList");
	if($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";
	$fName = $_POST["firstName"];
	$lName = $_POST["lastName"];
	$dob = $_POST["DOB"];
	$email = $_POST["email"];
	$address = $_POST["address"];
	$insComp = $_POST["insComp"];
	$userID = $_POST["userID"];
	$psw = $_POST["psw"];
	$sql = "INSERT INTO MyPatients (id, firstname, lastname, email, birth, address, insurance, pass) VALUES ('$userID', '$fName', '$lName', '$email', '$dob', '$address', '$insComp', '$psw')";
	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
</body>
</html>
