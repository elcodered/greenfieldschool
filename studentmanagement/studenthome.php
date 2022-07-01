<?php

session_start();

if(!isset($_SESSION['username'])){

    header("Location: login.php");

}
elseif($_SESSION['usertype']=='admin'){

    header("Location: login.php");
}

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Student Dashboard</title>

        <?php

    include 'student_css.php';

    ?>

</head>

<body>


    
    


    <?php

    include 'student_sidebar.php';

    ?>

<div class="content">

<center>

<h1>Welcome to Student Dashboard!</h1>

<br></br>


</center>
</div>



</body>
</html>