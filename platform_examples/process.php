<?php

if(isset($_POST['action']) && $_POST['action'] == "register"){  
    echo "Yo registered";
  }
  if(isset($_POST['action']) && $_POST['action'] == "login") {
    echo "Yo looged on";
  }
  
?>