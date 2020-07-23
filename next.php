<?php

require 'connect.inc.php';
    require 'core.inc.php';

$number = $_GET['p'];

$scorenow = $_GET['s'];

$scoretotal = getfield($db,'Score');

$scoretotal +=$scorenow;

editfield($db,'Score',$scoretotal) ; 
$number +=1;
editfield($db,'current_ques',$number) ; 

if($number<=20){
    header('location: questions.php');
}
else{
    header('location: final.php');
}


?>