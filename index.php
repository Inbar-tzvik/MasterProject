<!-- <?php
        $server_name = "localhost";
        $username = "maycois";
        $password = "WwSVtsJ1pMl6";
        $database = "maycois_MasterProject";


        $conn = new mysqli($server_name, $username, $password, $database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connection successful";
        $sql = "SELECT *  FROM roles2";
        $result = $con->query($sql);


        ?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <meta content="description" name="description">
    <meta name="google" content="notranslate" />
    <meta content="Mashup templates have been developped by Orson.io team" name="author">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">


    <link rel="apple-touch-icon" sizes="180x180" href="./assets/apple-icon-180x180.png">
    <link href="./assets/favicon.ico" rel="icon">

    <link href="./css/HomePage1.css" rel="stylesheet" type="text/css">



    <title> דף הבית</title>

    <link href="./css/HomePage1.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
        function drawChart() {
            // call ajax function to get sports data
            var jsonData = $.ajax({
                url: "getData.php",
                dataType: "json",
                async: false
            }).responseText;
            //The DataTable object is used to hold the data passed into a visualization.
            var data = new google.visualization.DataTable(jsonData);

            // To render the pie chart.
            var chart = new google.visualization.PieChart(document.getElementById('chart_container'));
            chart.draw(data, {
                width: 400,
                height: 240
            });
        }
        // load the visualization api
        google.charts.load('current', {
            'packages': ['corechart']
        });

        // Set a callback to run when the Google Visualization API is loaded.
        google.charts.setOnLoadCallback(drawChart);
    </script>



</head>

<!-- <link rel="stylesheet" type="text/css" href="./css/HomePage.css"/> -->


<body>
    <!-- Add your content of header -->
    <header>

        <nav class="navbar navbar-default active">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="./index1.html" title="">
                        <img src="../images/compass.png" class="navbar-logo-img" alt="">
                    </a>

                    <a class="navbar-brand" href="./index.html" title="">
                        I.L.M
                    </a>

                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="../includes/findRole.html" title="">מציאת תפקיד</a></li>

                        <li><a href="../includes/stepsToFuture.html" title="">צעדים לתפקיד הנחשק</a></li>
                        <li><a href="./index.html" title="">דף הבית</a></li>


                    </ul>
                </div>
            </div>
        </nav>
    </header>





    <!-- Add your site or app content here -->
    <div class="hero-full-container background-image-container white-text-container">
        <div class="container ">
            <div class="row ">
                <div class="col-xs-12  ">
                    <h1 class="check"> הכוונה מקצועית</h1>
                    <p>ברוכים הבאים לאתר שיסייע לכם לעתיד המקצועי</p>
                    <br>
                    <!-- <a href="./project.html" class="btn btn-default btn-lg" title="">Discover</a> -->
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="section-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2">
          <div class="text-center">
            <h2>About Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas luctus at sem quis varius. 
            <br>
            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus iaculis magna sagittis elit sagittis, at hendrerit lorem venenatis. Morbi accumsan iaculis blandit. Cras ultrices hendrerit nisl.</p>
          </div>
       </div>
      </div>
    </div>
  </div>

  <div class="section-container">
    <div class="container">
      <div class="row">      
          <div class="col-xs-12">


            <div id="carousel-example-generic" class="carousel carousel-fade slide" data-ride="carousel">
                
                <div class="carousel-inner" role="listbox">

                    <div class="item active">
                        <img class="img-responsive" src="../images/img-06.jpg" alt="First slide">
                        <div class="carousel-caption card-shadow reveal">
                          
                          <h3>Moon</h3>
                          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                          </a>
                          <p>
                            Sed id tellus in risus pre
                            tium imperdiet eu lobortis dolor. Sed pellentesque, urna ac viverra lacinia, erat mauris venenatis purus, mollis egestas urna purus ac ex.
                            Aenean nunc sem, lobortis at elit non, lobortis laoreet nibh. Maecenas at mi ipsum.
                          </p>
                          
                          <p>
                            Quisque tempor, ligula pharetra luctus elementum, arcu nisl suscipit ante, pharetra commodo dui est et enim. Sed eu vestibulum elit. Donec ut libero non.
                          </p>
                          <a href="./project.html" class="btn btn-primary" title="">
                            Discover
                          </a>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="../images/img-04.jpg" alt="First slide">
                        <div class="carousel-caption card-shadow reveal">

                          <h3>Lbortis</h3>
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                              <i class="fa fa-chevron-left" aria-hidden="true"></i>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                              <i class="fa fa-chevron-right" aria-hidden="true"></i>
                              <span class="sr-only">Next</span>
                            </a>
                          <p>
                            Pre id tellus in risus pre
                            tium imperdiet eu lobortis dolor. Sed pellentesque, urna ac viverra lacinia, erat mauris venenatis purus, mollis egestas urna purus ac ex.
                            Aenean nunc sem, lobortis at elit non, lobortis laoreet nibh. Maecenas at mi ipsum.
                          </p>
                          
                          <p>
                            Quisque tempor, ligula pharetra luctus elementum, arcu nisl suscipit ante, pharetra commodo dui est et enim. Sed eu vestibulum elit. Donec ut libero non.
                          </p>
                          <a href="./project.html" class="btn btn-primary" title="">
                            Discover
                          </a>
                        </div>
                    </div>
                </div>
               
            </div>

           
          </div>
          
        </div>  
      
    </div>
  </div> -->



    <div class="section-container">
        <div class="container text-center">
            <div class="row section-container-spacer">
                <div class="col-xs-12 col-md-12">
                    <h2 class="text-center">מצב השוק</h2>
                    <p>המפה שלפניכם מראה את ביקוש השוק לפי תחומי ידע </p>
                    <div id="chart_container"></div>

                </div>
            </div>
            <!-- <div class="row">
        <div class="col-xs-12 col-md-4">
          <img src="../images/logo-01.png" alt="" class="img-responsive reveal-content image-center">

        </div>
       
        <div class="col-xs-12 col-md-4">
          <img src="../images/logo-02.png" alt="" class="img-responsive reveal-content image-center">
        </div>
        <div class="col-xs-12 col-md-4">
          <img src="../images/logo-03.png" alt="" class="img-responsive reveal-content image-center">
        </div>
      </div> -->


        </div>
    </div>

    <div class="section-container">
        <div class="container text-center">
            <div class="row section-container-spacer">
                <div class="col-xs-12 col-md-12">
                    <h2>הצוות</h2>
                    <p> .אנו סטודנטיות/בוגרות תואר מערכות מידע אשר נתקלנו בבעיה ורצינו למצוא לזה פתרון <br>כל אחת מאיתנו הובילה בתחום שלה </p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <img src="../images/may.jpeg" alt="" class="reveal img-responsive reveal-content image-center st_img ">
                    <h3> מאי כהן</h3>
                    <h4>UX designer</h4>
                    <p>Sed elementum vehicula nisl, a egestas velit rhoncus nec.Cras vel sapien tincidunt, lacinia risus vel, imperdiet neque.</p>
                    <p>
                        <a href="https://facebook.com/" class="social-round-icon fa-icon" title="">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="https://twitter.com/" class="social-round-icon fa-icon" title="">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.linkedin.com/" class="social-round-icon fa-icon" title="">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                    </p>
                </div>

                <div class="col-xs-12 col-md-4">
                    <img src="../images/liat.jpeg" alt="" class="reveal img-responsive reveal-content image-center st_img bigger">
                    <h3>ליאת רוכמן</h3>
                    <h4>UI designer</h4>
                    <p>Praesent at feugiat est, at faucibus ipsum. Aenean condimentum mauris vel malesuadav pulvinar. Vestibulum sit amet hendrerit leo, quis vehicula mi.</p>
                    <p>
                        <a href="https://facebook.com/" class="social-round-icon fa-icon" title="">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="https://twitter.com/" class="social-round-icon fa-icon" title="">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.linkedin.com/" class="social-round-icon fa-icon" title="">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                    </p>
                </div>
                <div class="col-xs-12 col-md-4">
                    <img src="../images/inbar.png" alt="" class="reveal img-responsive reveal-content image-center st_img bigger">
                    <h3>ענבר צביק</h3>
                    <h4>Developer</h4>
                    <p>Busce rutrum nisi non dui placerat sodales. Vivamus feugiat rutrum malesuada. Nulla volutpat sapien ac gravida varius</p>
                    <p>
                        <a href="https://facebook.com/" class="social-round-icon fa-icon" title="">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="https://twitter.com/" class="social-round-icon fa-icon" title="">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.linkedin.com/" class="social-round-icon fa-icon" title="">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="section-container contact-container">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="section-container-spacer">
                        <h2 class="text-center">נשמח לשמוע מכם איך נוכל להשתפר</h2>
                        <p class="text-center"> :) תודה על המענה</p>
                    </div>
                    <div dir="rtl" class="card-container">
                        <div class="card card-shadow col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 reveal">

                            <form class="reveal-content" action="../php/users.php" onsubmit="return myFunction()" method="post">

                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" placeholder="מייל" name="email">
                                        </div>
                                        <div id="emailErr" class="error"></div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" id="subject" placeholder="נושא" name="subject">
                                        </div>
                                        <div id="subjectErr" class="error"></div>

                                        <div class="form-group">
                                            <textarea class="form-control" rows="3" placeholder="רשום תגובה" id="comment" name="comment"></textarea>
                                        </div>
                                        <div id="commentErr" class="error"></div>

                                        <button type="submit" class="btn btn-primary" name="submit">שלח משוב</button>

                                    </div>

                                    <div id="statusMessage">
                                        <?php
                                        if (!empty($message)) {
                                        ?>
                                            <p> <?php echo $message; ?></p>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <!-- <div class="col-md-5">
                    <ul class="list-unstyled address-container">
                      <li>
                        <span class="fa-icon">
                          <i class="fa fa-phone" aria-hidden="true"></i>
                        </span>
                        + 33 9 07 45 12 65
                      </li>
                      <li>
                        <span class="fa-icon">
                          <i class="fa fa fa-map-o" aria-hidden="true"></i>
                        </span>
                        42 rue Moulbert 75016 Paris
                      </li>
                    </ul>
                  </div> -->
                                </div>
                            </form>
                        </div>
                        <!-- <div class="card-image col-xs-12" style="background-image: url('../images/compass.png')" -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            navbarFixedTopAnimation();
        });
    </script>
    <!-- 
