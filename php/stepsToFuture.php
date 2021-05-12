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
 
$name_role= $_POST['name_role'];
$sql_course = $_POST['sql_course'];
$HTML = $_POST['HTML'];
$PYTHON = $_POST['PYTHON'];
$UI_UX = $_POST['UI_UX'];
$SAP_ERP = $_POST['SAP_ERP'];

$sql = "INSERT INTO `user_qr` (`name_role`, `sql_course`,`HTML`,`PYTHON`,`UI_UX`,`SAP_ERP`) VALUES ('". $name_role ."', " . $sql_course . ", " . $HTML . ",  " . $PYTHON . ", ". $UI_UX ." , ".$SAP_ERP.")";


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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

   

    <link href="../css/stepsToFuture.css" rel="stylesheet">

    <link href="../css/HomePage1.css" rel="stylesheet">
    
    <meta charset="utf-8">

</head>

<header>
    <div id="header"></div>

</header>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">


        <?php

          $bolsql_course = false;// הדיפולט הוא שלילי כלומר שהם לא עומדים בתנאי הקורס הזה 
          $bolHTML = false;
          $bolPYTHON = false;
          $bolUI_UX = false;
          $bolSAP_ERP= false;
    
        $user_qry1 = "SELECT name_role,name_course,grade,description
        from Courses_roles INNER JOIN Courses ON Courses_roles.name_course=Courses.name where '".$name_role ."'=Courses_roles.name_role ";
        
        $user_res3 = mysqli_query($conn, $user_qry1);
        $user_res4 = mysqli_query($conn, $user_qry1);
        $user_res5 = mysqli_query($conn, $user_qry1);
        
        while($row=mysqli_fetch_array($user_res5)){
            if($row['name_course'] == 'HTML'){
                      $HTMLdes= $row['description'];
                    } 
            elseif($row['name_course'] == 'sql_course'){
                      $sql_coursedes= $row['description'];
                    } 
            elseif($row['name_course'] == 'PYTHON'){
                      $PYTHONdes= $row['description'];
                    } 
            elseif($row['name_course'] == 'UI_UX'){
                      $UI_UXdes= $row['description'];
                    } 
            elseif($row['name_course'] == 'SAP_ERP'){
                      $SAP_ERPdes= $row['description'];
                    } 
        }
        ?>
         <h1 class="text-center">צעדים לתפקיד הנחשק</h1 <br>
     <p class="text-center"> בדף זה מוצגים לך הפערים בין הקורסים שלמדת לבין דרישות התפקיד שבחרת <br> הנתונים שמוצגים לך הם על סמך ביקוש השוק </p>
        
       
<?php
        if (empty(mysqli_fetch_assoc($user_res3))) {
         ?>
             <br> <br> <br>                               <br> <br> <br>

        <p class="text-center"> אין תוצאות מתאימות </p>
       <br>
        <br>
        <img src="../images/search.jpg" alt="" class="reveal img-responsive reveal-content image-center st_img bigger">
        <br>

      <?php
    
        }
        else {
        echo "\x20\x20\x20"; 

        while($row=mysqli_fetch_array($user_res4)){

             if($row['name_course'] == 'sql_course' && $sql_course >= ((int)$row['grade']) ){
                        $bolsql_course = true;
                        }
                
             elseif($row['name_course'] == 'HTML' && $HTML>= ((int)$row['grade'])){
                           $bolHTML = true;
                  } 
                   
            elseif($row['name_course'] == 'PYTHON' && $PYTHON>= ((int)$row['grade'])){
                      $bolPYTHON = true;
                        } 
                        
            elseif($row['name_course'] == 'UI_UX' && $UI_UX>= ((int)$row['grade'])){
                      $bolUI_UX = true;
                    }
                    
             elseif($row['name_course'] == 'SAP_ERP' && $SAP_ERP>= ((int)$row['grade'])){
                       $bolSAP_ERP = true;
                       
                    }
                   
                }
       
                    
            if($bolsql_course == true && $bolHTML == true && $bolPYTHON == true && $bolUI_UX == true &&  $bolSAP_ERP == true){
              echo "אתה בדרך הנכונה ! יש לך את כל הציונים המתאימים בקורסים הנדרשים";
                    }
                    
                    // בעייתי  עכשיו לעשות ככה לכל הקורסים
            elseif($bolsql_course == true && $bolHTML == true &&  $bolPYTHON == false && $bolUI_UX == false &&   $bolSAP_ERP == false){
                echo " צריך לעבוד על הציון בקורסים הבאים:פייתון,ממשק משתמש וסאפ";
                echo  $PYTHONdes;
                    
            
                echo      $UI_UXdes;
              
                  echo    $SAP_ERPdes;
            }
                
            elseif($bolsql_course == false && $bolHTML == true  &&  $bolPYTHON == true && $bolUI_UX == true && $bolSAP_ERP == true){
                    echo "you need to get a better grade at SQL ";
                    }
            elseif($bolsql_course == true && $bolHTML == false   &&  $bolPYTHON == false && $bolUI_UX == false &&  $bolSAP_ERP == false){
                    echo "you need to get a better grade at SQL and C# ";
                    
                    }
                    
            else{
                 echo "SQL & HTML ALL OVER AGAIN";
                    }
                        
                        
                   
                        //   echo           "<th>Name</th>"; 

                       
                        //    <?php echo  $user_data['name_role']; ?></p>

                        <?php
                        //  echo           "<th>Description</th>";

                       // echo       "</tr>";
                      //  echo    "</thead>";
                      //  echo    "<tbody>";


                        ?>
<!--
                        <br>
                        <tr>

                        
                              <td><//?php echo $user_data['name']; ?></td> 
                            <td style='font-weight:bold;font-size:20px'><?php //echo 'תיאור התפקיד ' ?></td>
                            <td class='text-center' style='color:black'> <?php //echo  $user_data['name_course']; ?></p>
                            
</td>

                        </tr> -->

            </div>
  
   <?php

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

