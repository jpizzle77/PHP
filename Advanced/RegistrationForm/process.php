<?php

session_start();

if(!isset($_SESSION['reg_errors']))
     {
         $_SESSION['reg_errors'] = array();
        
     }
if(!isset($_SESSION['log_errors']))
     {
         $_SESSION['log_errors'] = array();
        
     }



$reg_errors = [];
$log_errors = [];

if($_POST['action'] == "registration")
    {
        //echo "register";
        if(empty($_POST['first_name']) OR (strlen($_POST['first_name']) < 2) OR (!ctype_alpha($_POST['first_name'])))
            {
                $reg_errors[] = "First name cant be empty, must contain at least 2 characters, and no numbers are allowed";
            }

        if(empty($_POST['last_name']) OR (strlen($_POST['last_name']) < 2) OR (!ctype_alpha($_POST['last_name'])))
            {
                $reg_errors[] = "Last name cant be empty, must contain at least 2 characters, and no numbers are allowed";
            }
      

        if(empty($_POST['email']) OR (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)))
            {
                $reg_errors[] = "Email cant be empty and must be in a valid email format (ex: abc@abc.com)";
            }
        if(empty($_POST['password']) OR empty($_POST['confirm_password']))
            {
                $reg_errors[] = "Password or confirm password cant be empty";
            }
        if($_POST['password'] != $_POST['confirm_password'])
            {
                $reg_errors[] = "Password and Confirm password do not match";
            }

        if(empty($reg_errors) == false)
            {
                $_SESSION['errors'] = $reg_errors;
                //var_dump($_SESSION['errors'] );
                //die();
                header('location: index.php');
            }
        else
            {
                header('location: success.php');
            }
        

    }
    if($_POST['action'] == "login")
    {
        $fake_email = "abc@abc.com";
        $fake_password = "12345";

        if(empty($_POST['log_email']) OR empty($_POST['log_password']))
            {
                $log_errors[] = "Email or password can not be empty";
            }

        if($_POST['log_email'] != $fake_email OR $_POST['log_password']!= $fake_password)
            {
                $log_errors[] = "Invalid password or email";
            }

        if(empty($log_errors) == false)
            {
                $_SESSION['log_errors'] = $log_errors;
                //var_dump($_SESSION['errors'] );
                //die();
                header('location: index.php');
            }
        else
            {
                header('location: success.php');
            }

    }




?>