
<?php
$server_name = "localhost";
$username = "maycois";
$password = "WwSVtsJ1pMl6";
$database = "maycois_MasterProject";


$conn = new mysqli($server_name, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connection successful";


$analysisCapabilities = $_POST[`analysisCapabilities`];


$comment = $_POST[`comment`];
$subject = $_POST[`subject`];
$email = $_POST[`email`];
$sql = "INSERT INTO `User_information` (`comment`, `subject`,`email`)  VALUES ( '" . $comment . "','" . $subject . "','" . $email . "')";


// $conn->query($sql);
if ($conn->query($sql) == FALSE) {
    echo "Can not add new reservation. Error is: " .
        $conn->error;
    exit();
}

?>