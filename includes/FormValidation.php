<?php
// Initialize variables with empty values
$teamNameError = $collegeNameError = $collegeAddressError  = $collegeCityError = $collegeProvinceError = $student1NameError = $email1Error = $student2NameError = $email2Error = $loginError = "";
$teamName = $collegeName = $collegeAddress = $collegeCity = $collegeProvince = $student1Name = $student1Email = $student2Name = $student2Email = $username = $password = "";

// Function to test and sanitize user input
function validate_input($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $formvalidity = true;

    // Validate team name
    if (empty($_POST["teamname"])) {
        $teamNameError = "Team name is required";
        $formvalidity = false;
    } else {
        $teamName = validate_input($_POST["teamname"]);
        // Check if team name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $teamName)) {
            $teamNameError = "Only letters and white space allowed";
            $formvalidity = false;
        }
    }

    // Validate college name
    if (empty($_POST["collegename"])) {
        $collegeNameError = "College name is required";
        $formvalidity = false;
    } else {
        $collegeName = validate_input($_POST["collegename"]);
        // Check if college name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $collegeName)) {
            $collegeNameError = "Only letters and white space allowed";
            $formvalidity = false;
        }
    }

    // Validate college address
    if (empty($_POST["collegeaddress"])) {
        $collegeAddressError = "College address is required";
        $formvalidity = false;
    } else {
        $collegeAddress = validate_input($_POST["collegeaddress"]);
        // Check if college address only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $collegeAddress)) {
            $collegeAddressError = "Only letters and white space allowed";
            $formvalidity = false;
        }
    }

    // Validate college city
    if (empty($_POST["collegecity"])) {
        $collegeCityError = "College city is required";
        $formvalidity = false;
    } else {
        $collegeCity = validate_input($_POST["collegecity"]);
        // Check if college city only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $collegeCity)) {
            $collegeCityError = "Only letters and white space allowed";
            $formvalidity = false;
        }
    }

    // Check if the college province is empty
    if (empty(($_POST['collegeprovince']))) {
        $collegeProvinceError = "Please select a province";
        $formvalidity = false;
    }


    // Validate student 1 name
    if (empty($_POST["student1name"])) {
        $student1NameError = "Student 1 name is required";
        $formvalidity = false;
    } else {
        $student1Name = validate_input($_POST["student1name"]);
        // Check if student 1 name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $student1Name)) {
            $student1NameError = "Only letters and white space allowed";
            $formvalidity = false;
        }
    }

    // Validate student 2 name
    if (empty($_POST["student2name"])) {
        $student2NameError = "Student 2 name is required";
        $formvalidity = false;
    } else {
        $student2Name = validate_input($_POST["student2name"]);
        // Check if student 2 name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $student2Name)) {
            $student2NameError = "Only letters and white space allowed";
            $formvalidity = false;
        }
    }


    // Email validation with regex
    if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", ($_POST["student1email"]))) {
        // The email address is not valid
        $email1Error = "Invalid email address";
        $formvalidity = false;
    }

    // Email validation with regex
    if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", ($_POST["student2email"]))) {
        // The email address is not valid
        $email2Error = "Invalid email address";
        $formvalidity = false;
    }

    
    $teamName = ($_POST["teamname"]);
    $collegeName = ($_POST["collegename"]);
    $collegeAddress = $_POST['collegeaddress'];
    $collegeCity = $_POST['collegecity'];
    $collegeProvince = $_POST['collegeprovince'];
    $student1Name = $_POST['student1name'];
    $student1Email = $_POST['student1email'];
    $student2Name = $_POST['student2name'];
    $student2Email = $_POST['student2email'];
    
}
?>