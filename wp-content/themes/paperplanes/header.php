<html>
	<head>
		<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
		<!--<link rel="stylesheet" type="css" href="css/style.css" />-->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,500' rel='stylesheet' type='text/css'>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
		<![endif]-->
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php wp_head(); ?>
	</head>
	<body>
		<div class="parallax">
			<div id="top" class="parallax__group">
				<div class="parallax__layer parallax__layer--base">
		    		<div class="title">
			        	<img src="images/main_img_2.png" id="planes" />
						<h2>Let your ideas reach new heights.<br />We can write, design, or sell them for you.</h2>

						<div class="button">
							<button>Work with us</button>
						</div>
					</div>
				</div>
				<div class="parallax__layer parallax__layer--back">
					<div class="title"></div>
				</div>
			</div>