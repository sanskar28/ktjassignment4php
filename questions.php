




<?php

    //}-W6afzn7sehQWZ


    require 'connect.inc.php';
    require 'core.inc.php';

    
    $db = mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$db_name);
    $question_number = getfield($db,'current_ques');
    if(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER']) ){
        $httpreferer =$_SERVER['HTTP_REFERER'];
    }


    if(isset($_POST['option1'])){
        echo "yes";
        editfield($db,"q".$question_number,98) ; 
    }
    


    if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){

        
    }else{
        header('location: index.php');
    }


    

    function getquesfield($db,$field,$qid){
        $query = "SELECT $field FROM questions WHERE question_id = ".$qid;

        
        

        if($query_run = mysqli_query($db,$query)){
            return mysqli_result($query_run , 0 , 0);
        }else{
            echo "Some error Occurgb(187, 7, 7)";
            return "hell no";
        }
        //global $_SESSION['user_id'];
    }
    

    if(isset($_POST['option1'])){
        echo "yes";
        editfield($db,"q".$question_number,98) ; 
    }

    getquesfield($db,'question',$question_number);

    $correct = getquesfield($db,'correct',$question_number);
    


?>

<html>
    <head>
        <title>Quizzer</title>
        
        <link rel="stylesheet" type="text/css" href="questions.css">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
    </head>

    <body>
        
        <a class ="logoutbutton" href='logout.php'>Logout</a>

        <div class="scorecard">
            <h1><?php echo getfield($db,"firstname");
                echo " ";
                echo getfield($db,"lastname"); ?>
            </h1>
            <h1>Score: <?php echo getfield($db,"Score"); ?></h1>
        </div>

        <div class="container">
        
            <div class="question">
            
                <h1><?php echo "Q".$question_number.". "; echo getquesfield($db,'question',$question_number); ?></h1>
            </div>
            <div class="options">
                <ul>
                    <li name="option1" id="option1" ><a id="optiona1" href='#' onclick="setTimeout(() =>{window.location ='next.php?s=<?php
                        if($correct==1){$scorei=50;}
                        else{$scorei=-10;}
                        echo $scorei;
                        echo "&p=".$question_number;
                    ?>'},1000);"><?php echo getquesfield($db,'option1',$question_number); ?></a></li>
                    <li name="option2" id="option2" ><a id="optiona2" href="#" onclick="setTimeout(() =>{window.location ='next.php?s=<?php
                        if($correct==2){$scorei=50;}
                        else{$scorei=-10;}
                        echo $scorei;
                        echo "&p=".$question_number;
                    ?>'},1000);"><?php echo getquesfield($db,'option2',$question_number); ?></a></li>
                    <li name="option3" id="option3" ><a id="optiona3" href='#' onclick="setTimeout(() =>{window.location ='next.php?s=<?php
                        if($correct==3){$scorei=50;}
                        else{$scorei=-10;}
                        echo $scorei;
                        echo "&p=".$question_number;
                    ?>'},1000);"><?php echo getquesfield($db,'option3',$question_number); ?></a></li>
                    <li name="option4" id="option4" ><a id="optiona4" href='#' onclick="setTimeout(() =>{window.location ='next.php?s=<?php
                        if($correct==4){$scorei=50;}
                        else{$scorei=-10;}
                        echo $scorei;
                        echo "&p=".$question_number;
                    ?>'},1000);"><?php echo getquesfield($db,'option4',$question_number); ?></a></li>
                </ul>
            </div>

            


        </div>

        

    </body>

    <script type= "text/javascript" >

    

        function changecolor(){
            document.getElementById("optiona1").style.color = "white";
            document.getElementById("optiona2").style.color = "white";
            document.getElementById("optiona3").style.color = "white";
            document.getElementById("optiona4").style.color = "white";
            
        }

        
        document.getElementById("option1").onclick = function (){
            if(1==<?php echo $correct ;?>){
                document.getElementById("option1").style.backgroundColor = "green";
                
                changecolor();
                
            }else{
                document.getElementById("option1").style.backgroundColor = "rgb(187, 7, 7)";
                document.getElementById("option<?php echo $correct ;?>").style.backgroundColor = "green";
                changecolor();
               
            }
        }

        document.getElementById("option2").onclick = function (){
            if(2==<?php echo $correct ;?>){
                document.getElementById("option2").style.backgroundColor = "green";
                changecolor();
                
            }else{
                document.getElementById("option2").style.backgroundColor = "rgb(187, 7, 7)";
                document.getElementById("option<?php echo $correct ;?>").style.backgroundColor = "green";
                changecolor();
                
            }
        }
        document.getElementById("option3").onclick = function (){
            if(3==<?php echo $correct ;?>){
                document.getElementById("option3").style.backgroundColor = "green";
                changecolor();
                
            }else{
                document.getElementById("option3").style.backgroundColor = "rgb(187, 7, 7)";
                document.getElementById("option<?php echo $correct ;?>").style.backgroundColor = "green";
                changecolor();
                
            }
        }
        document.getElementById("option4").onclick = function (){
            if(4==<?php echo $correct ;?>){
                
                document.getElementById("option4").style.backgroundColor = "green";
                changecolor();
                
                
            }else{
                
                document.getElementById("option4").style.backgroundColor = "rgb(187, 7, 7)";
                document.getElementById("option<?php echo $correct ;?>").style.backgroundColor = "green";
                changecolor();
                
            }
        }
    </script>

</html>