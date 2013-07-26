
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Sobre nós."/>	
	<title>Kuab - Sobre</title>
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
                                <li> <a class="ativo" href="sobre" title="Sobre nós"> Sobre Nós </a></li>
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
	<!-- Mídias sociais -->
	<?php require '_social.html'; ?>
     	<section id="focoTitulo"  class="focoPagina">
		<article>
                	<h1> Sobre Nós </h1>
                	<img src="images/sobrenos.png" alt="Sobre nós.">
		</article>
        </section>
	<section class="focoConteudo">
		<article id="sobre">
		<h1> MAIS QUE UMA EMPRESA... UMA FAMÍLIA</h1>
		<h3> Nossa História </h3>
		<p> A Kuab nasceu de um grupo de amigos apaixonados por tecnologia, unidos pela mesma filosofia de trabalho e visão de mercado.</p>
		<p> Somos uma empresa jovem e inovadora, com foco no desenvolvimento de soluções com altíssimo nível de qualidade  para nossos clientes. </p>
		

		<h3> Mas que nome é esse?! </h3>
		<p> Somos uma empresa orgulhosamente brasileira, e queremos demonstrar essa característica também em nosso nome.</p>
		<p> Kuab, é uma palavra pertencente ao vocabulário tupi-guarani, seu significado é <span> SABER </span>. </p>
		<p> Encontramos em uma simples palavra algo que descreve nossa personalidade e ambições. </p>
		<p>A busca constante por conhecimento é a base fundamental de nossa empresa. </p>

		<h3> E quem são vocês? </h3>
		<img src="images/cafe2.png" alt="Sobre nós." />
		<article id="nos">
			<div class="ceo">
				<h1> Cleiton Silva </h1>
				<p class="email"> cleiton-silva@kuab.com.br</p>
				<div>
					Possui Graduação em Tecnologia em Análise e desenvolvimento de sistemas, com amplo conhecimento em tecnologia Java, atuando como desenvolvedor em diversos projetos que utilizam a plataforma. Experiência como desenvolvedor web utilizando  Spring MVC, JTA, WebServices , Primefaces, JSF, Hibernate, Oracle, Mysql , SQLite.  Faz parte do desenvolvimento da ferramenta StArt,  uma ferramenta de apoio ao processo de revisão sistemática de literatura  e  visualização da informação que é utilizada em ambientes acadêmicos para auxilio a pesquisa.
				</div>
			</div>
			<div class="ceo">
				<h1> Cristian Kawakami</h1>
				<p class="email">cristian-kawakami@kuab.com.br</p>
				<div>
					Formação na área de Engenharia da Computação e atualmente aluno de Mestrado do Departamento de Computação da Universidade Federal de São Carlos. Atuou como Analista de Sistemas e supervisor da equipe de desenvolvimento da Secretaria de Educação a Distância da UFSCar desde Janeiro de 2008. Grande conhecimento em desenvolvimento Web relacionados a Educação. Conhecimentos nas linguagens PHP, JAVA, GRAILS, JavaScript, HTML4 e HTML5, JQuery, XML, JSF, Smarty, Ant, Maven e Web Services. Além dos bancos de dados MySQL e PostgreSQL. Grande conhecimento sobre o E-learning Moodle.
				</div>
			</div>

			<div class="ceo">
				<h1> Luciano Miranda</h1>
				<p class="email"> luciano-miranda@kuab.com.br</p>
				<div>
					Concluinte do curso de Ciência da Computação pela UFSCar. Durante a graduação esteve envolvido em projetos de pesquisa sobre sistemas distribuídos e redes. Nos últimos anos tem atuado no desenvolvimento de soluções html5 sobre o framework Grails. Aficionado por tecnologia, tem dedicado tempo ao estudo de novas tendências, atualmente foca em aplicações escaláveis e de alto desempenho baseadas em javaScript no lado do servidor utilizando Node.js.
					Tem como objetivo ingressar no mestrado pela mesma instituição na área de engenharia de software.
				</div>
			</div>
			<div class="ceo">
				<h1> Rodrigo Furtado</h1>
				<p class="email"> rodrigo-furtado@kuab.com.br</p>
				<div>
					Estudante do curso de Ciências da Computação da Universidade Federal de São Carlos, possui experiência em levantamento de requisitos, participou do início do projeto de digitalização do sistema de atendimento ao usuário da Unidade Saúde Escola da Ufscar. Também participou da equipe de manutenção e assistência aos usuários do Moodle dos cursos à distância da Ufscar. Possui interesse por estudos e  aplicação da tecnologia da informação em negócios.
				</div>
			</div>
						
		</article>
		<article id="infos">
			<div>
				<h1 class="contato"> Contatos </h1>
				<ul>
					<li id="email"><a title="E-mail">contato@kuab.com.br</a></li>
					<li id="facebook"><a href="#" title="Facebook" >Facebook</a></li>
					<li id="twitter"> <a href="#"title="Twitter" > Twitter</a></li>
				</ul>
			</div>
		</article>
		</article>
	</section>	    
    </div>
   </div>
</body>
<footer>
	<?php include '_footer.php'; ?>
</footer>
</html>
