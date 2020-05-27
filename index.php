
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
  

    <!-- CARROCEL-->    
<link href="#" rel="stylesheet">

<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>Present your <br>
                awesome product</h4>
              <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
                necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
              <a href="#">BUY NOW</a> </div>
            <div class="col-md-5 col-12 order-md-2 order-1"><img src="https://i.imgur.com/NKvkfTT.png" class="mx-auto" alt="slide"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>Present your <br>
                awesome product</h4>
              <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
                necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
              <a href="#">BUY NOW</a> </div>
            <div class="col-md-5 col-12 order-md-2 order-1"><img src="https://i.imgur.com/duWgXRs.png" class="mx-auto" alt="slide"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>Present your <br>
                awesome product</h4>
              <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
                necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
              <a href="#">BUY NOW</a> </div>
            <div class="col-md-5 col-12 order-md-2 order-1"><img src="https://i.imgur.com/DGkR4OQ.png" class="mx-auto" alt="slide"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
<!--slide end--> 
    
  <!-- INICIO SESSION PARCEIROS -->

  <section id="Parceiros" class="our-webcoderskull padding-lg">
  <div class="container">
    <div class="row heading heading-icon">
    <h2>Parceiros</h2>
    </div>
    <ul class="row">
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="http://www.webcoderskull.com/img/team4.png" class="img-responsive" alt=""></figure>
            <h3><a href="#">Web coder skull</a></h3>
            <p>Freelance Web Developer</p>
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
      </li>
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="http://www.webcoderskull.com/img/team1.png" class="img-responsive" alt=""></figure>
            <h3><a href="#">Kappua </a></h3>
            <p>Freelance Web Developer</p>
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
      </li>
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="http://www.webcoderskull.com/img/team4.png" class="img-responsive" alt=""></figure>
            <h3><a href="#">Manish </a></h3>
            <p>Freelance Web Developer</p>
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
       </li>
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="http://www.webcoderskull.com/img/team2.png" class="img-responsive" alt=""></figure>
            <h3><a href="#">Atul </a></h3>
            <p>Freelance Web Developer</p>
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
      </li>


 
      <li class="col-12 col-md-6 col-lg-3" >
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="http://www.webcoderskull.com/img/team2.png" class="img-responsive" alt=""></figure>
            <h3><a href="#">Atul </a></h3>
            <p>Freelance Web Developer</p>
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
      </li>



      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="http://www.webcoderskull.com/img/team2.png" class="img-responsive" alt=""></figure>
            <h3><a href="#">Atul </a></h3>
            <p>Freelance Web Developer</p>
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
      </li>


    </ul>
  </div>
</section>
<!-- FIM DOS TESTE -->



  <!-- INICIO DA SESSION LOGIN-->
<section class="">
    <div class="container">
	<div class="row">
		<div class="col-md-4 login-sec">
		    <h2 class="text-center">Login</h2>
		    <form class="login-form">
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase">Username</label>
    <input type="text" class="form-control" placeholder="">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase">Password</label>
    <input type="password" class="form-control" placeholder="">
  </div>
  
  
    <div class="">
    <button type="submit" class="btn btn-login btn-primary">Submit</button>
  </div>
  
</form>
<div class="copy-text"><a href="#"></a></div>
</div>


		<div class="col-md-8 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
            <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>Nossos Serviços - Feitos</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        </div>	
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="https://images.pexels.com/photos/7097/people-coffee-tea-meeting.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>Manutenção em notebook</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        </div>	
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="https://images.pexels.com/photos/872957/pexels-photo-872957.jpeg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>Manutenção em Tvs</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        </div>	
    </div>
  </div>
            </div>	   
		    
		</div>
	</div>
</div>
</section>
<!-- FIM DA SESSION LOGIN -->

    <footer class="container-fluid text-center margim bg-footer">
        <p>Desenvolvido por: Evanei Freitas - W&D Informática </p>
    </footer>

    <script src="bootstrap/js/jquery-3.5.1.slim.min.js"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')
    </script><script src="bootstrap/js/bootstrap.bundle.min.js"></script></body>
    
</body>
</html>