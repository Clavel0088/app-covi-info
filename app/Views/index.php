<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<title>Information sur la covid-19</title>
<meta name="description" content="Thoughts, reviews and ideas since 1999."/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="shortcut icon" href="#">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/screen.css'); ?>"/>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300italic,300,400italic,700,700italic|Playfair+Display:400,700,400italic,700italic"/>
</head>
<body class="home-template">
<div class="site-wrapper">
	<nav class="main-nav overlay clearfix">
	<ul id="menu">
		<li class="nav-home nav-current" role="presentation"><a href="<?php echo base_url('/'); ?>">Accueil</a></li>
		<li class="nav-article-example" role="presentation"><a href="<?php echo base_url('situation'); ?>">Situation par pays</a></li>
		<li class="nav-about-us" role="presentation"><a href="<?php echo base_url('variant'); ?>">Variant</a></li>
		<li class="nav-author-page" role="presentation"><a href="<?php echo base_url('vaccin'); ?>">Vaccin</a></li>
		<span class="socialheader">
		<a href="#"><span class='symbol'>circletwitterbird</span></a>
		<a href="#"><span class='symbol'>circlefacebook</span></a>
		<a href="#"><span class='symbol'>circlegoogleplus</span></a>
		<a href="mailto:wowthemesnet@gmail.com"><span class='symbol'>circleemail</span></a>
		</span>
	</ul>
	</nav>
	<header class="main-header " style="background-image: url('<?php echo base_url('asset/img/virus1.jpg'); ?>')">
	<div class="vertical">
		<div class="main-header-content inner">
			<h1 class="page-title">Information sur la covid-19</h1>
			<div class="entry-title-divider">
				<span></span><span></span><span></span>
			</div>
			<h2 class="page-description"> Suivez l'information sur la pendemie covid-19</h2>
		</div>
	</div>
	<a class="scroll-down icon-arrow-left" href="#content" data-offset="-45"><span class="hidden">Scroll Down</span></a>
	</header>
	<main id="content" class="content" role="main">
	<div class="wraps">
		<img src="<?php echo base_url('asset/img/shadow.png'); ?>" class="wrapshadow">
		<div class="grid">
			<?php foreach ($actus as $row): ?>
			<div class="grid-item">
				<article class="post tag-romance">
				<a href="<?php echo base_url("description?idActu=".$row['id']); ?>"><img src="<?php echo base_url("asset/img/".$row['image']); ?>"></a>
				<div class="wrapgriditem">
					<header class="post-header">
					<h2 class="post-title"><?= $row['titre'] ?></h2>
					</header>
					<section class="post-excerpt">
						<a href="<?php echo base_url("description?idActu=".$row['id']); ?>">
							<p>
								<?= $row['sousTitre'] ?> <a class="read-more" href="/shadows/">&raquo;</a>
							</p>
						</a>
					</section>
					<footer class="post-meta">
					<time class="post-date" datetime="2016-12-18"><?= $row['date'] ?></time>
					</footer>
				</div>
				</article>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
	</main>
	<footer class="site-footer clearfix">
	<a href="#top" id="back-to-top" class="back-top"></a>
	<div class="text-center">
		
	</div>
	</footer>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="asset/js/masonry.min.js"></script>
<script type="text/javascript" src="asset/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="asset/js/index.js"></script>
</body>
</html>