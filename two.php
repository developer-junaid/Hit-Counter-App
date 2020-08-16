<?php 

    session_start();


    // Total Session
    $_SESSION['totalCount']++;

    // Two Session
    $_SESSION['twoCount']++;

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two</title>
    <link rel="stylesheet" href="./index.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container">
        <header>
            <h1>Hit Counter</h1>
            <nav>
                <div class="nav">
                    <a href="index.php">Home</a>
                    <a href="one.php">One</a>
                    <a class='active' href="two.php">Two</a>
                    <a href="three.php">Three</a>        
                </div>
            </nav>
            <div class="content">
               <h2>Page Two</h2>
               <hr>
               <h2>Count : <?php echo $_SESSION['twoCount'] ?></h2>

            </div>


        </header>
    </div>
</body>
</html>