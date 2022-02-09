<?php
//error_reporting(0);
session_start();
include "_conf.php";
$prog = "Neseve";
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>NESA</title>
    <meta name="description" content="Elegant UI Toolkit for Professional Web Creatives Based on Bootstrap 4">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/shards.min.css">
    <link rel="stylesheet" href="css/shards-demo.css?v=1.1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body>
<!--<div class="loader"><div class="page-loader"></div></div>-->
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
                <img src="images/logo.png" alt="Example Navbar 1" class="mr-2" height="30px">
                <a class="navbar-brand" href="#"><?php echo     $prog ?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown-7" aria-controls="navbarNavDropdown-7" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown-7">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home
                                <span class="sr-only"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="eventi.php">Eventi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#info">Info</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="https://designrevision.com" id="navbarDropdownMenuLink-7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Altro
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink-7">
                                <a class="dropdown-item" href="crea_evento.php">Crea Evento</a>
                                <a class="dropdown-item" href="#">Diventa Collabboratore</a>
                                <a class="dropdown-item" href="#">Consigli</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-twitter"></i></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-facebook"></i></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-linkedin"></i></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-github"></i></a>
                        </li>
                    </ul>
                    <b>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php
    if(isset($_SESSION['nome'])){
        echo '<a type="button" class="btn btn-dark">' . $_SESSION['nome'] . '&nbsp;&nbsp;&nbsp;&nbsp;' .  $_SESSION['cognome']
   . '</a>'; } else  {
                                    echo '<a type="button" href="login.php" class="btn btn-dark">Accedi</a>
                                          <a type="button" href="register.php" class="btn btn-outline-dark">Registrati</a> ';
                                } 
?>
</b>
                </div>
            </nav>

<!-- JavaScript -->
<div id="fb-root"></div>
<script>(function (d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=1662270373824826"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script>
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="js/shards.min.js"></script>
<script src="js/demo.min.js"></script>
</body>
</html>