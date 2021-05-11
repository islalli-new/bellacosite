<?php

// Dados do thumb produtos

	$TituloProduto = 'Vergalhão CA50 Soldável - 16mm (5/8") asd asd asd asd asd as';
	// $ImgProduto = $base_url.'uploads/'.'prod1.jpg';
	$ImgProduto = 'https://acosul.com.br/modules/themeconfigurator/img/1158447b82f060783996f6edf0887f428f9b390f_ferro-e-aco-f.jpg';
	$PrecoProduto = '150,00';

?>


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
</header>

<main>

	<section class="pb-3 pb-lg-5">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php	include("./components/breadcrumb.php"); ?>
				</div>
				<div class="col-12">
					<h1 class="py-3">Orçamento</h1>
				</div>
				<div class="col-12 col-lg-9">
					<div>
						<?php	include("./components/nav-sub-prod.php"); ?>
					</div>

					<div class="grid-produtos paraorcamento">
						<?php $i = 1; while ($i <= 15) : ?>

								<?php	include("./components/thumb-prod.php"); ?>
							
						<?php endwhile; ?>
					</div>

				</div>
				<div class="col-12 col-lg-3">orcamento</div>
			</div>
		</div>
	</section>


	<section class="bg-tubos clip-bell">
		<?php	include("./components/cta-projeto.php"); ?>
	</section>

</main>
<?php	include("./components/footer.php"); ?>