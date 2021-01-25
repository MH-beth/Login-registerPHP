<?php
    session_start();

    if(!isset($_SESSION['username']) || !isset($_SESSION['firstname'])){
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
        <p>Happy to see you <?php echo $_SESSION['firstname'] ?></p>
    </body>
</html>