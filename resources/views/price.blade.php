@extends('layouts.app')
@section('head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Developed By M Abdur Rokib Promy">
    <meta name="author" content="cosmic">
    <meta name="keywords" content="Bootstrap 3, Template, Theme, Responsive, Corporate, Business">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>Acme | Home</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/flexslider.css"/>
    <link href="assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/animate.css">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
@stop

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>Pricing Table one</h1>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Price One</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="gray-bg price-container">
        <div class="container">
            <div class="row mar-b-30">
                <!--price start-->
                <div class="text-center price-one">
                    <h1 class="wow flipInX"> 30 days Free Trial on All Accounts </h1>
                    <p class="wow fadeIn">No risk. No hidden fees. Cancel at anytime. </p>
                </div>
                <div class="col-lg-3 col-sm-3">
                    <div class="pricing-table wow fadeInUp">
                        <div class="pricing-head">
                            <h1> Standard </h1>
                            <h2>
                                <span class="note">$</span>100</h2>
                        </div>
                        <ul class="list-unstyled">
                            <li>Free setup</li>
                            <li>Unlimited Bandwidth</li>
                            <li>2% Transaction fee</li>
                            <li>1Gb Storage</li>
                            <li>Private URLs</li>
                            <li>Enhanced Security</li>
                        </ul>
                        <div class="price-actions">
                            <a href="javascript:;" class="btn">Subscribe</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3">
                    <div class="pricing-table wow fadeInUp">
                        <div class="pricing-head">
                            <h1> Professional </h1>
                            <h2>
                                <span class="note">$</span>200</h2>
                        </div>
                        <ul class="list-unstyled">
                            <li>Free setup</li>
                            <li>Unlimited Bandwidth</li>
                            <li>0% Transaction fee</li>
                            <li>5Gb Storage</li>
                            <li>Private URLs</li>
                            <li>Enhanced Security</li>
                        </ul>
                        <div class="price-actions">
                            <a href="javascript:;" class="btn">Subscribe</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3">
                    <div class="pricing-table most-popular wow fadeInUp">
                        <div class="pricing-head">
                            <h1> Business </h1>
                            <h2>
                                <span class="note">$</span>300</h2>
                        </div>
                        <ul class="list-unstyled">
                            <li>Free setup</li>
                            <li>Unlimited Bandwidth</li>
                            <li>0% Transaction fee</li>
                            <li>10Gb Storage</li>
                            <li>Private URLs</li>
                            <li>Enhanced Security</li>
                        </ul>
                        <div class="price-actions">
                            <a href="javascript:;" class="btn">Subscribe</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3">
                    <div class="pricing-table wow fadeInUp">
                        <div class="pricing-head">
                            <h1> Enterprise </h1>
                            <h2>
                                <span class="note">$</span>400</h2>
                        </div>
                        <ul class="list-unstyled">
                            <li>Free setup</li>
                            <li>Unlimited Bandwidth</li>
                            <li>0% Transaction fee</li>
                            <li>Unlimited Storage</li>
                            <li>Private URLs</li>
                            <li>Enhanced Security</li>
                        </ul>
                        <div class="price-actions">
                            <a href="javascript:;" class="btn">Subscribe</a>
                        </div>
                    </div>
                </div>
                <!--price end-->
            </div>


        </div>
    </div>
@stop

@section('scripts')
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/hover-dropdown.js"></script>
    <script defer src="js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="assets/bxslider/jquery.bxslider.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/link-hover.js"></script>
    <script src="js/wow.min.js"></script>
    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
    <script>
        wow = new WOW(
            {
                boxClass:     'wow',      // default
                animateClass: 'animated', // default
                offset:       0          // default
            }
        )
        wow.init();
    </script>
@stop
