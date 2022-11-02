<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <title>WpSiteHeader</title>
  <!--base href goes here-->
  <!--viewport meta goes here-->
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <!--angular stylesheet goes here-->
</head>

	<link rel="icon" type="image/png" href="https://pokemonurpg.com/img/wooper.png" />

	<title><?php echo the_title(); ?></title>
    
	<?php wp_head();?>
</head>

<body>
	<!--app-root goes here-->
	<!--angular scripts go here-->
	<div class="blog-masthead">
		<!--div class="container">
			<nav class="blog-nav">
				<a class="blog-nav-item active" href="/">Home</a>
				<?php wp_list_pages( '&title_li=' ); ?>
			</nav>
		</div-->
	</div>
	
	<div class="container">

		<!--div class="blog-header">
			<h1 class="blog-title"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
			<p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
		</div-->
