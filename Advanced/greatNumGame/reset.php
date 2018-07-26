<?php
    session_start();  //always have to initialize session on a page that is using it

    session_destroy(); // reset the session
    header("Location: index.php") //redirect
?>