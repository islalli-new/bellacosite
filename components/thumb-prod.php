<?php

// Dados do thumb produtos

	$TituloProduto = 'Vergalhão CA50 Soldável - 16mm (5/8") asd asd asd asd asd as';
	// $ImgProduto = $base_url.'uploads/'.'prod1.jpg';
	$ImgProduto = 'https://acosul.com.br/modules/themeconfigurator/img/1158447b82f060783996f6edf0887f428f9b390f_ferro-e-aco-f.jpg';
	$PrecoProduto = '150,00';

?>

		<a href="<?php echo $base_url; ?>produto-x" class="thumb-prod-card">
			<div class="thumb-prod-card-reflexo"></div>
			<div class="thumb-prod-card-header">
				<div class="thumb-prod-card-cover">
					<img class="prop-square" src="<?php echo $base_url; ?>skin/img/prop-square.png">
					<img class="thumb-prod-card-img" src="<?php echo $ImgProduto; ?>" alt="<?php echo $TituloProduto.$i++; ?>">
				</div>
				<div class="thumb-prod-card-btn">
					<div class="btn btn-primary w-100">Orçar</div>
				</div>
			</div>
			<div class="thumb-prod-card-body">
				<p class="thumb-prod-card-body-cat text-muted"><small>Categoria</small></p>
				<h3 class="thumb-prod-card-body-title text-dark lh-100"><?php echo $TituloProduto; ?></h3>
			</div>
			<div class="thumb-prod-card-footer">
				<p class="thumb-prod-card-body-price text-muted"><small>A partir de</small><br><strong class="text-primary">R$ <?php echo $PrecoProduto; ?></strong> <small>/ un</small></p>
			</div>
		</a>