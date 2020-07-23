<?php


require 'connect.inc.php';
    require 'core.inc.php';



editfield($db,'Score',0) ; 

editfield($db,'current_ques',1) ; 

header('location: questions.php');

?>