<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Kong's Footwear</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/stack-interface.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/socicon.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700" rel="stylesheet">

    </head>
    <body data-smooth-scroll-offset="77">
        <div class="nav-container">
            <div>
                <div class="bar bar--sm visible-xs">
                    <div class="container">
                        <div class="row">
                            <div class="col-3 col-md-2">
                                <a href="index.html"> <img class="logo logo-dark" alt="logo" src="img/logo-dark.png"> <img class="logo logo-light" alt="logo" src="img/logo-light.png"> </a>
                            </div>
                            <div class="col-9 col-md-10 text-right">
                                <a href="#" class="hamburger-toggle" data-toggle-class="#menu1;hidden-xs hidden-sm"> <i class="icon icon--sm stack-interface stack-menu"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <nav id="menu1" class="bar bar-1 hidden-xs bar--absolute bar--transparent">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-1 col-md-2 hidden-xs">
                                <div class="bar__module">
                                    <a href="#"> 
                                        <h2 class="outline-1">Kong's Footwear</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-11 col-md-12 text-right text-left-xs text-left-sm">
                                <div class="bar__module">
                                    <ul class="menu-horizontal text-left">
                                     
                                        
                              <div class="bar__module">
                                    <a class="btn btn--sm type--uppercase" href="{{route('frontend.auth.login')}}"> <span class="btn__text">
                                    Login
                                </span> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="main-container">
            <section class="cover imagebg height-100" data-overlay="3">
                <div class="background-image-holder"><img alt="background" src="img/bball1.jpeg"></div>
                <div class="container pos-vertical-center">
                    <div class="row">
                        <div class="col-md-9 col-lg-8">
                           <!--  <h1>Ecommerce CRUD. Created with STACK and LARAVEL</h1> -->
                            
                        </div>
                    </div>
                </div>
            </section>


            <section class="space--sm bg--secondary">
                <div class="container" id="products">
                    <h2 class="outline-1 text-center">PRODUCTS</h2>
                    <div class="row">
                        @foreach($products as $product)
                        <div class="col-sm-4">
                            <div class="feature"> <img alt="Image" src="/storage/images/{{$product->image}}" class="border--round">
                                <a href="/{{$product->id}}"><h4>{{$product->name}}</h4></a>
                                <p> {{$product->brand}} ({{$product->category->name}})</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>




            <footer class="text-center-xs space--xs bg--primary">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7">
                            
                        </div>
                        <div class="col-sm-5 text-right text-center-xs">
                            <ul class="social-list list-inline list--hover">
                                <li><a href="https://www.google.com/"><i class="socicon socicon-google icon icon--xs"></i></a></li>
                                <li><a href="https://www.twitter.com/"><i class="socicon socicon-twitter icon icon--xs"></i></a></li>
                                <li><a href="https://www.facebook.com/"><i class="socicon socicon-facebook icon icon--xs"></i></a></li>
                                <li><a href="https://www.instagram.com/"><i class="socicon socicon-instagram icon icon--xs"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-7"> <span class="type--fine-print">© <span class="update-year"></span> Kong Inc.</span>
                </div>
            </footer>
        </div>
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/parallax.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/scripts.js"></script>

    </body>

</html>