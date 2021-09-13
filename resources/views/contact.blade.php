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
    <link rel="stylesheet" type="text/css" href="css/animate.css">
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
                        Contacts
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
                            Contacts
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-5 address">
                <section class="contact-infos">
                    <h4 class="title custom-font text-black">
                        ADDRESS
                    </h4>
                    <address>
                        Revox
                        Crossraid, 85/B Cross Street,
                        <br>
                        New York, USA
                        <br>
                        NA1 42SL
                    </address>
                </section>
                <section class="contact-infos">
                    <h4 class="title custom-font text-black">
                        BUSINESS HOURS
                    </h4>
                    <p>
                        Monday - Friday 8am to 4pm
                        <br>
                        Saturday - 7am to 6pm
                        <br>
                        Sunday- Closed
                        <br>
                    </p>
                </section>
                <section class="contact-infos">
                    <h4>
                        TELEPHONE
                    </h4>
                    <p>
                        <i class="icon-phone">
                        </i>
                        +088-01234567890
                    </p>

                    <p>
                        <i class="icon-phone">
                        </i>
                        +088-01234567890
                    </p>

                </section>
            </div>
            <div class="col-lg-7 col-sm-7 address">
                <h4>
                    Drop us a line so that we can hear from you
                </h4>
                <div class="contact-form">
                    <form role="form">
                        <div class="form-group">
                            <label for="name">
                                Name
                            </label>
                            <input type="text" placeholder="" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email
                            </label>
                            <input type="text" placeholder="" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone">
                                Phone
                            </label>
                            <input type="text" id="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone">
                                Message
                            </label>
                            <textarea placeholder="" rows="5" class="form-control">
                </textarea>
                        </div>
                        <button class="btn btn-info" type="submit">
                            Submit
                        </button>
                    </form>

                </div>
            </div>
        </div>

    </div>
    <div class="contact-map">
        <div id="map-canvas" style="width: 100%; height: 400px"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class='col-md-offset-2 col-md-8 text-center'>
                <h2>
                    Responsive Quote Carousel BS3
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-2 col-md-8 mar-b-30">
                <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                    <!-- Bottom Carousel Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#quote-carousel" data-slide-to="0" class="active">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="1">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="2">
                        </li>
                    </ol>

                    <!-- Carousel Slides / Quotes -->
                    <div class="carousel-inner">

                        <!-- Quote 1 -->
                        <div class="item active">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-3 text-center">
                                        <img class="img-circle" src="img/person_1.png" style="width: 100px;height:100px;" alt="">
                                    </div>
                                    <div class="col-sm-9">
                                        <p>
                                            Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!
                                        </p>
                                        <small>
                                            Someone famous
                                        </small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 2 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-3 text-center">
                                        <img class="img-circle" src="img/person_2.png" style="width: 100px;height:100px;" alt="">
                                    </div>
                                    <div class="col-sm-9">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor nec lacus ut tempor. Mauris.
                                        </p>
                                        <small>
                                            Someone famous
                                        </small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 3 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-3 text-center">
                                        <img class="img-circle" src="img/person_3.png" style="width: 100px;height:100px;" alt="">
                                    </div>
                                    <div class="col-sm-9">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor nec lacus ut tempor. Mauris.
                                        </p>
                                        <small>
                                            Someone famous
                                        </small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
@stop

@section('scripts')
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/hover-dropdown.js"></script>
    <script type="text/javascript" src="assets/bxslider/jquery.bxslider.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&AMP;sensor=false"></script>
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
    <script>
        $(document).ready(function() {
            //Set the carousel options
            $('#quote-carousel').carousel({
                    pause: true,
                    interval: 4000,
                }
            );
        });

        //google map
        function initialize() {
            var myLatlng = new google.maps.LatLng(51.508742,-0.120850);
            var mapOptions = {
                zoom: 5,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
            var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: 'Contact'
                }
            );
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
@stop
