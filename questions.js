document.getElementById("1").onclick = function (){
    if(1==<?php echo $correct ;?>){
        document.getElementById("1").style.backgroundColor = "green";
    }else{
        document.getElementById("1").style.backgroundColor = "red";
    }
}