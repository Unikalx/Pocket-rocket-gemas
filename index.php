<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="robots" content="nofollow" />
    <title>LUCID | HTML5 Responsive App Landing Page</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
    <script src="js/modernizr.js"></script>
    <script src="js/jquery-2.1.1.js"></script>

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<script>
    $(document).ready(function () {
$("#ho_adv").css("display", "none");
})
</script>
<!-- ====================================================
header section -->
<header class="top-header">
    <div class="container">
        <div class="row">
            <!-- nav starts here -->
            <div class="col-md-12">
                <nav class="navbar navbar-default">
                    <div class="container-fluid nav-bar">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href="index.html"><img src="img/logo.png" alt="" class="img-responsive logo"></a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#home">Home</a></li>
                                <li><a href="#features">Features</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#testimonials">Testimonials</a></li>
                                <li><a href="#pricing">Pricing</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header><!-- end of header section -->

<!-- banner section starts here -->
<section class="banner" id="home">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 wow fadeInLeft animated">
                <h3>introducing lucid theme</h3>
                <h1>Carefully crafted and beautiful landing page.</h1>
                <p>Etiam ullamcorper et turpis eget hendrerit. Praesent varius risus mi, at elementum magna ultricies accumsan. Cras venenatis lacus sed dolor placerat tempus. Morbi blandit at neque ut imperdiet.</p>
                <button class="download-btn">download now</button>
                <button class="features-btn">view features</button>
            </div>
            <div class="col-xs-6 banner-img wow fadeInRight animated">
                <img class="img-responsive" src="img/verticle-phone.png" alt="">
            </div>
        </div>
    </div>
</section><!-- end of banner section -->

<!-- feature sectiona -->
<section class="features text-center" id="features">
    <div class="container">
        <div class="row">
            <h4>product overview</h4>
            <h2>List of amazing features</h2>
            <img class="img-responsive" src="img/daag.png" alt="">
            <div class="col-md-3 wow zoomIn animated">
                <i class="fa fa-desktop"></i>
                <h3>Responsive</h3>
                <p>Fusce fermentum placerat magna ac pharetra. Aliquam euismod elit non ipsum lacinia consectetur.</p>
            </div>
            <div class="col-md-3 wow zoomIn animated">
                <i class="fa fa-cog"></i>
                <h3>Customizable</h3>
                <p>Fusce fermentum placerat magna ac pharetra. Aliquam euismod elit non ipsum lacinia consectetur.</p>
            </div>
            <div class="col-md-3 wow zoomIn animated">
                <i class="fa fa-facebook"></i>
                <h3>Lovely design</h3>
                <p>Fusce fermentum placerat magna ac pharetra. Aliquam euismod elit non ipsum lacinia consectetur.</p>
            </div>
            <div class="col-md-3 wow zoomIn animated">
                <i class="fa fa-mobile"></i>
                <h3>Mobile Friendly</h3>
                <p>Fusce fermentum placerat magna ac pharetra. Aliquam euismod elit non ipsum lacinia consectetur.</p>
            </div>
        </div>
    </div>
</section><!-- end of features section -->
<hr>
<!-- details section -->
<section class="details" id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-xs-6 col-sm-6 wow slideInUp animated">
                <img class="img-responsive details-phone" src="img/verticle-phone.png" alt="">
            </div>
            <div class="col-md-6 col-md-offset-1 col-xs-6 col-sm-6 wow slideInUp animated">
                <h4>dip into the details</h4>
                <h2>Beautiful on every device</h2>
                <img class="img-responsive" src="img/daag.png" alt="">
                <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. </p>
                <ul>
                    <li><i class="fa fa-trophy"></i>Awesome design</li>
                    <li><i class="fa fa-mobile"></i>Fully responsive</li>
                    <li><i class="fa fa-bolt"></i> Retina ready</li>
                    <li><i class="fa fa-tachometer"></i>Tons of features and easy to use</li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- end of details section -->

<!-- features details section -->
<section class="feature-detail">
    <div class="container">
        <div class="row">
            <div class="col-xs-5 wow fadeInLeft animated">
                <h4>dip into the details</h4>
                <h2>Super easy to customize</h2>
                <img src="img/daag.png" alt="">
                <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
            </div>
            <div class="col-xs-7 horizontal-phone wow fadeInRight animated">
                <img class="img-responsive" src="img/laid-phone2.png" alt="phone">
            </div>
        </div>
    </div>
