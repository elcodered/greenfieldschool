<?php


error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message']){
    $message = $_SESSION['message'];

    echo "<script type = 'text/javascript'>  
    
    alert('$message');
    
    
    </script>";
}


$host = "localhost";
$user = "root";
$password = "administrator";
$db = "schoolproject";

$data = mysqli_connect($host,$user,$password,$db);

$sql = "SELECT * FROM `teacher`";

$result = mysqli_query($data,$sql);




?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Student Management System</title>
        <link rel="stylesheet" type="text/css" href="style.css">

        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

        <nav>
            <label class="logo">Greenfield School</label>

                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Admission</a></li>
                    <a href="login.php" class="btn btn-info" role="button">Login</a>
                </ul>

        </nav>

        <div class= "section1">

        <label class="img_text">We Teach Students with Care</label>
        <img class="main_img" src="img/greenfieldmain.jpeg">



        </div>

            <div class="container">
                <div class="row">

                    <div class="col-md-4">

                        <img class="welcome_img" src ="img/school1.jpg">

                    </div>

                        
                            <div class="col-md-8">

                            <h1>Welcome to Greenfield School</h1>

                            <p class="school_description">The Greenfield Union School District prohibits discrimination, intimidation, harassment (including sexual harassment) or bullying based on a person’s actual or perceived ancestry, color, disability, ethnicity, gender, gender expression, gender identity, immigration status, marital status, national origin, parental status, pregnancy status, race, sex, sexual orientation, or association with a person or group with one or more of these actual or perceived characteristics.</p>

                            </div>

                </div>





            </div>
        </div>

        <center>

            <h1>Our Teachers</h1>

        </center>


    <div class="container">

        <div class="row">

            <?php

            while($info=$result->fetch_assoc())
            {

            ?>

            <div class="col-md-4">

                <img class="teacher" src="<?php  echo "{$info['image']}"  ?>">

                <h3><?php  echo "{$info['name']}"  ?></h3>

                <h5><?php  echo "{$info['description']}"  ?></h5>

            </div>


                <?php

            }

                ?>



        </div>

    </div>




    <center>

            <h1>Courses Available</h1>

        </center>


    <div class="container">

        <div class="row">

            <div class="col-md-4">

                <img class="teacher" src="img/books.jpeg">

                    <h3 class="course">Bachelor of Science in Education</h3>

            </div>

            <div class="col-md-4">

                <img class="teacher" src="img/orchestra.jpg">

                    <h3 class="course">Bachelor of Science in Music</h3>

            </div>

            <div class="col-md-4">

                <img class="teacher" src="img/volleyball.jpeg">

                    <h3 class="course">Bachelor of Science and Arts</h3>

            </div>

        </div>

    </div>


    <center>
        <h1 class="enroll">Enroll Now</h1>
    


    <div text-align="center" class="admission_form">

        <form action="data_check.php" method="POST">

            <div class="form_design">

                <label class="label_text">Name</label>
                <input class="input_design" type="text" name="name">

            </div>

            <div class="form_design">

                <label class="label_text">Email</label>
                <input class="input_design" type="text" name="email">

            </div>

            <div class="form_design">

                <label class="label_text">Phone</label>
                <input class="input_design" type="text" name="phone">

            </div>

            <div class="form_design">

                <label class="label_text">Message</label>
                <textarea class="input_txt" name="message"></textarea>

            </div>

            <div class="form_design">

                <input class="btn btn-primary" id="submit" type="submit" value="apply" name="apply">

            </div>


            </form>

         </div>

    </center>

    <footer>
        <h3 class="footer_txt">All copyright reserved by <br>John Lawrence Cambalon and Cianon Briggs Escabarte</br></h3>
    </footer>


</body>
</html>