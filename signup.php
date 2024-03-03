<?php

session_start();
include("connection.php");



include("functions.php");
if ($_SERVER['REQUEST_METHOD']=="POST")
{
$email=$_POST['email'];
$password=$_POST['password'];

if(!empty($email) && !empty($password) && !is_numeric($email)){

    $user_id=random_num(20);

    $query="insert into users(user_id,email,password) values ('$user_id','$email','$password')";

    mysqli_query($con, $query);
    
    header("location:login.php");
    die;

   
}
else{
    echo "please enter some valid information";
}


}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Signup</title>
        <head>
            <body>                                          
                

                    <style type="text/css">

                        Body{
                            background-color:gray;
                        }
                    #text{
                        height:30px;
                        border-radius:15px;
                        padding:4px;
                        border:solid thin;
                        width:100%;

                    }
                    #password{
                        height:30px;
                        border-radius:15px;
                        padding:4px;
                        border:solid thin;
                        width:100%;
                    }
                    #button{
                        padding:10px;
                        width:100px;
                        colour:black;
                        background-color:red;
                        border:none;
                        border-radius:15px;

                    }
                    #box{
                        background-color:grey;
                        margin:auto;
                        padding:20px;
                        width:300px;
                    }
                    #message{
                        display:none;

                    }
                    .valid {
               color: green;
}
.invalid{
    color:red;
}
</style>


<div id="box">
    <form method="post">
        <div style="font-size:20px; margin:10px">Signup</div>
        <label for="email">Enter your email</label>
        <input id="text" type="email" name="email"  placeholder=" Enter your email"><br><br>
                <label for="password">password</label>
        <input id="password" type="password" name="password" placeholder="Enter your password"><br><br>
               
        
        <input id="button" type="submit" name="signup"><br><br>
        <a href="login.php">Click to Login</a>

                </form>

</div>
<div id="message">
    <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                </div>

                <script>


var myInput = document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");


                    myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
                    }

                    myInput.onblur=function(){
                        document.getElementById("message").style.display="none";
                    }


                    
// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
   
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
  die;
}



                </body>
                    </html>




