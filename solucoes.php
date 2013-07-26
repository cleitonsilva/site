<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Desenvolvimento de sistemas web sob medida. Time especialista nas principais técnlogias presentes no mercado."/>	
	<title>Kuab - Soluções</title>
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
				<li> <a href="http://kuab.com.br" title="Página inicial."> Home </a></li>
                                <li> <a href="sobre" title="Sobre nós"> Sobre Nós </a></li>
                                <li> <a class="ativo" href="#"> O que fazemos </a>
                                        <ul class="submenu">
                                                <li><a class="ativoSub" href="solucoes" title="Soluções">Soluções</a></li>
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
                	<h1> Soluções </h1>
                	<!--<img src="images/sale.png" alt="Loja virtual">-->
		</article>
        </section>
	<section id="solucoesPage" class="focoConteudo">
		<p> Contando com um time altamente capacitado, desenvolvemos soluções sob medida para nossos clientes.</p>
		<p> Utilizando uma metodologia de desenvolvimento ágil, o cliente possui total acesso a todas as etapas do desenvolvimento, garantindo ao final do processo uma solução que realmente atenda as suas necessidades e expectativas.</p>
		<h2> Tecnologias </h2>
		<ul class="tecnoSolucoes caixaBranca">
			<li id="grails">
				<a href="http://grails.org/" title="Grails"><h3> Grails</h3></a>
			</li>
			<li id="jsf">
                                <a href="https://javaserverfaces.java.net/" title="JSF"><h3> JSF </h3></a>
                        </li>
			<li id="primefaces">
                                <a href="http://www.primefaces.org/" title="PrimeFaces"><h3> PrimeFaces </h3></a>
                        </li>

			<li id="php">
				<a href="http://php.net/" title="PHP"><h3> PHP </h3></a>
			</li>
			<li id="html5">
				<a href="http://www.w3schools.com/html/html5_intro.asp" title="Html5"><h3> Html 5</h3></a>
			</li>
			<li id="css3">
				<a href="http://www.w3schools.com/css3/" title="CSS3"><h3> CSS 3 </h3></a>
			</li>
			<li id="postgres">
				<a href="http://www.postgresql.org/" title="PostgreSQL"><h3> PostgreSQL </h3></a>
			</li>
			<li id="mysql">
				<a href="http://www.mysql.com/" title="MySQL"><h3> MySQL</h3></a>
			</li>
			<li id="opencart">
				<a href="http://www.opencart.com/" title="Opencart"><h3> Opencart </h3></a>
			</li>
			<li id="moodleIcon">
				<a href="https://moodle.org/" title="Moodle"><h3> Moodle </h3></a>
			</li>
			<li id="drupal">
				<a href="http://drupal.org/" title="Drupal"><h3> Drupal</h3></a>
			</li>
			<li id="wordpress">
				<a href="http://wordpress.org/" title="Wordpress"><h3> Wordpress </h3></a>
			</li>
			<li id="nodejs"> 
				<a href="http://nodejs.org/" title="Node.js"><h3> Node.js</h3></a>
			</li>
		</ul>
		<h2> Quais soluções?</h2>
                <p> Somos especialistas em desenvolvimento web. Você possui um projeto, problema ou desejo? </p>
		<p> Fale conosco, nossa equipe lhe dará um retorno.</p>

	</section>
	<section id="solicite">
		<div class="button">
			<a> Solicite um orçamento!</a>
		</div>
		<form id="orcamento" class="orcamentoForm" title="Orçamento Soluções" action="javascript:func()" method="post">
			<div id="statusOrc"></div> 
			<div id="esquerda">
				<input type="hidden" id="assuntoOrc" name="assunto" value="Orçamento: Soluções"/>
                        	<p><label for="nomeOrc">Nome *</label></p>
                        	<input id="nomeOrc" name="nome" type="text" placeholder="Informe seu some" />

                        	<p><label for="emailOrc">E-mail *</label></p>
                        	<input id="emailOrc" name="email" type="email" placeholder="Informe seu e-mail "/>

                        	<p><label for="empresaOrc">Empresa *</label></p>
                        	<input id="empresaOrc" name="empresa" type="text" placeholder="Nome da empresa"/>

                        	<p><label for="siteOrc">Site</label></p>
                        	<input id="siteOrc" name="site" type="text" placeholder="Site, caso a empresa possua"/>
				
				<div id="captchaOrcamento">
                                        <p>
                                                <label for="captcha" >Captcha *:  <?=$_SESSION['n1']?>  +  <?=$_SESSION['n2']?>  =  </label>
                                        </p>
                                        <input type="hidden" name="valOrc1" id="valOrc1" value="<?=$_SESSION['n1']?>" />
                                        <input type="hidden" name="valOrc2" id="valOrc2" value="<?=$_SESSION['n2']?>" />
                                	<input type="text" name="captchaOrc" id="captchaOrc" />
				</div>
			</div>
			<div="direita">
                        	<p><label for="descricaoOrc">Descrição *</label></p>
                        	<textarea id="descricaoOrc" name="descricao" placeholder="Em que podemos lhe ajudar?" maxlength="2000"></textarea>
				<p><input type="submit" id="button" value="Enviar"/></p>
                        </div>

                </form>

	</section>
	
    </div>
   </div>
</body>
<footer>
	<?php include '_footer.php'; ?>
	
<!--Form contato -->
<script type="text/javascript" src="js/orcamento.js"></script>

</footer>
</html>
