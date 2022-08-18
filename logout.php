<?php
    session_start();
    
    // reset variabel
    session_unset();

    // berhentikan session
    session_destroy();

    header('location:index.php');
?>