<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
<head>
    <title>Foodicious</title>

    <!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">

    <!-- css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/flexslider.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/pricing.css">

    <!-- google font -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Quicksand:300,400,700'>
    
    <!-- js -->
    <!-- <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script> -->

    <script src="../js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="../js/jquery.flexslider.min.js"></script>
    <script type="text/javascript">
            $(window).load(function() {
                $('.flexslider').flexslider({
                 animation: "slide",
                 controlsContainer: ".flexslider-container"
                });
            });
    </script>
</head>
<body data-spy="scroll" data-target="#navbar" data-offset="120" >
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <?php ?>
    <div id="menu" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header visible-xs">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><h2>Foodicious</h2></a>
            </div><!-- navbar-header -->
        <div id="navbar" class="navbar-collapse collapse">
            

            <ul class="nav navbar-nav navbar-header">
                <li><div class="hidden-xs" id="logo"><a href="./index.php">
                <img src="../img/logo.png" alt="">
            </a></div></li>
                <li><a href="#">Menu</a></li>
                <li><a href="../index.php#special-offer">Special Offers</a></li>
                <li><a href="../index.php#chefs">Our Chefs</a></li>                
                <li><a href="#">Reviews</a></li>
                <li><a href="#">How To</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="#"><img class="shoppingCart" alt="User" src="../img/cart1.png"></a></li>
                
                <!--fix for scroll spy active menu element-->
                <li style="display:none;"><a href="#header"></a></li>

            </ul>
        </div><!--/.navbar-collapse -->
        </div><!-- container -->
    </div><!-- menu -->

    <section id="pricing" class="pricing">
            <div id="w">
                <div class="pricing-filter">
                    <div class="pricing-filter-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="section-header">
                                        <h1 class="pricing-title">Tasty Menu</h1>
                                        <ul id="filter-list" class="clearfix">
                                            <li class="filter" data-filter="all">All</li>
                                            <li class="filter" data-filter=".breakfast">Breakfast</li>
                                            <!-- <li class="filter" data-filter=".special">Special</li> -->
                                            <li class="filter" data-filter=".desert">Dessert</li>
                                            <li class="filter" data-filter=".dinner">Dinner</li>
                                        </ul><!-- @end #filter-list -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">  
                        <div class="col-md-10 col-md-offset-1">
                            <ul id="menu-pricing" class="menu-price">
                                <li class="item dinner">

                                    <a href="food.html">
                                        <img src="../img/menu/buriyani.jpg" class="img-responsive" alt="Food" >
                                        <div class="menu-desc text-center">
                                            <span>
                                                <h3>Hyderabad Buriyani</h3>
                                                Delicious hyderabad chicken dum buriyani
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h3 class="white">Order now</h3>
                                </li>

                                <li class="item breakfast">

                                    <a href="#">
                                        <img src="../img/menu/food2.jpg" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Saganaki Prawns</h3>
                                                Deep fried in saganaki sauce 
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h3 class="white">Order now</h3>
                                </li>
                                <li class="item desert">

                                    <a href="#">
                                        <img src="../img/menu/mudCake.jpg" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Mud Cake</h3>
                                                Chocolate mud cake with juicy cream
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h3 class="white">Order now</h3>
                                </li>
                                <li class="item breakfast special">

                                    <a href="#">
                                        <img src="../img/menu/food4.jpg" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Thai Garlic Prawns</h3>
                                                Fried and blended with garlic
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h3 class="white">Order now</h3>
                                </li>
                                <li class="item breakfast">

                                    <a href="#">
                                        <img src="../img/menu/pasta.jpg" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Vegetable Pasta</h3>
                                                Blended with cheese and topped with leaves
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h3 class="white">Order now</h3>
                                </li>
                                <li class="item dinner special">

                                    <a href="#">
                                        <img src="../img/menu/chicken.jpg" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Butter Chicken </h3>
                                                Devilled chicken curry blended with butter
                                            </span>
                                        </div>
                                    </a>

                                    <h3 class="white">Order now</h3>
                                </li>
                                <li class="item desert">

                                    <a href="#">
                                        <img src="../img/menu/cheeseCake.jpg" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Cheese Cake</h3>
                                                Yummy cheesy cake topped with cherries
                                            </span>
                                        </div>
                                    </a>

                                    <h3 class="white">Order now</h3>
                                </li>
                                <li class="item dinner">

                                    <a href="#">
                                        <img src="../img/menu/lasagna.jpg" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Lasagna</h3>
                                                Blended with cheese and tomato sauce
                                            </span>
                                        </div>
                                    </a>

                                    <h3 class="white">Order now</h3>
                                </li>
                                <li class="item desert special">

                                    <a href="#">
                                        <img src="../img/menu/iceCream.jpg" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Ice-cream</h3>
                                                Chocolate Ice Cream topped with chocolate sauce
                                            </span>
                                        </div>
                                    </a>
                                    
                                    <h3 class="white">Order now</h3>
                                </li>  
                            </ul>
                        </div>   
                    </div>
                </div>

            </div> 
        </section>


    <footer id="footer" class="dark-wrapper">
        <div class="container inner">
            <div class="row">
                <div class="w3_agileits-subscribe text-center">
                    <div class="subscribe-head">
                        <h4>get subscribed! </h4>
                        <p class="sub-p">Never miss out on latest sales and best offers!</p>
                        <div class="subscribe-form">
                            <form action="#" method="post" class="subscribe_form">
                                <input type="email" placeholder="Email" required="">
                                <input type="submit" value="subscribe">
                            </form>
                            <div class="clearfix"> </div>
                        </div>
                        <p>We value your privacy & guarantee zero spamming.</p>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="social-bar">
                        <a href="#" class="fa fa-twitter-square tooltipped" title=""></a>
                        <a href="#" class="fa fa-facebook-square tooltipped" title=""></a>
                        <a href="#" class="fa fa-linkedin-square tooltipped" title=""></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </footer>


    <script src="../js/jquery.actual.min.js"></script>
    <script src="../js/jquery.scrollTo.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/jquery.mixitup.min.js" ></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/jquery.validate.js"></script>
    <script type="text/javascript" src="../js/jquery.hoverdir.js"></script>
    <script type="text/javascript" src="../js/jQuery.scrollSpeed.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>