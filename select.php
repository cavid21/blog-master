<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include 'config.php';
            $db = new Db("localhost" , "root" , "" , "blog-master");
            $db->select("select `title` from `news`");
            //$db->query("INSERT INTO `news`(`title` , `text`) VALUES ('cavad' , '21')");
            //$db->query("DELETE FROM `users` WHERE id=6");
            //$db->query("UPDATE `users` SET `name`='fdsfd' ,`age`=20 WHERE id=4");
        ?>
    </body>
</html>
