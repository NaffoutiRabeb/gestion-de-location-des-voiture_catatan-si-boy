<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php bloginfo('template_directory'); ?>/css/style.css"
rel="stylesheet"><link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php bloginfo('template_directory'); ?>/css/style.css"
rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,800,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<script src="js/jquery.min.js"></script>				
</head>

<body>
<?php get_header(); ?>
<div class="row">
<div class="col-sm-8 blog-main">
<?php get_template_part( 'content', get_post_format() ); ?>
</div> <!-- /.blog-main -->
</div> <!-- /.row -->
<?php get_footer(); ?>
</body>
</html>

