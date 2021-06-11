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
$Data_Science = $_POST['Data_Science'];
$c_sharp = $_POST['c_sharp'];


$sql = "INSERT INTO `user_qr` (`name_role`, `sql_course`,`HTML`,`PYTHON`,`UI_UX`,`SAP_ERP`,`java`, `Data_Science`, `c_sharp` ) VALUES ('" . $name_role . "', " . $sql_course . ", " . $HTML . ",  " . $PYTHON . ", " . $UI_UX . " , " . $SAP_ERP . ", " . $java . " , " . $Data_Science . ", " . $c_sharp . ")";


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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script type="text/javascript">  $(window).load(function(){  
   $('.loader').fadeOut(2000);  
  }); </script>
 
 <!-- style -->

  <link href="../css/stepsToFuture.css" rel="stylesheet">

  <link href="../css/homePage.css" rel="stylesheet">

  <meta charset="utf-8">
  
  
    <style>
      body {
        font-family: 'Heebo', serif;
        font-size: 22px;

      }
      
    </style>

</head>

<header>
  <div id="header"></div>

</header>




<body >
    <div class="loader" ></div> 

              <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
               
                    <div class="col-8">
                        <h2> תוצאות טופס- צעדים לתפקיד הנחשק</h2>
                    </div>
                     
                      <div class="col-4">
                       <img class ="img1" src="../images/job2.png" alt="Hero Image">
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
                    <img class="img_check" src="https://media.giphy.com/media/q5qOkX1t61ZEng0TCn/giphy.gif">

 <link rel="stylesheet" type="text/css" href="../css/loading-bar.css"/>
