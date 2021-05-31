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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js
"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script type="text/javascript"> 
$(window).load(function(){  
$('.loader').fadeOut(2000);  
 });  </script>
   
    <!--script-->
        

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="loadingbarcss.css"/>
<script type="text/javascript" src="loadingbar.js"></script>
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
   <!--     <link href="../css/stepsToFuture.css" rel="stylesheet"> -->

    
     <style>
      body {
        font-family: 'Heebo', serif;
        font-size: 18px;
        text-align: center;

      }
    </style>
     
     <style>
    #more {
    display: none;
     </style>
</head>
 <header>

        <div id="header"></div>

    </header>
<body> 

 
    <div class="loader"></div>  
             <!-- Hero Start -->
          <div class="hero">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-8 col-md-6 ">
                        <div class="hero-text text-center">
                            <h1> מציאת תפקיד </h1>
                
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-5 d-none d-md-block">
                        <div class="hero-image">
                            <img src="../images/recruitment.png" alt="Hero Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
   <!-- Hero finish -->
<main>
                    <?php
                    $user_qry = "SELECT name,description from roles where ($software=roles.software or $software=roles.software+1 or $software=roles.software-1 or $software=roles.software+2 or $software=roles.software-2 ) and ($management=roles.management or $management=roles.management+1 or $management=roles.management-1 or $management=roles.management+2 or $management=roles.management-2)and ($design=roles.design or $design=roles.design+1 or $design=roles.design-1 or $design=roles.design+2 or $design=roles.design-2)and ($workInATeam=roles.workInATeam or $workInATeam=roles.workInATeam+1 or $workInATeam=roles.workInATeam-1 or $workInATeam=roles.workInATeam+2 or $workInATeam=roles.workInATeam-2)and ($umlDiagramOriented=roles.umlDiagramOriented or $umlDiagramOriented=roles.umlDiagramOriented+1 or $umlDiagramOriented=roles.umlDiagramOriented-1 or $umlDiagramOriented=roles.umlDiagramOriented+2 or $umlDiagramOriented=roles.umlDiagramOriented-2)and ($teaching=roles.teaching or $teaching=roles.teaching+1 or $teaching=roles.teaching-1 or $teaching=roles.teaching+2 or $teaching=roles.teaching-2)and ($analysisCapabilities=roles.analysisCapabilities or $analysisCapabilities=roles.analysisCapabilities+1 or $analysisCapabilities=roles.analysisCapabilities-1 or $analysisCapabilities=roles.analysisCapabilities+2 or $analysisCapabilities=roles.analysisCapabilities-2)";

                    $user_res1 = mysqli_query($conn, $user_qry);
                    $user_res2 = mysqli_query($conn, $user_qry);

                    if (empty(mysqli_fetch_assoc($user_res1))) {
                    ?>
                        <br> <br> <br> <br> <br> <br>
                      <!--  <h1 class='title-answer'>מציאת תפקיד</h1 <br>-->
                        <p class='answer'> לא נמצא תפקיד מתאים <br > <br> לפי הטווחים שהזנת, אנא הזן שנית </p>
                        <br><br><br>
                        <img src="../images/job.jpg" alt="" class="reveal img-responsive reveal-content image-center " style=" border-radius: 50%; width:500px;  display: block;  margin-left: auto;">
                        <br> <br>
                        <?php
                       } 
                       
                       else {
                        echo  " <h1 class='title-answer'>מציאת תפקיד</h1>";
                        echo    "<p class='answer'>  לאחר שהגדרת את תחומי העניין לפי זיקה אישית  <br>  מוצג לך התפקידים אשר מתאימים עבורך </p>";
                        echo "<br>";
                        echo "<br>";echo "<br>";
                        echo "<br>";
                        
                         while ($user_data = mysqli_fetch_assoc($user_res2)) {
                         echo  "<div class='card card-custom bg-white border-white border-0'>";
                         echo"<div class='card-custom-img' style='background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);'></div>";
                        //echo  "<div class='card-header'></div>"; 
                         echo  " <div class='card-body style='overflow-y: auto'>" ;
                         echo " <h5 class='card-title'>" . $user_data['name'] . "</h5>";
                         echo  "<div class='scrollable'>";
                         echo " <p class='card-text'>" .$user_data['description'] . "</p>";
                         echo "</div>";
                          echo "<div class='card-footer' style='background: inherit; border-color: inherit;'>";
                          echo  "<a href='#' class='btn btn-primary'>Option</a>";
                          echo  " <a href='#' class='btn btn-outline-primary'>Other option</a>";
                         echo "  </div>";
                       //</div>

                        echo  "</div>";
                        echo  "</div>";
                       
                       
                        ?>
                </div>
                <?php
                        }
                        
                    }
                  ?>
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
</script>

</html>


