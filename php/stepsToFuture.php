<?php
$server_name = "localhost";
$username = "maycois";
$password = "WwSVtsJ1pMl6";
$database = "maycois_MasterProject";


$conn = new mysqli($server_name, $username, $password, $database);
$conn->set_charset('utf8');


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connection successful";

$name_role = $_POST['name_role'];
$sql_course = $_POST['sql_course'];
$HTML = $_POST['HTML'];
$PYTHON = $_POST['PYTHON'];
$UI_UX = $_POST['UI_UX'];
$SAP_ERP = $_POST['SAP_ERP'];
$java = $_POST['java'];
//$C =$_post['C#'];


$sql = "INSERT INTO `user_qr` (`name_role`, `sql_course`,`HTML`,`PYTHON`,`UI_UX`,`SAP_ERP`,`java`) VALUES ('" . $name_role . "', " . $sql_course . ", " . $HTML . ",  " . $PYTHON . ", " . $UI_UX . " , " . $SAP_ERP . ", " . $java . " )";


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
      
  <title>Result - Steps to the future</title>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">


    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">


 
 <!-- style -->

  <link href="../css/stepsToFuture.css" rel="stylesheet">

  <link href="../css/homePage.css" rel="stylesheet">

  <meta charset="utf-8">

</head>

<header>
  <div id="header"></div>

</header>

