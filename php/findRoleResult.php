
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




$sql = "SELECT up.* ,r.management, r.software , r.workInATeam
FROM UsersPreferences up
LEFT JOIN roles r
WHERE (software>= 0 AND software<=2 )
and
 ( management >=4 AND management<=7) 
and
 (workInATeam BETWEEN '5' AND '8')";



$result =  mysql_query($sql);





// $conn->query($sql);
if ($conn->query($sql) == FALSE) {
    echo "Can not add new reservation. Error is: " .
        $conn->error;
    exit();
}

?>