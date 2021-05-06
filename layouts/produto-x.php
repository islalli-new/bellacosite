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
				<h1><?php echo $TituloProduto; ?></h1>
			</div>
			<div class="col-12 col-lg-6">
				<div class="mb-3 mb-lg-0">
					<img class="rounded-lg" width="100%" src="<?php echo $ImgProduto; ?>" alt="<?php echo $TituloProduto; ?>">
				</div>
			</div>
			<div class="col-12 col-lg-6">
				<div class="bg-secondary rounded-lg">
					<p class="m-0 p-4 p-lg-5 text-white">Towards fluidity concrete pen marketing saturation point hotdog order-flow neon weathered render-farm neural stimulate nano-boat. Apophenia fetishism hotdog warehouse refrigerator j-pop futurity San Francisco jeans. Chiba-space voodoo god bridge kanji claymore mine film free-market corrupted 8-bit uplink youtube wristwatch refrigerator.</p>
					<hr class="m-0">
					<p class="m-0 pt-4 pt-lg-5 px-4 px-lg-5 text-white"><small>Este produto pode variar a disponibilidade</small></p>

				<p class="m-0 px-4 px-lg-5 h4 py-3 py-lg-4"><small>A partir de</small><br><strong class="text-primary">R$ <?php echo $PrecoProduto; ?></strong> <small>/ un</small></p>

					<div class="px-4 px-lg-5 mt-3">
						<?php	include("./components/form-orcamento.php"); ?>
					</div>

				</div>
			</div>
		</div>


	</section>


	<section class="bg-tubos-laranja">
		<div class="hr-bell" style="transform: rotate(180deg) translateY(2px);">
			<img src="<?php echo $base_url; ?>skin/img/corte-branco.png">
		</div>

			<?php	include("./components/cta-projeto.php"); ?>

		<div class="hr-bell" >
			<img src="<?php echo $base_url; ?>skin/img/corte-branco.png">
		</div>
	</section>


</main>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-3 d-lg-flex flex-column justify-content-end">
				<a href="<?php echo $base_url; ?>" class="logotype align-items-start py-3 py-lg-4" title="Voltar à Home">
					<img src="<?php echo $base_url; ?>skin/img/logotipo-bellaco-h.png" alt="<?php echo $app_name; ?>">
				</a>
				<p class="w-75">Distribuidora de aço com agilidade e organização na entrega em Uberlândia-MG.</p>
			</div>
			<div class="col-12 col-lg-6 d-lg-flex flex-column justify-content-end">
				<div class="bg-primary d-flex flex-lg-row flex-column" style="border-radius: 1rem;">
					<div class="insta-thumbs">
						<a href="#">
							<img width="100%" src="<?php echo $base_url; ?>uploads/insta.jpg">
						</a>
						<a href="#">
							<img width="100%" src="<?php echo $base_url; ?>uploads/insta.jpg">
						</a>
						<a href="#">
							<img width="100%" src="<?php echo $base_url; ?>uploads/insta.jpg">
						</a>
					</div>
					<div class="px-3 d-lg-flex flex-column justify-content-center">
						<h6 class="text-lg-center font-weight-bold mb-0">Acompanhe ofertas e novidades Bell Aço</h6>
						<ul class="list-unstyled d-flex flex-row justify-content-lg-center mb-0">
							<li><a class="text-white btn p-2" href="#"><i class="fab fa-instagram"></i></a></li>
							<li><a class="text-white btn p-2" href="#"><i class="fab fa-facebook"></i></a></li>
							<li><a class="text-white btn p-2" href="#"><i class="fab fa-whatsapp"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-3 d-lg-flex flex-column justify-content-end">
				<h5 class="mt-3"><strong>Também atendemos<br> pronta entrega</strong></h5>
				<address class="lh-100 mb-lg-0">
					Rua Fulano de tal, 1223<br>
					Bairo JJJJJJJJ<br>
					UBerlandia MG<br>
				</address>
			</div>
			<div class="col-12">
				<p class="m-lg-5 px-lg-5 py-5 py-lg-0 text-lg-center"><small>
					® Bell Aço 2021 Todos os direitos reservados. Imagens meramente ilustrativas. Site feito com muita <a href="https://mustard.com.br/?s=BellAco" target="_blank" style="text-decoration: underline !important;">Mustard</a> em 2020. Olá Online Todos os direitos reservados.
				</small></p>
			</div>
		</div>
	</div>
</footer>