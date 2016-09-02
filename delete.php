<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $id = $_GET['id'];
            include 'config.php';
            $db = new Db("localhost" , "root" , "" , "blog-master");
            $db->query("DELETE FROM `news` WHERE id = $id");
            header('Location:admin.php');
        ?>
    </body>
</html>
