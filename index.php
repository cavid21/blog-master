<?php
    include 'config.php';
    $db = new Db("localhost" , "root" , "" , "blog-master");
    $query1 = $db->select("SELECT * FROM `news`");
    $query2 = $db->select("SELECT `title` FROM `news` ORDER BY id DESC LIMIT 5");
    $query4 = $db->select("SELECT `title` FROM `news` ORDER BY count_view DESC LIMIT 5");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>The Free Blogsite.com Website Template | Home :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>
<div class="header">
	<div class="header_top">
		<div class="wrap">
			<div class="logo">
			     <a href="index.php"><img src="images/logo.png" alt="" /></a>
			</div>
			<div class="login_button">
                            <form action="signin.php" method="post"><input type="submit" value="sign in"></form> | 
                            <form action="" method="post"><input type="submit" value="login"></form>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="header_bottom">
		<div class="wrap">
			<div class="menu">
			    <ul>
			    	<li><a href="index.php">HOME</a></li>
			    	<li><a href="#">ARTICLES</a></li>
			    	<li><a href="#">SERVICES</a></li>
			    	<li><a href="#">LOGOS</a></li>
			    	<li><a href="#">TOOLS</a></li>
			    	<li><a href="#">ICONS</a></li>
			    	<li><a href="#">WALLPAPERS</a></li>
			    	<li><a href="#">HELP</a></li>
			    	<li><a href="#">CONTACT</a></li>
			    </ul>
			</div>
			<div class="search_box">
			    <form>
                                <input type="text" value="Search" >
                                <input type="submit" value="" name="submit_search">
			    </form>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
<div class="container">
    <div class="main col-md-9">
        <div class="content">
            <?php while ($row = mysqli_fetch_array($query1)) {?>
                <div class="box1">
                    <h2>
                        <a href="<?= "single.php?id=".$row['id'];?>">
                            <?php
                                echo $row['title'];
                            ?>
                        </a>
                    </h2>
                    <span>
                        <?php
                            $timestamp = strtotime($row['news_adding_time']);
                            $date = date('H-i-s', $timestamp) - 4;
                            $adding_time = (date("H:i:s")-$date);
                            if($adding_time > 23){
                                $day = $adding_time / 24;
                                echo "By ".$row['admin_name']." at -> ".$adding_time." days ago";
                            }else{
                                echo "By ".$row['admin_name']." at -> ".$adding_time." hours ago";
                            }
                        ?>
                    </span>
                    <div class="box1_img">
                        <img class="img-responsive" src="<?= "images./".$row['image_src']?>" alt="" />
                    </div>   
                    <div class="data">
                        <a href="<?= "single.php?id=".$row['id']; ?>">Continue reading >>></a>
                    </div>
                    <div class="clear"></div>
                </div>
            <?php } ?>
        </div>
        
        <div class="page_links">
            <div class="next_button">
                     <a href="#">Next</a>
            </div>
            <div class="page_numbers">
                <ul>
                    <li><a href="#">1</a>
                    <li><a href="#">2</a>
                    <li><a href="#">3</a>
                    <li><a href="#">4</a>
                    <li><a href="#">5</a>
                    <li><a href="#">6</a>
                    <li><a href="#">... Next</a>
                    </ul>
            </div>
            <div class="clear"></div>
            <div class="page_bottom">
                    <p>Back To : <a href="#">Top</a> |  <a href="#">Home</a></p>
            </div>
        </div>
    </div>
    <div class="sidebar col-md-3">
        <div class="side_top">
            <h2>Recent Feeds</h2>
                <div class="list1">
                    <ul>
                        <?php while ($row = mysqli_fetch_array($query2)) {?>
                            <li><a href="#"><?= $row['title']; ?></a></li>
                        <?php } ?> 
                   </ul>
                </div>
        </div>
        <div class="side_bottom">
            <h2>Most Viewed</h2>
                <div class="list2">
                    <ul>
                        <?php while ($row = mysqli_fetch_array($query4)) {?>
                            <li><a href="#"><?= $row['title']; ?></a></li>
                        <?php } ?> 
                    </ul>
                </div>
        </div>
    </div>
    <div class="clear"></div>
</div>

<div class="footer">
    <div class="wrap">
        <div class="footer_grid1">
                <h3>About Us</h3>
                <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here desktop publishing making it look like readable English.<br><a href="#">Read more....</a></p>
        </div>
        <div class="footer_grid2">
                <h3>Navigate</h3>
                        <div class="f_menu">
                                <ul>
                               <li><a href="index.html">Home</a></li>
                               <li><a href="single.html">Articles</a></li>
                               <li><a href="contact.html">Contact</a></li>
                               <li><a href="#">Write for Us</a></li>
                               <li><a href="#">Submit Tips</a></li>
                               <li><a href="#">Privacy Policy</a></li>
                           </ul>
                        </div>
        </div>
        <div class="footer_grid3">
            <h3>We're Social</h3>
            <div class="img_list">
                <ul>
                 <li><img src="images/facebook.png" alt="" /><a href="#">Facebook</a></li>
                 <li><img src="images/flickr.png" alt="" /><a href="#">Flickr</a></li>
                 <li><img src="images/google.png" alt="" /><a href="#">Google</a></li>
                 <li><img src="images/yahoo.png" alt="" /><a href="#">Yahoo</a></li>
                 <li><img src="images/youtube.png" alt="" /><a href="#">Youtube</a></li>
                 <li><img src="images/twitter.png" alt="" /><a href="#">Twitter</a></li>
                 <li><img src="images/yelp.png" alt="" /><a href="#">Help</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<div class="f_bottom">
        <p>© 2012 rights Reseverd | Design by<a href="#"> W3Layouts</a></p>
</div>
</body>
</html>