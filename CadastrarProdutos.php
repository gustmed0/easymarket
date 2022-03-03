<?php session_start();?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="sortcut icon" href="images/logo_menu.png" type="image/png" />;
	<link href="estilo.css" rel="stylesheet"><!--CSS-->
   
    <title>Cadastrar Produtos</title>

    <!-- Bootstrap core CSS -->
    <link href="Content/css/bootstrap.min.css" rel="stylesheet">
	<link href="Content/css/bootstrap-theme.min.css" rel="stylesheet">

  </head>
  <body>
  <div class="fundo">
  <div class="container">
	
	<!-- Inserimos o include do menu -->
	<?php include("_menu.php");?>

		
  <h2>CADASTRO DE PRODUTO</h2>
	<fieldset>
		<legend>Informe os dados do Produto: </legend>
		<form name="cadastro" id="cadastro" action="cadastrar.php" method="post" onsubmit="return validar();">
			<div class="rows">
				<div class="col-sm-8">
					<label for="nome">Nome:</label>
					<input type="text" name="nome" id="nome" class="form-control"/>
				</div>
					<div class="col-sm-4">
					<label for="valor">Valor:</label>
					<input type="text" name="valor" id="valor" class="form-control"/>
				</div>				
				<div class="col-sm-12">
					<label for="descricao">Descrição:</label>
					<textarea rows="6" name="descricao" id="descricao" class="form-control"></textarea>
				</div>			
			</div>
			<div class="rows">
				<div class="col-sm-12" style="text-align:right;padding-top:10px;">
					<input type="submit" name="cadastrar" id="cadastrar" value="Cadastrar" class="btn btn-primary"/>
					<a href="inicio.php"><button type="button" class="btn btn-danger">Cancelar</button></a>
				</div>
			</div>			
		</form>
	</fieldset>	
    </div>
	</div>
  </body>
</html>

<!-- Inserimos a CDN do Jquery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="Content/js/bootstrap.min.js"></script>
<script src="Content/js/bootbox.min.js"></script><!-- Para deixar a caixa de diálogo de todos os navegadores padrão -->

<script>
	//Iniciamos a biblioteca Jquery
	$(function(){
		//As ações acontecem aqui
		//alert("Funcionou!");		
		
	});
	function validar(){
		if($("#nome").val()==""){ <!--"$" = método inicializador do Jquery-->
			bootbox.alert("Informe o nome do produto!");
			$("#nome").focus();
			return false;
		}
		if($("#descricao").val()==""){
			bootbox.alert("Informe a descricao!");
			$("#descricao").focus();
			return false;
		}
		if($("#valor").val()==""){
			bootbox.alert("Informe o valor!");
			$("#valor").focus();
			return false;
		}
		//fora dos "if's"
		return true;
	}
	
</script>