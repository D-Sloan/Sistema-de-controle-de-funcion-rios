<?php
	
	class control{

		public function VerificarLoginAdm(){
			
		}

		public function VerificarDadosAdm($codigo,$senha){
			$busca = mysqli_query($this->getConexao(),"SELECT * FROM tabela_funcionario WHERE Codigo = '".$codigo."' AND Privilegio = 'A'");
			if(mysqli_num_rows($busca) > 0){
				$senhaADM = $busca->fetch_array();
				if($senhaADM['Senha'] == md5($senha)){
					return true;
				}
				else{
					return false;
				}
			}
			else{
				return false;
			}
		}

		public function RealizarLoginAdm($codigo,$senha){

		}

		public function getConexao(){
			return mysqli_connect("localhost","root","","reidoslivros");
		}

	}
?>