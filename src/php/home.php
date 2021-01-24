<?php
    session_start();

    if(!isset($_SESSION['username'])){
        header('location:../../index.php');
    }
?>
<html>
    <head>
        <title>Home Page</title>
    </head>
    <body>
        <a href='logout.php'><button class='btn btn-primary'>Log Out</button></a>
        <h1> welcome <?php echo $_SESSION['username']?> !</h1>
    </body>
</html>