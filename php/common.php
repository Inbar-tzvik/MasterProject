
<?php
$server_name = "localhost";
$username = "maycois";
$password = "WwSVtsJ1pMl6";
$database = "maycois_MasterProject";


$conn =  mysqli_connect ($server_name, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connection successful";


$sql = "SELECT *  FROM roles2";
$result = mysqli_query($sql, $conn);
$array = array();

while ($row = mysqli_fetch_assoc($result)) {
    $coursename = $row['course'];
    $count = $row['number'];
    $array['cols'][] = array('type' => 'string');
    $array['rows'][] = array('c' => array(array('v' => $coursename), array('v' => (int)$count)));
}

$data = json_encode($array);
echo $data;

// $array = array();
// $sql ="SELECT SUM(sql_course)as sql_course,SUM(python)as python,SUM(html)as html,SUM(c) as c,SUM(php)as php,SUM(java) as java FROM roles1";
// $result = mysql_query( $sql, $conn );
// while($row = mysqli_fetch_array($result)){
//     $coursename= $row['Field'];
//     $count=$row['count'];
//     $array['cols'][] = array('type' => 'string'); 
//     $array['rows'][] = array('c' => array( array('v'=> $coursename), array('v'=>(int)$count)) );

// }


 $conn->query($sql);
 if ($conn->query($sql) == FALSE) {
     echo "Can not add new reservation. Error is: " .
         $conn->error;
   exit();
 }

?>