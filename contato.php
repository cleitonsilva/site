<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Entre em contato conosco."/>	
	<title>Kuab - Contato</title>
	<?php require '_header.php'; ?>	
</head>
<body>
  <div id="wrap">
    <div id="main">
    	<nav class="menuGlobal">
		<section class="content">
			<img src="images/logo.png" alt="Logo Kuab"/>
			<h1> Desenvolvendo Soluções </h1>
			<ul>
				<li> <a href="http://kuab.com.br" title="Página inicial."> Home </a></li>
                                <li> <a href="sobre" title="Sobre nós"> Sobre Nós </a></li>
                                <li> <a href="#"> O que fazemos </a>
                                        <ul class="submenu">
                                                <li><a href="solucoes" title="Soluções">Soluções</a></li>
                                                <li><a href="ecommerce" title="E-commerce">E-commerce</a></li>
                                                <li><a href="elearning" title="E-learning">E-learning</a></li>
                                                <!--<li><a href="consultoria" title="Consultoria">Consultoria</a></li>-->
                                        </ul>
                                </li>
                                <li> <a href ="/blog" title="Blog"> Blog  </a> </li>
                                <li> <a class="ativo" href ="#contato"title="Contato"> Contato </a></li>
			</ul>
		</section>
	</nav>
	<!-- Midias sociais -->
	<?php require '_social.html'; ?>
     	<section id="focoTitulo"  class="focoPagina">
		<article>
                	<h1> Contato </h1>
                	<img src="images/sale.png" alt="Loja virtual">
		</article>
		<?php 
			/* Short and sweet */
			define('WP_USE_THEMES', false);
			require('./blog/wp-blog-header.php');
			/*$include = get_pages('include=5');
			$content = apply_filters('the_content',$include[0]->post_content);
			echo $content;*/
		?>
        </section>
    </div>
   </div>
</body>
<footer>
	<?php include '_footer.php'; ?>

</footer>
</html>
