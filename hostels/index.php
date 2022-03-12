<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Hostel</title>
	<!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body id="home" class="homepage">

    <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="#home">Home</a></li>
                        <li class="scroll"><a href="#portfolio">Hostels</a></li>
                        <li class="scroll"><a href="#meet-team">A nossa equipa</a></li>                    
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    <section id="main-slider">
        <div class="owl-carousel">
        	<?php
  include "include/funcao.inc.php";
        include "include/settings.inc.php";
        	 $sql ="SELECT * FROM destaques WHERE id=39";
        	$dados =db_query($sql);
       		 $foto = $dados[0]["foto"];    	
	?>
            <div class="item" style="background-image: url('upload/destaques/<?php echo $foto;?>');">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
 <?php
        	 $sql ="SELECT * FROM destaques WHERE id=39";
        	$dados =db_query($sql);
       		 $nome = $dados[0]["titulo"];
        	$texto = $dados[0]["texto"];
	?>
                                    <h2><span>Hostel: </span><?php echo $nome; ?> </h2>
                                    <p><?php echo $texto; ?> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
             <?php
        	 $sql ="SELECT * FROM destaques WHERE id=40";
        	 $dados =db_query($sql);
       		 $foto = $dados[0]["foto"];    	
	?>
             <div class="item" style="background-image: url('upload/destaques/<?php echo $foto;?>');">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                   <?php
  
        	 $sql ="SELECT * FROM destaques WHERE id=40";
        	$dados =db_query($sql);
       		 $nome = $dados[0]["titulo"];
        	$texto = $dados[0]["texto"];
	?>
                                    <h2><span>Hostel: </span><?php echo $nome; ?> </h2>
                                    <p><?php echo $texto; ?> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->
	

    <section id="portfolio">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Hostels</h2>
            </div>

            <div class="text-center">
                <ul class="portfolio-filter">
                	 <?php
        	 $sql ="SELECT * FROM hostels WHERE id=2";
        	$dados =db_query($sql);
        	$cidade = $dados[0]["cidade"];
	?>
                    <li><a class="active" href="#" data-filter="*"><?php echo $cidade; ?></a></li>
                    <?php
        	 $sql ="SELECT * FROM hostels WHERE id=3";
        	$dados =db_query($sql);
        	$cidade = $dados[0]["cidade"];
	?>
                    <li><a href="#" data-filter=".filter1"><?php echo $cidade; ?></a></li>
                                  </ul><!--/#portfolio-filter-->
            </div>

            <div class="portfolio-items">
                <div class="portfolio-item filter1">
                    <div class="portfolio-item-inner">
                    <?php	$sql ="SELECT * FROM hostels WHERE id=2";
        	$dados =db_query($sql);
        	$titulo = $dados[0]["titulo"];
			$descricao = $dados[0]["descricao"];
			$foto = $dados[0]["foto"];
	?>
                      <img class="img-responsive" src="upload/hostels/<?php echo $foto;?>" alt="">
                        <div class="portfolio-info">
                            <h3><?php echo $titulo; ?></h3>
                            <?php echo $descricao; ?>
                            <a class="preview" href="upload/hostels/<?php echo $foto;?>" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
<?php	$sql ="SELECT * FROM hostels WHERE id=3";
        	$dados =db_query($sql);
        	$titulo = $dados[0]["titulo"];
			$descricao = $dados[0]["descricao"];
			$foto = $dados[0]["foto"];
	?>
                <div class="portfolio-item filter2 filter3">
                    <div class="portfolio-item-inner">
                       
                      <img class="img-responsive" src="upload/hostels/<?php echo $foto;?>" alt="">
                        <div class="portfolio-info">
                           <h3><?php echo $titulo; ?></h3>
                            <?php echo $descricao; ?>
                             <a class="preview" href="upload/hostels/<?php echo $foto;?>" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item filter1">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/hostels/03.jpg" alt="">
                        <div class="portfolio-info">
                        <h3>Hostel 3</h3>
                            300€
                            <a class="preview" href="images/hostels/03.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item filter2">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/hostels/04.jpg" alt="">
                        <div class="portfolio-info">
                          <h3>Hostel 4</h3>
                            400€
                            <a class="preview" href="images/hostels/04.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item filter1 filter3">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/hostels/05.jpg" alt="">
                        <div class="portfolio-info">
                          <h3>Hostel 5</h3>
                            500€
                            <a class="preview" href="images/hostels/05.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item filter2">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/hostels/06.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Hostel 6</h3>
                            600€
                            <a class="preview" href="images/hostels/06.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item filter1 filter3">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/hostels/07.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Hostel 7</h3>
                           700€
                            <a class="preview" href="images/hostels/07.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item filter2">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/hostels/08.jpg" alt="">
                        <div class="portfolio-info">
                           <h3>Hostel 8</h3>
                            800€
                            <a class="preview" href="images/hostels/08.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
            </div>
        </div><!--/.container-->
    </section><!--/#portfolio-->

    <section id="meet-team">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">A nossa equipa</h2>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="team-info">
	<?php
 		
        	 $sql ="SELECT * FROM equipa WHERE id=1";
        	$dados =db_query($sql);
       		 $nome = $dados[0]["nome"];
        	$funcao = $dados[0]["funcao"];
	?>
							<h3><?php echo $nome; ?></h3>
                            <span><?php echo $funcao; ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="team-info">
                          <?php
        	 $sql ="SELECT * FROM equipa WHERE id=2";
        	$dados =db_query($sql);
       		 $nome = $dados[0]["nome"];
        	$funcao = $dados[0]["funcao"];
	?>
							<h3><?php echo $nome; ?></h3>
                            <span><?php echo $funcao; ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="team-info">
                            <?php
        	 $sql ="SELECT * FROM equipa WHERE id=3";
        	$dados =db_query($sql);
       		 $nome = $dados[0]["nome"];
        	$funcao = $dados[0]["funcao"];
	?>
							<h3><?php echo $nome; ?></h3>
                            <span><?php echo $funcao; ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-info">
                            <?php
        	 $sql ="SELECT * FROM equipa WHERE id=4";
        	$dados =db_query($sql);
       		 $nome = $dados[0]["nome"];
        	$funcao = $dados[0]["funcao"];
	?>
							<h3><?php echo $nome; ?></h3>
                            <span><?php echo $funcao; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#meet-team-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <ul class="nav navbar-nav">
                       <li class="scroll active"><a href="#home">Home</a></li>
                        <li class="scroll"><a href="#portfolio">Hostels</a></li>
                        <li class="scroll"><a href="#meet-team">A nossa equipa</a></li>                               
                    </ul>
                </div>
                <div class="col-sm-6">
                    <ul class="social-icons">
                        <li><a target="_blank" href="//www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                        <li><a target="_blank" href="//www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
                        <li><a target="_blank" href="//www.youtube.com/"><i class="fa fa-youtube"></i></a></li>
                        <li><a target="_blank" href="//www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                    </ul><br />
					<div style="text-align:right;">&copy; 2018 Hostels & Cia</div>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <!--script src="js/bootstrap.min.js"></script-->
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mousescroll.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>