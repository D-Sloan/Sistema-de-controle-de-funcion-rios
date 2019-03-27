  <!DOCTYPE html>
  <html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login De Administrador</title>

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

    </div> 
   
    <hr/>
      <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto"> 
        <div class="card card-signin my-5"> 
          <div class="card-body">
            <h4 class="card-title text-center">Login de Administrador</h4>
            <br>
            <br>
            <form name="LoginForm" action ="ProcessLogin.php" onsubmit="return validarDados()"  class="form-signin" method="POST" >

              <div class="form-label-group">
                <input type="text" id="CodAdm" class="form-control" placeholder="Codigo de Administrador" name="CodAdm" required autofocus>
                <label for="inputName"></label>
              </div>
              <div class="form-label-group">
                <input type="password" id="SenhaAdm" class="form-control" placeholder="Senha" name="SenhaAdm" required autofocus>
                <label for="inputName"></label>
              </div>
              <br>
              <br>
              <div class="form-label-group">
                <button type="submite" class="btn btn-primary pull-right h2 form-control">Logar</button>
              </div>




            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

   </div>


    <!-- Link do bootstrap e do javascript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

  </html>

