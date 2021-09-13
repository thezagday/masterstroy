@extends('layouts.app')

@section('head')
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
@endsection

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>
                        About us
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
                            About
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="about-carousel wow fadeInLeft">
                    <div id="myCarousel" class="carousel slide">
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="active item">
                                <img src="img/service3.jpg" alt="">
                                <div class="carousel-caption">
                                    <p>
                                        Lorem ipsum dolor sit amet.
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/service2.jpg" alt="">
                                <div class="carousel-caption">
                                    <p>
                                        Blanditiis praesentium voluptatum
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/service5.jpg" alt="">
                                <div class="carousel-caption">
                                    <p>
                                        Blanditiis praesentium voluptatum
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Carousel nav -->
                        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                            <i class="fa fa-angle-left">
                            </i>
                        </a>
                        <a class="carousel-control right" href="#myCarousel" data-slide="next">
                            <i class="fa fa-angle-right">
                            </i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 about wow fadeInRight">
                <p>
                    Aenean nibh ante, lacinia non tincidunt nec, lobortis ut tellus. Sed in porta diam. Suspendisse potenti. Donec luctus ullamcorper nulla. Duis nec velit odio.Suspendisse potenti. Donec luctus ullamcorper nulla. Duis nec velit odio.
                </p>
                <ul class="list-unstyled">
                    <li>
                        <i class="fa fa-angle-right pr-10">
                        </i>
                        Vestibulum auctor dapibus neque.
                    </li>
                    <li>
                        <i class="fa fa-angle-right pr-10">
                        </i>
                        Lorem ipsum dolor sit amet adipiscing elit.
                    </li>

                    <li>
                        <i class="fa fa-angle-right pr-10">
                        </i>
                        Aliquam tincidunt mauris eu risus.
                    </li>

                    <li>
                        <i class="fa fa-angle-right pr-10">
                        </i>
                        Vestibulum auctor dapibus neque
                    </li>

                    <li>
                        <i class="fa fa-angle-right pr-10">
                        </i>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    </li>

                    <li>
                        <i class="fa fa-angle-right pr-10">
                        </i>
                        Aliquam tincidunt mauris eu risus.
                    </li>

                </ul>
                <blockquote>
                    <p>
                        Award winning digital agency. We bring a personal and effective approach to every project we work on, which is why.
                    </p>
                    <small>
                        CEO Jack Bour
                    </small>
                </blockquote>
            </div>
        </div>
        <div class="row">
            <div class="hiring">
                <h2 class="wow flipInX">
                    we are hiring
                </h2>
                <div class="col-lg-6 col-sm-6 about-hiring">
                    <div class="icon-wrap ico-bg round-five wow zoomIn" data-wow-duration="1s" data-wow-delay=".1s">
                        <i class="fa fa-user">
                        </i>
                    </div>
                    <div class="content">
                        <h3 class="title wow flipInX">
                            iOS / Mac OS Developer
                        </h3>
                        <p>
                            Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 about-hiring">
                    <div class="icon-wrap ico-bg round-five wow zoomIn" data-wow-duration="1s" data-wow-delay=".3s">
                        <i class="fa fa-user">
                        </i>
                    </div>
                    <div class="content">
                        <h3 class="title wow flipInX">
                            Frontend Developer
                        </h3>
                        <p>
                            Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 about-hiring">
                    <div class="icon-wrap ico-bg round-five wow zoomIn" data-wow-duration="1s" data-wow-delay=".5s">
                        <i class="fa fa-user">
                        </i>
                    </div>
                    <div class="content">
                        <h3 class="title wow flipInX">
                            Rails Developer
                        </h3>
                        <p>
                            Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 about-hiring">
                    <div class="icon-wrap ico-bg round-five wow zoomIn" data-wow-duration="1s" data-wow-delay=".7s">
                        <i class="fa fa-user">
                        </i>
                    </div>
                    <div class="content">
                        <h3 class="title wow flipInX">
                            PHP Developer
                        </h3>
                        <p>
                            Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="gray-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <!--testimonial start-->
                    <div class="about-testimonial boxed-style about-flexslider ">
                        <section class="slider wow fadeInRight">
                            <div class="flexslider">
                                <ul class="slides about-flex-slides">
                                    <li>
                                        <div class="about-testimonial-image ">
                                            <img alt="" src="img/person_1.png">
                                        </div>
                                        <a class="about-testimonial-author" href="#">
                                            Russel Reagan
                                        </a>
                                        <span class="about-testimonial-company">CCD Realestate</span>
                                        <div class="about-testimonial-content">
                                            <p class="about-testimonial-quote">
                                                Donec ut purus sed tortor malesuada venenatis eget eget lorem. Nullam tempor lectus a ligula lobortis pretium. Donec ut purus sed tortor malesuada venenatis eget eget lorem.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="about-testimonial-image ">
                                            <img alt="" src="img/person_2.png">
                                        </div>
                                        <a class="about-testimonial-author" href="#">
                                            Steven gerrard
                                        </a>
                                        <span class="about-testimonial-company">
                            Molt BVG
                          </span>
                                        <div class="about-testimonial-content">
                                            <p class="about-testimonial-quote">
                                                Pellentesque et pulvinar enim. Quisque at tempor ligula. Maecenas augue ante, euismod vitae egestas sit amet, accumsan eu nulla. Nullam tempor lectus a ligula lobortis pretium. Donec ut purus sed tortor malesuada venenatis eget eget lorem.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <!--testimonial end-->
                </div>
                <div class="col-lg-7" id="skillz">
                    <h3 class="skills">
                        Our Crazy Skills
                    </h3>

                    <div class="skill_bar">
                        <div class="skill_bar_progress skill_one">
                            <p>
                                Web Design : 60% Complete
                            </p>
                        </div>
                    </div>

                    <div class="skill_bar">
                        <div class="skill_bar_progress skill_two">
                            <p>
                                Html/CSS : 90% Complete
                            </p>
                        </div>
                    </div>

                    <div class="skill_bar">
                        <div class="skill_bar_progress skill_three">
                            <p>
                                Wordpress : 70% Complete
                            </p>
                        </div>
                    </div>

                    <div class="skill_bar">
                        <div class="skill_bar_progress skill_four">
                            <p>
                                Graphic Design : 55% Complete
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="tourpackages-carousel">

        <div class="row">
            <div class="profile">
                <h2>
                    OUR TEAM
                </h2>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail wow fadeInUp" data-wow-delay=".1s">
                        <img src="img/team/member1.jpg" alt="">
                        <div class="caption">
                            <h4>
                                Thumbnail label
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit
                            </p>
                            <div class="team-social-link">
                                <a href="#">
                                    <i class="fa fa-facebook">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-pinterest">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-google-plus">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-github">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail wow fadeInUp" data-wow-delay=".3s">
                        <img src="img/team/member2.jpg" alt="">
                        <div class="caption">
                            <h4>
                                Thumbnail label
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit
                            </p>
                            <div class="team-social-link">
                                <a href="#">
                                    <i class="fa fa-facebook">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-pinterest">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-google-plus">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-github">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail wow fadeInUp" data-wow-delay=".5s">
                        <img src="img/team/member3.jpg" alt="">
                        <div class="caption">
                            <h4>
                                Thumbnail label
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit
                            </p>
                            <div class="team-social-link">
                                <a href="#">
                                    <i class="fa fa-facebook">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-pinterest">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-google-plus">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-github">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail wow fadeInUp" data-wow-delay=".7s">
                        <img src="img/team/member4.jpg" alt="">
                        <div class="caption">
                            <h4>
                                Thumbnail label
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit
                            </p>
                            <div class="team-social-link">
                                <a href="#">
                                    <i class="fa fa-facebook">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-pinterest">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-google-plus">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-github">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End row -->

        </div>
        <!-- End container -->
    </div>
@endsection

@section('scripts')
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/hover-dropdown.js"></script>
    <script type="text/javascript" src="assets/bxslider/jquery.bxslider.js"></script>
    <script defer src="js/jquery.flexslider.js"></script>
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

        $(window).load(function() {
            $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider) {
                        $('body').removeClass('loading');
                    }
                }
            );
        });

        $(window).scroll(function() {
            $('#skillz').each(function(){
                var imagePos = $(this).offset().top;
                var viewportheight = window.innerHeight;

                var topOfWindow = $(window).scrollTop();
                if (imagePos < topOfWindow+viewportheight) {
                    $('.skill_bar').fadeIn('slow');
                    $('.skill_one').animate({
                            width:'60%'}
                        , 2000);
                    $('.skill_two').animate({
                            width:'90%'}
                        , 2000);
                    $('.skill_three').animate({
                            width:'70%'}
                        , 1000);
                    $('.skill_four').animate({
                            width:'55%'}
                        , 1000);
                    $('.skill_bar_progress p').fadeIn('slow',function(){

                        }
                    );
                }
            });
        });
    </script>
@endsection
