<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <title>URPG Infohub</title>
  <base href="/urpg-webapps/">
  <script>
    (function() {
      window['_app_base'] = "/";
    })();
  </script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <!--angular stylesheet goes here-->
</head>

	<link rel="icon" type="image/png" href="https://pokemonurpg.com/img/wooper.png" />

	<title><?php echo the_title(); ?></title>
    
	<?php wp_head();?>
</head>

<body>
	<urpg-site-header style="height: 56px; display: block;"></urpg-site-header>
	<!--angular runtime script goes here-->
    <!--angular polyfills script goes here-->
    <!--angular scripts.js goes here-->
    <!--angular main script goes here-->
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