</section><!-- end of features-detail section -->

<!-- pricing-slide section starts here -->
<section class="pricing-slide" id="testimonials">
    <div class="container">
        <div class="row">
            <div class="pricing-slide-heading text-center">
                <h4>quality has its price</h4>
                <h2>Pricings &amp; Plans</h2>
                <img class="img=responsive" src="img/daag.png" alt="">
            </div>
            <div class="the-pricing-slider">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="col-md-6 col-xs-12 col-sm-6 wow zoomIn animated">
                                <p>Once upon a time all the Rivers combined to protest against the action of the Sea in making their waters salt. “When we come to you,” said they to the Sea.</p>
                                <div class="person">
                                    <img class="img-circle img-responsive" src="img/slider-img-1.jpg" alt="">
                                    <h6>John Doe</h6>
                                    <h5>CEO, THE RIVERS COMPANY</h5>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 col-sm-6 wow zoomIn animated">
                                <p>A shoe is not only a design, but it's a part of your body language, the way you walk. The way you're going to move is quite dictated by your shoes.</p>
                                <div class="person">
                                    <img class="img-circle img-responsive" src="img/slider-img-2.jpg" alt="">
                                    <h6>Dean Winchester</h6>
                                    <h5>UX DESIGNER, GOOGLE INC.</h5>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-6 col-xs-12 col-sm-6 wow zoomIn animated">
                                <p>Once upon a time all the Rivers combined to protest against the action of the Sea in making their waters salt. “When we come to you,” said they to the Sea.</p>

                                <div class="person">
                                    <img class="img-circle img-responsive" src="img/slider-img-3.jpg" alt="">
                                    <h6>John Doe</h6>
                                    <h5>CEO, THE RIVERS COMPANY</h5>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 col-sm-6 wow zoomIn animated">
                                <p>A shoe is not only a design, but it's a part of your body language, the way you walk. The way you're going to move is quite dictated by your shoes.</p>
                                <div class="person">
                                    <img class="img-circle img-responsive" src="img/slider-img-5.jpg" alt="">
                                    <h6>Dean Winchester</h6>
                                    <h5>UX DESIGNER, GOOGLE INC.</h5>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-6 col-xs-12 col-sm-6 wow zoomIn animated">
                                <p>Once upon a time all the Rivers combined to protest against the action of the Sea in making their waters salt. “When we come to you,” said they to the Sea.</p>
                                <div class="person">
                                    <img class="img-circle img-responsive" src="img/slider-img-4.jpg" alt="">
                                    <h6>John Doe</h6>
                                    <h5>CEO, THE RIVERS COMPANY</h5>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 col-sm-6 wow zoomIn animated">
                                <p>A shoe is not only a design, but it's a part of your body language, the way you walk. The way you're going to move is quite dictated by your shoes.</p>
                                <div class="person">
                                    <img class="img-circle img-responsive" src="img/slider-img-6.jpg" alt="">
                                    <h6>Dean Winchester</h6>
                                    <h5>UX DESIGNER, GOOGLE INC.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- end of pricing-slide section -->

<!-- find section -->
<section class="download">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <p><span>Like what you see? </span>Get this great theme now!</p>
            </div>
            <div class="col-md-4 col-sm-4">
                <button class="features-btn">view features</button>
                <button class="download-btn">download now</button>
            </div>
        </div>
    </div>
</section><!-- end of find section -->

