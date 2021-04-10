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

$management = $_POST['management'];
$design = $_POST['design'];
$software = $_POST['software'];
$workInATeam = $_POST['workInATeam'];
$umlDiagramOriented = $_POST['umlDiagramOriented'];
$teaching = $_POST['teaching'];
$analysisCapabilities = $_POST['analysisCapabilities'];
$sql = "INSERT INTO `UsersPreferences` (`management`, `design`,`software`, `workInATeam`,`umlDiagramOriented`, `teaching`, `analysisCapabilities`)  VALUES ('" . $management . "' , '" . $design . "' , '" . $software . "', '" . $workInATeam . "', '" . $umlDiagramOriented . "' , '" . $teaching . "', '" . $analysisCapabilities . "')";




// $conn->query($sql);
if ($conn->query($sql) == FALSE) {
    echo "Can not add new reservation. Error is: " .
        $conn->error;
    exit();
}
