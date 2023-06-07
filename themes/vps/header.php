<!doctype html>
<html lang="vi">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
	<!-- Bootstrap CSS -->

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- google font  -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500&display=swap" rel="stylesheet">
	<!-- google font  -->

	<link href="/wp-content/themes/vps/assets/flickity.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
	<script src="/wp-content/themes/vps/assets/flickity.js"></script>
	<link href="/wp-content/themes/vps/main.css" rel="stylesheet">
	<?php require_once get_template_directory() . '/style.php'; ?>

</head>

<body>
	<header class="fixed" id="header">
		<nav class="bg-white">
			<div class="container pt-10 pbt-10">
				<div class="row">
					<div class="col-md-2 center-ver j-sp">
						<a href="/">
							<img class="logo-header" class="w-full" src="/wp-content/uploads/2023/05/logo.png" alt="">
						</a>
						<div onclick="open_menu()" class="only-mb open-menu">
							☰
						</div>
					</div>
					<div id="list-menu" class="col-md-10 dp-flex flex-wrap j-right">
						<div onclick="open_menu()" class="only-mb close-menu">
							×
						</div>
						<?php
						if (has_nav_menu('menu-header')) {
							wp_nav_menu(array(
								'container'         => false,
								'fallback_cb'       => false,
							));
						}
						?>
					</div>
				</div>
			</div>
		</nav>
	</header>