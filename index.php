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

    <!-- google font -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700'>
    
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
                <li><div class="hidden-xs" id="logo"><a href="#header">
                <img src="img/16.png" alt="">
            </a></div></li>
                <li><a href="#reservation">Menu</a></li>
                <li><a class="scroll" href="index.html/#special-offer">Special Offers</a></li>
                <li><a href="#chefs">Our Chefs</a></li>                
                <li><a href="#facts">Reviews</a></li>
                <li><a href="#food-menu">How To</a></li>
                <li><a href="#special-offser">Contact</a></li>
                <li><a href="#"><img class="shoppingCart" alt="User" src="img/cart1.png"></a></li>
                
                <!--fix for scroll spy active menu element-->
                <li style="display:none;"><a href="#header"></a></li>

            </ul>
        </div><!--/.navbar-collapse -->
        </div><!-- container -->
    </div><!-- menu -->

    <div id="header">
        <div class="bg-overlay"></div>
        <!-- <div class="center text-center">
            <div class="banner">
                <h1 class="">Foodicious</h1>
            </div>
            <div class="subtitle"><h4>AWESOME RESTAURANT THEME</h4></div>
        </div>
        <div class="bottom text-center">
            <a id="scrollDownArrow" href="#"><i class="fa fa-chevron-down"></i></a>
        </div> -->
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
                    <!-- <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae nunc auctor, malesuada est eu, pellentesque nisi.
                        Nam in enim lacinia, hendrerit neque non, placerat quam.Mauris eu tortor congue purus congue iaculis sit amet tincidunt
                        neque. Aliquam suscipit nisi erat, non ultricies ex aliquet a.

                    </p> -->
                    <div class="find-about">
                        <a href="#" class="btn btn-danger btn-lg discoverAll">Discover All</a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>


    <div id="special-offer" class="parallax pricing">
        <div class="container inner">

            <h2 class="section-title text-center">Special Offers</h2>
            <p class="lead main text-center">There is no sincerer love than the love of food!</p>
            
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    
                    <div class="pricing-item">
                        
                        <a href="#"><img class="img-responsive img-thumbnail" src="img/dish/dish3.jpg" alt=""></a>
                        
                        <div class="pricing-item-details">
                            
                            <h3><a href="#">Chicken Fried Rice</a></h3>
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            
                            <a class="btn btn-danger btn-lg" href="#">Order now</a>
                            <div class="clearfix"></div>
                        </div>
                        <!--price tag-->
                        <span class="hot-tag br-red">$26</span>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    
                    <div class="pricing-item">
                        
                        <a href="#"><img class="img-responsive img-thumbnail" src="img/dish/dish2.jpg" alt=""></a>
                        
                        <div class="pricing-item-details">
                            
                            <h3><a href="#">Hot Fried Chicken</a></h3>
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            
                            <a class="btn btn-danger btn-lg" href="#">Order now</a>
                            <div class="clearfix"></div>
                        </div>
                        <!--price tag-->
                        <span class="hot-tag br-lblue">$37</span>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix visible-md"></div>
                <div class="col-md-6 col-sm-6">
                    
                    <div class="pricing-item">
                        
                        <a href="#"><img class="img-responsive img-thumbnail" src="img/dish/dish4.jpg" alt=""></a>
                        
                        <div class="pricing-item-details">
                            
                            <h3><a href="#">Thi Chicken Momo</a></h3>
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            
                            <a class="btn btn-danger btn-lg" href="#">Order now</a>
                            <div class="clearfix"></div>
                        </div>
                        <!--price tag-->
                        <span class="hot-tag br-green">$54</span>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    
                    <div class="pricing-item">
                        
                        <a href="#"><img class="img-responsive img-thumbnail" src="img/dish/dish1.jpg" alt=""></a>
                        
                        <div class="pricing-item-details">
                            
                            <h3><a href="#">Cocktail Sushi</a></h3>
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            
                            <a class="btn btn-danger btn-lg" href="#">Order now</a>
                            <div class="clearfix"></div>
                        </div>
                        <!--price tag-->
                        <span class="hot-tag br-red">$27</span>
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
            <p class="lead main text-center">There is no sincerer love than the love of food!</p>
            
            <div class="row text-center chefs">
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper">
                            <img src="img/chefs/1.jpg">
                        </div>
                        <h2>Saransh Goila</h2>
                        <p>Vivamus sagittis lacuson augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum ultricies vehicula.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper">
                            <img src="img/chefs/3.jpg">
                        </div>
                        <h2>Jane Doe</h2>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cum sociis natoque penatibus et magnis dis parturient monte nascetur ultricies vehicula. </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper">
                            <img src="img/chefs/2.jpg">
                        </div>
                        <h2>Anton Mosimann</h2>
                        <p>Curabitur blandit matti tempus porttitor. Donec id elit non mi porta ut gravida at eget metus. Consectetur adipiscing elit ultricies vehicula.</p>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container --> 
    </div><!-- /#chefs -->


    <footer id="footer" class="dark-wrapper">
        <section class="ss-style-top"></section>
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
                <!-- <div class="section">
                    <div class="w3_agileits-subscribe timings text-center">
                        <div class="time">
                            <div>
                                <h5><i class="fa fa-map-marker" aria-hidden="true"></i>  </h5>
                                <p>No 5, Queens Road, Colombo-03</p>
                            </div>
                            <div>
                                <h5><i class="fa fa-phone" aria-hidden="true"></i>  </h5>
                                <p>011-5448956</p>
                            </div>
                            <div>
                                <h5><i class="fa fa-envelope" aria-hidden="true"></i>  </h5>
                                <p>info@foodicious.com</p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- /.container -->
    </footer>

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/jquery.actual.min.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>