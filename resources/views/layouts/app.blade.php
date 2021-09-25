<!DOCTYPE html>
<html lang="en">
<head>
    @section('head')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Developed By M Abdur Rokib Promy">
        <meta name="author" content="cosmic">
        <meta name="keywords" content="Bootstrap 3, Template, Theme, Responsive, Corporate, Business">
        <link rel="shortcut icon" href="img/favicon.png">

        <title>
            Masterstroy.by | Home
        </title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/theme.css" rel="stylesheet">
        <link href="css/bootstrap-reset.css" rel="stylesheet">
        <!-- <link href="css/bootstrap.min.css" rel="stylesheet">-->

        <!--external css-->
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/flexslider.css"/>
        <link href="assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="assets/owlcarousel/owl.carousel.css">
        <link rel="stylesheet" href="assets/owlcarousel/owl.theme.css">

        <link href="css/superfish.css" rel="stylesheet" media="screen">
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'> -->

        <!-- Custom styles for this template -->
        <link rel="stylesheet" type="text/css" href="css/component.css">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/style-responsive.css" rel="stylesheet" />

        <link rel="stylesheet" type="text/css" href="css/parallax-slider/parallax-slider.css" />
        <script type="text/javascript" src="js/parallax-slider/modernizr.custom.28468.js"></script>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    @show
