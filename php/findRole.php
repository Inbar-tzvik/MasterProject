<?php
$server_name = "localhost";
$username = "UserPro"; //check
$password = "l!m@i#123lmi!@#";
$database = "maycois_MasterProject";


$conn = new mysqli($server_name, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connection successful";

// $firstname = $_POST['FirstName'];
// $lastname = $_POST['LastName'];
// $email = $_POST['email'];
// $phone = $_POST['PhoneNumber'];
// $numofpar = $_POST['numberofpar'];
// $privateroom = $_POST['Privateclass'];
// $kosher = $_POST['Kosher'];
// $date = $_POST['date'];
// $workshoptype = $_POST['WorkshopType'];
// $comments = $_POST['comments'];

// $sql = "INSERT INTO `workshopres` (`firstname`,`lastname`,`email`,`phone`,`numofpar`,`privateroom`,`kosher`,`date`,`workshoptype`,`comments`) VALUES ('" . $firstname . "','" . $lastname . "','" . $email . "','" . $phone . "'," . $numofpar . ",'" . $privateroom . "','" . $kosher . "','" . $date . "','" . $workshoptype . "','" . $comments . "')";

$management = $_POST['management'];

$sql = "INSERT INTO `UsersPreferences` (`management`)  VALUES (" . $management . ")";





// $conn->query($sql);
if ($conn->query($sql) == FALSE) {
    echo "Can not add new reservation. Error is: " .
        $conn->error;
    exit();
}
