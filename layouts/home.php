<header class="hero-header bg-aco-branco">
	<div class="bg-dark">
		<div class="container">
			<?php	include("./components/stripe-social.php"); ?>
		</div>
	</div>
	<div id="topocolado" class="main-nav-container">
		<div class="container">
		<?php	include("./components/main-menu.php"); ?>
		</div>
	</div>
	<div class="hero-interativo">
		<div class="d-flex flex-column justify-content-center align-items-center p-lg-5 px-3 py-5">
			<h1 class="text-center lh-100"><small>Distribuidora de</small> <br class="d-lg-inline-block d-none"> Aço e Metal</h1>
			<p class="text-center lh-100 h4">Mais de XXX produtos pro sua obra não parar!</p>
		</div>
		<div class="container pb-3 pb-lg-5">
			<?php	include("./components/nav-sub-prod.php"); ?>
		</div>
	</div>
	<div class="hr-bell">
		<img src="<?php echo $base_url; ?>skin/img/corte-branco.png">
	</div>
</header>
<main>
	<section class="container">
		<div class="grid-produtos">
			<?php $i = 1; while ($i <= 10) : ?>

					<?php	include("./components/thumb-prod.php"); ?>
				
			<?php endwhile; ?>
		</div>
	</section>
	<section class="bg-tubos clip-bell">

		<?php	include("./components/cta-projeto.php"); ?>

	</section>
</main>
<?php	include("./components/footer.php"); ?>