<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<title>Les variants du covid 19 dans le monde</title>
<meta name="description" content="Thoughts, reviews and ideas since 1999."/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="shortcut icon" href="#">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/screen.css'); ?>"/>


<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300italic,300,400italic,700,700italic|Playfair+Display:400,700,400italic,700italic"/>
</head>
<body class="post-template">
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
	<header class="main-header post-head " style="background-image: url('<?php echo base_url('asset/img/virus1.jpg'); ?>')">
	<div class="vertical">
		<div class="main-header-content inner">
			<h1 class="post-title">Les variants du covid 19 dans le monde</h1>
			<div class="entry-title-divider">
				<span></span><span></span><span></span>
			</div>
			<section class="post-meta">
			<time class="post-date" datetime="2021-05-01"></time> | <a class="scrolltocomments" href="#">Variants</a>
			</section>
		</div>
	</div>
	</header>
	<main id="content" class="content" role="main">
	<div class="wraps">
		<img src="<?php echo base_url('asset/img/shadow.png'); ?>" class="wrapshadow">
		<article class="post featured">
		<section class="post-content">
		<?php if (! empty($variantActus) && is_array($variantActus)) :
		foreach ($variantActus as $row): ?>
		<h2><?= $row['titre'] ?></h2> 
		<p>
			<?php if (!empty($keywords) && is_array($keywords)) : 
				foreach ($keywords as $rowKeys) :
					$motcle=$rowKeys['mot'];
					$motremplace="<strong>".$motcle."</strong>";
					$row['description'] =str_ireplace($motcle,$motremplace , $row['description']);
				endforeach;
			?>
			<?php endif ?>
			<?= $row['description'] ?>
		</p>
		<?php endforeach; endif; ?>
		</section>
		<footer class="post-footer">
		<figure class="author-image">
		<a class="img" href="author.html" style="background-image: url(assets/img/gravatar.jpg"><span class="hidden">David's Picture</span></a>
		</figure>
		</footer>
		<div id="disqus_thread">
		</div>
		<script>
			(function() { // DON'T EDIT BELOW THIS LINE
			var d = document, s = d.createElement('script');
			s.src = 'https://wowthemesdemo.disqus.com/embed.js';
			s.setAttribute('data-timestamp', +new Date());
			(d.head || d.body).appendChild(s);
			})();
			</script>
		</article>
	</div>
	</main>
	<div class="clearfix">
	</div>
	<aside class="read-next">
	<a class="read-next-story " style="background-image: url(http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/10/2015/09/10175658/j6-520x779-520x600.jpg)" href="#">
	<section class="post">
	
	</section>
	</a>
	<a class="read-next-story prev " style="background-image: url(http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/10/2015/09/10175658/j7-520x780-520x600.jpg)" href="#">
	<section class="post">
	
	</section>
	</a>
	</aside>
	<footer class="site-footer clearfix">
	<a href="#top" id="back-to-top" class="back-top"></a>
	<div class="text-center">
		
	</div>
	</footer>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="assets/js/masonry.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="assets/js/index.js"></script>
</body>
</html>