<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php echo $this->headTitle($this->document->getProperty("title"))?>

    <!-- Google Web Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oswald:400,700,300" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400" rel="stylesheet" type="text/css">

    <!-- CSS Files -->
    <link href="/static/css/owl.carousel.css" rel="stylesheet">
    <link href="/static/css/shop.css" rel="stylesheet">

    <!--[if lt IE 9]>
        <script src="js/ie8-responsive-file-warning.js"></script>
    <![endif]-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/static/images/fav-144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/static/images/fav-114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/static/images/fav-72.png">
    <link rel="apple-touch-icon-precomposed" href="/static/images/fav-57.png">
    <link rel="shortcut icon" href="/static/images/fav.png">

</head>
<body class="lang-<?=$this->language?>">
<!-- Header Section Starts -->
    <header id="header-area">
    <!-- Header Top Starts -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                <!-- Header Links Starts -->
                    <div class="col-sm-8 col-xs-12">
                        <div class="header-links">
                            <ul class="nav navbar-nav pull-left">
                                <li>
                                    <a href="<?=$this->url(array("lang" => $this->language), "coreshop_index")?>">
                                        <i class="fa fa-home hidden-lg hidden-md" title="<?=$this->translate("Home")?>"></i>
                                        <span class="hidden-sm hidden-xs">
                                            <?=$this->translate("Home")?>
                                        </span>
                                    </a>
                                </li>
                                <?php if($this->session->user instanceof \CoreShop\Plugin\User) { ?>
                                    <li>
                                        <a href="<?=$this->url(array("lang" => $this->language, "action" => "profile"), "coreshop_user")?>">
                                            <i class="fa fa-user hidden-lg hidden-md" title="<?=$this->translate("My Account")?>"></i>
                                            <span class="hidden-sm hidden-xs">
                                                <?=$this->translate("My Account")?>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?=$this->url(array("lang" => $this->language, "action" => "list"), "coreshop_cart")?>">
                                            <i class="fa fa-shopping-cart hidden-lg hidden-md" title="<?=$this->translate("Shopping Cart")?>"></i>
                                            <span class="hidden-sm hidden-xs">
                                                <?=$this->translate("Shopping Cart")?>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?=$this->url(array("lang" => $this->language, "action" => "index"), "coreshop_checkout")?>">
                                            <i class="fa fa-crosshairs hidden-lg hidden-md" title="<?=$this->translate("Checkout")?>"></i>
                                            <span class="hidden-sm hidden-xs">
                                                <?=$this->translate("Checkout")?>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?=$this->url(array("lang" => $this->language, "action" => "logout"), "coreshop_user")?>">
                                            <i class="fa fa-crosshairs hidden-lg hidden-md" title="<?=$this->translate("Logout")?>"></i>
                                            <span class="hidden-sm hidden-xs">
                                                <?=$this->translate("Logout")?>
                                            </span>
                                        </a>
                                    </li>
                                <?php } else { ?>
                                <li>
                                    <a href="<?=$this->url(array("lang" => $this->language, "action" => "register"), "coreshop_user")?>">
                                        <i class="fa fa-unlock hidden-lg hidden-md" title="Register"></i>
                                        <span class="hidden-sm hidden-xs">
                                            <?=$this->translate("Register")?>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=$this->url(array("lang" => $this->language, "action" => "login"), "coreshop_user")?>">
                                        <i class="fa fa-lock hidden-lg hidden-md" title="Login"></i>
                                        <span class="hidden-sm hidden-xs">
                                            <?=$this->translate("Login")?>
                                        </span>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                <!-- Header Links Ends -->
                <!-- Currency & Languages Starts -->
                    <div class="col-sm-4 col-xs-12">

                        <div class="pull-right">

                            <!-- Currency Starts -->
                            <div class="btn-group">
                                <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                    <?=$this->translate("Currency")?>
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <ul class="pull-right dropdown-menu">
                                    <?php foreach(\Pimcore\Model\Object\CoreShopCurrency::getAvailable() as $currency) { ?>
                                    <li><a tabindex="-1" href="<?=substr($this->url(array("currency" => $currency->getId())), 1)?>"><?=$currency->getName()?> </a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        <!-- Currency Ends -->

                        <!-- Languages Starts -->
                            <div class="btn-group">
                                <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                    Language
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <ul class="pull-right dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="<?=$this->url(array("lang" => "en"), "coreshop_index", true)?>"><?=$this->translate("English")?></a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="<?=$this->url(array("lang" => "de"), "coreshop_index", true)?>"><?=$this->translate("German")?></a>
                                    </li>
                                </ul>
                            </div>
                        <!-- Languages Ends -->
                        </div>
                    </div>
                <!-- Currency & Languages Ends -->
                </div>
            </div>
        </div>
    <!-- Header Top Ends -->
    <!-- Main Header Starts -->
        <div class="main-header">
            <div class="container">
                <div class="row">
                <!-- Search Starts -->
                    <div class="col-md-3">
                        <form id="search" method="get" action="<?=$this->url(array("lang" => $this->language), "coreshop_search", true)?>">
                            <div class="input-group">
                              <input type="text" name="text" class="form-control input-lg" placeholder="<?=$this->translate("Search")?>">
                              <span class="input-group-btn">
                                <button class="btn btn-lg" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                              </span>
                            </div>
                        </form>
                    </div>
                <!-- Search Ends -->
                <!-- Logo Starts -->
                    <div class="col-md-6">
                        <div id="logo">
                            <a href="<?=$this->url(array("lang" => $this->language), "coreshop_index", true)?>"><img src="/static/images/logo.png" title="Spice Shoppe" alt="Spice Shoppe" class="img-responsive" /></a>
                        </div>
                    </div>
                <!-- Logo Starts -->
                <!-- Shopping Cart Starts -->
                    <div class="col-md-3">
                        <?=$this->template("coreshop/cart/helper/dropdown.php") ?>
                    </div>
                <!-- Shopping Cart Ends -->
                </div>
            </div>
        </div>
        <?=$this->template("coreshop/helper/menu.php");?>
    <!-- Main Header Ends -->
    </header>
<!-- Header Section Ends -->

<?= $this->layout()->content ?>

<!-- Footer Section Starts -->
    <footer id="footer-area">
    <!-- Footer Links Starts -->
        <div class="footer-links">
        <!-- Container Starts -->
            <div class="container">
                <!-- Information Links Starts -->
                    <div class="col-md-2 col-sm-6">
                        <h5>Information</h5>
                        <ul>
                            <li><a href="about.html"><?=$this->translate("About Us")?></a></li>
                            <li><a href="#"><?=$this->translate("Delivery Information")?></a></li>
                            <li><a href="#"><?=$this->translate("Privacy Policy")?></a></li>
                            <li><a href="#"><?=$this->translate("Terms &amp; Conditions")?></a></li>
                        </ul>
                    </div>
                <!-- Information Links Ends -->
                <!-- My Account Links Starts -->
                    <div class="col-md-2 col-sm-6">
                        <h5><?=$this->translate("My Account")?></h5>
                        <ul>
                            <li><a href="#"><?=$this->translate("My orders")?></a></li>
                            <li><a href="#"><?=$this->translate("My merchandise returns")?></a></li>
                            <li><a href="#"><?=$this->translate("My credit slips")?></a></li>
                            <li><a href="#"><?=$this->translate("My addresses")?></a></li>
                            <li><a href="#"><?=$this->translate("My personal info")?></a></li>
                        </ul>
                    </div>
                <!-- My Account Links Ends -->
                <!-- Customer Service Links Starts -->
                    <div class="col-md-2 col-sm-6">
                        <h5><?=$this->translate("Service")?></h5>
                        <ul>
                            <li><a href="contact.html"><?=$this->translate("Contact Us")?></a></li>
                            <li><a href="#"><?=$this->translate("Returns")?></a></li>
                            <li><a href="#"><?=$this->translate("Site Map")?></a></li>
                            <li><a href="#"><?=$this->translate("Affiliates")?></a></li>
                            <li><a href="#"><?=$this->translate("Specials")?></a></li>
                        </ul>
                    </div>
                <!-- Customer Service Links Ends -->
                <!-- Follow Us Links Starts -->
                    <div class="col-md-2 col-sm-6">
                        <h5>Follow Us</h5>
                        <ul>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">RSS</a></li>
                            <li><a href="#">YouTube</a></li>
                        </ul>
                    </div>
                <!-- Follow Us Links Ends -->
                <!-- Contact Us Starts -->
                    <div class="col-md-4 col-sm-12 last">
                        <h5>Contact Us</h5>
                        <ul>
                            <li>My Company</li>
                            <li>
                                1247 LB Nagar Road, Hyderabad, Telangana - 35
                            </li>
                            <li>
                                Email: <a href="#">info@demolink.com</a>
                            </li>
                        </ul>
                        <h4 class="lead">
                            Tel: <span>1(234) 567-9842</span>
                        </h4>
                    </div>
                <!-- Contact Us Ends -->
            </div>
        <!-- Container Ends -->
        </div>
    <!-- Footer Links Ends -->
    <!-- Copyright Area Starts -->
        <div class="copyright">
        <!-- Container Starts -->
            <div class="container">
            <!-- Starts -->
                <p class="pull-left">
                    &copy; 2015 lineofcode Dominik Pfaffenbauer. Designed By <a href="http://sainathchillapuram.com">Sainath Chillapuram</a>
                </p>
            <!-- Ends -->
            <!-- Payment Gateway Links Starts -->
                <ul class="pull-right list-inline">
                    <li>
                        <img src="/static/images/payment-icon/cirrus.png" alt="PaymentGateway" />
                    </li>
                    <li>
                        <img src="/static/images/payment-icon/paypal.png" alt="PaymentGateway" />
                    </li>
                    <li>
                        <img src="/static/images/payment-icon/visa.png" alt="PaymentGateway" />
                    </li>
                    <li>
                        <img src="/static/images/payment-icon/mastercard.png" alt="PaymentGateway" />
                    </li>
                    <li>
                        <img src="/static/images/payment-icon/americanexpress.png" alt="PaymentGateway" />
                    </li>
                </ul>
            <!-- Payment Gateway Links Ends -->
            </div>
        <!-- Container Ends -->
        </div>
    <!-- Copyright Area Ends -->
    </footer>
<!-- Footer Section Ends -->
<!-- JavaScript Files -->
<script src="/static/vendor/jquery-1.11.1.min.js"></script>
<script src="/static/vendor/jquery-migrate-1.2.1.min.js"></script>
<script src="/static/vendor/bootstrap.min.js"></script>
<script src="/static/vendor/bootstrap-hover-dropdown.min.js"></script>
<script src="/static/vendor/bootstrapvalidator/bootstrapValidator.min.js"></script>
<script src="/static/vendor/jquery.magnific-popup.min.js"></script>
<script src="/static/vendor/owl.carousel.min.js"></script>
<script src="/static/vendor/purl.js"></script>
<script src="/static/js/shop.js"></script>
<script src="/static/js/custom.js"></script>
</body>
</html>