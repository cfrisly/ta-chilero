<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="TaChilero tienda en linea articulos y mas,tu lo pides nosotros te lo llevamos y tu decides como pagas, todo los productos como te gustan al chilazo, Entrega en horas o un dia con envio gratis dentro de nuestra cobertura consulta.">
        <meta name="author" content="Ta-Chilero">

        <title>Ta-Chilero - Tienda en linea - Guatemala</title>

        <!-- Fonts 
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">-->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link href="css/main.css" rel="stylesheet">  
    </head>

    <body>
        <header id="header"><!-- Header -->
            <div class="header_top"><!--Header_top-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="social-icons float-left">
                                <ul class="nav nav-pills">
                                    <li><a href="https://wa.link/jmkqp0"><i class="fab fa-whatsapp"></i></a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                    <li><a href="https://t.me/FrislyChiquito"><i class="fab fa-telegram-plane"></i>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="contactinfo text-center">
                                <ul class="nav nav-pills">
                                    <li><a href="#">Cómo comprar</a></li></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="social-icons float-right">
                                <ul class="nav navbar-nav">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-tiktok"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header_top-->
        </header>

        <div class="header-middle"><!-- header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo float-left">
                            <a href=""><img src="images/home/logo.png" alt="TaChilero tu tienda en linea"></a>
                        </div>
                        <div class="btn-group float-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle=" dropdown">USA
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Canada</a></li>
                                    <li><a href="#">UK</a></li>
                                </ul>
                            </div>

                            <div></div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu float-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                @if (Route::has('login'))
                                    @auth
                                    <li><a href="{{ url('/home') }}">Home</a></li>
                                    @else
                                    <li><a href="{{ route('login') }}"><i class="fas fa-user-alt"></i></a></li>

                                        @if (Route::has('register'))
                                        <li><a href="{{ route('register') }}"><i class="fas fa-user-plus"></i>Registrate</a></li>
                                        @endif

                                    @endauth
                                @endif
                                <li><a href="{{ route('product.index') }}"><i class="fas fa-store"></i></a></li>
                                <li><a href="{{ route('cart.show') }}"><i class="fas fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Slider -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="mycarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <ol class="carousel-indicators">
                                    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#mycarousel" data-slide-to="1"></li>
                                    <li data-target="#mycarousel" data-slide-to="2"></li>
                                    <li data-target="#mycarousel" data-slide-to="3"></li>
                                </ol>
                                <div class="carousel-item active">
                                    <div class="col-sm-12">
                                        <img class="img-fluid img-thumbnail" src="images/home/20210120_124243_0000.png" alt="Third slide">
                                        <!--<img src="images/home/pricing.png"  class="pricing" alt="" />-->
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-sm-12">
                                        <img class="img-fluid img-thumbnail" src="images/home/20210120_124243_0000.png" alt="Third slide">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-sm-12">
                                        <img class="img-fluid img-thumbnail" src="images/home/20210120_124243_0000.png" alt="Third slide">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-sm-12">
                                        <img class="img-fluid img-thumbnail" src="images/home/20210120_124243_0000.png" alt="Third slide">
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
                                <!--<span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>-->
                                <i class="fas fa-chevron-left"></i>
                            </a>
                            <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
                                <!--<span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>-->
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section> <!-- Section categories -->
            <div class="container">
                <div class="section-title-category">
                    <button type="button" class="btn btn-warning">
                        <h5 class="section-title">
                            <span class="title">Categorías Destacadas</span>
                        </h5>
                    </button>
                </div>
                <div class="line"></div>

                <div class="row category-dest">
                    <!--Product category-->
                    <div class="col-sm-3">
                        <a href="">
                            <div class="card bg-dark text-white">
                                <img class="card-img" src="images/home/iphone.jpg" alt="telefonos inteligentes">
                                <div class="card-img-overlay text-center">
                                    <h5 class="card-title">Smartphons</h5>
                                    <p class="card-text">Telefonos inteligentes</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <div class="card bg-dark text-white">
                            <img class="card-img" src="images/home/tablets.jpg" alt="tabletas inteligentes">
                            <div class="card-img-overlay text-center">
                                <h5 class="card-title">Tablets</h5>
                                <p class="card-text">Tabletas inteligentes</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <a href="shop/c/tecnologia/1">
                           <div class="card bg-dark text-white">
                                <img class="card-img" src="images/home/smartwatch.jpg" alt="reloj y bandas inteligentes">
                                <div class="card-img-overlay text-center">
                                    <h5 class="card-title">Smartwatchs</h5>
                                    <p class="card-text">Relojes y bandas inteligentes</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <a href="">
                            <div class="card bg-dark text-white">
                                <img class="card-img" src="images/home/headphones.jpg" alt="Audifonos inalambricos e inalambricos">
                                <div class="card-img-overlay text-center">
                                    <h5 class="card-title">Headphones</h5>
                                    <p class="card-text">Audifonos alambricos e inalambricos</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Category</h2>
                            <div class="panel-group category-product" id="accordian"><!--category-productsr-->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="">
                                                <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Product category-->
                    <div class="col-sm-9">
                        <div class="features_items">
                            <h2 class="title text-center">Features Items</h2>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/product.jpg" alt="">
                                            <h2>Q 99.99</h2>
                                            <p>Nuevo producto</p>
                                            <a href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Agregar al carrito</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-title-category">
                    <button type="button" class="btn btn-warning">
                        <h5 class="section-title">
                            <span class="title">Recien Ingresados</span>
                        </h5>
                    </button>
                </div>
                <div class="line"></div>

                <div class="row product-dest">
                    <div class=""></div>
                </div>
            </div>
        </section>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Ta-Chilero
                </div>

                <div class="links">
                    <a href="{{ config('konekt.app_shell.ui.url') }}">Admin</a>
                    <a href="{{ route('product.index') }}">Shop Frontend</a>
                </div>
            </div>
        </div>

        <footer id="footer"><!--Footer-->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="companyinfo">
                                <h2><span>Ta</span>-Chilero</h2>
                                <p>A un clic de Tí</p>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="col-sm-3">
                                <div class="video-gallery ">
                                    <a href="#">
                                        <div class="iframe-img">
                                            <img src="images/home/pricing.png" alt="">
                                        </div>
                                        <div class="overlay-icon">
                                            <i class="fa fa-play-circle-o">HOla</i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                                <div class="video-gallery text-center">
                                    <a href="">
                                        <div class="iframe-img">
                                            <img src="images/home/pricing.png" alt="">
                                        </div>
                                        <div class="overlay-icon">
                                            <i class="fa fa-play-circle-o">HOla</i>
                                        </div>
                                    </a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-widget">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="single-widget">
                                <button type="button" class="btn btn-outline-warning">¿Cómo compro?</button><br>
                                <h2 class="how-buy">Información</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#">Sobre Nosotros</a></li>
                                    <li><a href="#">Términos y condiciones</a></li>
                                    <li><a href="#">Politica de privacidad</a></li>
                                    <li><a href="#">Ordenes y devoluciones</a></li>
                                    <li><a href="#">Términos de búsqueda</a></li>
                                    <li><a href="#">Envío en 1-3 días hábiles</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="single-widget">
                                <h2 class="how-buy">Dirección</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#"><span>Puedes recoger tu pedido en nuestra oficina con tu número de orden</span></a></li>
                                    <li><a href="#">0 calle 0-44 Zona 1,</a></li>
                                    <li><a href="#">Sumpango Sacatepequez</a></li>
                                    <li><a href="#">Horario de atención:</a></li>
                                    <li><a href="#">Lunes a viernes 9:00 - 17:00</a></li>
                                    <li><a href="#">Sábados 9:00 - 13:00</a></li>
                                    <li><a href="#"><span>Te recordamos que somos una tienda en línea, por lo que no tenemos productos fisicos en nuestra oficina.</span></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="single-widget">
                                <h2 class="how-buy">Contáctanos</h2>
                                <ul class="nav nav-pills icons">
                                    <li><a href="https://wa.link/jmkqp0"><i class="fab fa-whatsapp"></i></a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                    <li><a href="https://t.me/FrislyChiquito"><i class="fab fa-telegram-plane"></i>
                                </ul>

                                <h2 class="how-buy">Síguenos</h2>
                                <ul class="nav nav-pills">
                                    <li><a href="#"></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-tiktok"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <p class="text-center">Copyright 2020 &copy; Grupo Fis S.A.</p>
                    </div>
                </div>
            </div>
        </footer><!--/Footer-->

        <script src="https://kit.fontawesome.com/265f6e2015.js" crossorigin="anonymous"></script>
        <!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>
