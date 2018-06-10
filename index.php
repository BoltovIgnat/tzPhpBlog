<!DOCTYPE HTML>

<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BoltovIgnat</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i|Roboto+Mono" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
    <?php 
        require_once('pdoClass.php');
        $server = "127.0.0.1";
        $user = "root";
        $pass = "";
        $dbname = "tz";
        
        $db = new DBClass($server, $user, $pass, $dbname);
        $post =  $db->select('*','post', ' mainpage = 0 ');
        $postOnMain =  $db->select('*','post', ' mainpage = 1 ');    
        $db = null;
    ?>
	
	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">
	<?php require_once('nav.php');?>

	<header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url(images/img_1.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-7 text-left">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeInUp">
                            <?php
                                foreach ($postOnMain as $arr) {
                                    echo '<span class="date-post">4 days ago</span>';
                                    echo '<h1 class="mb30"><a href="single.php?id='.$arr[id].'">'.$arr[title].'</a></h1>';
                                    echo '<p><a href="single.php?id='.$arr[id].'" class="text-link">Read More</a></p>';
                                }    
                            ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
   
	<div id="gtco-main">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-12">
					<ul id="gtco-post-list">
                        <?php
                            foreach ($post as $arr) {
                                echo '<li class="full entry animate-box" data-animate-effect="fadeIn">';
                                echo '  <a href="single.php?id='.$arr[id].'">';
                                echo '      <div class="entry-img" style="background-image: url(images/img_1.jpg"></div>';
                                echo '      <div class="entry-desc">';
                                echo '          <h3>'.$arr[title].'</h3>';
                                echo '          <p>'.$arr[text].'</p>';
                                echo '      </div>';
                                echo '  </a>';
                                echo '  <a href="update.php?id='.$arr[id].'" class="post-meta">Update</a>';
                                echo '</li>';
                            }    
                        ?>
					</ul>	
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<nav aria-label="Page navigation">
					  <ul class="pagination">
					    <li>
					      <a href="#" aria-label="Previous">
					        <span aria-hidden="true">&laquo;</span>
					      </a>
					    </li>
					    <li class="active"><a href="#">1</a></li>
					    <li><a href="#">2</a></li>
					    <li><a href="#">3</a></li>
					    <li><a href="#">4</a></li>
					    <li><a href="#">5</a></li>
					    <li>
					      <a href="#" aria-label="Next">
					        <span aria-hidden="true">&raquo;</span>
					      </a>
					    </li>
					  </ul>
					</nav>
				</div>
			</div>
		</div>
	</div>

	<?php require_once('footer.php');?>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

