$(function($) {

	//CRIA METODOS DE VALIDAÇÃO AUXILIARRES	
	$.validator.addMethod('captcha',
		function(value) {
    			$result = ( parseInt($('#val1').val()) + parseInt($('#val2').val()) == parseInt($('#captcha').val()) ) ;
        		return $result;
    		},
        	'Soma incorreta!'
   	);
	
/*	$.validator.addMethod('assunto',
                function(value) {
                        $result = ( parseInt($('#assunto option:selected').val())  ==  0) ;
                        return $result;
                },
                'ASSUNTO obrigatório.'
        );
*/
	//VALIDA O FORMULÁRIO
        $(".contatoForm").validate({
		onKeyup: true,
		rules:{
                	nome:{
                    		required: true,
                    		maxlength: 15
                	},
                	email: {
                    		required: true,
                    		email: true
                	},
			assunto: {
				required: true,
			},
			mensagem: {
				required: true,
				maxlength: 1024
			},
			captcha: {
				required: true,
				captcha: true	
			}
            	},
            	messages:{
                	nome:{
                    		required: "NOME é obrigatorio.",
                    		maxlength: "NOME, tamanho máximo de 15 caracteres."
                	},
                	email: {
                    		required: "E-MAIL é obrigatorio.",
                    		email: "E-MAL inválido."
                	},
			assunto:{
				required: "ASSUNTO é obrigatório"
			},
			mensagem:{
				required: "MENSAGEM é obrigatório",
				maxlength: "Tamanho máximo de 1024 caracteres."
			},
			captcha:{
				required: "Proteção contra spam."
			}
            	}/*,
		// Use Ajax to send everything to processForm.php
    		submitHandler: function(form) {
      			$("#submit").attr("value", "Enviando...");
      			$(form).ajaxSubmit({
        			target: "#status",
        			success: function(responseText, statusText, xhr, $form) {
          				$(form).slideUp("fast");
          				$("#status").html(responseText).hide().slideDown("fast");
        			}
	
      			});
      			return false;
   		 }*/
        });

	// Quando o formulário  de CONTATO for enviado, essa função é chamada
	$(".contatoForm").submit(function (){
                var nome = $("#nome").val();
                var email = $("#email").val();
                var captcha = $("#captcha").val();
 		var 	mensagem = "<html>";
			mensagem += "<body>";
			mensagem += "<h3>Cliente: " + nome + "</h3>";
			mensagem += "<h4> E-mail: " +email + "</h4>";
			mensagem += "<h4> Motivo: " + $("#assunto").val()+ "</h4>";
			mensagem += "<br />";
			mensagem += $("#mensagem").val();
			mensagem += "</body>";
			mensagem += "</html>";
                // Exibe mensagem de carregamento
                $("#status").html("<img src='images/loader.gif' alt='Enviando' />");
                $.post('php/envia.php', {to: 'contato@kuab.com.br', assunto: 'Contato Site', mensagem: mensagem, captcha: captcha}, function(resposta) {
			$("#status").slideDown();
                        if (resposta == false) {
                                $("#status").html('<img src="images/enviado.png"> <div class="sucesso">Mensagem enviada! </div>');
                                // Limpando todos os campos
                                $("#nome").val("");
                                $("#email").val("");
                                $("#assunto").val("");
                                $("#mensagem").val("");
                                $("#captcha").val("");
                        }else{
				 $("#status").html('<img src="images/falha.png">  '+ resposta);
			}
               });
        });
});
