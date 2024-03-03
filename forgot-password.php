<?php

?>

<!DOCTYPE  html>
<html lang="en">
    <head>
        <title>Forget Password</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
<style>/*
.container{
    margin-left:10cm;
    background-color:gray;
    border-radius:20px;
    width:10cm;
    height:10cm;
    

}
*/

</style>


    </head>
   <body>
        <div class="container">
            
            <h2 style="text-align:center; margin-top:2cm";>reset password here</h2>

            <form  method="post"  action="send-password-reset.php">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email"  id="email"><br><br><br>
                
                <input type="submit" name="submit" class="submit-btn">
                </div>
            </form>
            
      </div>
 
   </body>
</html>