<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage 
 * @since 
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>

	<link rel="preconnect" href="https://fonts.gstatic.com">

	<!-- Swiper -->
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

	<?php wp_head();?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- <header class="header container">
	<div class="logo">
		<a class="buttons">Logo Impsum</a>
	</div>

	<div class="headerButtons">
		<a class="buttons" href="index"> Home </a>
		<a class="buttons" href="https://google.com"> Products </a>
		<a class="buttons" href="about"> About Us </a>
		<a class="buttons" href="contact"> Contact Us </a>
	</div>
</header> -->

<!-- Menú -->
<nav class="container navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Logo Ipsum</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<div class="navbar-nav ms-auto">
			<a class="nav-link active botton-text" aria-current="page" href="#">Home</a>
			<a class="nav-link botton-text" href="about.php">Products</a>
			<a class="nav-link botton-text" href="#">About Us</a>
			<a class="nav-link botton-text" href="#">Contact Us</a>
		</div>
    </div>
  </div>
</nav>
	
