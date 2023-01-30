<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hotel Template">
    <meta name="keywords" content="Hotel, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rooms | Royal Village Hotel</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Taviraj:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/linearicons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section other-page">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="home"><img src="{{asset('assets/img/logo.png')}}" alt=""></a>
                </div>
                <div class="top-widget">
                    <div class="top-info address">
                        <img src="{{asset('assets/img/placeholder.png')}}" alt="">
                        <span>Area D <br />Dodoma, Tanzania</span>
                    </div>
                    <div class="top-info phone-num">
                        <img src="img/phone.png" alt="">
                        <span>(+255) 026-2351150</span>
                    </div>
                </div>
                <div class="container">
                    <nav class="main-menu mobile-menu">
                        <ul>
                            <li><a href="home">Home</a></li>
                            <li><a href="about-us">About</a></li>
                            <li><a href="rooms">Rooms</a></li>
                            
                            <li><a href="contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section set-bg" data-setbg="{{asset('assets/img/rooms-bg.jpg')}}">
        <div class="hero-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Rooms</h1>
                    </div>
                </div>
                <div class="page-nav">
                    <a href="#" class="left-nav"><i class="lnr lnr-arrow-left"></i> Services</a>
                    <a href="#" class="right-nav">News <i class="lnr lnr-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Rooms Section Begin -->
    <section class="room-section spad">
        <div class="container">
            <div class="rooms-page-item">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="room-pic-slider owl-carousel">
                            <div class="single-room-pic">
                                <img src="{{asset('assets/img/room/std-1.jpeg')}}" alt="">
                            </div>
                            <div class="single-room-pic">
                                <img src="{{asset('assets/img/room/rooms-2.jpg')}}" alt="">
                            </div>
                            <div class="single-room-pic">
                                <img src="{{asset('assets/img/room/rooms-3.jpg')}}" alt="">
                            </div>
                            <div class="single-room-pic">
                                <img src="{{asset('assets/img/room/rooms-4.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="room-text">
                            <div class="room-title">
                                <h2>Standard Room</h2>
                                <div class="room-price">
                                    <span>Tsh.</span>
                                    <h2>60,000.00</h2>
                                    <sub>/night</sub>
                                </div>
                            </div>
                            <div class="room-desc">
                                <p>Free Breakfast, Swimming, Free Night Club Entrance........</p>
                            </div>
                            <div class="room-features">
                                <div class="room-info">
                                    <i class="flaticon-019-television"></i>
                                    <span>Smart TV</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <span>High Wi-fii</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <span>AC</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-036-parking"></i>
                                    <span>Parking</span>
                                </div>
                                <div class="room-info last">
                                    <i class="flaticon-007-swimming-pool"></i>
                                    <span>Pool</span>
                                </div>
                            </div>
                            <a href="contact" class="primary-btn">Book Now <i class="lnr lnr-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rooms-page-item">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="room-pic-slider owl-carousel">
                            <div class="single-room-pic">
                                <img src="{{asset('assets/img/room/lux-1.jpeg')}}" alt="">
                            </div>
                            <div class="single-room-pic">
                                <img src="{{asset('assets/img/room/80k (1).jpeg')}}" alt="">
                            </div>
                            <div class="single-room-pic">
                                <img src="{{asset('assets/img/room/80k (2).jpeg')}}" alt="">
                            </div>
                            <div class="single-room-pic">
                                <img src="{{asset('assets/img/room/80k (3).jpeg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="room-text">
                            <div class="room-title">
                                <h2>Luxury Room</h2>
                                <div class="room-price">
                                    <span>Tsh.</span>
                                    <h2>80,000.00</h2>
                                    <sub>/night</sub>
                                </div>
                            </div>
                            <div class="room-desc">
                                <p>Free Breakfast, Swimming, Free Night Club Entrance.........</p>
                            </div>
                            <div class="room-features">
                                <div class="room-info">
                                    <i class="flaticon-019-television"></i>
                                    <span>Smart TV</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <span>High Wi-fii</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <span>AC</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-036-parking"></i>
                                    <span>Parking</span>
                                </div>
                                <div class="room-info last">
                                    <i class="flaticon-007-swimming-pool"></i>
                                    <span>Pool</span>
                                </div>
                            </div>
                            <a href="contact" class="primary-btn">Book Now <i class="lnr lnr-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rooms-page-item">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="room-pic-slider owl-carousel">
                            <div class="single-room-pic">
                                <img src="{{asset('assets/img/room/del-2.jpg')}}" alt="">
                            </div>
                            <div class="single-room-pic">
                                <img src="{{asset('assets/img/room/rooms-10.jpg')}}" alt="">
                            </div>
                            <div class="single-room-pic">
                                <img src="{{asset('assets/img/room/rooms-11.jpg')}}" alt="">
                            </div>
                            <div class="single-room-pic">
                                <img src="{{asset('assets/img/room/rooms-12.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="room-text">
                            <div class="room-title">
                                <h2>Deluxe</h2>
                                <div class="room-price">
                                    <span>Tsh.</span>
                                    <h2>100,000.00</h2>
                                    <sub>/night</sub>
                                </div>
                            </div>
                            <div class="room-desc">
                                <p>Free Breakfast, Swimming, Free Night Club Entrance........</p>
                            </div>
                            <div class="room-features">
                                <div class="room-info">
                                    <i class="flaticon-019-television"></i>
                                    <span>Smart TV</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <span>High Wi-fii</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <span>AC</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-036-parking"></i>
                                    <span>Parking</span>
                                </div>
                                <div class="room-info last">
                                    <i class="flaticon-007-swimming-pool"></i>
                                    <span>Pool</span>
                                </div>
                            </div>
                            <a href="contact" class="primary-btn">Book Now <i class="lnr lnr-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rooms-page-item">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="room-pic-slider owl-carousel">
                            <div class="single-room-pic">
                                <img src="{{asset('assets/img/room/del-exc-room-1.jpeg')}}" alt="">
                            </div>
                            <div class="single-room-pic">
                                <img src="{{asset('assets/img/room/120k.jpeg')}}" alt="">
                            </div>
                            <div class="single-room-pic">
                                <img src="{{asset('assets/img/room/120kk.jpeg')}}" alt="">
                            </div>
                            <div class="single-room-pic">
                                <img src="{{asset('assets/img/room/4.JPG')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="room-text">
                            <div class="room-title">
                                <h2>Deluxe Executive</h2>
                                <div class="room-price">
                                    <span></span>
                                    <h2>120,000.00</h2>
                                    <sub>/night</sub>
                                </div>
                            </div>
                            <div class="room-desc">
                                <p>Free Breakfast, Swimming, Free Night Club Entrance........</p>
                            </div>
                            <div class="room-features">
                                <div class="room-info">
                                    <i class="flaticon-019-television"></i>
                                    <span>Smart TV</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <span>High Wi-fii</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <span>AC</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-036-parking"></i>
                                    <span>Parking</span>
                                </div>
                                <div class="room-info last">
                                    <i class="flaticon-007-swimming-pool"></i>
                                    <span>Pool</span>
                                </div>
                            </div>
                            <a href="contact" class="primary-btn">Book Now <i class="lnr lnr-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rooms-page-item">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="room-pic-slider owl-carousel">
                            <div class="single-room-pic">
                                <img src="{{asset('assets/img/room/rooms-17.jpg')}}" alt="">
                            </div>
                            <div class="single-room-pic">
                                <img src="{{asset('assets/img/room/rooms-18.jpg')}}" alt="">
                            </div>
                            <div class="single-room-pic">
                                <img src="{{asset('assets/img/room/rooms-19.jpg')}}" alt="">
                            </div>
                            <div class="single-room-pic">
                                <img src="{{asset('assets/img/room/rooms-20.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="room-text">
                            <div class="room-title">
                                <h2>Suite</h2>
                                <div class="room-price">
                                    <span>Tsh.</span>
                                    <h2>160,000.00</h2>
                                    <sub>/night</sub>
                                </div>
                            </div>
                            <div class="room-desc">
                                <p>Free Breakfast, Swimming, Free Night Club Entrance........</p>
                            </div>
                            <div class="room-features">
                                <div class="room-info">
                                    <i class="flaticon-019-television"></i>
                                    <span>Smart TV</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <span>High Wi-fii</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <span>AC</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-036-parking"></i>
                                    <span>Parking</span>
                                </div>
                                <div class="room-info last">
                                    <i class="flaticon-007-swimming-pool"></i>
                                    <span>Pool</span>
                                </div>
                            </div>
                            <a href="contact" class="primary-btn">Book Now <i class="lnr lnr-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rooms-page-item">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="room-pic-slider owl-carousel">
                            <div class="single-room-pic">
                                <img src="{{asset('assets/img/room/2.JPG')}}" alt="">
                            </div>
                            <div class="single-room-pic">
                                <img src="{{asset('assets/img/room/1.JPG')}}" alt="">
                            </div>
                            <div class="single-room-pic">
                                <img src="{{asset('assets/img/room/3.JPG')}}" alt="">
                            </div>
                            <div class="single-room-pic">
                                <img src="{{asset('assets/img/room/ROM4.JPG')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="room-text">
                            <div class="room-title">
                                <h2>Executive Suite</h2>
                                <div class="room-price">
                                    <span> </span>
                                    <h2>250,000.00</h2>
                                    <sub>/night</sub>
                                </div>
                            </div>
                            <div class="room-desc">
                                <p>Free Breakfast, Swimming, Free Night Club Entrance........</p>
                            </div>
                            <div class="room-features">
                                <div class="room-info">
                                    <i class="flaticon-019-television"></i>
                                    <span>Smart TV</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <span>High Wi-fii</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <span>AC</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-036-parking"></i>
                                    <span>Parking</span>
                                </div>
                                <div class="room-info last">
                                    <i class="flaticon-007-swimming-pool"></i>
                                    <span>Pool</span>
                                </div>
                            </div>
                            <a href="contact" class="primary-btn">Book Now <i class="lnr lnr-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Rooms Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-logo">
                        <a href="#"><img src="{{asset('assets/img/logo.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="row pb-50">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Location</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-map-marker"></i>
                            <p>Area D<br />Dododma, Tanzania</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Reception</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-phone-handset"></i>
                            <p>(+255) 026-2351150</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Shuttle Service</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-phone-handset"></i>
                            <p>(+255) 026-2351150</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Restaurant</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-phone-handset"></i>
                            <p>(+255) 026-2351150</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="copyright-text">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="https://royalvillage.co.tz" target="_blank">Royal Village</a>
</div>
                <div class="privacy-links">
                    <a href="home">Privacy Policy</a>
                    <a href="home">Photo Requests</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>