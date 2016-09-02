<?php
    if (isset($_POST['logout'])) {
        session_start();
        unset($_SESSION['admin']);
        header('Location:index.php');
    }
    else{
        header('Location:index.php');
    }
?>
