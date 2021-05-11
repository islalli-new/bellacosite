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
	<section class="container">
		<div class="row">
			<div class="col-12">
				<?php	include("./components/breadcrumb.php"); ?>
			</div>
			<div class="col-12">
				<h1 class="p-3"><?php echo $TituloProduto; ?></h1>
			</div>
			<div class="col-12 col-lg-6">
				<div class="mb-3 mb-lg-0 p-3 grid-bell grid-bell-lg-5">
					<div>
						<img class="rounded-lg" width="100%" height="1050px" src="<?php echo $ImgProduto; ?>" alt="<?php echo $TituloProduto; ?>">
					</div>
					<div>
						<img class="rounded-lg" width="100%" src="<?php echo $ImgProduto; ?>" alt="<?php echo $TituloProduto; ?>">
					</div>
				</div>
				<div> <!-- Conteudo do editor wysywig -->
						<p class="mb-4 p-4 p-lg-5">Towards fluidity concrete pen marketing saturation point hotdog order-flow neon weathered render-farm neural stimulate nano-boat. Apophenia fetishism hotdog warehouse refrigerator j-pop futurity San Francisco jeans. Chiba-space voodoo god bridge kanji claymore mine film free-market corrupted 8-bit uplink youtube wristwatch refrigerator.</p>
				</div>
			</div>
			<div class="col-12 col-lg-6">
				<div class="bg-secondary rounded-lg m-lg-3 card-orcamento">
					<p class="m-0 pt-4 pt-lg-5 px-4 px-lg-5 text-white"><small>Este produto pode variar a disponibilidade</small></p>

				<p class="m-0 px-4 px-lg-5 h4 py-3 py-lg-4"><small>A partir de</small><br><strong class="text-primary">R$ <?php echo $PrecoProduto; ?></strong> <small>/ un</small></p>

					<div class="px-4 px-lg-5 mt-3">
						<?php	include("./components/form-orcamento.php"); ?>
					</div>

				</div>
			</div>
		</div>
	</section>

	<section class="bg-light p-lg-5">
		<div class="container">
			<div class="row pb-lg-5">
				<div class="col-12 col-lg-6 offset-lg-3">
					<h2 class="text-center pb-3 pt-5 py-lg-0">Talves você se interesse por estes produtos também</h2>
				</div>
			</div>
			<div class="grid-produtos">
				<?php $i = 1; while ($i <= 5) : ?>

						<?php	include("./components/thumb-prod.php"); ?>
					
				<?php endwhile; ?>
			</div>
		</div>
	</section>


	<section class="bg-tubos clip-bell">

			<?php	include("./components/cta-projeto.php"); ?>

	</section>


</main>
<?php	include("./components/footer.php"); ?>