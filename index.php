
<?php
   session_start();

?>

<!DOCTYPE html>
<head>
    <html lang="pt-br"></html>
    <title>W&D Informática</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="bootstrap/js/main.js"></script>
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">

 </head>


<body>

    
    <!--
    <form id="forLoginTop" method=post action=session2.php>
        Login<input type=text size=8 name=login><br>
        <input id="botao" type=submit value=Enviar>
    </form>
-->
<header class="menuSuperior">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">W&D Informática</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#quem-somos">Quem Somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Parceiros" tabindex="-1" aria-disabled="true">Parceiros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Serviços" tabindex="-1" aria-disabled="true">Serviços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php" tabindex="-1" aria-disabled="true">login</a>
          </li>
        </ul>

         <!-- INICIO DO FORMULÁRIO -->
        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
         <!--FINAL DO FORMULÁRIO -->

      </div>
    </nav>
  </header>
  

    <!-- CORPO DO SITE -->

    <section id="quem-somos">
       <div class="container-fluid quemsomos text-center margim">
           <h3 class="margim">Quem Somos ....</h3>
           <img class="rounded-circle" src="img/site1.jpeg" width="300" height="300" alt="" title="">
           <h3>Somos um time comprometido e com foco em resultados...</h3>
       </div>
    </section>

    <section class="" id="Parceiros">
        <div class="container-fluid text-center margim parceiros">
            <h3>Parceiros</h3>
            <div class="container">
                <div class="row">

                    <div class="col-md-4">
                       
                        <img class="rounded-circle" src="img/site3.jpeg" width="200" height="200" alt="" title="">
                        
                    </div>

                    <div class="col-md-4">
                        
                        <img class="rounded-circle" src="img/Fotonei.jpg" width="200" height="200" alt="" title="">
                       
                    </div>

                    <div class="col-md-4">
                    
                        <img class="rounded-circle" src="img/site2.jpeg" width="200" height="200" alt="" title="">
                    </div>
                    
                </div>
            </div>
        </div>

    </section>

    <section class="" id="Serviços">
        <div class="container-fluid text-center margim servicos">
            <h3>Serviços</h3>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        </p>
                        <img class="" src="img/site2.jpeg" width="100%" height="" alt="" title="">
                    </div>
                    <div class="col-md-4">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        </p>
                        <img class="" src="img/site2.jpeg" width="100%" height="" alt="" title="">
                    </div>
                    <div class="col-md-4">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        </p>
                        <img class="" src="img/site2.jpeg" width="100%" height="" alt="" title="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="container-fluid text-center margim bg-footer">
        <p>Desenvolvido por: Evanei Freitas - W&D Informática </p>
    </footer>

    <script src="bootstrap/js/jquery-3.5.1.slim.min.js"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')
    </script><script src="bootstrap/js/bootstrap.bundle.min.js"></script></body>
    
</body>
</html>