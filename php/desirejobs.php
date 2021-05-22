<?php
$server_name = "localhost";
$username = "maycois";
$password = "WwSVtsJ1pMl6";
$database = "maycois_MasterProject";


$conn = new mysqli($server_name, $username, $password, $database);

//if ($conn->connect_error) {
  //  die("Connection failed: " . $conn->connect_error);
//}
//echo "Connection successful";
$sql = "SELECT name_role,COUNT(name_role) as count  FROM user_qr GROUP BY name_role";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>What are the most desire jobs between our clients</title>
<link href="../css/homePage.css" rel="stylesheet">
<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

<meta charset="utf-8">
</head>
<header>
   <div id="header"></div> 
   
</header>

<main >
    <div class="page-header">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <h2>מציאת תפקיד </h2>
                     

                  </div>
    <div id="piechart" ></div>
    
</main>

 <footer>
    <div id="footer"></div>
    </footer> 
<script defer src="../js/headerfooter.js"></script>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
 
<script type="text/javascript">
   google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
            
         function drawChart() {
            
             var data = google.visualization.arrayToDataTable([
                 ['name_role', 'count'],<?php
                 if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_array($result)){
                        echo"['".$row['name_role']."',".$row['count']."],";
                         }
                      }
                    ?>
                    ]);
            
            var options = {
                   //  width: 400,
                   // height: 240,
                    colors: ['#f7cac9', '#483D8B', '#FFDAB9', '#7FFFD4', '#0000FF','#A52A2A'],
                      is3D: true

                    };
            
          var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            
             chart.draw(data, options);
                  }
                </script>

    
</html>