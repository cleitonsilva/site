<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Implantação de sistemas moodle. Desenvolvimento de template personalizado, módulos e plugins."/>	
	<title>Kuab - E-learning</title>
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
                                                <li><a href="solucoes" title="Soluções">Soluções</a></li>
                                                <li><a href="ecommerce" title="E-commerce">E-commerce</a></li>
                                                <li><a class"ativoSub"href="elearning" title="E-learning">E-learning</a></li>
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
                	<h1> E-Learning </h1>
                	<img src="images/moodleTopo.png" alt="E-learning">
		</article>
        </section>
	<section id ="elearningPage" class="focoConteudo">
			<p> Moodle é um ambiente de Aprendizagem Virtual utilizado com sucesso nas maiores organizações de ensino do país e do mundo.</p>
			<p> É uma ferramenta fundamental no auxílio à educação, seja como plataforma para cursos à distância, ou no apoio de cursos presenciais.</p>
			<p> É possível obter mais informações <a href="https://moodle.org" title="Página oficial Moodle"> aqui</a>, na página oficial do moodle.</p>
			<p> Na página oficial, visitantes também  podem navegar em um ambiente de <a href="http://school.demo.moodle.net/" title="Ambiente de demonstração">demonstração</a> oferecido pela própria comunidade, além de acompanhar as <a href="https://moodle.org/stats/" title="Estatísticas de uso no mundo.">estatísticas</a> de uso do moodle no mundo.</p>
		<h2 id="vantagens"> O que o moodle tem a oferecer? </h2>
			<ol>
				<li><p> Escalável, cobrindo cenários pequenos, com centenas, ou até milhares de alunos.</p></li>
				<li><p> Pode subsidiar cursos à distância, ou complementar cursos presenciais.</p></li>
				<li><p> Incentiva atividades colaborativas, através de fórus, wikis.</p></li>
				<li><p> Possui ferramentas amplamente utilizadas para aplicações de testes, provas e atividades.</p></li>
				<li><p> Opensource, por ser uma ferramente de código livre, exime o cliente com custos de lincença. </p> </li>
				<li><p> Desenvolvido por uma grande comunidade, testado e pensado por educadores do mundo todo.</p> </li>
				<li><p> Adequa-se as suas necessidades, seja com templates exclusivos, plugins ou módulos.</p> </li>
			</ol>
		<h2 id="servicos"> O que a kuab tem a oferecer? </h2>
		<ul class="servElearning caixaBranca">
			<li id="implantamos">
				<h3> Implantação </h3>
				<p> Caso você ainda não possua, e está implantando um novo servidor, auxiliamos você nessa tarefa.</p>
			</li>
			<li id="templates">
				<h3> Templates </h3>
				<p> Templates sob medida de acordo com suas necessidades.</p>
			</li>
			<li id="plugins">
				<h3> Plugins</h3>
				<p> Instalamos e configuramos os plugins ofertados pela plataforma.</p>
			</li>
			<li id="extensoes">
				<h3> Extensões</h3>
				<p> Caso sua necessidade seja específica, desenvolvemos módulos, plugins e extensões.</p>
			</li>
		</ul>
	</section>
	<section id="solicite">
		<div class="button">
			<a> Solicite um orçamento!</a>
		</div>
		<form id="orcamento" class="orcamentoForm" title="Orçamento E-commerce" action="javascript:func()" method="post">
                        <div id="statusOrc"></div>
                        <div id="esquerda">
                                <input type="hidden" id="assuntoOrc" name="assunto" value="Orçamento: E-commerce"/>
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
