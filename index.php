<!DOCTYPE HTML>
<html>
<head>
<title>Catatan Si Boy a Bootstarp  Website Template | Home :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!--<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />-->
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
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
 get_template_part( 'contents', get_post_format() ); endwhile; endif; ?>
<?php get_footer(); ?>
<!--<?php get_header();?>
<?php get_contents();?>
<?php get_footer();?>-->
</body>
</html>