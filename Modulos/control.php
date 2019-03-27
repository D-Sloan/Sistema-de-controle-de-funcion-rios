<?php
		class control{

				private function getToken(){
						$meuArray = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','0','1','2','3','4','5','6','7','8','9');
						$cripto = "";
						for($i =0;$i<25;$i++){
							$rand = rand(0,35);
							$cripto = $cripto."".$meuArray[$rand]; 
						}
						return $cripto;
				}


				private function getConexao(){
					return mysqli_connect("localhost","root","","reidoslivros");
				}



				protected function realizarLogin($idUser){
						$token = $this->getToken();
						if(mysqli_query($this->getConexao(),"INSERT INTO T_Token (idUser,Token,Verificador) values ('$idUser', '".$token."','1')")){
							session_start();
							$_SESSION['Token'] = $token;
							$_SESSION['idUser'] = $idUser;
							return array("Text" => "Login Realizado com sucesso", "Verificador" => true);
						}
						else{
							return array("Text" => "Falha ao realizar login", "Verificador" => false);
						}
				}
 
				public function verificarDadosADM($idUser,$Senha){
					if($this->verificarIntegridadeADM($idUser,$Senha)){
						$login = $this->realizarLogin($idUser);
						if($login['Verificador']){

							?>
							<script type="text/javascript">
								alert("Login Realizado com sucesso!");
								location = "ADM.php";
							</script>
							<?php

						}
						else{
							?>
							<script type="text/javascript">
								alert("Falha Ao Realizar Login");
								location = "LoginADM.php";
							</script>
							<?php
						}
					}
				}

				protected function verificarIntegridadeADM($idUser,$Senha){
					$busca = mysqli_query($this->getConexao(),"SELECT * FROM T_Funcionario WHERE Id_Funcionario = '$idUser' AND Senha '".md5($Senha)."' AND Privilegio = 'A'");
					if(mysqli_num_rows($busca) > 0){
						return true;
					}
					else{
						return false;
					}
				}

				public function realizarLogoff(){

					if(is_null($_SESSION['token']) || is_null($_SESSION['idUser'])){

						?>
						<script type="text/javascript">
							alert("Logoff realizado com sucesso!");
							location = "LoginADM.php";
						</script>
						<?php	
					}
					else{
						$this->removerToken();
						$_SESSION['token'] = null;
						$_SESSION['idUser'] = null;
						?>
						<script type="text/javascript">
							alert("Logoff realizado com sucesso!");
							location = "LoginADM.php";
						</script>
						<?php
					}

				}

				protected function removerToken($token){
					mysqli_query($this->getConexao(),"DELETE FROM T_Token WHERE Token = '$token'"));
				}
		}
?>