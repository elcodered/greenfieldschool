<?php

session_start();

if(!isset($_SESSION['username'])){

    header("Location: login.php");

}
elseif($_SESSION['usertype']=='student'){

    header("Location: login.php");
}

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin Dashboard</title>


    
        <?php

        include 'admin_css.php';

        ?>



</head>

<body>

<?php

include 'admin_sidebar.php';



?>

        <center>

    <div class="content">
        <h1>Welcome to Admin Dashboard</h1>

    </div>


    </center>
</body>
</html>