<!DOCTYPE html>
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
		<h2>>Patient Directory<</h2>
		<div id="content">
			<p>
			<?php
				$conn = new mysqli("west2-mysql-instance1.c8a5hfgkvtms.us-east-2.rds.amazonaws.com:3306", "Duq350", "Duq35000", "patientList");
				if($conn->connect_error){
					die("Connection failed: " . $conn->connect_error);
				}
				if(!empty($_POST["uname"]) && !empty($_POST["psw"])){
					$username = $_POST["uname"];
					$password = $_POST["psw"];
				}
				$sql = "SELECT id, firstname, lastname, email, birth, address, insurance, pass FROM MyPatients";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
    				// output data of each row
    					while($row = $result->fetch_assoc()) {
        					echo "User ID: " . $row["id"]."// User Name: ".$row["firstname"]." ".$row["lastname"]."// User Email: ".$row["email"]."// User Birth: ".$row["birth"]."<br>"."// User Address: ".$row["address"]."// User Insurance: ".$row["insurance"]."// User Password: ".$row["pass"]."<br><br>";
    					}
				} else {
   					 echo "0 results";
				}
			$conn->close();
			?>
			</p>
		</div>
	</div>
	<div id="footer">
	<p>
		Web Application developed by [CS3423-Team8]

	</p>
	</div>
</body>
</html>