<!-- price-plan section -->
<section class="price-plan text-center" id="pricing">
    <div class="container">
        <div class="row">
            <div class="pricing-heading">
                <h4>quality has its price</h4>
                <h2>Pricings &amp; Plans</h2>
                <img class="img-responsive" src="img/daag.png" alt="">
            </div>
            <div class="pricing-tables">
                <div class="col-md-3 col-sm-6 wow zoomIn animated">
                    <div class="single-table free">
                        <div class="table-heading">
                            <h3>FREE</h3>
                        </div>
                        <div class="table-price">
                            <h5><span>$</span>0</h5>
                            <p>/per month</p>
                        </div>
                        <div class="table-description">
                            <p>Fusce fermentum placerat magna ac pharetra. Aliquam euismod elit non ipsum <a href="#">lacinia</a> consectetur.</p>
                            <button>ORDER NOW</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow zoomIn animated">
                    <div class="single-table personal">
                        <div class="table-heading">
                            <h3>Personal</h3>
                        </div>
                        <div class="table-price">
                            <h5><span>$</span>25</h5>
                            <p>/per month</p>
                        </div>
                        <div class="table-description">
                            <p>Fusce fermentum placerat magna ac pharetra. Aliquam euismod elit non ipsum <a href="#">lacinia</a> consectetur.</p>
                            <button>ORDER NOW</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow zoomIn animated">
                    <div class="single-table business">
                        <div class="table-heading">
                            <h3>Business</h3>
                        </div>
                        <div class="table-price business-price">
                            <h5><span>$</span>50</h5>
                            <p>/per month</p>
                        </div>
                        <div class="table-description">
                            <p>Fusce fermentum placerat magna ac pharetra. Aliquam euismod elit non ipsum <a href="#">lacinia</a> consectetur.</p>
                            <button>ORDER NOW</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow zoomIn animated">
                    <div class="single-table ultimate">
                        <div class="table-heading">
                            <h3>Ultimate</h3>
                        </div>
                        <div class="table-price">
                            <h5><span>$</span>99</h5>
                            <p>/per month</p>
                        </div>
                        <div class="table-description">
                            <p>Fusce fermentum placerat magna ac pharetra. Aliquam euismod elit non ipsum <a href="#">lacinia</a> consectetur.</p>
                            <button>ORDER NOW</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- end of price-plan section -->

<!-- contact section -->
<section class="contact text-center" id="contact">
    <div class="container">
        <div class="row">
            <div class="contact-heading">
                <h4>stay in touch</h4>
                <h2>Contact us</h2>
                <img class="img-responsive" src="img/daag.png" alt="">
            </div>
            <div class="col-md-2 col-md-offset-1 col-xs-4 col-sm-4">
                <i class="fa fa-phone"></i>
                <p>Phone: (415) 124-5678</p>
                <p>Fax: (412) 123-8290</p>
            </div>
            <div class="col-md-2 col-md-offset-2 col-xs-4 col-sm-4">
                <i class="fa fa-map-marker"></i>
                <p>1001 Brickell Bay Dr.</p>
                <p>Suite 1900 </p>
                <p>Miami, FL 33131</p>
            </div>
            <div class="col-md-2 col-md-offset-2 col-xs-4 col-sm-4 clearfix">
                <i class="fa fa-envelope-o"></i>
                <p><a class="__cf_email__" href="/cdn-cgi/l/email-protection" data-cfemail="95e0e6f0e7d5f8f4fcf9bbf6faf8">[email&#160;protected]</a><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></p>
            </div>
            <div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-12">
                <article class="contact-form">
                    <form action="contact">
                        <div class="col-md-5 col-md-offset-1 contact-form-left">
                            <input class="name" type="text" placeholder="NAME*">
                            <input class="email" type="email" placeholder="EMAIL*">
                            <input class="subject" type="text" placeholder="SUBJECT*">
                        </div>
                        <div class="col-md-5 contact-form-right text-right">
                            <textarea class="message" name="message" id="message" cols="30" rows="10" placeholder="MESSAGE"></textarea>
                            <input type="submit" class="submit-btn" value="send message">
                        </div>
                    </form>
                </article>
            </div>
        </div>
    </div>
</section><!-- end of contact section -->

<!-- google map api -->
<div class="map">
    <div class="container-fluid">
        <div class="row">
            <div id="map"></div> <!-- api map -->
        </div>
    </div>
</div>

<!-- footer starts here -->
<footer class="footer text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="icons">
                    <a href=""><i class="fa fa-behance"></i></a>
                    <a href=""><i class="fa fa-dribbble"></i></a>
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
                <p>COPYRIGHT &copy; 2015 <a href="#">Mostafizur Rahman</a></p>
            </div>
        </div>
    </div>
</footer>

<!-- script tags
============================================================= -->
<script src="js/smoothscroll.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/wow.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/gmaps.js"></script>
<script>
    var map = new GMaps({
        el: '#map',
        lat: -12.043333,
        lng: -77.028333
    });
</script>
</body>
</html>