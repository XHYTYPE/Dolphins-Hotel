<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dolphins Hotel Home</title>
        <!--CSS Swiperjs -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
        <?php 
            include('inc/links.php'); 
        ?>

        <style>
            .availability-form{
                margin-top:-50px;
                z-index:2;
                position: relative;
            }
            @media screen and (max-width: 575px) {
                .availability-form{
                margin-top:25px;
                padding:0 35px;
            }
            } 
        </style>

    </head>
    
    <body class="bg-dw">

        <?php include('inc/header.php'); ?>

        <!-- Photos Swiper START-->
        <div class="container-fluid px-lg-4 mt-4">
            <div class="swiper swiper-content">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="images/sliders/slider01.jpeg" class="w-100 d-block"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/sliders/slider02.jpg" class="w-100 d-block"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/sliders/slider03.jpg" class="w-100 d-block">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/sliders/slider04.jpg" class="w-100 d-block">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/sliders/slider05.jpg" class="w-100 d-block">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/sliders/slider06.jpg" class="w-100 d-block">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/sliders/slider07.jpg" class="w-100 d-block">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Check Booking START-->
        <div class="container availability-form">
            <div class="row">
                <div class="col-lg-12 bg-white shadow p-4 rounded">
                    <h5 class="mb-4">Check Booking Availability</h5>
                    <form>
                        <div class="row align-items-end">
                            <div class="col-lg-3 mb-3">
                                <label class="form-label" style="font-weight: 500;">Check-In</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="col-lg-3 mb-3">
                                <label class="form-label" style="font-weight: 500;">Check-Out</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="col-lg-3 mb-3">
                                <label class="form-label" style="font-weight: 500;">Adult</label>
                                <select class="form-select shadow-none">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <!-- <option value="3">more</option> -->
                                </select>
                            </div>
                            <div class="col-lg-2 mb-3">
                                <label class="form-label" style="font-weight: 500;">Children</label>
                                <select class="form-select shadow-none">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <!-- <option value="3">more</option> -->
                                </select>
                            </div>
                            <div class="col-lg-1 mb-lg-3 mt-2">
                                <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Our Rooms START-->
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font color-blue">OUR ROOMS</h2>
        <div class="container">
            <div class="row">
                
            <!-- Solo1 -->
                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card border-0 shadow" style="max-width:350px; margin:auto;">
                        <img src="images/rooms/Solo1.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Solo Standard</h5>
                            <h6 class="mb-4">₱ 500 per night</h6>           
                            <div class="features mb-4">
                                <h6 class="mb-1">Features</h6>
                                    <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                        1 Room
                                    </span>
                                    <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                        1 Bed
                                    </span>
                                    <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                        1 Bathroom
                                    </span>
                                    <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                        1 Sofa
                                    </span>
                            </div>  
                            <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    WI-FI
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Television
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Aircon
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Toiletries & Wardrobe
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Desk
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Pool
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Spa
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Caffee
                                </span>
                            </div>
                            <div class="guest mb-4">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    2 Adults
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    1 Children
                                </span>
                            </div>
                            <div class="rating mb-4">
                                <h6 class="mb-1">Rating</h6>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                            </div>
                            <div class="d-flex justify-content-evenly mb-2">
                                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Solo3 -->
                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card border-0 shadow" style="max-width:350px; margin:auto;">
                        <img src="images/rooms/Solo3.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Solo Modern</h5>
                            <h6 class="mb-4">₱ 650 per night</h6>           
                            <div class="features mb-4">
                                <h6 class="mb-1">Features</h6>
                                    <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                        1 Room
                                    </span>
                                    <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                        1 Bed
                                    </span>
                                    <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                        1 Bathroom
                                    </span>
                                    <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                        1 Sofa
                                    </span>
                                    <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                        1 Balcony
                                    </span>

                            </div>  
                            <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    WI-FI
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Television
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Aircon
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Toiletries & Wardrobe
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Desk
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Pool
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Spa
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Room Service
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Caffee
                                </span>
                            </div>
                            <div class="guest mb-4">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    3 Adults
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    2 Children
                                </span>
                            </div>
                            <div class="rating mb-4">
                                <h6 class="mb-1">Rating</h6>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-half text-warning"></i>
                            </div>
                            <div class="d-flex justify-content-evenly mb-2">
                                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Couple 1 -->
                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card border-0 shadow" style="max-width:350px; margin:auto;">
                        <img src="images/rooms/Couple1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5>Couple Standard</h5>
                            <h6 class="mb-4">₱900 per night</h6>           
                            <div class="features mb-4">
                                <h6 class="mb-1">Features</h6>
                                    <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                        1 Room
                                    </span>
                                    <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                        2 Bed
                                    </span>
                                    <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                        1 Bathroom
                                    </span>
                                    <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                        2 Sofa
                                    </span>
                            </div>  
                            <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    WI-FI
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Television
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Aircon
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Toiletries & Wardrobe
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Desk
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Pool
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Spa
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Room Service
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Gym
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Pool
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Bathtub
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Caffee
                                </span>
                            </div>
                            <div class="guest mb-4">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    4 Adults
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    4 Children
                                </span>
                            </div>
                            <div class="rating mb-4">
                                <h6 class="mb-1">Rating</h6>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-half text-warning"></i>
                            </div>
                            <div class="d-flex justify-content-evenly mb-2">
                                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Couple 2 -->
                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card border-0 shadow" style="max-width:350px; margin:auto;">
                        <img src="images/rooms/Couple02.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Couple Modern</h5>
                            <h6 class="mb-4">₱1,500 per night</h6>           
                            <div class="features mb-4">
                                <h6 class="mb-1">Features</h6>
                                    <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                        1 Room
                                    </span>
                                    <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                        2 Bed
                                    </span>
                                    <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                        2 Bathroom
                                    </span>
                                    <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                        2 Sofa
                                    </span>
                                    <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                        1 Balcony
                                    </span>
                                    <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                        1 Kitchen
                                    </span>

                            </div>  
                            <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    WI-FI
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Television
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Aircon
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Toiletries & Wardrobe
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Desk
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Pool
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Spa
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Room Service
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Gym
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Pool
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Bathtub
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Bar
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Caffee
                                </span>
                            </div>
                            <div class="guest mb-4">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    5 Adults
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    4 Children
                                </span>
                            </div>
                            <div class="rating mb-4">
                                <h6 class="mb-1">Rating</h6>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-half text-warning"></i>
                            </div>
                            <div class="d-flex justify-content-evenly mb-2">
                                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Lodge -->
                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card border-0 shadow" style="max-width:350px; margin:auto;">
                        <img src="images/rooms/Lodge1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5>Lodge</h5>
                            <h6 class="mb-4">₱4000 per night</h6>           
                            <div class="features mb-4">
                                <h6 class="mb-1">Features</h6>
                                    <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                        2 Room
                                    </span>
                                    <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                        2 Bed
                                    </span>
                                    <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                        2 Bathroom
                                    </span>
                                    <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                        1 Living Area
                                    </span>
                                    <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                        2 Balcony
                                    </span>
                                    <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                        1 Kitchen
                                    </span>
                            </div>  
                            <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    WI-FI
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Television
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Aircon
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Toiletries & Wardrobe
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Refrigirator
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Desk
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Pool
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Spa
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Room Service
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Gym
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Pool
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Bathtub
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Bar
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Free Breakfast
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Caffee
                                </span>

                            </div>
                            <div class="guest mb-4">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    6 Adults
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    6 Children
                                </span>
                            </div>
                            <div class="rating mb-4">
                                <h6 class="mb-1">Rating</h6>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <div class="d-flex justify-content-evenly mb-2">
                                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Suite -->
                <div class="col-lg-4 col-md-6 my-3">
                    <div class="card border-0 shadow" style="max-width:350px; margin:auto;">
                        <img src="images/rooms/Suite2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5>Suite</h5>
                            <h6 class="mb-4">₱10,000 per night</h6>           
                            <div class="features mb-4">
                                <h6 class="mb-1">Features</h6>
                                    <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                        1 Room
                                    </span>
                                    <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                        2 Bed
                                    </span>
                                    <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                        1 Bathroom
                                    </span>
                                    <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                        1 Living Area
                                    </span>
                                    <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                        1 Kitchen
                                    </span> 
                                    <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                        1 Balcony
                                    </span>
                            </div>  
                            <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    WI-FI
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Television
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Aircon
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Bathtub
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Toiletries & Wardrobe
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Refrigirator
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Desk
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Pool
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Spa
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Room Service
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Gym
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Pool
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Bathtub
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Bar
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Free Breakfast
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    Caffee
                                </span>
                            </div>
                            <div class="guest mb-4">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    10 Adults
                                </span>
                                <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                    5 Children
                                </span>
                            </div>
                            <div class="rating mb-4">
                                <h6 class="mb-1">Rating</h6>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <div class="d-flex justify-content-evenly mb-2">
                                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 text-center mt-5">
                        <a href="#" class="btn btn-sm btn-outline-primary rounded-0 fw-bold shadow-none">More Rooms >>></a>
                </div>
            </div>
        </div>
        
        <!-- Our Facilities -->
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font color-blue">OUR FACILITIES</h2>
       
        <div class="container">
            <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/facilities/WiFi_Logo.svg.png" width="90px">
                    <h5 class="mt-3">Wifi</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/facilities/TV.jpg" width="90px">
                    <h5 class="mt-3">Television</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/facilities/AC.jpeg" width="90px">
                    <h5 class="mt-3">Aircon</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/facilities/Toiletries.jpg" width="90px">
                    <h5 class="mt-3">Toiletries</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/facilities/Wardrobe.jpg" width="90px">
                    <h5 class="mt-3">Wardrobe</h5>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/facilities/Ref.jpg" width="90px">
                    <h5 class="mt-3">Refrigirator</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/facilities/Desk.jpg" width="90px">
                    <h5 class="mt-3">Desk</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/facilities/Bath.jpg" width="90px">
                    <h5 class="mt-3">Bathtub</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/facilities/bar.jpg" width="90px">
                    <h5 class="mt-3">Bar</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/facilities/service.jpg" width="90px">
                    <h5 class="mt-3">Room Service</h5>
                </div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="facilities.php" class="btn btn-sm btn-outline-primary rounded-0 fw-bold shadow-none">More Facilities >>></a>
            </div>
        </div>
        
        <!-- Our Testimonials -->
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font color-blue">TESTIMONIALS</h2>
        
        <div class="container">
            <div class="swiper swiper-testimonials">
                <div class="swiper-wrapper">
                <div class="swiper-slide bg-white p-4 shadow">
                    <div class="profile d-flex align-text-center p-4">
                        <h5><i class="bi bi-person-circle text-primary me-2"></i></h5>
                        <h6>M**** H*****</h6>
                    </div>
                    <p>
                    Lorem ipsum per habitasse erat adipiscing tellus fames integer erat tellus,
                    vulputate curabitur elit mi netus vitae est sapien lorem ipsum eleifend, 
                    ultricies rutrum laoreet ultricies sodales a metus ac sed. 
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-half text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4 shadow">
                    <div class="profile d-flex align-text-center p-4">
                        <h5><i class="bi bi-person-circle text-success me-2"></i></h5>
                        <h6>V** L**** M******</h6>
                    </div>
                    <p>
                    Lorem ipsum per habitasse erat adipiscing tellus fames integer erat tellus,
                    vulputate curabitur elit mi netus vitae est sapien lorem ipsum eleifend, 
                    ultricies rutrum laoreet ultricies sodales a metus ac sed. 
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-half text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4 shadow">
                    <div class="profile d-flex align-text-center p-4">
                        <h5><i class="bi bi-person-circle text-danger me-2"></i></h5>
                        <h6>L**** R******</h6>
                    </div>
                    <p>
                    Lorem ipsum per habitasse erat adipiscing tellus fames integer erat tellus,
                    vulputate curabitur elit mi netus vitae est sapien lorem ipsum eleifend, 
                    ultricies rutrum laoreet ultricies sodales a metus ac sed. 
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4 shadow">
                    <div class="profile d-flex align-text-center p-4">
                        <h5><i class="bi bi-person-circle text-danger me-2"></i></h5>
                        <h6>X***** N***** C****</h6>
                    </div>
                    <p>
                    Lorem ipsum per habitasse erat adipiscing tellus fames integer erat tellus,
                    vulputate curabitur elit mi netus vitae est sapien lorem ipsum eleifend, 
                    ultricies rutrum laoreet ultricies sodales a metus ac sed. 
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4 shadow">
                    <div class="profile d-flex align-text-center p-4">
                        <h5><i class="bi bi-person-circle text-primary me-2"></i></h5>
                        <h6>R**** T*****</h6>
                    </div>
                    <p>
                    Lorem ipsum per habitasse erat adipiscing tellus fames integer erat tellus,
                    vulputate curabitur elit mi netus vitae est sapien lorem ipsum eleifend, 
                    ultricies rutrum laoreet ultricies sodales a metus ac sed. 
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star text-warning"></i>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <!-- Reach US -->

        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font color-blue">REACH US</h2>

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded shadow">
                <iframe class="w-100 rounded" height="350px" src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d3866.3875574978438!2d120.9611946746245!3d14.288900384632939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3397d58cc7060449%3A0xba193d41bd00d36b!2sPCU%20Dasmari%C3%B1as%20College%20Building%2C%20PCU%20College%20Building%2C%20Dasmari%C3%B1as%2C%204114%20Cavite!3m2!1d14.2887516!2d120.96343909999999!5e0!3m2!1sen!2sph!4v1711165255203!5m2!1sen!2sph"></iframe>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="bg-white p-4 rounded mb-4 shadow ">
                        <h5>Call Us</h5>
                        <a href= "tel: +<?php echo $contact_r['pn1'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark ">
                            <i class="bi bi-telephone-fill"></i> +<?php echo $contact_r['pn1'] ?>
                        </a>
                        <br>
                        <?php
                            if($contact_r['pn2']!=''){
                                echo<<<data
                                <a href= "tel: +$contact_r[pn2]" class="d-inline-block mb-2 text-decoration-none text-dark ">
                                    <i class="bi bi-telephone-fill"></i> +$contact_r[pn2]
                                </a>
                                data;
                            }
                        ?>
                        
                    </div>
                    <div class="bg-white p-4 rounded mb-4">
                        <h5>Follow Us</h5>
                        <?php
                            if ($contact_r['fb']!=''){
                                echo<<<data
                                    <a href="$contact_r[fb]" class="d-inline-block mb-3">
                                        <span class="badge bg-light text-dark fs-6 p-2">
                                            <i class="bi bi-facebook text-primary"></i>  Facebook
                                        </span>
                                    </a>
                                    <br>
                                data;
                            }
                        ?>
                        
                        <a href="<?php echo $contact_r['ig']?>" class="d-inline-block mb-3">
                            <span class="badge bg-light text-dark fs-6 p-2">
                                <i class="bi bi-instagram text-danger"></i>  Instagram 
                            </span>
                        </a>
                        <br>
                        <a href="<?php echo $contact_r['tw']?>" class="d-inline-block mb-3">
                            <span class="badge bg-light text-dark fs-6 p-2">
                                <i class="bi bi-twitter text-primary"></i>  Twitter
                            </span>
                        </a>
                        <br>
                        <a href="<?php echo $contact_r['tk']?>" class="d-inline-block mb-3">
                            <span class="badge bg-light text-dark fs-6 p-2">
                                <i class="bi bi-tiktok"></i>  Tiktok 
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <br><br><br>
        <br><br><br>
        <!-- JS Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!-- JS Swipersjs -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper(".swiper-content", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
        });
        var swiper = new Swiper(".swiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            loop: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });      
        </script>
  
    </body>

</html>