<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dolphins Hotel</title>
        <!--CSS bootstap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!--GOOGLE FONTS-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
        <!--ICON bootstap-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <!--CSS Swiperjs -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="css/common.css"/>
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
        <!--Navigation Bar START-->
        <nav class="navbar navbar-expand-lg bg-body-tertiary px-lg-3 py-lg-1 shadow sticky-top">
            <div class="container-fluid">
            <a class="navbar-brand me-5" href="index.php">
                <img src="images/logo/D-LOGO.png" alt="logo" width="120" height="90">
            </a>
                <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active me-2 fw-medium" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2 fw-medium" href="#">Rooms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2 fw-medium" href="#">Facilities</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2 fw-medium" href="#">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2 fw-medium" href="#">About</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                    <button type="button" class="btn btn-primary shadow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#loginModal">
                        Login
                    </button>
                    <button type="button" class="btn btn-primary shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
                        Register
                    </button>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Login Modal START-->
        <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-dw">
                    <form>
                        <div class="modal-header">
                            <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-circle fs-3 me-2"></i>User Login
                            </h5>
                            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Email address</label>
                                <input type="email" class="form-control shadow-none">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control shadow-none">
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <button type="submit" class="btn btn-primary shadow-none">LOGIN</button>
                                <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forget Password</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

         <!-- Register Modal START-->
        <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content bg-dw">
                    <form>
                        <div class="modal-header">
                            <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-lines-fill fs-3 me-2"></i>User Registertration
                            </h5>
                            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <span class="badge rounded-pill text-bg-info mb-3 text-wrap lh-base">
                                Note : Your details must match to your ID (Passport, Postal ID, National ID, Drivers Licence, etc.)
                                This will be required during check-in.
                            </span>
                            <div class="container-fluid">
                                <div class="row">
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Email address</label>
                                    <input type="email" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Contact Number</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Picture</label>
                                    <input type="file" class="form-control shadow-none">
                                </div>
                                <div class="col-md-12 ps-0 mb-3">
                                    <label class="form-label">Address</label>
                                    <textarea class="form-control" rows="1"></textarea>
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Pincode</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control shadow-none">
                                </div>
                            </div>
                        </div>
                        <div class="text-center my-1">
                            <button type="submit" class="btn btn-primary shadow-none">REGISTER</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Photos Swiper START-->
        <div class="container-fluid px-lg-4 mt-4">
            <div class="swiper mySwiper">
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
                            </div>
                            <div class="facilities mb-4">
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
                            </div>
                            <div class="facilities mb-4">
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
                            </div>
                            <div class="facilities mb-4">
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
                            </div>
                            <div class="facilities mb-4">
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
                            </div>
                            <div class="facilities mb-4">
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
                            </div>
                            <div class="facilities mb-4">
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
                    <img src="images/facilities/WiFi_Logo.svg.png" width="80px">
                    <h5 class="mt-3">Wifi</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/facilities/TV.jpg" width="130px">
                    <h5 class="mt-3">Television</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="" width="80px">
                    <h5 class="mt-3">Aircon</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="" width="80px">
                    <h5 class="mt-3">Toiletries</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="" width="80px">
                    <h5 class="mt-3">Wardrobe</h5>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="" width="80px">
                    <h5 class="mt-3">Refrigirator</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="" width="80px">
                    <h5 class="mt-3">Desk</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="" width="80px">
                    <h5 class="mt-3">Bathtub</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="" width="80px">
                    <h5 class="mt-3">Bar</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="" width="80px">
                    <h5 class="mt-3">Room Service</h5>
                </div>
            </div>
        </div>


        <br><br><br>
        <br><br><br>
        

        <!-- JS Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!-- JS Swipersjs -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <!-- JS PhotoSliders -->
        <script>
            var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
        });
  </script>
    </body>

</html>