
<?php

require 'connect.inc.php';
require 'core.inc.php';

if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){

    echo "Your logged in ";
    echo getfield($db,"firstname");
    echo " ";
    echo getfield($db,"lastname");

    $currentq = getfield($db,"current_ques");

    echo "<a href='logout.php'>Logout</a>";

    header('location: questions.php');
}else{
    include 'loginform.php';
}



?>


