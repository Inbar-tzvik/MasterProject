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

$SQL = $_POST['SQL'];
$C = $_POST['C'];
$HTML = $_POST['HTML'];
$PYTHON = $_POST['PYTHON'];
$UI_UX = $_POST['UI_UX'];
$Data_Science = $_POST['Data_Science'];
$SAP_ERP = $_POST['SAP_ERP'];
$sql = "INSERT INTO `UsersPreferences` (`SQL`, `C`,`HTML`, `PYTHON`,`UI_UX`, `Data_Science`, `SAP_ERP`)  VALUES ('" . $SQL . "' , '" . $C . "' , '" . $HTML . "', '" . $PYTHON . "', '" . $UI_UX . "' , '" . $Data_Science . "', '" . $SAP_ERP . "')";

// להתייעץ האם להכניס לטבלה חדשה את הנתונים או לא
//האם לבצע השוואה בטבלה אחרת שקיימת, אם כן איזה?


// $conn->query($sql);
if ($conn->query($sql) == FALSE) {
    echo "Can not add new reservation. Error is: " .
        $conn->error;
    exit();
}
