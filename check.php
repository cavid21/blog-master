<?php
    session_start();
    if (isset($_POST['signin'])) {

        $name = $_POST['name'];
        $pass = $_POST['pass'];

        include "config.php";
        $db = new Db("localhost" , "root" , "" , "blog-master");
        $query = $db->select("SELECT `name` , `pass` FROM `users` Where name = '$name'");
        if (!empty($name) && !empty($pass)) {
            if ($query) {
            $row = mysqli_fetch_assoc($query);
            if($name == $row['name'] && $pass == $row['pass']){
                $_SESSION['admin'] = $name; 
                header('Location:admin.php');
            }else{
                $_SESSION['mesaj'] = "name or pass sehvdir"; 
                header('Location:signin.php');
            } 	
        }
    }
    else {
        $_SESSION['mesaj'] = "xanalari doldurun!"; 
        header('Location:signin.php');
    }
    }
    else
    {
        header('Location:signin.php');
    }
?>