<?php
	include("Control.php");
	$codigo = $_POST['CodAdm'];
	$senha = $_POST['SenhaAdm'];
	$control = new control();

	if($control->VerificarDadosAdm($conexao,$codigo,$senha)){
		
		
		
	}
	else{
		?>
		<script type="text/javascript">
			alert("Usuario ou Senha inválido!");
			location = "AdmLogin.php";
		</script>
		<?php
	}


 ?>