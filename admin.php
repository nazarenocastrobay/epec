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
    <link href="demanda/css/clean-blog.min.css" rel="stylesheet">

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
    <style>
        .inline{
            display: inline-block;
        }
        .aprobado{
            background: #d9ffda;
        }
        .desaprobado{
            background: #ffa2a2;
        }
    </style>
</head>

<body>
    


    <!-- Post Content -->

    <hr>
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Aprobar/Desaprobar Reclamos</h2>
                    <ul class="list-group aprobacion" >
                    <?php
                        require ('demanda/api/connDB.php');
                        $db = mysqli_query($conn, "SELECT * FROM reclamos") or die(mysqli_error());
                        $reclamosAprobados = 0;
                        while($elemento= mysqli_fetch_array($db)){
                                if ($elemento['aprobado'] == "si") {
                                      {   
                                        echo "<li class=" . '"list-group-item row col-lg-12 aprobado"' . ">
                                                <div class=" . '"col-lg-12"' . ">
                                                    <h4 class=" . '"badge inline"' . ">" . $elemento['index'] . "</h4>
                                                    <h4 class=" . '"inline"' . ">" . $elemento['nombre'] . "</h4>
                                                    <p>" . $elemento['reclamo'] . "</p>
                                                </div>
                                                <div class=".'"text-center"'.">
                                                    <button class=" . '"btn btn-success"' . ">Aprobar</button>
                                                    <button class=" . '"btn btn-danger"' . ">Desaprobar</button>
                                                </div>
                                               </li>";
                                      }
                                  } else {
                                    {   
                                        echo "<li class=" . '"list-group-item row col-lg-12 desaprobado"' . ">
                                                <div class=" . '"col-lg-12"' . ">
                                                    <h4 class=" . '"badge inline"' . ">" . $elemento['index'] . "</h4>
                                                    <h4 class=" . '"inline"' . ">" . $elemento['nombre'] . "</h4>
                                                    <p>" . $elemento['reclamo'] . "</p>
                                                </div>
                                                <div class=".'"text-center"'.">
                                                    <button class=" . '"btn btn-success"' . ">Aprobar</button>
                                                    <button class=" . '"btn btn-danger"' . ">Desaprobar</button>
                                                </div>
                                               </li>";
                                      }
                                  }
                        } 
                    ?>
                    </ul>
                    
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

    <script src="js/aprobacion.js"></script>

</body>

</html>
