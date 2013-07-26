<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Kuab, desenvolvendo soluções. Serviços, Portais, Sites, Lojas Virtuais, Ensino à Distância, Consultoria."/>
	<meta name=”robots” content=”index,follow” />	
	<title>Kuab</title>
	<?php require '_header.php'; ?>	

</head>
<body>
  <div id="wrap">
    <div id="main">
    <nav class="menuGlobal">
	    <section class="content">
			<a href="http://kuab.com.br" title="Home"><img src="images/logo.png" alt="logo kuab."/></a>
			<h1> Desenvolvendo Soluções </h1>
			<ul>
				<li> <a class="ativo" href="http://kuab.com.br" title="Página inicial."> Home </a></li>
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
				<li> <a href ="#contato"title="Contato"> Contato </a></li>
			</ul>
		</section>
	</nav>
	<!-- Inclui menu de links mídias sociais -->
	<?php require '_social.html'; ?>
     <section  id="focoSlide" class="focoPagina" >
		<section id="slideShow">
			<section id="slides">
				<section class="slides_container">
				    <div>
				        <article id="solucoes">
				            <h1> Soluções Web </h1>
						<p> Contando com um time capacitado, desenvolvemos soluções  específicas para <span>você</span> e seu negócio. Você poderá <span>acompanhar</span> cada etapa do desenvolvimento.</p>
						<ul>
							<li> Sistemas sob medida</li>
							<li> Portais </li>
							<li> Lojas Virtuais</li>
							<li> P&D</li>
						</ul>
				        </article>
				    </div>
				    <div>
				        <article id="ecommerce">
				            <h1> E-commerce </h1>
					    <p> Supere as <span>fronteiras</span> físicas de sua loja! Estima-se que em 5 anos o comércio eletrônico representará <span>30% </span>de todas as vendas do comércio mundial.
					<ul>
						<li> Sem limites de produtos </li>
						<li> Funcionamento 24h / 7 </li>
						<li> Otimização de busca </li>
						<li> Layout sob medida</li>
					</ul>
				        </article>
				    </div>
					<div>
				        <article id="elearning">
				            <h1> E-learning </h1>
					    	<p>Moodle é um ambiente de <span>Aprendizagem Virtual</span> utilizado com sucesso nas maiores organizações de ensino do país e do mundo.</p>
						<ul>
							<li> Implantação e configuração </li>
							<li> Templates exclusívos </li>
						</ul>

				        </article>
				    </div>
				    <!--<div>
				        <article id="consultoria">
				            <h1> Consultoria </h1>
				        </article>
				    </div>-->
				</section>
				<a href="#" class="prev"><img src="images/prev.png" width="30" height="100" alt="Anterior"/></a>
				<a href="#" class="next"><img src="images/next.png" width="30" height="100" alt="Próximo"/></a>
			</section>
		</section>
	</section>
	<section class="quemSomos">
		<article>
			<h1>Quem é a Kuab?</h1>
			<p>A Kuab é uma empresa orgulhosamente brasileira que atua no desenvolvimento de soluções web.</p>
			<p> Localizada em São Carlos, um dos pólos tenológicos do país,  cidade que hospeda duas das maiores Universidades da América Latina, UFSCar e USP. </p>
			<p>Contando com mão de obra altamente qualificada, a Kuab mostra-se uma empresa dinâmica e inovadora. </p>
		</article>
	</section>
	<section class= "focoConteudo">
		<section class="infos">
			<article>
				<h1>Foco</h1>
				<!--<img src="images/target.png" alt="Nosso Foco"/>-->
				<img src="images/alvo.jpg" alt="Nosso Foco"/>
				<p>  Nosso principal foco é a satisfação dos nossos clientes.</p>
		                <p> Trabalhamos para construir um bom relacionamento, oferecendo um atendimento diferenciado mediante suas necessidades.</p>
			</article>
			<article>
				<h1>Inovações</h1>
				<!--<img src="images/lamp.png" alt="Inovações" />-->
				<img src="images/ideia.jpg" alt="Inovações"/>
				<p> Inovar é essencial! </p>
				<p> Sempre apostando em ideias promissoras e inovadoras, esperamos atender aos requisitos de nossos clientes, bem como melhorarmos continuamente nossos processos.</p>
			</article>
			<article>
				<h1>Desenvolvimento</h1>
				<!--<img src="images/graph.png" alt="Desenvolvimento" />-->
				<img src="images/html.jpg" alt="Desenvolvimento" />
				<p> Contamos com uma equipe altamente qualificada e atenta às novas tecnologias e tendências do mercado.</p>
		                <p> Adotando um modelo de desenvolvimento ágil, o cliente pode acompanhar cada etapa de seu projeto.</p>

			</article>
		</section>
		<section class="postBlog">
			<img src="/images/blog.png" "Posts do Blog."/>
			<h1> Últimas do Blog</h1>
			<?php
				//Include WordPress
				define('WP_USE_THEMES', false);
				require('./blog/wp-load.php');
 
				//Define quantos posts serão exibidos
				query_posts('showposts=4');
			?>
			<ul>
			<?php while (have_posts()): the_post(); ?>
  				<li>
    					<h4><?php the_title(); ?></h4>
    					<span class="data"><?php the_time("d/m/Y"); ?></span>
    					<?php //the_excerpt(); 
						$excerpt = get_the_excerpt();
						echo string_limit_words($excerpt,20) . '...';
					?>
    					<div>
      						<a class="leia"  title="Leia mais." href="<?php the_permalink(); ?>">&laquo; Leia mais...</a>
    					</div>
  				</li>
			<?php endwhile;?>
			</ul>
		</section>
	    <section>
	</section>
	    
    </div>
   </div>
</body>
<footer>
	<?php include '_footer.php'; ?>
</footer>
</html>