<body>
                 <!-- Page Header Start -->
        <div class="page-header">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <h2> צעדים לתפקיד הנחשק</h2>
                  </div>
                  <!-- <div class="col-12">
                      <a href="">Home</a>
                      <a href="">Contact</a>
                  </div> -->
              </div>
              <div class="section-container-spacer">
                <img src="../images/research.jpg" alt="" class="img-responsive reveal-content" data-action="zoom"  style=" border-radius: 50%; width:550px;  display: block;  margin-left: auto;
                   margin-right: auto;" >
              </div>
          </div>
      </div>
      <!-- Page Header End -->

          
          
        <?php
      
     // הדיפולט הוא שלילי כלומר שהם לא עומדים בתנאי הקורס הזה 
        $bolsql_course = false;
        $bolHTML = false;
        $bolPYTHON = false;
        $bolUI_UX = false;
        $bolSAP_ERP = false;
        $boljava = false;
     //   $bolC = false ;

        $user_qry1 = "SELECT name_role,name_course,grade,description
        from Courses_roles INNER JOIN Courses ON Courses_roles.name_course=Courses.name where '" . $name_role . "'=Courses_roles.name_role ";

        $user_res3 = mysqli_query($conn, $user_qry1);
        $user_res4 = mysqli_query($conn, $user_qry1);
        $user_res5 = mysqli_query($conn, $user_qry1);

        while ($row = mysqli_fetch_array($user_res5)) {
          if ($row['name_course'] == 'HTML') {
            $HTMLdes = $row['description'];
          } elseif ($row['name_course'] == 'sql_course') {
            $sql_coursedes = $row['description'];
          } elseif ($row['name_course'] == 'PYTHON') {
            $PYTHONdes = $row['description'];
          } elseif ($row['name_course'] == 'UI_UX') {
            $UI_UXdes = $row['description'];
          } elseif ($row['name_course'] == 'SAP_ERP') {
            $SAP_ERPdes = $row['description'];
          } elseif ($row['name_course'] == 'java') {
            $javades = $row['description'];
          }
         // elseif ($row['name_course'] == 'C#') {
           // $Cdes = $row['description'];
          //}
        }
        ?>
        
        <br>  

        <br>
        <p class="answer" > בדף זה מוצגים לך הפערים בין הקורסים שלמדת לבין דרישות התפקיד שבחרת <br> הנתונים שמוצגים לך הם על סמך ביקוש השוק </p>

        <?php
        if (empty(mysqli_fetch_assoc($user_res3))) {
        ?>
          <br> <br> <br> <br> <br> <br>

          <p class="answer"> אין תוצאות מתאימות </p>
          <br>
          <br>
          <img src="../images/search.jpg" alt="" class="reveal img-responsive reveal-content image-center st_img bigger">
          <br>

        <?php

        } else {
          echo "\x20\x20\x20";

          while ($row = mysqli_fetch_array($user_res4)) {

            if ($row['name_course'] == 'sql_course' && $sql_course >= ((int)$row['grade'])) {
              $bolsql_course = true;
            } elseif ($row['name_course'] == 'HTML' && $HTML >= ((int)$row['grade'])) {
              $bolHTML = true;
            } elseif ($row['name_course'] == 'PYTHON' && $PYTHON >= ((int)$row['grade'])) {
              $bolPYTHON = true;
            } elseif ($row['name_course'] == 'UI_UX' && $UI_UX >= ((int)$row['grade'])) {
              $bolUI_UX = true;
            } elseif ($row['name_course'] == 'SAP_ERP' && $SAP_ERP >= ((int)$row['grade'])) {
              $bolSAP_ERP = true;
            } elseif ($row['name_course'] == 'java' && $java >= ((int)$row['grade'])) {
              $boljava = true;
            }
           //  elseif ($row['name_course'] == 'C#' && $c >= ((int)$row['grade'])) {
           //   $bolC = true;
          //  }
            
            
            }
          if ($bolsql_course == true && $bolHTML == true && $bolPYTHON == true && $bolUI_UX == true &&  $bolSAP_ERP == true && $boljava == true ) {
              
            echo "<br> ";
            echo " <p class='answer' style='color:#DB7093' > אתה בדרך הנכונה ! יש לך את כל הציונים המתאימים בקורסים הנדרשים </p>";
          } else {
            echo "<br> ";
            echo "<p class='answer' style='color:#DB7093'> הקורסים הבאים או שהציון שלך לא מספיק עבורם או שמומלץ שתעשה את קורסים אלו</p>";
      
            echo "<table dir='rtl' class=' center table table-bordered print '>";
            echo "<tr>";
            echo "<th class='text-center'>שם הקורס</th>";
            echo  "<th class='text-center'>תיאור הקורס</th>";
            echo "</tr>";
            if ($bolsql_course == false) {

              echo  "<tr>";
              echo  "<td>  sql_course </td>";
              echo  "<td> $sql_coursedes </td>";
              echo "</tr>";
            }
            if ($bolHTML == false) {

              echo  "<tr>";
              echo  "<td>  HTML </td>";
              echo  "<td> $HTMLdes </td>";
              echo "</tr>";
            }
            if ($bolPYTHON == false) {
              echo  "<tr>";
              echo  "<td>  PYTHON </td>";
              echo  "<td> $PYTHONdes </td>";
              echo "</tr>";
            }
            if ($bolUI_UX == false) {
              echo  "<tr>";
              echo  "<td>  UI_UX </td>";
              echo  "<td>  $UI_UXdes </td>";
              echo "</tr>";
            }
            if ($bolSAP_ERP == false) {
              echo  "<tr>";
              echo  "<td>  SAP_ERP </td>";
              echo  "<td> $SAP_ERPdes </td>";
              echo "</tr>";
            }
            if ($boljava == false) {
              echo  "<tr>";
              echo  "<td>  java </td>";
              echo  "<td> $javades </td>";
              echo "</tr>";
            }
            //if ($bolC == false) {
             // echo  "<tr>";
            //  echo  "<td>  C# </td>";
             // echo  "<td> $Cdes </td>";
            //  echo "</tr>";
           // }
            
          
          }
        ?>
        <?php

        }

        ?>
        </tbody>
        </table>
   <!--     <div class="text-center">
          <a href="user_data_print.php" class="btn btn-primary">Print</a>
        </div> -->
      </div>
    </div>
  </div>
</body>

<footer>
  <div id="footer"></div>
</footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<script defer src="../js/headerfooter.js"></script>

</html>