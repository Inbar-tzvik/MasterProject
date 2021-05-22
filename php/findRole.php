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

?>
<!DOCTYPE html>
<html>

<head>
    <title>Result - Find role</title>


   
    <!--script-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <meta charset="utf-8">

    <!-- Template Stylesheet -->
    <link href="../css/homePage.css" rel="stylesheet">
    <link href="../css/findRole.css" rel="stylesheet"> 
        <link href="../css/stepsToFuture.css" rel="stylesheet"> 

    
     <style>
      main {
        font-family: 'Heebo', serif;
        font-size: 18px;
        text-align: center;

      }
    </style>
     
     <style>
    #more {
    display: none;
     </style>
    
}
    

</head>

<body>
    <header>

        <div id="header"></div>

    </header>

    <main>
      <!--  <div class="container">
            <div class="row">
                <div class="col-md-12"> -->
                <!-- Page Header Start -->
        <div class="page-header">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <h2>מציאת תפקיד </h2>
                     

                  </div>
                  <!-- <div class="col-12">
                      <a href="">Home</a>
                      <a href="">Contact</a>
                  </div> -->
                   </div>
          </div>
          <div class="section-container-spacer">
            <img src="../images/img-06.jpg" alt="" class="img-responsive reveal-content" data-action="zoom" style=" border-radius: 50%; width:600px;  display: block;  margin-left: auto; margin-right: auto;">
          </div> 
      </div>
      <!-- Page Header End -->


                    <?php

                    $user_qry = "SELECT name,description from roles where ($software=roles.software or $software=roles.software+1 or $software=roles.software-1 or $software=roles.software+2 or $software=roles.software-2 ) and ($management=roles.management or $management=roles.management+1 or $management=roles.management-1 or $management=roles.management+2 or $management=roles.management-2)and ($design=roles.design or $design=roles.design+1 or $design=roles.design-1 or $design=roles.design+2 or $design=roles.design-2)and ($workInATeam=roles.workInATeam or $workInATeam=roles.workInATeam+1 or $workInATeam=roles.workInATeam-1 or $workInATeam=roles.workInATeam+2 or $workInATeam=roles.workInATeam-2)and ($umlDiagramOriented=roles.umlDiagramOriented or $umlDiagramOriented=roles.umlDiagramOriented+1 or $umlDiagramOriented=roles.umlDiagramOriented-1 or $umlDiagramOriented=roles.umlDiagramOriented+2 or $umlDiagramOriented=roles.umlDiagramOriented-2)and ($teaching=roles.teaching or $teaching=roles.teaching+1 or $teaching=roles.teaching-1 or $teaching=roles.teaching+2 or $teaching=roles.teaching-2)and ($analysisCapabilities=roles.analysisCapabilities or $analysisCapabilities=roles.analysisCapabilities+1 or $analysisCapabilities=roles.analysisCapabilities-1 or $analysisCapabilities=roles.analysisCapabilities+2 or $analysisCapabilities=roles.analysisCapabilities-2)";


                    $user_res1 = mysqli_query($conn, $user_qry);
                    $user_res2 = mysqli_query($conn, $user_qry);


                    if (empty(mysqli_fetch_assoc($user_res1))) {
                    ?>
                        <br> <br> <br> <br> <br> <br>

                      <!--  <h1 class='title-answer'>מציאת תפקיד</h1 <br>-->

                        
                        
                        <p class='answer'> לא נמצא תפקיד מתאים <br > <br> לפי הטווחים שהזנת, אנא הזן שנית </p>
                        <br>
                        <br>

                        <br>

                        <img src="../images/job.jpg" alt="" class="reveal img-responsive reveal-content image-center " style=" border-radius: 50%; width:500px;  display: block;  margin-left: auto;">

                        <br> <br>
                        <?php
                    } else {
                        echo  " <h1 class='title-answer'>מציאת תפקיד</h1>";
                         echo    "<p class='answer'>  לאחר שהגדרת את תחומי העניין לפי זיקה אישית  <br>  מוצג לך התפקידים אשר מתאימים עבורך </p>";

                         echo "<br> ";
                        echo " <p class='answer'> התפקידים שנבחרו הם:<br></p>";
                          echo "<br> ";
                        echo "<table dir='rtl' class=' center table table-bordered print '>";
                        echo "<tr>";
                   //     echo "<th>Name</th>";
                    //    echo  "<th>Description</th>";
                        echo "<th class='text-center'>שם התפקיד</th>";
                      echo  "<th class='text-center'>תיאור התפקיד</th>";
                        echo "</tr>";
                        
                           //echo "<p>";
                         //echo 'innbar Help My Please'   ;
                       echo   "<div class='card' data-city='buda'>";
                        echo  " <p>innbar Help My Please<span id='dots'>...</span>";
                        // echo    $user_data['description'] ;
                     
                        echo    "<span id='more' > by by by  </sapn>  </p>" ;
                    //echo "</p>";
                    
                          echo " <button onclick='myFunction('buda')' class='myBtn'> Read more</button>";
                        echo "</div>";
                         
                        while ($user_data = mysqli_fetch_assoc($user_res2)) {
                            // echo  "<tr>";

                           // echo  "<td>  " . $user_data['name'] . " </td>";
                         //   echo  "<td> " . $user_data['description'] . "</td>";
                    
                        //    echo   "</tr>";
                         echo "<p>";
                         echo   $user_data['name']   ;
                        echo" <span id='dots'>...</span>";
                        // echo    $user_data['description'] ;
                     
                          echo " <button onclick='myFunction()' id='myBtn'> Read more</button>";
                        echo    "<span id='more' >".$user_data['description']."  </sapn> " ;
                    echo "</p>";
                        

                        ?>
                        

                </div>
        <?php
                        }
                        
                        
                        
                    }
        ?>

        </table>

      <!--  <div class="text-center">
            <a href="user_data_print.php" class="btn btn-primary">Print</a>
        </div> -->
            </div>
        </div>
        </div>
    </main>

</body>

<footer>
    <div id="footer"></div>
</footer>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<script defer src="../js/headerfooter.js"></script>
<!--<script  src="../js/findRole.js"></script>-->
<script >   
function myFunction(city) {
    let dots = document.querySelector(`.card[data-city="${city}"] .dots`);
    let moreText = document.querySelector(`.card[data-city="${city}"] .more`);
    let btnText = document.querySelector(`.card[data-city="${city}"] .myBtn`);
   
     if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
  }
 </script>

</html>