<?php
// Start a new session
if (!isset($_SESSION)) {
  session_start();
}

// Check if the user is logged in
if (!isset($_SESSION["username"])) {
  // Redirect to the first page
  header("Location: index.php");
  exit();
}
?>
<!DOCTYPE html>
<html>
<!-- Header Section -->
<head>
	<title>Registration - IT Demo Day</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="includes\script.js"></script>
</head>

<!-- Body Section -->
<body>
	<header>
    <?php include('includes/LogoutScript.php'); ?>

		<nav>
			<ul>
				<li><img src="Images/NITHISH JAGADEESAN.png" alt="Registration - IT Demo Day Logo"></li>
				<li><a href="RegistrationPage.php">Register your team</a></li>
                <li><a href="ListRegistrationPage.php">View All Registrations</a></li>
			</ul>
      <p>Welcome,
        <?php echo $_SESSION["username"]; ?>
      </p>
      <form method="post">
        <button type="submit" name="logout">Logout</button>
      </form>
    </nav>
  </header>
  <?php include('includes/db_connection.php'); ?>
    <?php include('includes/FormValidation.php'); ?>

    <!-- Form Section -->
    <section class="formSection" id="formSection">
        <div class="form" id="form">
            <h2>Submit below form to complete Register your team</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <label>Team Name</label>
                <input id="teamname" size="40" placeholder="Team name" type="text" name="teamname">
                <span class="error">
                    <?php echo $teamNameError; ?>
                </span><br />

                <label>College Name</label>
                <input id="collegename" size="40" placeholder="College name" type="name" name="collegename">
                <span class="error">
                    <?php echo $collegeNameError; ?>
                </span><br />

                <label>College Address</label>
                <input id="collegeaddress" size="40" placeholder="College address" type="address" name="collegeaddress">
                <span class="error">
                    <?php echo $collegeAddressError; ?>
                </span><br />

                <label>College City</label>
                <input id="collegecity" size="40" placeholder="college city name" type="city" name="collegecity">
                <span class="error">
                    <?php echo $collegeCityError; ?>
                </span><br />

                <label>College Province</label>
                <select name="collegeprovince" id="collegeprovince">
                    <option value="">----- Select -----</option>
                    <option value="Alberta">Alberta</option>
                    <option value="British">British</option>
                    <option value="Manitoba">Manitoba</option>
                    <option value="New Brunswick">New Brunswick</option>
                    <option value="Newfoundland and Labrador">Newfoundland and Labrador</option>
                    <option value="Northwest Territories">Northwest Territories</option>
                    <option value="Nova Scotia Columbia">Nova Scotia Columbia</option>
                    <option value="Nunavut">Nunavut</option>
                    <option value="Ontario">Ontario</option>
                    <option value="Prince">Prince</option>
                    <option value="Quebec">Quebec</option>
                    <option value="Saskatchewan">Saskatchewan</option>
                    <option value="Yukon">Yukon</option>
                </select>
                <span class="error">
                    <?php echo $collegeProvinceError; ?>
                </span><br />

                <label>Student 1 Name</label>
                <input id="student1name" size="40" placeholder="Student 1 name" type="name" name="student1name">
                <span class="error">
                    <?php echo $student1NameError; ?>
                </span><br />

                <label>Student 1 Email</label>
                <input id="student1email" size="40" placeholder="Student 1 Email" type="email" name="student1email">
                <span class="error">
                    <?php echo $email1Error; ?>
                </span><br />

                <label>Student 2 Name</label>
                <input id="student2name" size="40" placeholder="Student 2 name" type="name" name="student2name">
                <span class="error">
                    <?php echo $student2NameError; ?>
                </span><br />

                <label>Student 2 Email</label>
                <input id="student2email" size="40" placeholder="Student 2 Email" type="email" name="student2email">
                <span class="error">
                    <?php echo $email2Error; ?>
                </span><br />

                <br />
                <input type="submit" name="submit" value="Submit">
                <br><br>

            </form>
            <p id="errors">
            </p>
        </div>
        </section>

        <!-- Display details section -->
        <section class="displaydetails" id="displaydetails">
        <div class="container">
            <?php if (isset($_POST['submit'])) {
                if ($formvalidity) { ?>
                    <h2>Team Details</h2>
                    <h4>Team Name:</h4>
                    <p>
                        <?php echo $teamName; ?>
                    </p>
                    <h4>College name:</h4>
                    <p>
                        <?php echo $collegeName; ?>
                    </p>
                    <h4>College Address:</h4>
                    <p>
                        <?php echo $collegeAddress; ?>,
                        <?php echo $collegeCity; ?>,
                        <?php echo $collegeProvince; ?>
                    </p>
                    <h4>Student 1 Email:</h4>
                    <p>
                        <?php echo $student1Email; ?>
                    </p>
                    <h4>Student 2 Email:</h4>
                    <p>
                        <?php echo $student2Email; ?>
                    </p>

                    <button id="gotomainpage" onclick="goToMainPage()">Go to Main Page</button>
                    <script>
                        function goToMainPage() {
                            window.location.href = "index.php";
                            <?php
                            unset($_SESSION['cart']);
                            ?>}
                    </script>
                <?php }
            }
            ?>
        </div>
    </section>

    <?php
    //store details to the database
    if ((isset($_POST['submit'])) && $formvalidity == true) {

        $teamName = ($_POST["teamname"]);
        $collegeName = ($_POST["collegename"]);
        $collegeAddress = $_POST['collegeaddress'];
        $collegeCity = $_POST['collegecity'];
        $collegeProvince = $_POST['collegeprovince'];
        $student1Name = $_POST['student1name'];
        $student1Email = $_POST['student1email'];
        $student2Name = $_POST['student2name'];
        $student2Email = $_POST['student2email'];
        $dbquery = "
            insert into teamdetails(teamName,collegeName,collegeAddress,collegeCity,collegeProvince,student1Name,student1Email,student2Name,student2Email) values
            ('$teamName','$collegeName', '$collegeAddress', '$collegeCity','$collegeProvince', '$student1Name','$student1Email','$student2Name','$student2Email')
            ";

        $dbresult = $db->query($dbquery);
    }
    ?>

  <!-- Footer Section -->
  <footer>
    <p>&copy; 2023 - IT Demo Day - All rights reserved</p>
  </footer>
</body>

</html>