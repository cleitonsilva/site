$(function($) {
	$( "#orcamento" ).dialog({
        	autoOpen: false,
        	closeOnEscape:true,
        	width: 900,
        	modal: true,
        	close: function(){limpaForm()}
    	});
 
   	$( "#solicite" ).click(function() {
        	$( "#orcamento" ).dialog( "open" );
    	});

	//CRIA METODOS DE VALIDAÇÃO AUXILIARRES	
	$.validator.addMethod('captcha',
		function(value) {
    			$result = ( parseInt($('#valOrc1').val()) + parseInt($('#valOrc2').val()) == parseInt($('#captchaOrc').val()) ) ;
        		return $result;
    		},
        	'Soma incorreta!'
   	);
	

	//VALIDA O FORMULÁRIO
        $(".orcamentoForm").validate({
		onKeyup: true,
		rules:{
                	nome:{
                    		required: true,
                    		maxlength: 25
                	},
                	email: {
                    		required: true,
                    		email: true
                	},
			empresa: {
				required: true,
				maxlength: 50
			},
			descricao:{
				required: true
			},
			captchaOrc: {
				required: true,
				captcha: true	
			}
            	},
            	messages:{
                	nome:{
                    		required: "NOME é obrigatorio.",
                    		maxlength: "NOME, tamanho máximo de 25 caracteres."
                	},
                	email: {
                    		required: "E-MAIL é obrigatorio.",
                    		email: "E-MAL inválido."
                	},
			empresa:{
				required: "EMPRESA é obrigatório"
			},
			descricao:{
				required: "DESCRIÇÃO é obrigatório"
			},
			captchaOrc:{
				required: "Proteção contra spam."
			}
            	}
        });
	
	// Quando o formulário  de ORÇAMENTO for enviado, essa função é chamada
	$(".orcamentoForm").submit(function (){
                var nome = $("#nomeOrc").val();
                var email = $("#emailOrc").val();
		var empresa = $("#empresaOrc").val();
		var site = $("#siteOrc").val();
                var captcha = $("#captchaOrc").val();
		var assunto = $("#assuntoOrc").val();
 		var 	mensagem = "<html>\n";
			mensagem += "<body>\n";
			mensagem+= "<h3> Cliente: " + empresa+"</h3>\n";
			mensagem += "<h3>Contato: " + nome + "</h3>\n";
			mensagem += "<h4> E-mail: " +email + "</h4>\n";
			mensagem += "<h4> Site: " + site+ "</h4>\n";
			mensagem += "<br />\n";
			mensagem += $("#descricaoOrc").val();
			mensagem += "</body>\n";
			mensagem += "</html>";
		if($(".orcamentoForm").valid()){
                	// Exibe mensagem de carregamento
                	$.post('php/envia.php', {to: "contato@kuab.com.br", assunto: assunto, mensagem:mensagem , captcha: captcha}, function(resposta) {
				if (resposta == false) {
                                	// Limpando todos os campos
					limpaForm();
					$( "#orcamento" ).dialog( "close" );	
                        	}else{
					 $("#statusOrc").html('<img src="images/falha.png">  Erro ao enviar, tente novamente mais tarde.');
				}
		
               		});
		}else{
			$("#statusOrc").html('<img src="images/falha.png">  Dados inválidos, verifique os alertas.');
		}
        });

	//FUNÇÃO PARA LIMPAR O FORMULÁRIO
	function limpaForm(){
		$("#nomeOrc").val("");
                $("#empresaOrc").val("");
                $("#emailOrc").val("");
                $("#siteOrc").val("");
                $("#descricaoOrc").val("");
                $("#captchaOrc").val("");
                $("#statusOrc").html("");
                $(".orcamentoForm").validate().resetForm();
	}

});
