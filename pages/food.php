﻿<!DOCTYPE html>
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
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700'>
    
    <!-- js -->
    <!-- <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script> -->

    <script src="../js/jquery-2.1.3.min.js"></script>
    <!-- <script type="text/javascript" src="../js/jquery.flexslider.min.js"></script>
    <script type="text/javascript">
            $(window).load(function() {
                $('.flexslider').flexslider({
                 animation: "slide",
                 controlsContainer: ".flexslider-container"
                });
            });
    </script> -->
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
                <img src="../img/16.png" alt="">
            </a></div></li>
                <li><a href="#reservation">Menu</a></li>
                <li><a class="scroll" href="index.html/#special-offer">Special Offers</a></li>
                <li><a href="#chefs">Our Chefs</a></li>                
                <li><a href="#facts">Reviews</a></li>
                <li><a href="#food-menu">How To</a></li>
                <li><a href="#special-offser">Contact</a></li>
                <li><a href="#"><img class="shoppingCart" alt="User" src="../img/cart1.png"></a></li>
                
                <!--fix for scroll spy active menu element-->
                <li style="display:none;"><a href="#header"></a></li>

            </ul>
        </div><!--/.navbar-collapse -->
        </div><!-- container -->
    </div><!-- menu -->

    <section id="pricing" class="pricing" style="background: transparent;" >


        <div class="container" style="padding-top: 45px;max-width:100%;margin-top: 40px">
            <div class="row" style="padding-top: 25px;width: auto;background: transparent" >
               <div class="col-xs-4 item-photo" style="max-width:100%;background: transparent">
                    <img style="max-width:100%;" src="../img/piza.jpeg" />
                    <div class="col-xs-11" style="padding-top: 20px;">
                        <button class="btn btn-primary btn-lg" >Add to Cart</button>
                    </div> 
                    <div class="col-xs-11" style="padding-top: 20px">
                        <button class="btn-lg discoverAll" >Buy Now</button>
                    </div>
                    <div class="col-xs-2" style="padding-top: 40px;background: transparent;width: auto;resize: all;">
                        <h3 style="color: black"><b>Ingredients :</b></h3><br>
                        <div class="col-xs-5" style="background: transparent;width: auto;">
                            <ul style="list-style-type: none;color: black;font-size: large;">
                                <li>Flour</li>
                                <li>Sugar</li>
                                <li>Butter</li>
                                <li>Mozeralla</li>
                                <li>Water</li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-xs-5" style="border:0px solid gray;background: transparent;width: auto" >
                    <!-- Datos del vendedor y titulo del producto -->   
                    <h1 style="color:black"><b>Classic Pizza</b></h1>
                    
                    <div class="table-responsive" style="width: auto;">
                    <table class="table table-responsive borderless" style="color: black;background: transparent;font-size: large;">
                        <tbody style="width: auto;">
                            <tr style="border: none;width: auto;">
                                <td style="border: none;float: left;width: auto;"><h4><B><?php $_GET['price']; ?></B></h4></td>
                                <td style="border: none;float: right;width: auto;"><h4>Discount 10%</h4></td>
                            </tr>
                            <tr style="border: none;">
                                <td style="border: none;float: left;width: auto;"><h3><B>Quantity</B></h3></td>
                            </tr>
                            <tr style="border: none;">
                                <td style="border: none;width: auto;"><input type="text" placeholder="Enter Quantity"/></td>
                                <td style="border: none;width: auto;"><button class="btn btn-primary btn-lg">Check Availability</button></td>
                            </tr>
                            <tr style="border: none;">
                                <td style="border: none;float: left"><h3><B>Toppings</B></h3></td>
                                
                            </tr>
                            <tr style="border: none;">
                                <td style="border: none;float: left"></td>
                                <td style="border: none;float: left"><input type="checkbox" value="DevilledFish" />Devilled Fish</td>
                            </tr>
                            <tr style="border: none;">
                                <td style="border: none;float: left"></td>
                                <td style="border: none;float: left"><input type="checkbox" value="Cheese" />Cheese</td>
                            </tr>
                            <tr style="border: none;">
                                <td style="border: none;float: left"></td>
                                <td style="border: none;float: left"><input type="checkbox" value="DevilledChicken" />Devilled Chicken</td>
                            </tr>
                            <tr style="border: none;">
                                <td style="border: none;float: left"></td>
                                <td style="border: none;float: left"><input type="checkbox" value="Sausage" />Sausage</td>
                            </tr>   
                            <tr style="border: none;">
                                <td style="border: none;float: left"><h3><b>Size<b></h3></b></td>
                            </tr>
                            <tr style="border: none;">
                                <td style="border: none;"><input type="radio" value="Small" />Small</td>
                                <td style="border: none;"><input type="radio" value="Medium" />Medium</td>
                                <td style="border: none;"><input type="radio" value="Large" />Large</td>
                            </tr>
                            <tr style="border: none;">
                                <td style="border: none;float: left"><h3><b>Nutrition</b></h3></td>
                            </tr>
                            <tr style="border: none;">
                                <td style="border: none;float: left"> </td>
                                <td style="border: none;float: left"> </td>
                                <td style="border: none;float: left"> Carbohydrate</td>
                                <td style="border: none;"> 300g</td>
                            </tr> 
                            <tr style="border: none;">
                                <td style="border: none;float: left"> </td>
                                <td style="border: none;float: left"> </td>
                                <td style="border: none;float: left;"> Calories</td>
                                <td style="border: none;"> 210</td>
                            </tr>
                            <tr style="border: none;">
                                <td style="border: none;float: left"> </td>
                                <td style="border: none;float: left"> </td>
                                <td style="border: none;float: left"> Protein</td>
                                <td style="border: none;"> 100g</td>
                            </tr>
                            <tr style="border: none;">
                                <td style="border: none;float: left"> </td>
                                <td style="border: none;float: left"> </td>
                                <td style="border: none;float: left"> Sugar</td>
                                <td style="border: none;"> 10g</td>
                            </tr>
                            <tr style="border: none;">
                                <td style="border: none;float: left"><h3><b>Serves</b></h3></td>
                            </tr> 
                            <tr style="border: none;">
                                <td style="border: none;"> 4 people</td>
                            </tr> 
                            
                            
                        </tbody>                        
                    </table>
                    <div>
                        <label style="float: left;color: black"><h3><b>Description</b></h3></label><br>
                        <label style="color:black">This is the best selling food item of our restuarant. xddgdg gsgs g sgs agsbdb fsg sgs  sss</label>                                
                    </div>
                    <!-- Precios -->
                    <!-- <h3 class="title-price">Rs 1700</h3>
                    <h3 style="margin-top:0px;">U$S 399</h3>
        
                    <!-- Detalles especificos del producto -->
                    <!-- <div class="section">
                        <h6 class="title-attr" style="margin-top:15px;" ><small>COLOR</small></h6>                    
                        <div>
                            <div class="attr" style="width:25px;background:#5a5a5a;"></div>
                            <div class="attr" style="width:25px;background:white;"></div>
                        </div>
                    </div>
                    <div class="section" style="padding-bottom:5px;">
                        <h6 class="title-attr"><small>CAPACIDAD</small></h6>                    
                        <div>
                            <div class="attr2">16 GB</div>
                            <div class="attr2">32 GB</div>
                        </div>
                    </div>   
                    <div class="section" style="padding-bottom:20px;">
                        <h6 class="title-attr"><small>CANTIDAD</small></h6>                    
                        <div>
                            <div class="btn-minus"><span class="glyphicon glyphicon-minus"></span></div>
                            <input value="1" />
                            <div class="btn-plus"><span class="glyphicon glyphicon-plus"></span></div>
                        </div>
                    </div>                
        
                    <!-- Botones de compra -->
                    <!-- <div class="section" style="padding-bottom:20px;">
                        <button class="btn btn-success"><span style="margin-right:20px" class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Agregar al carro</button>
                        <h6><a href="#"><span class="glyphicon glyphicon-heart-empty" style="cursor:pointer;"></span> Agregar a lista de deseos</a></h6>
                    </div>                                        
                </div>                              
        
                <div class="col-xs-9">
                    <ul class="menu-items">
                        <li class="active">Detalle del producto</li>
                        <li>Garantía</li>
                        <li>Vendedor</li>
                        <li>Envío</li>
                    </ul>
                    <div style="width:100%;border-top:1px solid silver">
                        <p style="padding:15px;">
                            <small>
                            Stay connected either on the phone or the Web with the Galaxy S4 I337 from Samsung. With 16 GB of memory and a 4G connection, this phone stores precious photos and video and lets you upload them to a cloud or social network at blinding-fast speed. With a 17-hour operating life from one charge, this phone allows you keep in touch even on the go. 
        
                            With its built-in photo editor, the Galaxy S4 allows you to edit photos with the touch of a finger, eliminating extraneous background items. Usable with most carriers, this smartphone is the perfect companion for work or entertainment.
                            </small>
                        </p>
                        <small>
                            <ul>
                                <li>Super AMOLED capacitive touchscreen display with 16M colors</li>
                                <li>Available on GSM, AT T, T-Mobile and other carriers</li>
                                <li>Compatible with GSM 850 / 900 / 1800; HSDPA 850 / 1900 / 2100 LTE; 700 MHz Class 17 / 1700 / 2100 networks</li>
                                <li>MicroUSB and USB connectivity</li>
                                <li>Interfaces with Wi-Fi 802.11 a/b/g/n/ac, dual band and Bluetooth</li>
                                <li>Wi-Fi hotspot to keep other devices online when a connection is not available</li>
                                <li>SMS, MMS, email, Push Mail, IM and RSS messaging</li>
                                <li>Front-facing camera features autofocus, an LED flash, dual video call capability and a sharp 4128 x 3096 pixel picture</li>
                                <li>Features 16 GB memory and 2 GB RAM</li>
                                <li>Upgradeable Jelly Bean v4.2.2 to Jelly Bean v4.3 Android OS</li>
                                <li>17 hours of talk time, 350 hours standby time on one charge</li>
                                <li>Available in white or black</li>
                                <li>Model I337</li>
                                <li>Package includes phone, charger, battery and user manual</li>
                                <li>Phone is 5.38 inches high x 2.75 inches wide x 0.13 inches deep and weighs a mere 4.59 oz </li>
                            </ul>  
                        </small>
                    </div>
                </div>  -->    
            </div> 
        </div>    
        </section>


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