</head>
<body>
    <header class="head-section">
        <div class="navbar navbar-default navbar-static-top container">
            <div class="navbar-header">
                <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">m<span>asterstroy.by</span></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('about') }}">О нас</a></li>
                    <li class="dropdown">
                        <a
                            class="dropdown-toggle"
                            data-close-others="false"
                            data-delay="0"
                            data-hover="dropdown"
                            data-toggle="dropdown"
                            href="#"
                        >
                            Услуги <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a href="#" tabindex="-1">Фундаментные работы</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('raising_house') }}" tabindex="-1">Подъем дома</a></li>
                                    <li><a href="{{ route('foundation_repair') }}">Ремонт фундамента</a></li>
                                    <li><a href="{{ route('replacement_rims_house') }}">Замена нижних венцов дома</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#" tabindex="-1">Демонтажные работы</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('dismantling_walls') }}" tabindex="-1">Демонтаж стен</a></li>
                                    <li><a href="{{ route('dismantling_floors') }}">Демонтаж полов</a></li>
                                    <li><a href="{{ route('dismantling_buildings') }}">Демонтаж зданий и сооружений</a></li>
                                    <li><a href="{{ route('dismantling_metal_structures') }}">Демонтаж металлоконструкций</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('frame_houses') }}">Строительство каркасных домов</a></li>
                            <li class="dropdown-submenu">
                                <a href="#" tabindex="-1">Фасадные работы</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('siding') }}" tabindex="-1">Обшивка сайдингом</a></li>
                                    <li><a href="{{ route('cladding_block_house') }}">Обшивка блок хаусом</a></li>
                                    <li><a href="{{ route('house_cladding_wood') }}">Обшивка дома деревом</a></li>
                                    <li><a href="{{ route('painting_facade_house') }}">Покраска фасада дома</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#" tabindex="-1">Печные работы</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('oven_masonry') }}" tabindex="-1">Кладка печи, камина</a></li>
                                    <li><a href="{{ route('oven_cladding') }}">Облицовка печи, камина</a></li>
                                    <li><a href="{{ route('installation_heating_boiler') }}">Монтаж котла отопления</a></li>
                                    <li><a href="{{ route('chimney_installation') }}">Монтаж дымохода</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('care_graves') }}">Уход за могилами</a></li>
                            <li><a href="{{ route('repair_wells') }}">Ремонт и чистка колодцев</a></li>
                            <li class="dropdown-submenu">
                                <a href="#" tabindex="-1">Благоустройство участка</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('garbage_removal') }}" tabindex="-1">Вывоз мусора</a></li>
                                    <li><a href="{{ route('mowing_grass') }}">Покос травы</a></li>
                                    <li><a href="{{ route('digging_trenches')}}">Копка траншей</a></li>
                                    <li><a href="{{ route('cleaning_local_area') }}">Уборка придомовой территории</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#" tabindex="-1">Укладка пола</a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('laying_laminate') }}" tabindex="-1">Укладка ламината</a></li>
                                    <li><a href="{{ route('laying_parquet') }}">Укладка паркета</a></li>
                                    <li><a href="{{ route('laying_wood_floor') }}">Укладка деревянного пола</a></li>
                                    <li><a href="{{ route('laying_plywood') }}">Укладка фанеры на пол</a></li>
                                    <li><a href="{{ route('laying_floorboard') }}">Укладка половой доски</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{ route('price') }}">Цены</a></li>
                    <li><a href="{{ route('portfolio') }}">Портфолио</a></li>
                    <li><a href="{{ route('blog') }}">Блог</a></li>
                    <li><a href="">География работ</a></li>
                    <li><a href="{{ route('faq') }}">FAQ</a></li>
                    <li><a href="{{ route('career') }}">Вакансии</a></li>
                    <li><a href="{{ route('contact') }}">Контакты</a></li>
                    <li><input class="form-control search" placeholder=" Search" type="text"></li>
                </ul>
            </div>
        </div>
    </header>
    @yield('content')
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-3 address wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
                    <h1>
                        Как нас найти ?
                    </h1>
                    <address>
                        <p><i class="fa fa-home pr-10"></i>ул. Ленина 1</p>
                        <p><i class="fa fa-globe pr-10"></i>г. Барановичи , Беларусь </p>
                        <p><i class="fa fa-mobile pr-10"></i>Тел. +375 (29) 221-02-45 </p>
                        <p><i class="fa fa-phone pr-10"></i>Тел. +375 (33) 373-98-44 </p>
                        <p><i class="fa fa-envelope pr-10"></i>Email :   <a href="javascript:;">masterstroy@gmail.com</a></p>
                    </address>
                </div>
                <div class="col-lg-3 col-sm-3">
                    <div class="page-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
                        <h1>Меню</h1>
                        <ul class="page-footer-list">
                            <li>
                                <i class="fa fa-angle-right"></i>
                                <a href="{{ route('about') }}">О нас</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-right"></i>
                                <a href="{{ route('price') }}">Цены</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-right"></i>
                                <a href="{{ route('portfolio') }}">Портфолио</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-right"></i>
                                <a href="{{ route('blog') }}">Блог</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-right"></i>
                                <a href="{{ route('faq') }}">FAQ</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-right"></i>
                                <a href="{{ route('contact') }}">Контакты</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3">
                    <div class="text-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".7s">
                        <h1>Джон Шаар</h1>
                        <p>Будущее — это не то, куда мы идем, а то, что мы создаем. Дороги следует не искать, а строить. Сам процесс строительства меняет как самого творца, так и его судьбу.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <footer class="footer-small">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 pull-right">
                    <ul class="social-link-footer list-unstyled">
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".1s"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".2s"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".3s"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".4s"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".5s"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".6s"><a href="#"><i class="fa fa-skype"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".7s"><a href="#"><i class="fa fa-github"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".8s"><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="copyright">
                        <p>&copy; Copyright - masterstroy.by</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- js placed at the end of the document so the pages load faster
    <script src="js/jquery.js">
    </script>
    -->
    @section('scripts')
        <script src="js/jquery-1.8.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/hover-dropdown.js"></script>
        <script defer src="js/jquery.flexslider.js"></script>
        <script type="text/javascript" src="assets/bxslider/jquery.bxslider.js"></script>
        <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="assets/owlcarousel/owl.carousel.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/link-hover.js"></script>
        <script src="js/superfish.js"></script>
        <script type="text/javascript" src="js/parallax-slider/jquery.cslider.js"></script>
        <script type="text/javascript">
            $(function() {

                $('#da-slider').cslider({
                    autoplay    : true,
                    bgincrement : 100
                });

            });
        </script>
        <!--common script for all pages-->
        <script src="js/common-scripts.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function() {
                $('.bxslider1').bxSlider({
                    minSlides: 5,
                    maxSlides: 6,
                    slideWidth: 360,
                    slideMargin: 2,
                    moveSlides: 1,
                    responsive: true,
                    nextSelector: '#slider-next',
                    prevSelector: '#slider-prev',
                    nextText: 'Onward →',
                    prevText: '← Go back'
                });

            });
        </script>
        <script>
            $('a.info').tooltip();

            $(window).load(function() {
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider) {
                        $('body').removeClass('loading');
                    }
                });
            });

            $(document).ready(function() {
                $("#owl-demo").owlCarousel({
                    items : 4
                });
            });

            jQuery(document).ready(function(){
                jQuery('ul.superfish').superfish();
            });

            new WOW().init();
        </script>
    @show
</body>
</html>