<footer class="footer-container white-text-container">
  <div class="container">
    <div class="row">

     
      <div class="col-xs-12">
        <h3>Mountain</h3>

        <div class="row">
          <div class="col-xs-12 col-sm-7">
             <p><small>Website created with <a href="http://www.mashup-template.com/" title="Create website with free html template">Mashup Template</a>/<a href="https://www.unsplash.com/" title="Beautiful Free Images">Unsplash</a></small>
            </p> -->
    </div>
    <div class="col-xs-12 col-sm-5">
        <p class="text-right">
            <a href="https://facebook.com/" class="social-round-icon white-round-icon fa-icon" title="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="https://twitter.com/" class="social-round-icon white-round-icon fa-icon" title="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="https://www.linkedin.com/" class="social-round-icon white-round-icon fa-icon" title="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
        </p>
    </div>
    </div>


    </div>
    </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            navActivePage();
            scrollRevelation('.reveal');
        });
    </script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID 

<script>
  (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date(); a = s.createElement(o),
      m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
  ga('create', 'UA-XXXXX-X', 'auto');
  ga('send', 'pageview');
</script>


-->

    <footer>
        <div id="footer"></div>
    </footer>


</body>









<script defer src="../js/headerfooter.js"></script>




<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<script type="text/javascript" src="./js/main.0cf8b554.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    // Load google charts
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    // Draw the chart and set the chart values
    function drawChart() {
        var jsonData = $.ajax({
            url: "common.php",
            dataType: "json",
            async: false
        }).responseText;
        var data = new google.visualization.DataTable(jsonData);
        var chart = new google.visualization.PieChart(document.getElementById('chart_container'));
        chart.draw(data, {
            width: 400,
            height: 240
        });
    }


    //   .arrayToDataTable([
    //   ['Task', 'Hours per Day'],
    //   ['Work', 8],
    //   ['Eat', 2],
    //   ['TV', 4],
    //   ['Gym', 2],
    //   ['Sleep', 8]
    // ]);


    // Optional; add a title and set the width and height of the chart
    var options = {
        'title': 'My Average Day',
        'width': 550,
        'height': 400
    };

    // Display the chart inside the <div> element with id="piechart"
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    chart.draw(data, options);
</script>






</html>