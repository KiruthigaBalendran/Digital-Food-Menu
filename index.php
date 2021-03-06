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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/overlay.css">

    <!-- google font -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Quicksand:300,400,700'>
    
    <!-- js -->
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
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
                <li><div class="hidden-xs" id="logo"><a href="index.php">
                <img src="img/logo.png" alt="">
            </a></div></li>
                <li><a href="pages/menu.php">Menu</a></li>
                <li><a href="#special-offer">Special Offers</a></li>
                <li><a href="#chefs">Our Chefs</a></li>                
                <li><a href="pages/review.html">Reviews</a></li>
                <li><a href="pages/howto.html">How To</a></li>
                <li><a href="pages/contact.html">Contact</a></li>
                <li><a href="pages/shoppingcart.html"><img class="shoppingCart" alt="User" src="img/cart1.png"></a></li>
                <li><button onclick="on()">Instructions</button></li>
                
                <!--fix for scroll spy active menu element-->
                <li style="display:none;"><a href="#header"></a></li>

            </ul>
        </div><!--/.navbar-collapse -->
        </div><!-- container -->
    </div><!-- menu -->

    <div id="header">
        <div class="bg-overlay"></div>
        <div class="container">  
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/home.jpg"  style="width:100%;">
              </div>

              <div class="item">
                <img src="img//dish/dahi.jpg"  style="width:100%;">
              </div>
            
              <div class="item">
                <img src="img/dish/smoothie.jpeg"  style="width:100%;">
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
    </div>
    <!-- /#header -->



    <div class="section w3ls-banner-btm-main" id="about">
        <div class="container">
            <div class="banner-btm">
                <div class="col-md-6 banner-btm-g1">
                    <img src="img/dish/chicken.jpg" class="img-responsive" alt="" />
                </div>
                <div class="col-md-6 banner-btm-g2">
                    <h3 class="title-main">welcome to Foodicious </h3>
                    <h4 class="sub-title">Feel the flavour, feel the aroma, feel the taste in every bite.</h4>
                    <div class="find-about">

                        <a href="pages/menu.php" class="btn-lg discoverAll">Discover all</a>

                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>


    <div id="special-offer" class="parallax pricing">
        <div class="container inner">

            <h2 class="section-title text-center">Special Offers</h2>
            <p class="lead main text-center">There is no sincere love than the love of food!</p>
            
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    
                    <div class="pricing-item">
                        
                        <a href="#"><img class="img-responsive img-thumbnail" src="img/dish/friedRice.jpg" alt=""></a>
                        
                        <div class="pricing-item-details">
                            
                            <h3><a href="#">Chicken Fried Rice</a></h3>
                            
                            <p>A dish of cooked basmati rice that has been stir fried and mixed with hot fried chicken,eggs,vegetables and topped with green leaves</p>
                            
                            <a class="btn-lg discoverAll" href="pages/food.html?title=Chicken Fried Rice&price=Rs.150&image=../img/dish/friedRice.jpg&description=A dish of cooked basmati rice that has been stir fried&carb=400g &cal=300&pro=200g &ing1=Chicken &ing2=Rice&ing3=Eggs">Order now</a>
                            <div class="clearfix"></div>
                        </div>
                        <!--price tag-->
                        <span class="hot-tag br-red">Rs.150</span>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    
                    <div class="pricing-item">
                        
                        <a href="#"><img class="img-responsive img-thumbnail" src="img/dish/dish2.jpg" alt=""></a>
                        
                        <div class="pricing-item-details">
                            
                            <h3><a href="#">Hot Fried Chicken</a></h3>
                            
                            <p>A dish of chicken pieces battered and pan-fried with crisp coating of breading crumbs</p>
                            
                            <a class="discoverAll btn-lg" href="pages/food.html?title=Hot Fried Chicken&price=Rs.100&image=../img/dish/dish2.jpg&description=A dish of chicken pieces battered and pan-fried with crisp coating&carb=200g &cal=700&pro=500g &ing1=Chicken &ing2=bread crumbs&ing3=Eggs">Order now</a>
                            <div class="clearfix"></div>
                        </div>
                        <!--price tag-->
                        <span class="hot-tag br-red">Rs.100</span>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix visible-md"></div>
                <div class="col-md-6 col-sm-6">
                    
                    <div class="pricing-item">
                        
                        <a href="#"><img class="img-responsive img-thumbnail" src="img/dish/dish4.jpg" alt=""></a>
                        
                        <div class="pricing-item-details">
                            
                            <h3><a href="#">Thai Chicken Momo</a></h3>
                            
                            <p>A traditional Nepali dish with devilled chicken blended in a special sauce</p>
                            
                            <a class="discoverAll btn-lg" href="pages/food.html?title=Thai Chicken Momo&price=Rs.500&image=../img/dish/dish4.jpg&description=A traditional Nepali dish with devilled chicken blended in a special sauce&carb=300g &cal=500&pro=400g &ing1=Chicken &ing2=Soya sauce&ing3=Eggs">Order now</a>
                            <div class="clearfix"></div>
                        </div>
                        <!--price tag-->
                        <span class="hot-tag br-red">Rs.500</span>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    
                    <div class="pricing-item">
                        
                        <a href="#"><img class="img-responsive img-thumbnail" src="img/dish/pizza.jpeg" alt=""></a>
                        
                        <div class="pricing-item-details">
                            
                            <h3><a href="#">Cheese and Sausage Pizza</a></h3>
                            
                            <p>A baked flatbread topped with cheese and sausage and garnished with vegetables </p>
                            
                            <a class="discoverAll btn-lg" href="pages/food.html?title=Cheese and Sausage Pizza&price=Rs.450&image=../img/dish/pizza.jpeg&description=A baked flatbread topped with cheese and sausage&carb=400g &cal=400&pro=600g &ing1=Sausage &ing2=Cheese&ing3=Bread">Order now</a>
                            <div class="clearfix"></div>
                        </div>
                        <!--price tag-->
                        <span class="hot-tag br-red">Rs.450</span>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container --> 
    </div>
    <!-- /#special-offser -->



    <div id="chefs">
        <div class="container inner">

            <h2 class="section-title text-center">Our Chefs</h2>
            <p class="lead main text-center">There is no sincere love than the love of food!</p>
            
            <div class="row text-center chefs">
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper">
                            <img src="img/chefs/1.jpg">
                        </div>
                        <h2>Saran Goshi</h2>
                        <p>An executive chief of our restaurant who supervises all kitchen areas to ensure a consistent, high quality product is produced</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper">
                            <img src="img/chefs/3.jpg">
                        </div>
                        <h2>Jane Doe</h2>
                        <p>Chief chef who prepares buffet meals and ensure a high level of customer satisfaction through watchful presence</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper">
                            <img src="img/chefs/2.jpg">
                        </div>
                        <h2>Anton David</h2>
                        <p>A senior chef who makes high level international delicious dishes for customers' higher satisfaction </p>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container --> 
    </div><!-- /#chefs -->


    <footer id="footer" class="dark-wrapper">
        <!-- <section class="ss-style-top"></section> -->
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

    <div id="overlay" onclick="off()">
        <div id="text">
            <p id="one">Click on 'Menu' to see the food menu. </p>
            <p id="two">Click on 'Instruction' button to show this screen</p>
            <p id="three">Click any where to close this screen<p>
            <p id="four">Scroll down</p>
            <p id="five">Click on 'Discover All' Button</p>
            <img src="img/pointingup.png" id="img1"></img>
            <img src="img/pointingup.png" id="img2"></img>
            <img src="img/pointingdown.png" id="img4"></img>
            <img src="img/pointingdown.png" id="img5"></img>
            <img src="img/taptap.png" id="img3"></img>
        </div>
    </div>

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/jquery.actual.min.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/overlay.js"></script>
</body>
</html>