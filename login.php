<?php

//include("index..php");
$is_invalid=false;

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $mysqli= require __DIR__."/connection.php";

    $sql = sprintf("SELECT * FROM users
    WHERE email='%s'",
    $con->real_escape_string($_POST["email"]));

    $result=$con->query($sql);
    $users=$result->fetch_assoc();
    if($users){
        if(password_verify($_POST["password"],$users["password"])){
            session_start();
            session_regenerate_id();
            $_SESSION["user_id"]=$users["id"];
            header("Location:index.php");
            exit;
        }
       
    }
    $is_invalid=true;
}



?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <head>
            <body>                                          
                


                    <style type="text/css">
                    #text{
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
                    </style>
<div id="box">
    <form method="post">
        <div style="font-size:20px; margin:10px">Login</div>

<?php
if($is_invalid):

?>

<em>invalid login</em>
<?php 
endif;
?>

        <label for="email">Enter your email</label>
        <input id="text" type="email" name="email" placeholder="email"><br><br>
        <label for="password">Enter your password</label>     
        <input id="text" type="password" name="password" placeholder="enter your password"><br><br>
               
        
        <input id="button" type="submit" name="login"><br><br>
        <a href="signup.php">Click to signup</a>
        <a href="forgot-password.php">click to resetpassword</a>

                </form>
</div>

                </body>
                    </html>
