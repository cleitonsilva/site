<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	
	<title>Kuab - Trabalhe conosco</title>
	<meta name="description" content="Vagas de trabalhos oferecidas pela Kuab." />
	<?php require '_header.php'; ?>	
	<!--Form contato -->
        <script type="text/javascript" src="js/contatoKuab.js"></script>
        <script type="text/javascript" src="contato/jquery.validationEngine.js"></script>
        <link rel="stylesheet" type="text/css" href="contato/jqtransform.css" />
        <link rel="stylesheet" type="text/css" href="contato/validationEngine.jquery.css" />
</head>
<body>
  <div id="wrap">
    <div id="main">
    	<nav class="menuGlobal">
		<section class="content">
			<a href="http://kuab.com.br" title="Home"><img src="images/logo.png" alt="logo kuab."/></a>
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
                                <li> <a href ="#contato"title="Contato"> Contato </a></li>
                        </ul>

		</section>
	</nav>
     	<!-- Midias sociais -->
	<?php require '_social.html'; ?>
	<section id="focoTitulo"  class="focoPagina">
		<article>
                	<h1> Trabalhe Conosco </h1>
                	<img src="images/workus.png" alt="Trabalhe conosco"/>
		</article>
        </section>
	<section class="focoConteudo">
		<article id="trabalheConosco">
			<h1> No momento não estamos contratando...</h1>
			<p> Agradecemos seu interesse, porém no momento não estamos contratando. </p>
			<p> Para mais informações entre em contato conosco através de nosso formulário de contato, ou através de nossas mídias sociais. </p>
			<p> Obrigado!</p>
		</article>
	</section>		
    </div>
   </div>
</body>
<footer>
	<?php include '_footer.php'; ?>
</footer>
</html>