<script type="text/javascript" src="../js/loading-bar.js"></script>
<div class="ldBar"
  style="width:100%;height:60px",
  data-stroke="data:ldbar/res,gradient(0,1,#9df,#9fd,#df9,#fd9)",
  data-path="M10 20Q20 15 30 20Q40 25 50 20Q60 15 70 20Q80 25 90 20"></div>

       
          
        <?php
      
     // הדיפולט הוא שלילי כלומר שהם לא עומדים בתנאי הקורס הזה 
        $bolsql_course = false;
        $bolHTML = false;
        $bolPYTHON = false;
        $bolUI_UX = false;
        $bolSAP_ERP = false;
        $boljava = false;
        $bolData_Science = false;
        $bolc_sharp = false;

        
    //  $bolC = false ;

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
          } elseif ($row['name_course'] == 'Data_Science') {
            $Data_Sciencedes = $row['description'];
          }elseif ($row['name_course'] == 'c_sharp') {
           $c_sharpdes = $row['description'];
          }
        }
        ?>
        
     


        <?php
        if (empty(mysqli_fetch_assoc($user_res3))) {
        ?>
          <br> <br> <br> <br> <br> <br>

          <p class="answer text-center"> אין תוצאות מתאימות </p>
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
            } elseif ($row['name_course'] == 'Data_Science' && $Data_Science >= ((int)$row['grade'])) {
              $bolData_Science = true;
            } elseif ($row['name_course'] == 'c_sharp' && $c_sharp >= ((int)$row['grade'])) {
              $bolc_sharp = true;
            }
            
            }
            
     
            
          if ($bolsql_course == true && $bolHTML == true && $bolPYTHON == true && $bolUI_UX == true &&  $bolSAP_ERP == true && $boljava == true && $bolData_Science == true && $bolc_sharp == true) {
    
            
            echo "<br> ";
            echo " <p class='answer' style='color:#DB7093' > אתה בדרך הנכונה ! יש לך את כל הציונים המתאימים בקורסים הנדרשים </p>";
            
          } else {
            echo "<br> ";
      
            
            echo "<p class='answer text-center scrollable' style='margin-top:-85px; font-size:25px;' >   הקורסים המוצגים לפניך הם הקורסים הנדרשים עבורך בדרך לתפקיד הנחשק
            <br>
            (או שלא ביצעת קורסים אלו או שהציון שקיבלת בהם אינו מספק)</p>";
      
            echo "<div class='text-center'>"; 
            if ($bolsql_course == false ) {

            echo  "<div class='card card-custom bg-white border-white border-0 check'>";
            echo"<div class='card-custom-img' 
                         ></div>";
            echo  " <div class='card-body style='overflow-y: auto'>" ;
            echo " <h5 class='card-title' style='font-size:30px;'>sql_course</h5>";
            echo  "<div class='scrollable'>";
            echo " <p class='card-text'>$sql_coursedes</p>";
            echo "</div>";
            echo "<div class='card-footer' style='background: inherit; border-color: inherit;'>";
    
            echo "  </div>";
            //</div>
              echo  "</div>";
              echo  "</div>";
            }
            if ($bolHTML == false  && $name_role!='data_scientist') {

            echo  "<div class='card card-custom bg-white border-white border-0 check'>";
            echo"<div class='card-custom-img' 
                         ></div>";
            echo  " <div class='card-body style='overflow-y: auto'>" ;
            echo " <h5 class='card-title' style='font-size:30px;'> HTML</h5>";
            echo  "<div class='scrollable'>";
            echo " <p class='card-text'>$HTMLdes</p>";
            echo "</div>";
            echo "<div class='card-footer' style='background: inherit; border-color: inherit;'>";
   
            echo "  </div>";
            //</div>
              echo  "</div>";
              echo  "</div>";
            }
            if ($bolPYTHON == false && $name_role!='business_analyst' && $name_role!='implements_information_systems') {
                
            echo  "<div class='card card-custom bg-white border-white border-0 check'>";
            echo"<div class='card-custom-img' 
                         ></div>";
            echo  " <div class='card-body style='overflow-y: auto'>" ;
            echo " <h5 class='card-title'> PYTHON</h5>";
            echo  "<div class='scrollable'>";
            echo " <p class='card-text' >$PYTHONdes</p>";
            echo "</div>";
            echo "<div class='card-footer' style='background: inherit; border-color: inherit;'>";

            echo "  </div>";
              echo  "</div>";
              echo  "</div>";
            }
            if ($bolUI_UX == false && in_array($name_role, array('            productManager','webDeveloper','UI_UX', 'crm_developer', 'implements_information_systems'))) {
                    echo  "<div class='card card-custom bg-white border-white border-0 check'>";
            echo"<div class='card-custom-img' 
                         ></div>";
            echo  " <div class='card-body style='overflow-y: auto'>" ;
            echo " <h5 class='card-title'> UI_UX </h5>";
            echo  "<div class='scrollable'>";
            echo " <p class='card-text'>$UI_UXdes</p>";
            echo "</div>";
            echo "<div class='card-footer' style='background: inherit; border-color: inherit;'>";
 
            echo "  </div>";
              echo  "</div>";
              echo  "</div>";
            
            }
            if ($bolSAP_ERP == false  && !in_array($name_role, array(            'webDeveloper', 'crm_developer','implements_information_systems', 'business_analyst', 'Security_information', 'analyst_security', 'data_scientist'))) {
            echo  "<div class='card card-custom bg-white border-white border-0 check'>";
            echo"<div class='card-custom-img' 
                         ></div>";
            echo  " <div class='card-body style='overflow-y: auto'>" ;
            echo " <h5 class='card-title'> SAP_ERP </h5>";
            echo  "<div class='scrollable'>";
            echo " <p class='card-text'>$SAP_ERPdes</p>";
            echo "</div>";
            echo "<div class='card-footer' style='background: inherit; border-color: inherit;'>";
 
            echo "  </div>";
              echo  "</div>";
              echo  "</div>";
            }
            if ($boljava == false  && $name_role!= 'data_scientist') {
            echo  "<div class='card card-custom bg-white border-white border-0 check'>";
            echo"<div class='card-custom-img' 
                         ></div>";
            echo  " <div class='card-body style='overflow-y: auto'>" ;
            echo " <h5 class='card-title'> java </h5>";
            echo  "<div class='scrollable'>";
            echo " <p class='card-text'>$javades</p>";
            echo "</div>";
            echo "<div class='card-footer' style='background: inherit; border-color: inherit;'>";
  
            echo "  </div>";
              echo  "</div>";
              echo  "</div>";
        
            }
            if ($bolData_Science == false  && !in_array($name_role, array(           'crm_developer','implements_information_systems', 'Security_information', 'backend_developer', 'analyst', 'QA'))) {
                
            echo  "<div class='card card-custom bg-white border-white border-0 check'>";
            echo"<div class='card-custom-img' 
                         ></div>";
            echo  " <div class='card-body style='overflow-y: auto;'>" ;
            echo " <h5 class='card-title' > Data_Science </h5>";
            echo  "<div class='scrollable'>";
            echo " <p class='card-text'>$Data_Sciencedes</p>";
            echo "</div>";
            echo "<div class='card-footer' style='background: inherit; border-color: inherit;'>";
    
            echo "  </div>";
              echo  "</div>";
              echo  "</div>";
            }
            if ($bolc_sharp == false && !in_array($name_role, array(           'implements_information_systems','analyst', 'QA', 'erp', 'analyst_security', 'data_scientist'))) {
             echo  "<div class='card card-custom bg-white border-white border-0 check'>";
            echo"<div class='card-custom-img' 
                         ></div>";
            echo  " <div class='card-body style='overflow-y: auto'>" ;
            echo " <h5 class='card-title' > #C</h5>";
            echo  "<div class='scrollable'>";
            echo " <p  class='card-text' >$c_sharpdes</p>";
            echo "</div>";
            echo "<div class='card-footer' style='background: inherit; border-color: inherit;'>";
     
            echo "  </div>";
              echo  "</div>";
              echo  "</div>";
             echo "</div>";
            }
            
          
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