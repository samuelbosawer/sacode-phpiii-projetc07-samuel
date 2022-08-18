<?php
    if(!isset($_SESSION['alamat_email']))
    {
        header('location:logout.php');
    }
?>