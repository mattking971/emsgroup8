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
		<h2>>Payment Processing<</h2>
		<div id="content">
            <form a<form method= "post" action="email.php">
                <div class="container">
                    <select name="PatientList">
                        <option selected hidden>Select A Patient</option>
			<?php
			$conn = new mysqli("west2-mysql-instance1.c8a5hfgkvtms.us-east-2.rds.amazonaws.com:3306", "Duq350", "Duq35000", "patientList");
    			$result = $conn->query("SELECT id, firstname FROM MyPatients");
    			while ($row = $result->fetch_assoc()) {
                  			unset($id, $firstname);
                  			$id = $row['id'];
                  			$firstname = $row['name']; 
                  			echo '<option>'.$id." ".$firstname.'</option>';
                 
				}
			?>
                    </select><br><br>
                    <textarea name="comment" textarea placeholder="INPUT DESCRIPTION OF SERVICES" rows="4" cols="50"></textarea><br><br>
                    <label for= "serviceCost">Service Cost: $</label><input type="textbox" name="serviceCost" /><br><br>
                    Insurance Discount:<br>
                    <input type="radio" name="insurance" onClick="insDisc1();"> BlueCross- %50<br>
                    <input type="radio" name="insurance" onClick="insDisc2();"> Humana- %30<br>
                    <input type="radio" name="insurance" onClick="insDisc3();"> Other- %10<br>
                    <input type="radio" name="insurance" onClick="insDisc4();"> None- %0<br><br>
                    <label for="output">Subtotal: $</label><input type="textbox" name="output"></input>
                    <script>
                        function insDisc1()
                        {
                            var num1 = document.getElementsByName('serviceCost')[0].value;
                            var out = (1/2) * parseFloat(num1);
                            var out = Math.round(out * 100) / 100;
                            document.getElementsByName('output')[0].value= out;

                        }
                        function insDisc2()
                        {
                            var num1 = document.getElementsByName('serviceCost')[0].value;
                            var out = (7/10) * parseFloat(num1);
                            var out = Math.round(out * 100) / 100;
                            document.getElementsByName('output')[0].value= out;
                        
                        }
                        function insDisc3()
                        {
                            var num1 = document.getElementsByName('serviceCost')[0].value;
                            var out = (9/10) * parseFloat(num1);
                            var out = Math.round(out * 100) / 100;
                            document.getElementsByName('output')[0].value= out;
                        
                        }
                        function insDisc4()
                        {
                            var num1 = document.getElementsByName('serviceCost')[0].value;
                            var out = (1) * parseFloat(num1);
                            var out = Math.round(out * 100) / 100;
                            document.getElementsByName('output')[0].value= out;
                        
                        }
                    </script>
                        <div class="clearfix">
                            <button type="button"  class="cancelbtn" onclick="window.location.replace('index.html')">Return to Home Page</button>
                            <button type="submit" class="signupbtn">Email Payment Request</button>
                        </div>
                </div>
            </form>
	</div>
	<div id="footer">
	<p>
		Web Application developed by [CS3423-Team8]

	</p>
	</div>
</body>
</html>

