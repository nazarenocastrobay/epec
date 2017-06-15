<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Reclamos | ¡#ChauAcomodo en EPEC!</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Menu</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="../index.html">#ChauAcomodo</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="reclamo.html" target="_self">Home</a>
                    </li>
                    <li>
                        <a href="campana.html">Campaña</a>
                    </li>
                    <li>
                        <a href="amparo.html">Amparo</a>
                    </li>
                    <li>
                        <a href="#">EPEC</a>
                    </li>
                    <li>
                        <a href="puede.html">¡Si se puede!</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1>Reclamos:<br> Las voces unidas siempre se escuchan mas.</h1>
                        <h2 class="subheading">EPEC debe ser una empresa eficiente por y para los usuarios.</h2>
                        <span class="meta">Posteado por <a href="#">Laura Sesma</a> - 10 de Junio de 2017</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                
                <h2 class="section-heading">Reclamos</h2>
                
                    <p>Aunque la campaña <strong>#ChauAcomodo</strong> se centra en la necesidad de implementar concursos públicos en el proceso de selección de nuevos ingresantes a EPEC, sabemos que la deficiente administración de la empresa causa a diario un sinnúmero de perjuicios a miles de cordobeses, en esta sección podés contarnos tu caso.></p>

                    <p>Solo te pedimos que seas respetuoso y conciso, esta sección será moderada para evitar aquellos comentarios impertinentes.</p>

                    <h2 class="section-heading">#ChauAcomodo en EPEC</h2>

                   </div>
            </div>
        </div>
    </article>

    <hr>
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                
                    <ul class="list-group" >
                    <?php
                        require ('./api/connDB.php');
                        $db = mysqli_query($conn, "SELECT * FROM reclamos") or die(mysqli_error());
                        $reclamosAprobados = 0;
                        while($elemento= mysqli_fetch_array($db)){
                            if ($elemento['aprobado'] == "si") {
                              {   
                                echo "<li class=" . "list-group-item" . ">
                                        <h4>" . $elemento['nombre'] . "</h4>
                                        <p>" . $elemento['reclamo'] . "</p>
                                       </li>";
                              }
                              $reclamosAprobados++;
                          }
                        } 
                        if($reclamosAprobados === 0){
                            {   
                                echo "<li class=" . "list-group-item" . ">
                                        <p>Aún no hay reclamos. Sé el primero!</p>
                                       </li>";
                            }
                        }
                    ?>
                    </ul>
                    
        </div>
    </section>
   <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Sumate a nuestro reclamo</h2>
                    <h3 class="section-subheading text-muted">¡El momento de actuar es ahora!.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nombre" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Teléfono *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Tu mensaje *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">¡Enviar!</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; Ingenio 2017</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>

</body>

</html>
