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

<head >
    <title>Result - Find role</title>
    
 
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<meta charset="utf-8">

<link href="../css/HomePage1.css" rel="stylesheet">

</head>

<body>
    <header >
        
   <div id="header"></div> 
  
</header>

     <main>
    <div  class="container">
        <div class="row">
            <div class="col-md-12">
                        <?php
    
                          $user_qry="SELECT name,description from roles where ($software=roles.software or $software=roles.software+1 or $software=roles.software-1) and ($management=roles.management or $management=roles.management+1 or $management=roles.management-1)and ($design=roles.design or $design=roles.design+1 or $design=roles.design-1)and ($workInATeam=roles.workInATeam or $workInATeam=roles.workInATeam+1 or $workInATeam=roles.workInATeam-1)and ($umlDiagramOriented=roles.umlDiagramOriented or $umlDiagramOriented=roles.umlDiagramOriented+1 or $umlDiagramOriented=roles.umlDiagramOriented-1)and ($teaching=roles.teaching or $teaching=roles.teaching+1 or $teaching=roles.teaching-1)and ($analysisCapabilities=roles.analysisCapabilities or $analysisCapabilities=roles.analysisCapabilities+1 or $analysisCapabilities=roles.analysisCapabilities-1)"; 
                        
                        $user_res1 = mysqli_query($conn, $user_qry);
                        $user_res2 = mysqli_query($conn, $user_qry);

                    
                        if(empty( mysqli_fetch_assoc($user_res1)))
                        {
                        ?>
                    
                      <br> <br> <br>   <br>     

                        <h1 class="text-center">מציאת תפקיד</h1>
                               <br>
                               <p class="text-center"> לא נמצא תפקיד מתאים <br> לפי הטווחים שהזנת, אנא הזן שנית </p>
                             <br>
                             <br>
                             <br>
              
                     
                         <div class="section-container-spacer">
               <img src="../images/search.jpg" alt="" class="img-responsive reveal-content" data-action="zoom" style=" border-radius: 50%; width:550px;  display: block;  margin-left: auto; margin-right: auto;">
                </div> 
               <br> <br>                
                        <?php
                        }
                        else{
                       echo  " <h1 class='text-center'>מציאת תפקיד</h1>";
                       echo    "<p class='text-center'>  לאחר שבחרת את תחומי העניין המתאימים עבורך <br>  התוצאה מוצגת לך בדף זה    .</p>";

                       echo" <p class='text-center' style='color:blue;font-weight:bold;font-size:30px'> 
                           : התפקיד שנבחר הוא<br><br></p>";
                       echo "<table dir='rtl' class='table table-bordered print'>";     
                       echo "<tr>";        
                       echo "<th>Name</th>"; 
                       echo  "<th>Description</th>";
                       echo "</tr>";    
                    while ($user_data = mysqli_fetch_assoc($user_res2)) {
                            echo  "<tr>";
                             echo  "<td>  ".$user_data['name']." </td>"; 
                             echo  "<td> ". $user_data['description']."</td>"; 
                             echo   "</tr>";
                        ?>
                </div>
                    <?php
                    }}
                    ?>
                
                </table>

               <div class="text-center">
                    <a href="user_data_print.php" class="btn btn-primary">Print</a>
                </div> 
            </div>
        </div>
    </div>
    </main> 
    
</body>

<footer>
    <div id="footer"></div>
</footer> 
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="   crossorigin="anonymous"    ></script>   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<script defer src="../js/headerfooter.js"></script>

</html>