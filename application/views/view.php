<!-- Voce nao deveria estar olhando o codigo fonte do site... :P

>> Site desenvolvido por William Kunitake originalmente em 2013.
>> Se por acaso voce eh corinthiano, sai daqui ladrao! #VaiCurintia

-->

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<title>Casa Nobre Piscinas</title>
		<link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/uikit.css" />
		<link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/style.css" />
		<link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/bgslideshow.css" />
		<link rel="stylesheet" type="text/css" href="<?=base_url() ?>js/fancybox/source/jquery.fancybox.css" />
		<link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/fontawesome/css/font-awesome.css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<script src="<?=base_url() ?>js/jquery.js"></script>
		<script src="<?=base_url() ?>js/uikit.js"></script>
		<script src="<?=base_url() ?>js/modernizr.custom.js"></script>
		<script src="<?=base_url() ?>js/fancybox/source/jquery.fancybox.pack.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$(".fancybox").fancybox();
			});
		</script>
	</head>

	<!-- Aqui inicia a maravilha toda! -->

	<body>

		<!-- SEÇÃO 1 (INÍCIO) -->
		<section id="inicio">
			<div class="uk-width-1-1 uk-container uk-container-center">
				<!-- MENU -->
				<nav class="uk-navbar">
					<ul class="uk-navbar-nav" data-uk-scrollspy-nav="{closest:'li', smoothscroll:true}">
						<li><a href="#inicio" data-uk-smooth-scroll>In&iacute;cio</a></li>
						<li><a href="#piscinas" data-uk-smooth-scroll>Piscinas</a></li>
						<li><a href="#spas" data-uk-smooth-scroll>Spas e Banheiras</a></li>
						<li><a href="#fontes" data-uk-smooth-scroll>Fontes e espelhos d'&aacute;gua</a></li>
						<li><a href="#paisagismo" data-uk-smooth-scroll>Paisagismo</a></li>
						<li><a href="#decks" data-uk-smooth-scroll>Decks e P&eacute;rgolas</a></li>
						<li><a href="#localizacao" data-uk-smooth-scroll>Como Chegar</a></li>
						<li><a href="#contato" data-uk-smooth-scroll>Contato</a></li>
					</ul>
				</nav>
				<!-- FIM DO MENU -->
				<div class="container">
					<!-- LOGO E BOTÃO SERVIÇOS -->
					<div class="uk-container-center">
						<div class="logo">
							<img src="<?=base_url() ?>img/logo.png"><br/>
							<a class="uk-button uk-button-large uk-button-primary" href="#piscinas" data-uk-smooth-scroll>
								Nossos Servi&ccedil;os <i class="fa fa-chevron-down"></i>
							</a>
						</div>
					</div>
					<!-- SLIDESHOW DE FUNDO -->
					<div class="main">
						<ul id="cbp-bislideshow" class="cbp-bislideshow">
							<li><img src="<?=base_url() ?>img/bg-slideshow/1.png" alt="image01"/></li>
							<li><img src="<?=base_url() ?>img/bg-slideshow/2.png" alt="image02"/></li>
							<li><img src="<?=base_url() ?>img/bg-slideshow/3.png" alt="image03"/></li>
						</ul>
					</div>
					<!-- FIM DO SLIDESHOW -->
				</div>
			</div>
		</section>
		<!-- FIM DA SEÇÃO 1 -->

		<!-- SEÇÃO 2 (PISCINAS) -->
		<section id="piscinas">
			<div class="uk-width-1-1 uk-container uk-container-center">
				<h1>Piscinas</h1>
				<div class="uk-grid grid-space" data-uk-grid-match>
					<!-- MODELOS DAS PISCINAS (INCLUDES) -->
					<?php
					foreach ($modelos as $piscinas) { ?>
						<!-- INCLUDES -->
						<div data-uk-scrollspy="{cls:'uk-animation-slide-bottom'}" class="uk-width-1-3 uk-animation-fade">
							<a class="uk-overlay fancybox fancybox.iframe" href="<?php echo base_url().$piscinas->iframe; ?>" title="<?php echo utf8_decode($piscinas->nome); ?>">
								<img src="<?php echo base_url().$piscinas->link; ?>">
								<div class="uk-overlay-area"></div>
							</a>
							<a class="fancybox"></a>
							<div class="open-btn clr-1">
								<a class="fancybox fancybox.iframe" href="<?php echo base_url().$piscinas->iframe; ?>" title="<?php echo utf8_decode($piscinas->nome); ?>">
									<h2><?php echo utf8_decode($piscinas->nome); ?></h2>
								</a>
							</div>
						</div>
						<?php 
					} ?>
					<!-- FIM DOS INCLUDES -->
				</div>
			</div>
		</section>
		<!-- FIM DA SEÇÃO 2 -->

		<!-- SEPARADOR DAS DUAS SEÇÕES -->

		<div class="section-divider sd1"></div>

		<!-- SEÇÃO COM IMAGENS DAS PISCINAS EM PARALLAX -->

		<section id="piscinas-scrolling">
			<div class="uk-width-1-1">
				<img src="<?=base_url() ?>img/bg-slideshow/1.jpg"> <!-- data-0="transform:translate(0,25%);" data-0-end="transform:translate(0, 0%);" -->
				<div class="section-divider sd2"></div>
				<img src="<?=base_url() ?>img/bg-slideshow/2.jpg">
				<div class="section-divider sd1"></div>
				<img src="<?=base_url() ?>img/bg-slideshow/3.jpg">
			</div>
		</section>

		<!-- FIM DAS IMAGENS DAS PISCINAS -->

		<!-- SEÇÃO 3 (SPAS) -->
		<section id="spas">
			<div class="uk-width-1-1 uk-container uk-container-center">
				<h1>Spas</h1>
				<div class="uk-grid grid-space" data-uk-grid-match>
					<!-- MODELOS DAS SPAS (INCLUDES) -->
					<?php
					foreach ($modelos_spas as $spas) { ?>
						<!-- INCLUDES -->
						<div data-uk-scrollspy="{cls:'uk-animation-slide-bottom'}" class="uk-width-1-3 uk-animation-fade">
							<a class="uk-overlay fancybox" href="<?php echo base_url().$spas->link; ?>" title="<?php echo utf8_decode($piscinas->nome); ?>">
								<img src="<?php echo base_url().$spas->link; ?>">
								<div class="uk-overlay-area"></div>
							</a>
							<a class="fancybox"></a>
							<div class="open-btn clr-2">
								<a class="fancybox" href="<?php echo base_url().$spas->link; ?>" title="<?php echo utf8_decode($piscinas->nome); ?>">
									<h2><?php echo utf8_decode($spas->nome); ?></h2>
								</a>
							</div>
						</div>
						<?php 
					} ?>
					<!-- FIM DOS INCLUDES -->
				</div>
			</div>
		</section>
		<!-- FIM DA SEÇÃO 3 -->

		<!-- Fim das seções -->

		<script src="<?=base_url() ?>js/jquery.imagesloaded.min.js"></script>
		<script src="<?=base_url() ?>js/bgslideshow.js"></script>
		<script type="text/javascript">
			$(function() {
				cbpBGSlideshow.init();
			});
		</script>
    	<script src="<?=base_url() ?>js/skrollr/src/skrollr.js"></script>
    	<script type="text/javascript">
	    	var s = skrollr.init();
	    </script>
	</body>
</html>