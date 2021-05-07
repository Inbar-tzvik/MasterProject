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

$name_role = $_POST['name_role'];
$sql_course = $_POST['sql_course'];
$C_course = $_POST['C_course'];
$HTML = $_POST['HTML'];
//$PYTHON = $_POST['PYTHON'];
//$UI_UX = $_POST['UI_UX'];
//$Data_Science = $_POST['Data_Science'];
//$SAP_ERP = $_POST['SAP_ERP'];

$sql = "INSERT INTO `user_qr` (`name_role`, `sql_course`,`C_course`,`HTML`)
VALUES ('" . $name_role . "', " . $sql_course . ", " . $C_course . " , " . $HTML . ")";
//$sql = "INSERT INTO `user_qr` (`name_role`, `sql_course`,`C`,`HTML``PYTHON`,`UI_UX`, `Data_Science`, `SAP_ERP`)  VALUES ('". $name_role ."', " . $sql_course . ", " . $C . " , " . $HTML . ", " . $PYTHON . ", " . $UI_UX . " , " . $Data_Science . ", " . $SAP_ERP . "  )"


// $conn->query($sql);
if ($conn->query($sql) == FALSE) {
    echo "Can not add new reservation. Error is: " .
        $conn->error;
    exit();
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>PHP Print</title>

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <meta charset="utf-8">

    <link href="../css/stepsToFuture.css" rel="stylesheet">

    <link href="../css/HomePage1.css" rel="stylesheet">
</head>

<header>
    <div id="header"></div>

</header>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">


                <?php

                $sql_course = False;// הדיפולט הוא שלילי כלומר שהם לא עומדים בתנאי הקורס הזה 
                $html = False;
                
                  // שאילתא עובדת על כמה קורסים במקביל
                //    $user_qry1 = "SELECT name_role,name_course,grade from Courses_roles where '".$name_role."'=Courses_roles.name_role AND ('".$sql_course."' and '".$HTML."' and '".$C_course."' =Courses_roles.grade)  GROUP BY name_role ";

                
                  //  $user_qry1 = "SELECT name_role,name_course,grade from Courses_roles where '".$name_role."'=Courses_roles.name_role AND 
                  //  '".$sql_course."' < Courses_roles.grade OR 
                  //  '".$HTML."' < Courses_roles.grade    ";


                $user_qry1 = "SELECT name_role,name_course,grade if(
                from Courses_roles where '" . $name_role . "'=Courses_roles.name_role ";

                //$user_qry1 = "SELECT name_role,name_course,grade from Courses_roles where '".$name_role."'=Courses_roles.name_role and '".$sql_course."'= (SELECT name_course, grade from Courses_roles where grade =75 ";

                $user_res3 = mysqli_query($conn, $user_qry1);
                $user_res4 = mysqli_query($conn, $user_qry1);


                if (empty(mysqli_fetch_assoc($user_res3))) {

                    while($row=mysqli_fetch_array($result)){
                        if('".$row['name_coourse']."'=='sql_course' || $sql_course >='".$row['grade']."'){
                            $sql_course = True;
                        }
                        echo"['".$row['course']."',".$row['number']."],";
                ?>
                    <h1 class="text-center">צעדים לתפקיד הנחשק</h1 <br>
                    <p class="text-center"> בדף זה מוצגים לך הפערים בין הקורסים שלמדת לבין דרישות התפקיד שבחרת <br> הנתונים שמוצגים לך הם על סמך ביקוש השוק .</p>
                    <br>
                    <br>
                    <img src="../images/search.jpg" alt="" class="reveal img-responsive reveal-content image-center st_img bigger">


                    <br>




                    <?php
                } else {
                    echo  " <h1 class='text-center'>צעדים לתפקיד הנחשק</h1>";
                    echo    "<p class='text-center'>  בדף זה מוצגים לך הפערים בין הקורסים שלמדת לבין דרישות התפקיד שבחרת <br> הנתונים שמוצגים לך הם על סמך ביקוש השוק .</p>";



                    while ($user_data = mysqli_fetch_assoc($user_res4)) {

                        echo   "<table dir='rtl' class='table table-bordered print'>";
                        echo    "<thead>";
                        echo            "<tr>";
                        //   echo           "<th>Name</th>"; 
                    ?>
                        <p class='text-center' style='color:blue;font-weight:bold;font-size:30px'>
                            התפקיד שנבחר הוא:<br><br>
                            <?php echo  $user_data['name_role']; ?></p>

                        <?php
                        //  echo           "<th>Description</th>";

                        echo       "</tr>";
                        echo    "</thead>";
                        echo    "<tbody>";


                        ?>

                        <br>
                        <tr>
                            <!--   <td><//?php echo $user_data['name']; ?></td> -->
                            <td style='font-weight:bold;font-size:20px'><?php echo 'תיאור התפקיד ' ?></td>
                            <td class='text-center' style='color:black'> <?php echo  $user_data['name_course']; ?></p>
                            </td>

                        </tr>

            </div>
    <?php
                    }
                }
    ?>
    </tbody>

    </table>

    <div class="text-center">
        <a href="user_data_print.php" class="btn btn-primary">Print</a>
    </div>
        </div>
    </div>
    </div>
</body>

<footer>
    <div id="footer"></div>
</footer>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<script defer src="../js/headerfooter.js"></script>

</html>