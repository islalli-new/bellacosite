<nav class="main-nav">
	<a href="<?php echo $base_url; ?>" class="logotype" title="Voltar à Home">
		<img src="<?php echo $base_url; ?>skin/img/logotipo-bellaco-h.png" alt="<?php echo $app_name; ?>">
	</a>
	<button class="btn text-black p-3 menu-toggler d-block d-lg-none" onclick="togglemenu()"><i class="fas fa-bars"></i></button>
	<ul class="menu-list list-unstyled mb-0 p-5 p-lg-0" onclick="togglemenu()">
		<li class="nav-item active"><a class="btn mb-3 mb-lg-0 me-0 me-lg-3 text-dark" href="#">Home</a></li>
		<li><a class="btn mb-3 mb-lg-0 me-0 me-lg-3 text-dark" href="#">A Empresa</a></li>
		<li><a class="btn mb-3 mb-lg-0 me-0 me-lg-3 text-dark" href="#">Produtos</a></li>
		<li><a class="btn mb-3 mb-lg-0 me-0 me-lg-1 btn-outline-primary font-weight-bold" href="#">Orçamento</a></li>
		<li><a class="btn mb-3 mb-lg-0 me-0 text-dark" href="#"><i class="fab fa-whatsapp"></i></a></li>
	</ul>
</nav>

<div class="menu-backdrop d-lg-none"></div>


<script type="text/javascript">

	// Cola menu
	window.onscroll = function() {colamenu()}

	var objcolado = document.getElementById("topocolado")
	var notopo = objcolado.offsetTop

	var alturaobjcolado = objcolado.offsetHeight

	function colamenu() {
	  var classbody = document.querySelector("body")
	  if (window.pageYOffset > notopo) {
	    classbody.classList.add("colado")
	  } else {
	    classbody.classList.remove("colado")
	  }
	}

	//Classe menu no body
	function togglemenu() {
	   var classbody = document.querySelector("body")
	   classbody.classList.toggle("menu-open")
	}

</script>