<?php

session_start();



?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login and Registration</title>
    
  </head>
    <body>
    <div id="wrapper">
       
        <h1> Register Here</h1>
        

        <?php if(isset($_SESSION['reg_errors'])) { ?>
            <ul>
                <?php foreach($_SESSION['reg_errors'] as $error) { ?>
                    <li><?= $error ?> </li>
                <?php } ?>
                <?php session_destroy(); ?>
            </ul>
        <?php } ?>
        
        <form action="process.php" method='POST'>
        
          <input type="hidden" name="action" value="registration">
          <p><label for="first_name">First Name</label>
          <input class="person" type='text' name='first_name' value= 'jason'></p>

          <p><label for="last_name">Last Name</label>
          <input class="person" type='text' name='last_name' value= 'bourne'></p>

          <p><label for="Email">Email</label>
          <input class="person" type='text' name='email' value= 'abc@abc.com'></p>

          <p><label for="password">Password</label>
          <input class="person" type='text' name='password' value= '123'></p>

          <p><label for="confirm_password">Confirm Password</label>
          <input class="person" type='text' name='confirm_password' value= '123'></p>

          <input type="submit" value="Register!">

         </form>
         
         <p></p>


        <h1>Already Registrered? Log in below</h1>
        <?php if(isset($_SESSION['log_errors'])) { ?>
            <ul>
                <?php foreach($_SESSION['log_errors'] as $error) { ?>
                    <li><?= $error ?> </li>
                <?php } ?>
                <?php session_destroy() ?>
            </ul>
        <?php } ?>
        
        
        <form action="process.php" method='POST'>
      

          <input type="hidden" name="action" value="login">

          <p><label for="Email">Email</label>
          <input class="person" type='text' name='log_email' value= ''></p>

          <p><label for="password">Password</label>
          <input class="person" type='text' name='log_password' value= ''></p>

        
        <input type="submit" value="Login">




      </div> <!-- END OF WRAPPER DIV                                  -->
  </body>
</html>