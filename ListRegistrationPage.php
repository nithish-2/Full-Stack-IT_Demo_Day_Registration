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
	<title>All Registrations - IT Demo Day</title>
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
  <section class="List" id="List">
    <div>
      <h2>Registered Teams</h2>

<?php 
$servername = 'localhost'; // since our server is local
$username = 'root'; // default username for MySQL
$password = ''; // default pass is empty
$dbname = 'nithish_jagadeesan'; // this is the database we created

$db = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}

// Query the database and retrieve data
$sql = "SELECT * FROM teamdetails";
$result = mysqli_query($db, $sql);

// Display the retrieved data
if (mysqli_num_rows($result) > 0) {
  echo "<table>";
  echo "<tr><th>ID</th><th>Team Name</th><th>College Name</th><th>College Address</th><th>College City</th><th>College Province</th><th>Student 1 Name</th><th>Student 1 Email</th><th>Student 2 Name</th><th>Student 2 Email</th></tr>";
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["teamId"] . "</td>";
    echo "<td>" . $row["teamName"] . "</td>";
    echo "<td>" . $row["collegeName"] . "</td>";
    echo "<td>" . $row["collegeAddress"] . "</td>";
    echo "<td>" . $row["collegeCity"] . "</td>";
    echo "<td>" . $row["collegeProvince"] . "</td>";
    echo "<td>" . $row["student1Name"] . "</td>";
    echo "<td>" . $row["student1Email"] . "</td>";
    echo "<td>" . $row["student2Name"] . "</td>";
    echo "<td>" . $row["student2Email"] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

// Close the database connection
mysqli_close($db);

?>
    </div>
</section>
  <footer>
    <p>&copy; 2023 - IT Demo Day - All rights reserved</p>
  </footer>
</body>

</html>