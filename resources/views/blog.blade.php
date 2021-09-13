@extends('layouts.app')
@section('head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Developed By M Abdur Rokib Promy">
    <meta name="author" content="cosmic">
    <meta name="keywords" content="Bootstrap 3, Template, Theme, Responsive, Corporate, Business">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>
        Acme | Home
    </title>

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
                    <h1>
                        Blog Two column
                    </h1>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <ol class="breadcrumb pull-right">
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Pages
                            </a>
                        </li>
                        <li class="active">
                            Blog Two Col
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="blog-left wow fadeInLeft">
                    <div class="blog-img">
                        <img src="img/blog/img8.jpg" alt=""/>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="blog-two-info">
                                <p>
                                    <i class="fa fa-user">
                                    </i>
                                    by
                                    <a href="#">
                                        John
                                    </a>

                                    |
                                    <i class="fa fa-calendar">
                                    </i>
                                    Sept 16th, 2012
                                    |
                                    <i class="fa fa-comment">
                                    </i>

                                    <a href="#">
                                        3 Comments
                                    </a>
                                    |
                                    <i class="fa fa-share">
                                    </i>

                                    <a href="#">
                                        39 Shares
                                    </a>
                                    <br>
                                    <i class="fa fa-tags">
                                    </i>
                                    Tags :
                                    <a href="#">
                      <span class="label label-info">
                        Snipp
                      </span>
                                    </a>

                                    <a href="#">
                      <span class="label label-info">
                        Bootstrap
                      </span>
                                    </a>

                                    <a href="#">
                      <span class="label label-info">
                        UI
                      </span>
                                    </a>

                                    <a href="#">
                      <span class="label label-info">
                        growth
                      </span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-content">
                        <h3>
                            This is heading
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <button class="btn btn-primary">
                        Read More
                    </button>

                </div>


                <div class="blog-left wow fadeInLeft">
                    <div class="blog-img">
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/qvBX9VgPGSg" allowfullscreen="" style="border:none;">
                            </iframe>
                            <!--
            <iframe src="https://www.youtube.com/embed/qvBX9VgPGSg" frameborder="0" allowfullscreen>
            </iframe>
            -->
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="blog-two-info">
                                <p>
                                    <i class="fa fa-user">
                                    </i>
                                    by
                                    <a href="#">
                                        John
                                    </a>

                                    |
                                    <i class="fa fa-calendar">
                                    </i>
                                    Sept 16th, 2012
                                    |
                                    <i class="fa fa-comment">
                                    </i>

                                    <a href="#">
                                        3 Comments
                                    </a>
                                    |
                                    <i class="fa fa-share">
                                    </i>

                                    <a href="#">
                                        39 Shares
                                    </a>
                                    <br>
                                    <i class="fa fa-tags">
                                    </i>
                                    Tags :
                                    <a href="#">
                            <span class="label label-info">
                              Snipp
                            </span>
                                    </a>

                                    <a href="#">
                            <span class="label label-info">
                              Bootstrap
                            </span>
                                    </a>

                                    <a href="#">
                            <span class="label label-info">
                              UI
                            </span>
                                    </a>

                                    <a href="#">
                            <span class="label label-info">
                              growth
                            </span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-content">
                        <h3>
                            This is heading
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <button class="btn btn-primary">
                        Read More
                    </button>
                </div>


                <div class="blog-left wow fadeInLeft">
                    <div class="blog-img">
                        <img src="img/blog/img7.jpg" alt=""/>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="blog-two-info">
                                <p>
                                    <i class="fa fa-user">
                                    </i>
                                    by
                                    <a href="#">
                                        John
                                    </a>

                                    |
                                    <i class="fa fa-calendar">
                                    </i>
                                    Sept 16th, 2012
                                    |
                                    <i class="fa fa-comment">
                                    </i>

                                    <a href="#">
                                        3 Comments
                                    </a>
                                    |
                                    <i class="fa fa-share">
                                    </i>

                                    <a href="#">
                                        39 Shares
                                    </a>
                                    <br>
                                    <i class="fa fa-tags">
                                    </i>
                                    Tags :
                                    <a href="#">
                          <span class="label label-info">
                            Snipp
                          </span>
                                    </a>

                                    <a href="#">
                          <span class="label label-info">
                            Bootstrap
                          </span>
                                    </a>

                                    <a href="#">
                          <span class="label label-info">
                            UI
                          </span>
                                    </a>

                                    <a href="#">
                          <span class="label label-info">
                            growth
                          </span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-content">
                        <h3>
                            This is heading
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <button class="btn btn-primary">
                        Read More
                    </button>
                </div>



            </div>
            <div class="col-md-6">

                <div class="blog-right wow fadeInRight">
                    <div class="blog-img">
                        <img src="img/blog/img6.jpg" alt=""/>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="blog-two-info">
                                <p>
                                    <i class="fa fa-user">
                                    </i>
                                    by
                                    <a href="#">
                                        John
                                    </a>

                                    |
                                    <i class="fa fa-calendar">
                                    </i>
                                    Sept 16th, 2012
                                    |
                                    <i class="fa fa-comment">
                                    </i>

                                    <a href="#">
                                        3 Comments
                                    </a>
                                    |
                                    <i class="fa fa-share">
                                    </i>

                                    <a href="#">
                                        39 Shares
                                    </a>
                                    <br>
                                    <i class="fa fa-tags">
                                    </i>
                                    Tags :
                                    <a href="#">
                        <span class="label label-info">
                          Snipp
                        </span>
                                    </a>

                                    <a href="#">
                        <span class="label label-info">
                          Bootstrap
                        </span>
                                    </a>

                                    <a href="#">
                        <span class="label label-info">
                          UI
                        </span>
                                    </a>

                                    <a href="#">
                        <span class="label label-info">
                          growth
                        </span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-content">
                        <h3>
                            This is heading
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <button class="btn btn-primary">
                        Read More
                    </button>

                </div>


                <div class="blog-right wow fadeInRight">
                    <div class="blog-img">
                        <img src="img/blog/img4.jpg" alt=""/>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="blog-two-info">
                                <p>
                                    <i class="fa fa-user">
                                    </i>
                                    by
                                    <a href="#">
                                        John
                                    </a>

                                    |
                                    <i class="fa fa-calendar">
                                    </i>
                                    Sept 16th, 2012
                                    |
                                    <i class="fa fa-comment">
                                    </i>

                                    <a href="#">
                                        3 Comments
                                    </a>
                                    |
                                    <i class="fa fa-share">
                                    </i>

                                    <a href="#">
                                        39 Shares
                                    </a>
                                    <br>
                                    <i class="fa fa-tags">
                                    </i>
                                    Tags :
                                    <a href="#">
                        <span class="label label-info">
                          Snipp
                        </span>
                                    </a>

                                    <a href="#">
                        <span class="label label-info">
                          Bootstrap
                        </span>
                                    </a>

                                    <a href="#">
                        <span class="label label-info">
                          UI
                        </span>
                                    </a>

                                    <a href="#">
                        <span class="label label-info">
                          growth
                        </span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-content">
                        <h3>
                            This is heading
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <button class="btn btn-primary">
                        Read More
                    </button>
                </div>


                <div class="blog-right wow fadeInRight">
                    <div class="blog-img">
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/qvBX9VgPGSg" allowfullscreen="" style="border:none;">
                            </iframe>
                        </div>
                        <!--
        <img src="img/blog/img2.jpg" alt=""/>
        -->
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="blog-two-info">
                                <p>
                                    <i class="fa fa-user">
                                    </i>
                                    by
                                    <a href="#">
                                        John
                                    </a>

                                    |
                                    <i class="fa fa-calendar">
                                    </i>
                                    Sept 16th, 2012
                                    |
                                    <i class="fa fa-comment">
                                    </i>

                                    <a href="#">
                                        3 Comments
                                    </a>
                                    |
                                    <i class="fa fa-share">
                                    </i>

                                    <a href="#">
                                        39 Shares
                                    </a>
                                    <br>
                                    <i class="fa fa-tags">
                                    </i>
                                    Tags :
                                    <a href="#">
                        <span class="label label-info">
                          Snipp
                        </span>
                                    </a>

                                    <a href="#">
                        <span class="label label-info">
                          Bootstrap
                        </span>
                                    </a>

                                    <a href="#">
                        <span class="label label-info">
                          UI
                        </span>
                                    </a>

                                    <a href="#">
                        <span class="label label-info">
                          growth
                        </span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-content">
                        <h3>
                            This is heading
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <button class="btn btn-primary">
                        Read More
                    </button>
                </div>




            </div>





            <!--blog end-->
        </div>

    </div>
@stop

@section('scripts')
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/hover-dropdown.js"></script>
    <script defer src="js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="assets/bxslider/jquery.bxslider.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/link-hover.js"></script>
    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
    <script src="js/wow.min.js"></script>
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
