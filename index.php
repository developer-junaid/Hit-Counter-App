<?php 

    session_start();


    // Total Session
    if( isset( $_SESSION['totalCount'] ) ){
        $_SESSION['totalCount']++;
    }else{
        $_SESSION['totalCount'] = 1;
    }

     // Home Session
    if( isset( $_SESSION['homeCount'] ) ){
        $_SESSION['homeCount']++;
    }else{
        $_SESSION['homeCount'] = 1;
    }


    // One Session
    if( isset( $_SESSION['oneCount'] ) ){
        $_SESSION['oneCount'];
    }else{
        $_SESSION['oneCount'] = 0;
    }

    // Two Session
    if( isset( $_SESSION['twoCount'] ) ){
        $_SESSION['twoCount'];
    }else{
        $_SESSION['twoCount'] = 0;
    }

    // Three Session
    if( isset( $_SESSION['threeCount'] ) ){
        $_SESSION['threeCount'];
    }else{
        $_SESSION['threeCount'] = 0;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./index.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container">
        <header>
            <h1>Hit Counter</h1>
            <nav>
                <div class="nav">
                    <a class='active' href="index.php">Home</a>
                    <a href="one.php">One</a>
                    <a href="two.php">Two</a>
                    <a href="three.php">Three</a>        
                </div>
            </nav>
            <div class="content">
                <h1>All Counts</h1>
                <hr>
                <h2>Total Click Count: <?php echo $_SESSION['totalCount'] ?>  </h2>
                <h2>Home  : <?php echo $_SESSION['homeCount'] ?></h2>
                <h2>One   : <?php echo $_SESSION['oneCount'] ?></h2>
                <h2>Two   : <?php echo $_SESSION['twoCount'] ?></h2>
                <h2>Three : <?php echo $_SESSION['threeCount'] ?></h2>

            </div>


        </header>
    </div>
</body>
</html>