<?php
    session_start();
    if(isset($_SESSION['admin'])){
        
    }
    else {
        header('Location:index.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .boss{
                border-bottom: 1px solid black;
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <?php
            include 'config.php';
            $db = new Db("localhost" , "root" , "" , "blog-master");
            $query = $db->select("SELECT * FROM `news`");
        ?>
        <div class="container">
            <div class="col-md-10 boss">
                <form action="add.php" method="post">
                    <input type="text" name="title" placeholder="title">
                    <input type="text" name="text" placeholder="text">
                    <input type="text" name="src" placeholder="image src">
                    <input type="submit" name="submit" value="add news">
                </form>
            </div>
            <div class="col-md-2 boss">
                <form action="logout.php" method="post">
                    <input type="submit" name="logout" value="logout">
                </form>
            </div>
            <?php while ($row = mysqli_fetch_array($query)) {?>
                <div class="col-md-12 boss">
                    <div class="col-md-1"><?= $row['id']?></div>
                    <div class="col-md-8"><?= $row['title']?></div>
                    <div class="col-md-3"><a href="<?= "delete.php?id=".$row['id'];?>">delete</a></div>
                </div>
            <?php } ?>
        </div>
    </body>
</html>
