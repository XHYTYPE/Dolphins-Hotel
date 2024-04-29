<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dolphins Hotel - Rooms</title>
        <!--CSS Swiperjs -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
        <?php include('inc/links.php'); ?>
    </head>
    
    <body class="bg-dw">

        <?php include('inc/header.php'); ?>
        <!-- OUR ROOMS -->
        <div class="my-5 px-4">
            <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font color-blue">OUR ROOMS</h2>
            <div class="h-line bg-dark"> </div>
        </div>
        
        <div class="container ">
            <div class="row ">
                <!-- FILTERS -->
                <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
                    <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                        <div class="container-fluid flex-lg-column align-items-stretch">
                            <h4 class="mt-2">FILTERS</h4>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                                <div class="border bg-light p-3 rounded mb-3">
                                    <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
                                    <label class="form-label" style="font-weight: 500;">Check-In</label>
                                    <input type="date" class="form-control shadow-none">
                                    <label class="form-label" style="font-weight: 500;">Check-Out</label>
                                    <input type="date" class="form-control shadow-none">
                                </div>
                                <div class="border bg-light p-3 rounded mb-3">
                                    <h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
                                    <div class="mb-2">
                                        <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="f1">Wi-Fi</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="f1">Television</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="f1">Aircon</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="f1">Toiletries</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="f1">Wardrobe</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="f1">Refrigirator</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="f1">Desk</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="f1">Bathtub</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="f1">Bar</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="f1">Room Service</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="f1">Pool</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="f1">Gym</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="f1">Caffee</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="f1">Free Breakfast</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="f1">Spa</label>
                                    </div>
                                </div>
                                <div class="border bg-light p-3 rounded mb-3">
                                    <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
                                    <div class="d-flex ">
                                        <div class="me-2">
                                            <label class="form-label" style="font-weight: 500;">Adult</label>
                                            <input type="number" class="form-control shadow-none">
                                        </div>
                                        <div>
                                            <label class="form-label" style="font-weight: 500;">Children </label>
                                            <input type="number" class="form-control shadow-none">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- ROOMS -->
                <div class="col-lg-9 col-md-12 px-4">
                    <!-- Solo1 -->
                    <div class="card mb-4 border-0 shadow">
                        <div class="row g-0 p-3 align-items-center">
                            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                                <img src="images/rooms/Solo1.jpg" class="img-fluid rounded-start" alt="Solo">
                            </div>
                            <div class="col-md-5 px-lg-3 px-md-3 px-0">
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
                            </div>
                            <div class="col-md-2 text-align-center">
                                <div class="card-body">
                                    <h5>Solo Standard</h5>
                                    <h6 class="mb-4">₱ 500 per night</h6>
                                    <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                                    <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Solo3 -->
                    <div class="card mb-4 border-0 shadow">
                        <div class="row g-0 p-3 align-items-center">
                            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                                <img src="images/rooms/Solo3.jpg" class="img-fluid rounded-start" alt="Solo">
                            </div>
                            <div class="col-md-5 px-lg-3 px-md-3 px-0">
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
                            </div>
                            <div class="col-md-2 text-align-center">
                                <div class="card-body">
                                    <h5>Solo Modern</h5>
                                    <h6 class="mb-4">₱ 650 per night</h6>
                                    <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                                    <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Couple 1 -->
                    <div class="card mb-4 border-0 shadow">
                        <div class="row g-0 p-3 align-items-center">
                            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                                <img src="images/rooms/Couple1.jpg" class="img-fluid rounded-start" alt="Solo">
                            </div>
                            <div class="col-md-5 px-lg-3 px-md-3 px-0">
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
                            </div>
                            <div class="col-md-2 text-align-center">
                                <div class="card-body">
                                    <h5>Couple Standard</h5>
                                    <h6 class="mb-4">₱ 900 per night</h6>
                                    <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                                    <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Couple 2 -->
                    <div class="card mb-4 border-0 shadow">
                        <div class="row g-0 p-3 align-items-center">
                            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                                <img src="images/rooms/Couple02.jpg" class="img-fluid rounded-start" alt="Solo">
                            </div>
                            <div class="col-md-5 px-lg-3 px-md-3 px-0">
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
                            </div>
                            <div class="col-md-2 text-align-center">
                                <div class="card-body">
                                    <h5>Couple Modern</h5>
                                    <h6 class="mb-4">₱ 1,500 per night</h6>
                                    <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                                    <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Lodge -->
                    <div class="card mb-4 border-0 shadow">
                        <div class="row g-0 p-3 align-items-center">
                            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                                <img src="images/rooms/Lodge1.jpg" class="img-fluid rounded-start" alt="Solo">
                            </div>
                            <div class="col-md-5 px-lg-3 px-md-3 px-0">
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
                            </div>
                            <div class="col-md-2 text-align-center">
                                <div class="card-body">
                                    <h5>Lodge</h5>
                                    <h6 class="mb-4">₱ 4,000 per night</h6>
                                    <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                                    <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Suite -->
                    <div class="card mb-4 border-0 shadow">
                        <div class="row g-0 p-3 align-items-center">
                            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                                <img src="images/rooms/Suite2.jpg" class="img-fluid rounded-start" alt="Solo">
                            </div>
                            <div class="col-md-5 px-lg-3 px-md-3 px-0">
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
                            </div>
                            <div class="col-md-2 text-align-center">
                                <div class="card-body">
                                    <h5>Suite</h5>
                                    <h6 class="mb-4">₱ 10,000 per night</h6>
                                    <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                                    <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- JS Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!-- JS Swipersjs -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
          
    </body>

</html>