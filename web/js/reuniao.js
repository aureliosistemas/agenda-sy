jQuery.fn.reuniaoAddPessoa = function(reuniao) {	
	var nome = $('#pessoa_nome').val();
	if(nome){	
		$.ajax({
		  method: "POST",
		  url: "/reuniaopessoa/"+reuniao,
		  data: { pessoa_nome: $('#pessoa_nome').val()}
		})
		  .done(function( linha ) {
		  	$('#reuniao-detalhes-listagem tbody').append(linha);
		 });
	}else{
		alert('Preencha o nome.');
		 $('#pessoa_nome').focus();
	}
}


jQuery.fn.reuniaoAddPessoaDia = function(reuniao,pessoa) {	
	var diasMarcados = [];
	var url = '/reuniaopessoa/dias/' + pessoa;

	$('input[data-pessoa="' + pessoa +'"]:checked').each(function(){
		diasMarcados.push($(this).val());
	});

	var data =  {'dias':diasMarcados,'reuniao':reuniao}

	$.ajax({
	  type: "POST",
	  url: url,
	  data: data,
	  success: function(retorno){
	  	if(!retorno){
	  		alert('Falha ao atualizar o dia.')
	  	}
	  }
	});
	
}