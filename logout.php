<?php 
    include("class/users.php");
    
    if(session_destroy()) {
        header("Location: index.php");
     }
?>