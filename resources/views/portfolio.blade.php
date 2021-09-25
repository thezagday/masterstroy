@extends('layouts.app')
@section('head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Developed By M Abdur Rokib Promy">
    <meta name="author" content="rokib">
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
    <link rel="stylesheet" href="css/animate.css"/>
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/owlcarousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/mixitup.css">

    <link rel="stylesheet" type="text/css" href="css/component.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />


    <link rel="stylesheet" href="css/magnific-popup.css">
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
                    <h1>Portfolio 3 column</h1>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li class="active">Portfolio 3 column</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul id="filters" class="clearfix">
                    <li><span class="filter active" data-filter="app card icon logo web">All</span></li>
                    <li><span class="filter" data-filter="app">App</span></li>
                    <li><span class="filter" data-filter="card">Card</span></li>
                    <li><span class="filter" data-filter="icon">Icon</span></li>
                    <li><span class="filter" data-filter="logo">Logo</span></li>
                    <li><span class="filter" data-filter="web">Web</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mar-b-30">
            <div id="portfoliolist-three">
                <div class="col-md-12">
                    <div class="portfolio logo" data-cat="logo">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-hover">
                                <div class="image-caption">
                                    <a href="img/test-pictures/1.jpg" class="magnefig label label-info icon" data-toggle="tooltip" data-placement="left" title="Zoom"><i class="fa fa-eye"></i></a>
                                    <a href="blog-detail.html" class="label label-info icon" data-toggle="tooltip" data-placement="top" title="Details"><i class="fa fa-link"></i></a>
                                    <a href="#" class="label label-info icon" data-toggle="tooltip" data-placement="right" title="Likes"><i class="fa fa-heart"></i></a>
                                </div>
                                <img src="img/test-pictures/1.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="portfolio logo" data-cat="logo">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-hover">
                                <div class="image-caption">
                                    <a href="img/test-pictures/2.jpg" class="magnefig label label-info icon" data-toggle="tooltip" data-placement="left" title="Zoom"><i class="fa fa-eye"></i></a>
                                    <a href="blog-detail.html" class="label label-info icon" data-toggle="tooltip" data-placement="top" title="Details"><i class="fa fa-link"></i></a>
                                    <a href="#" class="label label-info icon" data-toggle="tooltip" data-placement="right" title="Likes"><i class="fa fa-heart"></i></a>
                                </div>
                                <img src="img/test-pictures/2.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="portfolio logo" data-cat="logo">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-hover">
                                <div class="image-caption">
                                    <a href="img/test-pictures/3.jpg" class="magnefig label label-info icon" data-toggle="tooltip" data-placement="left" title="Zoom"><i class="fa fa-eye"></i></a>
                                    <a href="blog-detail.html" class="label label-info icon" data-toggle="tooltip" data-placement="top" title="Details"><i class="fa fa-link"></i></a>
                                    <a href="#" class="label label-info icon" data-toggle="tooltip" data-placement="right" title="Likes"><i class="fa fa-heart"></i></a>
                                </div>
                                <img src="img/test-pictures/3.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="portfolio logo" data-cat="logo">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-hover">
                                <div class="image-caption">
                                    <a href="img/test-pictures/4.jpg" class="magnefig label label-info icon" data-toggle="tooltip" data-placement="left" title="Zoom"><i class="fa fa-eye"></i></a>
                                    <a href="blog-detail.html" class="label label-info icon" data-toggle="tooltip" data-placement="top" title="Details"><i class="fa fa-link"></i></a>
                                    <a href="#" class="label label-info icon" data-toggle="tooltip" data-placement="right" title="Likes"><i class="fa fa-heart"></i></a>
                                </div>
                                <img src="img/test-pictures/4.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="portfolio logo" data-cat="logo">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-hover">
                                <div class="image-caption">
                                    <a href="img/test-pictures/5.jpg" class="magnefig label label-info icon" data-toggle="tooltip" data-placement="left" title="Zoom"><i class="fa fa-eye"></i></a>
                                    <a href="blog-detail.html" class="label label-info icon" data-toggle="tooltip" data-placement="top" title="Details"><i class="fa fa-link"></i></a>
                                    <a href="#" class="label label-info icon" data-toggle="tooltip" data-placement="right" title="Likes"><i class="fa fa-heart"></i></a>
                                </div>
                                <img src="img/test-pictures/5.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="portfolio logo" data-cat="logo">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-hover">
                                <div class="image-caption">
                                    <a href="img/test-pictures/6.jpg" class="magnefig label label-info icon" data-toggle="tooltip" data-placement="left" title="Zoom"><i class="fa fa-eye"></i></a>
                                    <a href="blog-detail.html" class="label label-info icon" data-toggle="tooltip" data-placement="top" title="Details"><i class="fa fa-link"></i></a>
                                    <a href="#" class="label label-info icon" data-toggle="tooltip" data-placement="right" title="Likes"><i class="fa fa-heart"></i></a>
                                </div>
                                <img src="img/test-pictures/6.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="portfolio logo" data-cat="logo">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-hover">
                                <div class="image-caption">
                                    <a href="img/test-pictures/7.jpg" class="magnefig label label-info icon" data-toggle="tooltip" data-placement="left" title="Zoom"><i class="fa fa-eye"></i></a>
                                    <a href="blog-detail.html" class="label label-info icon" data-toggle="tooltip" data-placement="top" title="Details"><i class="fa fa-link"></i></a>
                                    <a href="#" class="label label-info icon" data-toggle="tooltip" data-placement="right" title="Likes"><i class="fa fa-heart"></i></a>
                                </div>
                                <img src="img/test-pictures/7.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="portfolio logo" data-cat="logo">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-hover">
                                <div class="image-caption">
                                    <a href="img/test-pictures/8.jpg" class="magnefig label label-info icon" data-toggle="tooltip" data-placement="left" title="Zoom"><i class="fa fa-eye"></i></a>
                                    <a href="blog-detail.html" class="label label-info icon" data-toggle="tooltip" data-placement="top" title="Details"><i class="fa fa-link"></i></a>
                                    <a href="#" class="label label-info icon" data-toggle="tooltip" data-placement="right" title="Likes"><i class="fa fa-heart"></i></a>
                                </div>
                                <img src="img/test-pictures/8.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="portfolio app" data-cat="app">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-hover">
                                <div class="image-caption">
                                    <a href="img/portfolios/app/3.jpg" class="label magnefig label-info icon" data-toggle="tooltip" data-placement="left" title="Zoom"><i class="fa fa-eye"></i></a>
                                    <a href="blog-detail.html" class="label label-info icon" data-toggle="tooltip" data-placement="top" title="Details"><i class="fa fa-link"></i></a>
                                    <a href="#" class="label label-info icon" data-toggle="tooltip" data-placement="right" title="Likes"><i class="fa fa-heart"></i></a>
                                </div>
                                <img src="img/portfolios/app/3.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="portfolio web" data-cat="web">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-hover">
                                <div class="image-caption">
                                    <a href="img/portfolios/web/1.jpg" class="label magnefig label-info icon icon" data-toggle="tooltip" data-placement="left" title="Zoom"><i class="fa fa-eye"></i></a>
                                    <a href="blog-detail.html" class="label label-info icon" data-toggle="tooltip" data-placement="top" title="Details"><i class="fa fa-link"></i></a>
                                    <a href="#" class="label label-info icon" data-toggle="tooltip" data-placement="right" title="Likes"><i class="fa fa-heart"></i></a>
                                </div>
                                <img src="img/portfolios/web/1.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="portfolio card" data-cat="card">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-hover">
                                <div class="image-caption">
                                    <a href="img/portfolios/card/1.jpg" class="label magnefig label-info icon icon" data-toggle="tooltip" data-placement="left" title="Zoom"><i class="fa fa-eye"></i></a>
                                    <a href="blog-detail.html" class="label label-info icon" data-toggle="tooltip" data-placement="top" title="Details"><i class="fa fa-link"></i></a>
                                    <a href="#" class="label label-info icon" data-toggle="tooltip" data-placement="right" title="Likes"><i class="fa fa-heart"></i></a>
                                </div>
                                <img src="img/portfolios/card/1.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="portfolio app" data-cat="app">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-hover">
                                <div class="image-caption">
                                    <a href="img/portfolios/app/3.jpg" class="label magnefig label-info icon" data-toggle="tooltip" data-placement="left" title="Zoom"><i class="fa fa-eye"></i></a>
                                    <a href="blog-detail.html" class="label label-info icon" data-toggle="tooltip" data-placement="top" title="Details"><i class="fa fa-link"></i></a>
                                    <a href="#" class="label label-info icon" data-toggle="tooltip" data-placement="right" title="Likes"><i class="fa fa-heart"></i></a>
                                </div>
                                <img src="img/portfolios/app/3.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="portfolio card" data-cat="card">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-hover">
                                <div class="image-caption">
                                    <a href="img/portfolios/card/1.jpg" class="label magnefig label-info icon" data-toggle="tooltip" data-placement="left" title="Zoom"><i class="fa fa-eye"></i></a>
                                    <a href="blog-detail.html" class="label label-info icon" data-toggle="tooltip" data-placement="top" title="Details"><i class="fa fa-link"></i></a>
                                    <a href="#" class="label label-info icon" data-toggle="tooltip" data-placement="right" title="Likes"><i class="fa fa-heart"></i></a>
                                </div>
                                <img src="img/portfolios/card/1.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="portfolio card" data-cat="card">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-hover">
                                <div class="image-caption">
                                    <a href="img/portfolios/card/4.jpg" class="label magnefig label-info icon" data-toggle="tooltip" data-placement="left" title="Zoom"><i class="fa fa-eye"></i></a>
                                    <a href="blog-detail.html" class="label label-info icon" data-toggle="tooltip" data-placement="top" title="Details"><i class="fa fa-link"></i></a>
                                    <a href="#" class="label label-info icon" data-toggle="tooltip" data-placement="right" title="Likes"><i class="fa fa-heart"></i></a>

                                </div>
                                <img src="img/portfolios/card/4.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="portfolio logo" data-cat="logo">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-hover">
                                <div class="image-caption">
                                    <a href="img/portfolios/logo/5.jpg" class="label magnefig label-info icon" data-toggle="tooltip" data-placement="left" title="Zoom"><i class="fa fa-eye"></i></a>
                                    <a href="blog-detail.html" class="label label-info icon" data-toggle="tooltip" data-placement="top" title="Details"><i class="fa fa-link"></i></a>
                                    <a href="#" class="label label-info icon" data-toggle="tooltip" data-placement="right" title="Likes"><i class="fa fa-heart"></i></a>
                                </div>
                                <img src="img/portfolios/logo/5.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="portfolio app" data-cat="app">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-hover">
                                <div class="image-caption">
                                    <a href="img/portfolios/app/1.jpg" class="label magnefig label-info icon" data-toggle="tooltip" data-placement="left" title="Zoom"><i class="fa fa-eye"></i></a>
                                    <a href="blog-detail.html" class="label label-info icon" data-toggle="tooltip" data-placement="top" title="Details"><i class="fa fa-link"></i></a>
                                    <a href="#" class="label label-info icon" data-toggle="tooltip" data-placement="right" title="Likes"><i class="fa fa-heart"></i></a>
                                </div>
                                <img src="img/portfolios/app/1.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="portfolio card" data-cat="card">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-hover">
                                <div class="image-caption">
                                    <a href="img/portfolios/card/2.jpg" class="label magnefig label-info icon" data-toggle="tooltip" data-placement="left" title="Zoom"><i class="fa fa-eye"></i></a>
                                    <a href="blog-detail.html" class="label label-info icon" data-toggle="tooltip" data-placement="top" title="Details"><i class="fa fa-link"></i></a>
                                    <a href="#" class="label label-info icon" data-toggle="tooltip" data-placement="right" title="Likes"><i class="fa fa-heart"></i></a>
                                </div>
                                <img src="img/portfolios/card/2.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="portfolio logo" data-cat="logo">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-hover">
                                <div class="image-caption">
                                    <a href="img/portfolios/logo/5.jpg" class="label magnefig label-info icon" data-toggle="tooltip" data-placement="left" title="Zoom"><i class="fa fa-eye"></i></a>
                                    <a href="blog-detail.html" class="label label-info icon" data-toggle="tooltip" data-placement="top" title="Details"><i class="fa fa-link"></i></a>
                                    <a href="#" class="label label-info icon" data-toggle="tooltip" data-placement="right" title="Likes"><i class="fa fa-heart"></i></a>
                                </div>
                                <img src="img/portfolios/logo/5.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="portfolio logo" data-cat="logo">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-hover">
                                <div class="image-caption">
                                    <a href="img/portfolios/logo/5.jpg" class="label magnefig label-info icon" data-toggle="tooltip" data-placement="left" title="Zoom"><i class="fa fa-eye"></i></a>
                                    <a href="blog-detail.html" class="label label-info icon" data-toggle="tooltip" data-placement="top" title="Details"><i class="fa fa-link"></i></a>
                                    <a href="#" class="label label-info icon" data-toggle="tooltip" data-placement="right" title="Likes"><i class="fa fa-heart"></i></a>
                                </div>
                                <img src="img/portfolios/logo/5.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="portfolio icon" data-cat="icon">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-hover">
                                <div class="image-caption">
                                    <a href="img/portfolios/icon/3.jpg" class="label magnefig label-info icon" data-toggle="tooltip" data-placement="left" title="Zoom"><i class="fa fa-eye"></i></a>
                                    <a href="blog-detail.html" class="label label-info icon" data-toggle="tooltip" data-placement="top" title="Details"><i class="fa fa-link"></i></a>
                                    <a href="#" class="label label-info icon" data-toggle="tooltip" data-placement="right" title="Likes"><i class="fa fa-heart"></i></a>
                                </div>
                                <img src="img/portfolios/icon/3.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="portfolio web" data-cat="web">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-hover">
                                <div class="image-caption">
                                    <a href="img/portfolios/web/1.jpg" class="label magnefig label-info icon" data-toggle="tooltip" data-placement="left" title="Zoom"><i class="fa fa-eye"></i></a>
                                    <a href="blog-detail.html" class="label label-info icon" data-toggle="tooltip" data-placement="top" title="Details"><i class="fa fa-link"></i></a>
                                    <a href="#" class="label label-info icon" data-toggle="tooltip" data-placement="right" title="Likes"><i class="fa fa-heart"></i></a>
                                </div>
                                <img src="img/portfolios/web/1.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="portfolio icon" data-cat="icon">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-hover">
                                <div class="image-caption">
                                    <a href="img/portfolios/icon/1.jpg" class="label magnefig label-info icon" data-toggle="tooltip" data-placement="left" title="Zoom"><i class="fa fa-eye"></i></a>
                                    <a href="blog-detail.html" class="label label-info icon" data-toggle="tooltip" data-placement="top" title="Details"><i class="fa fa-link"></i></a>
                                    <a href="#" class="label label-info icon" data-toggle="tooltip" data-placement="right" title="Likes"><i class="fa fa-heart"></i></a>
                                </div>
                                <img src="img/portfolios/icon/1.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="portfolio web" data-cat="web">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-hover">
                                <div class="image-caption">
                                    <a href="img/portfolios/web/2.jpg" class="label magnefig label-info icon" data-toggle="tooltip" data-placement="left" title="Zoom"><i class="fa fa-eye"></i></a>
                                    <a href="blog-detail.html" class="label label-info icon" data-toggle="tooltip" data-placement="top" title="Details"><i class="fa fa-link"></i></a>
                                    <a href="#" class="label label-info icon" data-toggle="tooltip" data-placement="right" title="Likes"><i class="fa fa-heart"></i></a>
                                </div>
                                <img src="img/portfolios/web/2.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="portfolio icon" data-cat="icon">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-hover">
                                <div class="image-caption">
                                    <a href="img/portfolios/icon/3.jpg" class="label magnefig label-info icon" data-toggle="tooltip" data-placement="left" title="Zoom"><i class="fa fa-eye"></i></a>
                                    <a href="blog-detail.html" class="label label-info icon" data-toggle="tooltip" data-placement="top" title="Details"><i class="fa fa-link"></i></a>
                                    <a href="#" class="label label-info icon" data-toggle="tooltip" data-placement="right" title="Likes"><i class="fa fa-heart"></i></a>
                                </div>
                                <img src="img/portfolios/icon/3.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="portfolio icon" data-cat="icon">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-hover">
                                <div class="image-caption">
                                    <a href="img/portfolios/icon/5.jpg" class="label magnefig label-info icon" data-toggle="tooltip" data-placement="left" title="Zoom"><i class="fa fa-eye"></i></a>
                                    <a href="blog-detail.html" class="label label-info icon" data-toggle="tooltip" data-placement="top" title="Details"><i class="fa fa-link"></i></a>
                                    <a href="#" class="label label-info icon" data-toggle="tooltip" data-placement="right" title="Likes"><i class="fa fa-heart"></i></a>
                                </div>
                                <img src="img/portfolios/icon/5.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="portfolio web" data-cat="web">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-hover">
                                <div class="image-caption">
                                    <a href="img/portfolios/web/4.jpg" class="label magnefig label-info icon" data-toggle="tooltip" data-placement="left" title="Zoom"><i class="fa fa-eye"></i></a>
                                    <a href="blog-detail.html" class="label label-info icon" data-toggle="tooltip" data-placement="top" title="Details"><i class="fa fa-link"></i></a>
                                    <a href="#" class="label label-info icon" data-toggle="tooltip" data-placement="right" title="Likes"><i class="fa fa-heart"></i></a>
                                </div>
                                <img src="img/portfolios/web/4.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="portfolio logo" data-cat="logo">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-hover">
                                <div class="image-caption">
                                    <a href="img/portfolios/logo/2.jpg" class="label magnefig label-info icon" data-toggle="tooltip" data-placement="left" title="Zoom"><i class="fa fa-eye"></i></a>
                                    <a href="blog-detail.html" class="label label-info icon" data-toggle="tooltip" data-placement="top" title="Details"><i class="fa fa-link"></i></a>
                                    <a href="#" class="label label-info icon" data-toggle="tooltip" data-placement="right" title="Likes"><i class="fa fa-heart"></i></a>
                                </div>
                                <img src="img/portfolios/logo/2.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="portfolio logo" data-cat="logo">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-hover">
                                <div class="image-caption">
                                    <a href="img/portfolios/logo/3.jpg" class="label magnefig label-info icon" data-toggle="tooltip" data-placement="left" title="Zoom"><i class="fa fa-eye"></i></a>
                                    <a href="blog-detail.html" class="label label-info icon" data-toggle="tooltip" data-placement="top" title="Details"><i class="fa fa-link"></i></a>
                                    <a href="#" class="label label-info icon" data-toggle="tooltip" data-placement="right" title="Likes"><i class="fa fa-heart"></i></a>
                                </div>
                                <img src="img/portfolios/logo/3.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="portfolio icon" data-cat="icon">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-hover">
                                <div class="image-caption">
                                    <a href="img/portfolios/logo/5.jpg" class="label magnefig label-info icon" data-toggle="tooltip" data-placement="left" title="Zoom"><i class="fa fa-eye"></i></a>
                                    <a href="blog-detail.html" class="label label-info icon" data-toggle="tooltip" data-placement="top" title="Details"><i class="fa fa-link"></i></a>
                                    <a href="#" class="label label-info icon" data-toggle="tooltip" data-placement="right" title="Likes"><i class="fa fa-heart"></i></a>
                                </div>
                                <img src="img/portfolios/logo/5.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="portfolio card" data-cat="card">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-hover">
                                <div class="image-caption">
                                    <a href="img/portfolios/card/4.jpg" class="label magnefig label-info icon" data-toggle="tooltip" data-placement="left" title="Zoom"><i class="fa fa-eye"></i></a>
                                    <a href="blog-detail.html" class="label label-info icon" data-toggle="tooltip" data-placement="top" title="Details"><i class="fa fa-link"></i></a>
                                    <a href="#" class="label label-info icon" data-toggle="tooltip" data-placement="right" title="Likes"><i class="fa fa-heart"></i></a>
                                </div>
                                <img src="img/portfolios/card/4.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="portfolio logo" data-cat="logo">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-hover">
                                <div class="image-caption">
                                    <a href="img/portfolios/logo/5.jpg" class="label magnefig label-info icon" data-toggle="tooltip" data-placement="left" title="Zoom"><i class="fa fa-eye"></i></a>
                                    <a href="blog-detail.html" class="label label-info icon" data-toggle="tooltip" data-placement="top" title="Details"><i class="fa fa-link"></i></a>
                                    <a href="#" class="label label-info icon" data-toggle="tooltip" data-placement="right" title="Likes"><i class="fa fa-heart"></i></a>
                                </div>
                                <img src="img/portfolios/logo/5.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('scripts')
    <!-- js placed at the end of the document so the pages load faster
    <script src="js/jquery.js"></script> -->
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/hover-dropdown.js"></script>
    <script defer src="js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="assets/bxslider/jquery.bxslider.js"></script>
    <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="assets/owlcarousel/owl.carousel.js"></script>
    <script src="js/mixitup.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/link-hover.js"></script>
    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script type="text/javascript">
        $('.image-caption a').tooltip();

        $(function () {
            var filterList = {
                init: function () {
                    // MixItUp plugin
                    // http://mixitup.io
                    $('#portfoliolist-three').mixitup({
                        targetSelector: '.portfolio',
                        filterSelector: '.filter',
                        effects: ['fade'],
                        easing: 'snap',
                        // call the hover effect
                        onMixEnd: filterList.hoverEffect()
                    });

                },

                hoverEffect: function () {
                    $("[rel='tooltip']").tooltip();
                    // Simple parallax effect
                    $('#portfoliolist-three .portfolio .portfolio-hover').hover(
                        function(){
                            $(this).find('.image-caption').slideDown(250); //.fadeIn(250)
                        },
                        function(){
                            $(this).find('.image-caption').slideUp(250); //.fadeOut(205)
                        }
                    );
                }
            };
            // Run the show!
            filterList.init();
        });

        $( document ).ready(function() {
            $('.magnefig').each(function(){
                $(this).magnificPopup({
                    type:'image',
                    removalDelay: 300,
                    mainClass: 'mfp-fade'
                })
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                autoPlay: 3000, //Set AutoPlay to 3 seconds
                items : 4,
                itemsDesktop : [1199,3],
                itemsDesktopSmall : [979,3],
                stopOnHover : true,

            });

        });

        new WOW().init();
    </script>
@stop
