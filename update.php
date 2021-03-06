<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Verb &mdash; Free Website Template, Free HTML5 Template by GetTemplates.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BoltovIgnat</title>

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

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">
    <?php 
    
        require_once('nav.php');
        require_once('pdoClass.php');
        $server = "127.0.0.1";
        $user = "root";
        $pass = "";
        $dbname = "tz";
        
        $db = new DBClass($server, $user, $pass, $dbname);
        $post =  $db->select('*','post', ' id = '.$_GET[id]);    
        $db = null;
    ?>

	<header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url(images/img_4.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		
	</header>
	
	<div id="gtco-maine">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-12">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputTitle">Title</label>
                            <input type="text" class="form-control" id="exampleInputTitle" placeholder="Введите заголовок" value="<?php echo $post[0][title];?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputText">Text</label>
                            <input type="text" class="form-control" id="exampleInputText" placeholder="Ведите текст" value="<?php echo $post[0][text];?>">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Новость на главной</label>
                        </div>
                        <button type="submit" class="btn btn-primary" id="ibtnupdate">Записать</button>
                    </form> 
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