<?php
  
  
    if(isset($_POST['username'])&&isset($_POST['password'])){
      $username = $_POST['username'];
      $password = $_POST['password'];

      $password0 = md5 ($password);
      if(!empty($username)&&!empty($password0)){
        $query = "SELECT * FROM user WHERE username='$username' AND password='$password0'";
  	    
        if($results = mysqli_query($db, $query)){
          $query_num_of_rows= mysqli_num_rows($results);
          if($query_num_of_rows == 0){
            echo "Invalid Username Or Password";
          }
          else{
            echo "login successfull";
            $user_id = mysqli_result($results, 0,0);
            $_SESSION['user_id']= $user_id;
            header('location: index.php');
            echo $user_id;
          }
        }else{
          
          echo "wtf";
        }
  
      }
    }

    if (isset($_POST['reg_user'])) {
      
      $username1 = mysqli_real_escape_string($db, $_POST['username1']);
      $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
      $password1 = mysqli_real_escape_string($db, $_POST['password1']);
      $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    

     
      $user_check_query = "SELECT * FROM user WHERE username='$username1' LIMIT 1";
      $result2 = mysqli_query($db, $user_check_query);
      $resultrows = mysqli_num_rows($result2);
      $error=0;
      if ($resultrows>=1) { // if user exists
        echo "Username Already Exists";
        $error=1;
    
      }
    
      
      
        $password11 = md5($password1);//encrypt the password before saving in the database
        if($error==0){
          $query = "INSERT INTO user (username, firstname,lastname, password) 
              VALUES('$username1', '$firstname', '$lastname', '$password11')";
          if(mysqli_query($db, $query)){
            echo "registration succesfull";
          }else{
            echo "not possible";
          }
        }
        
        
      
    }
    


  

?>









<html>
    <head>
        <title>Quizzer</title>
        <link rel="stylesheet" type="text/css" href="index.css">
        
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
    </head>





<div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="<?php echo $current_file ?>" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" name="firstname" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" name="lastname" required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              User Name<span class="req">*</span>
            </label>
            <input type="text" name="username1" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name="password1" required autocomplete="off"/>
          </div>
          
          <button type="submit" name="reg_user" class="button button-block"/>Get Started</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="<?php echo $current_file ?>" method="post">
          
            <div class="field-wrap">
            <label>
              User Name<span class="req">*</span>
            </label>
            <input type="text" name ="username"  required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password"  required autocomplete="off"/>
          </div>
          
          
          
          <button type="submit" class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->

<script src='http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.js'></script>
        <script src="index.js"></script>
</html>

