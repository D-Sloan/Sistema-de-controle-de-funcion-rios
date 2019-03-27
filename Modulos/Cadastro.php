  <!DOCTYPE html>
  <html lang="en">

  <head>

    <script type="text/javascript">
      
      function atualizar(){

        alert("Atualização em processo!");
        document.getElementById("att").innerHTML="Atualizando...";

      }

    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Controle De Funcionários</title>

    <!-- Link do css -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Barra de navegação -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">

        <img alt="Brand" src="images/logo.png" class="img-responsive">  
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        


        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Início
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item active">
            <a class="nav-link" href="#">Cadastrar</a>
            </li>
          </ul>
        </div>

      </div>
    </nav>

    <!-- Conteúdo da página -->

  <div id="main" class="container-fluid" style="margin-top: 50px">
   
    <div id="top" class="row">
      <div class="col-sm-10">
        

      </div>

     
        

      </div>

    </div> <!-- /#top -->
   
    <hr/>
      <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto"> 
        <div class="card card-signin my-5"> 
          <div class="card-body">
            <h4 class="card-title text-center">Cadastro de funcionário</h4>
            <br>
            <br>
            <form name = "CadastForm" action ="ProcessCadastro.php" onsubmit="return validarDados()"  class="form-signin" method="POST" >

              <div class="form-label-group">
                <input type="text" id="Nome" class="form-control" placeholder="Nome Funcionário" name="Name" required autofocus>
                <label for="inputName"></label>
              </div>
              <div class="form-label-group">
                <input type="text" id="Senha" class="form-control" placeholder="Senha" name="Senha" required autofocus>
                <label for="inputName"></label>
              </div>
              <div class="form-label-group">
                <input type="text" id="inputName" class="form-control" placeholder="Confirmar Senha" name="ConfirmarSenha" required autofocus>
                <label for="inputName"></label>
              </div>
              <br>
              <br>
              <div class="form-label-group">
                <button type="submite" class="btn btn-primary pull-right h2 form-control">Cadastrar Funcionário</button>
              </div>




            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

    <div id="list" class="row">
    
    </div> <!-- /#list -->
    
   </div> <!-- /#main -->


    <!-- Link do bootstrap e do javascript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

  </html>

