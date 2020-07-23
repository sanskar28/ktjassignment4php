<?php


    require 'connect.inc.php';
    require 'core.inc.php';
    $db = mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$db_name);

    if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){

    }else{
        header('location: index.php');
    }



?>

<html>
    <head>
        <title>Quizzer</title>
        
        <link rel="stylesheet" type="text/css" href="questions.css">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
    </head>

    <body>
        
        <a class ="logoutbutton" href='logout.php'>Logout</a>

        

        <div class="container1">
            <h1>Congratulations, <?php echo getfield($db,"firstname");
                echo " ";
                echo getfield($db,"lastname"); ?> You have successfully completed the whole quiz.</h1>
                <h1>Your Final Score is : <?php echo getfield($db,"Score"); ?>/1000</h1>

            <h1>If you are satisfied with your score, that's good but you can always retry...</h1>    

            <a class ="retrybutton" href='retry.php'>Retry</a>
        </div>

        

    </body>
