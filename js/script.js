jQuery(document).ready(function(){
		jQuery('#ajax_form').submit(function(){
			var dados = jQuery( this ).serialize();

			jQuery.ajax({
				type: "POST",
				url: "../inserts/inserir_filmes.php",
				data: dados,
				success: function( data )
				{
					alert( data );
				}
			});
			
			return false;
		});
	});
        
function buscarFilmes(parametro){

    if(parametro === ""){
        removeTabela();
    }
    else if(isNaN(parametro)){
        var tabela = null;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                tabela = this.responseText;
            }
        };
        xhttp.open("GET", "montaTabela.php?nome="+parametro, true);
        xhttp.send();

        //remover uma possível tabela existente
        removeTabela();
        
        document.getElementById("secao").innerHTML = tabela;
    }
}