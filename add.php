<?php
session_start();
if(isset($_POST['submit'])){
    $admin_name = $_SESSION['admin'];
    $title = $_POST['title'];
    $text = $_POST['text'];
    $src = $_POST['src'];
    include 'config.php';
    $db = new Db("localhost" , "root" , "" , "blog-master");
    $db ->query("INSERT INTO `news`(`title` , `text` , `count_view` , `admin_name` , `image_src` ) VALUES ('$title' , '$text' , '0' , '$admin_name' , '$src')");
    header('Location:admin.php');
}
else{
    header('Location:admin.php');
}

