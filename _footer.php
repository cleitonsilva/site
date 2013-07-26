    <section class="detalhes">
        <section id="menuFooter">
	        <article id="1">
		    <h1> A empresa </h1>
			<ul>
	        		<li><a href="sobre" title="Sobre Nós">Sobre  Nós</a></li>
				<li><a href="empregos" title="Ofertas de emprego." >Trabalhe Conosco</a></li>
			</ul>
		</article>
	        <article id="2">
		    <h1> E-commerce </h1>
			<ul>
				<li><a href="ecommerce" title="Motivação" >Motivação</a></li>
				<li><a href="ecommerce#vantagens" title="Quais as vantagens de uma loja virtual.">Vantagens</a></li>
				<li><a href="ecommerce#servicos" title="Serviços oferecidos pela Kuab.">Serviços</a></li>
				<li><a href="ecommerce#solicite"title="Solicite um orçamento.">Solicite um orçamento</a></li>
			</ul>
	        </article>
	        <article id="contato">
			<h1> Contato </h1>
			<img id="deco" src="images/mail.png">
			<form id="formulario" class="contatoForm" action="javascript:func()" method="post">
				<div id="status"></div>
	    			<label for="nome">Nome:</label>
            				<input name="nome" type="text" id="nome"   />
            			<label for="email">Email:</label>
            				<input name="email" type="email" id="email" />
            			<label for="assunto">Assunto:</label>
           				 <select nome="assunto" id="assunto">
                				<!--<option class="selecione" value="" selected>- Selecione -</option>-->
                				<option value="">Escolha..</option>
						<option value="Dúvidas">Dúvidas</option>
                				<option value="Sugestões">Sugestões</option>
                				<option value="E-commerce">E-commerce</option>
                				<option value="E-learning">E-learning</option>
                				<option value="Consultoria">Consultoria</option>     
            				</select>
				
            			<label for="mensagem">Mensagem:</label>
	    				<textarea name="mensagem" id="mensagem" cols="40" rows="5"></textarea>
            			<div id="checkSum">
					<label id="lblCaptcha" for="captcha" >Captcha:  <?=$_SESSION['n1']?>  +  <?=$_SESSION['n2']?>  =  </label>
						<input type="hidden" name="val1" id="val1" value="<?=$_SESSION['n1']?>" />
						<input type="hidden" name="val2" id="val2" value="<?=$_SESSION['n2']?>" />
						<input type="text" name="captcha" id="captcha" />	
        				<input id="submit" type="submit" value="Enviar" />
				</div>
    			</form>
	        </article>
         </section>
    </section>
    <section class="base">
        <h1> Kuab Web </h1>
        <p> Desenvolvendo Soluções </p>
    </section>


<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
 <!-- Slideshow -->      
<script type="text/javascript" src="js/slideKuab.js"></script>
<script src="js/slides.min.jquery.js"></script>

<!-- Inclusão do Jquery Validate -->
<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.9/jquery.validate.js" ></script>
<!--Form contato -->
<script type="text/javascript" src="js/contatoKuab.js"></script>

<!--- GOOGLE -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41532548-1', 'kuab.com.br');
  ga('send', 'pageview');

</script>
