<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hotel Template">
    <meta name="keywords" content="Hotel, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | Royal Village Dodoma</title>

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
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="home"><img src="{{asset('assets/img/logo.png')}}" alt=""></a>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <nav class="main-menu mobile-menu">
                                <ul>
                                    <li><a href="home">Home</a></li>
                                    <li><a href="about-us">About Us</a></li>
                                    <li><a href="rooms">Rooms</a></li>
                                    <li><a href="contact">Contact</a></li>
                                </ul>
                            </nav>
                            <div class="top-info">
                    
                                <img src="{{asset('assets/img/placeholder.png')}}" alt="">
                                <span>Area D, Dodoma - Tanzania</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Slider Begin -->
    <div class="hero-slider">
        <div class="slider-item">
            <div class="single-slider-item set-bg" data-setbg="{{asset('assets/img/slider_2.JPG')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2><strong><h1 style="color: #FFD700">Welcome To Royal Village Dodoma, Tanzania.</h1></strong></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slider-nav">
                                <a href="#" class="single-slider-nav">
                                    <img src="{{asset('assets/img/nav-1-bed.png')}}" alt="">
                                    <div class="nav-text active">
                                        <p>Accomodation<i class="lnr lnr-arrow-right"></i></p>
                                    </div>
                                </a>
                                <a href="#" class="single-slider-nav">
                                    <img src="{{asset('assets/img/nav-2.jpg')}}" alt="">
                                    <div class="nav-text">
                                        <p>Restaurant<i class="lnr lnr-arrow-right"></i></p>
                                    </div>
                                </a>
                                <a href="#" class="single-slider-nav last">
                                    <img src="{{asset('assets/img/nav-3.jpg')}}" alt="">
                                    <div class="nav-text">
                                        <p>Open Bar<i class="lnr lnr-arrow-right"></i></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Slider End -->

    <!-- Room Availability Section Begin -->
    <section class="room-availability spad">
        <div class="container">
            <div class="room-check">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="room-item">
                            <div class="room-pic-slider room-pic-item owl-carousel">
                                <div class="room-pic">
                                    <img src="{{asset('assets/img/room-slider/ROM4.JPG')}}" alt="">
                                </div>
                                <div class="room-pic">
                                    <img src="{{asset('assets/img/room-slider/ROM5.JPG')}}" alt="">
                                </div>
                                <div class="room-pic">
                                    <img src="{{asset('assets/img/room-slider/ROM6.JPG')}}" alt="">
                                </div>
                                <div class="room-pic">
                                    <img src="{{asset('assets/img/room-slider/ROM1.JPG')}}" alt="">
                                </div>
                                <div class="room-pic">
                                    <img src="{{asset('assets/img/room-slider/ROM8.JPG')}}" alt="">
                                </div>
                                <div class="room-pic">
                                    <img src="{{asset('assets/img/room-slider/ROM7.JPG')}}" alt="">
                                </div>
                                <div class="room-pic">
                                    <img src="{{asset('assets/img/room-slider/ROM2.JPG')}}" alt="">
                                </div>
                                <div class="room-pic">
                                    <img src="{{asset('assets/img/room-slider/ROM3.JPG')}}" alt="">
                                </div>
                            </div>
                            <div class="room-text">
                                <div class="room-title">
                                    <h2>Our Suite</h2>
                                    <div class="room-price">
                                        <span>From</span>
                                        <h3>Tsh. 60,000</h3>
                                    </div>
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
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="check-form">
                            <h2>Check Availability</h2>
                            <form action="#">
                                <div class="datepicker">
                                    <div class="date-select">
                                        <p>From</p>
                                        <input type="text" class="datepicker-1" value="dd / mm / yyyy">
                                        <img src="{{asset('assets/img/calendar.png')}}" alt="">
                                    </div>
                                    <div class="date-select to">
                                        <p>To</p>
                                        <input type="text" class="datepicker-2" value="dd / mm / yyyy">
                                        <img src="{{asset('assets/img/calendar.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="room-quantity">
                                    <div class="single-quantity">
                                        <p>Adults</p>
                                        <div class="pro-qty"><input type="text" value="0"></div>
                                    </div>
                                    <div class="single-quantity">
                                        <p>Children</p>
                                        <div class="pro-qty"><input type="text" value="0"></div>
                                    </div>
                                    <div class="single-quantity last">
                                        <p>Rooms</p>
                                        <div class="pro-qty"><input type="text" value="0"></div>
                                    </div>
                                </div>
                                <div class="room-selector">
                                    <p>Room</p>
                                    <select class="suit-select">
                                        <option>Eg. Master suite</option>
                                        <option value="">Standard Room</option>
                                        <option value="">Luxury Room</option>
                                        <option value="">Deluxe Room</option>
                                        <option value="">Deluxce Executive</option>
                                        <option value="">Suite Room</option>
                                    </select>
                                </div>
                                <a href="contact.html" target="blank/"><button type="button">CHECK Availability <i class="lnr lnr-arrow-right"></i></button></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-room">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <h2>“Welcome To The Home Of Hospitality”.</h2>
                    </div>
                </div>
                <div class="about-para">
                    <div class="row">
                        <div class="col-lg-6">
                            <p>Royal Village Dodoma is designed for the complete leisure and relaxation of your own. Set either viewing Mlimwa Hills or the beautiful gardens, our rooms offer free Wi-Fi, TVs and air-conditionined apartmnent with private  verandas. Within the same premises, bars, a night club are also here for your night life while in Dodoma. The place is also best for family gatherings as we have swimming pools and kids zone for them to have fun.</p>
                        </div>
                        <div class="col-lg-6">
                            <p>While staying in Dodoma-Tanzania, Royal Village Dodoma is the best choice of the city. Enjoy drinks, food varieties and good music from our best DJs and scheduled Live Music Band every Thursday, Friday and Sunday. <br /> <h4>“We are what we repeatedly do. Excellence then, is not a single act, but a habit.”</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Room Availability Section End -->

    <!-- Facilities Section Begin -->
    <div class="facilities-section spad">
        <div class="container">
            <div class="facilities-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h1>Facilities</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0">
                        <div class="facilities-img set-bg" data-setbg="{{asset('assets/img/recpt-0.jpeg')}}"></div>
                    </div>
                    <div class="col-lg-6 p-0 ">
                        <div class="facilities-text-warp">
                            <div class="facilities-text">
                                <h2>Accomodation</h2>
                                <p>All hotel rooms are equiped with free and reliable Wi-Fi internet, flat Tv sets with live TV channels, air-conditioners. Every guest enjoys free breakfast. </p>
                                <a href="#" class="primary-btn fac-btn">Visit Center <i class="lnr lnr-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0 order-lg-1 order-2">
                        <div class="facilities-text-warp">
                            <div class="facilities-text">
                                <h2>Kids Zone</h2>
                                <p></p>
                                <a href="#" class="primary-btn fac-btn">Visit Center <i class="lnr lnr-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0 order-lg-2 order-1">
                        <div class="facilities-img set-bg" data-setbg="{{asset('assets/img/facilities-2.jpg')}}"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 p-0">
                        <div class="facilities-img set-bg" data-setbg="{{asset('assets/img/rest-3.jpeg')}}">
                            
                        </div>
                        
                    </div>
                    <div class="col-lg-6 p-0 ">
                        <div class="facilities-text-warp">
                            <div class="facilities-text">
                                <h2>Restaurant</h2>
                                <p>Royal Village Restaurant brings a chic, sophisticated vibe to the soul of yours. Since it was opened, it immediately became a destination for people of all sorts and races - celebrities, and tourists. Situated between Royal Village Hotel and the Ngalawa Bar, the restaurant was designed as a combination of industrial and classic modernism that give the place a timelessly stylish and sexy, fun ambiance.</p>
                                <a href="contact.html" class="primary-btn fac-btn">Visit Center <i class="lnr lnr-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0 order-lg-1 order-2">
                        <div class="facilities-text-warp">
                            <div class="facilities-text">
                                <h2>Ngalawa Bar</h2>
                                <p>Ngalawa Bar is an open bar where total enjoyment is guaranteed. From scheduled karaoke to live music band, the wide selection to local and imported beers, whisky selections to cocktails, Ngalawa Bar is the place to be. Come enjoy, come network and meet classic people of the Capital City.... </p>
                                <a href="contact.html" class="primary-btn fac-btn">Visit Center <i class="lnr lnr-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0 order-lg-2 order-1">
                        <div class="facilities-img set-bg" data-setbg="{{asset('assets/img/facilities-4.jpg')}}"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 p-0">
                        <div class="facilities-img set-bg" data-setbg="{{asset('assets/img/facilities-5.jpg')}}"></div>
                    </div>
                    <div class="col-lg-6 p-0 ">
                        <div class="facilities-text-warp">
                            <div class="facilities-text">
                                <h2>New Club 7 Dodoma</h2>
                                <p>Dazzling décor and dramatic multi-dimensional lighting effects set the stage for an extraordinary experience that exhilarates and titillates. Nightly, spectacular interactive events will astound and amaze even the most fervent of club goers</p>
                                <a href="contact.html" class="primary-btn fac-btn">Visit Center <i class="lnr lnr-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0 order-lg-1 order-2">
                        <div class="facilities-text-warp">
                            <div class="facilities-text">
                                <h2>Multipurpose Halls</h2>
                                <p>Royal Village Dodoma will be the right option for business meetings or wedding events.. Our conference facilities feature business suites, conference halls, meeting rooms, board rooms which come complete with all needed amenities to accomodate up to 500. Take a look and see why organizing a meeting at Royal Village Dodoma is guaranteed to be a success.</p>
                                <a href="contact.html" class="primary-btn fac-btn">Visit Center <i class="lnr lnr-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0 order-lg-2 order-1">
                                              
                        <div class="facilities-img set-bg" data-setbg="{{asset('assets/img/facilities-6.jpg')}}"></div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facilities Section End -->

    <!-- Follow Instagram Section Begin -->
    <section class="follow-instagram">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Follow us on Instagram <a href="https://www.instagram.com/royalvillagehotel" target="blank/">@royalvillagehotel</a></h2></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Follow Instagram Section End -->

    <!-- Footer Room Pic Section Begin -->
    <div class="footer-room-pic">
        <div class="container-fluid">
            <div class="row">
                <img src="{{asset('assets/img/room-footer-pic/room-6.JPG')}}" alt="">
                <img src="{{asset('assets/img/room-footer-pic/room-7.JPG')}}" alt="">
                <img src="{{asset('assets/img/room-footer-pic/room-5.JPG')}}" alt="">
                <img src="{{asset('assets/img/room-footer-pic/gym8.jpeg')}}" alt="">
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <img src="{{asset('assets/img/room-footer-pic/PIC1.JPG')}}" alt="">
                <img src="{{asset('assets/img/room-footer-pic/PIC5.JPG')}}" alt="">
                <img src="{{asset('assets/img/room-footer-pic/gym5.jpeg')}}" alt="">
                <img src="{{asset('assets/img/room-footer-pic/gym7.jpeg')}}" alt="">
            </div>
        </div>
    </div>
    <!-- Footer Room Pic Section End -->

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
                            <p>Area D, <br />Dodoma, Tanzania</p>
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