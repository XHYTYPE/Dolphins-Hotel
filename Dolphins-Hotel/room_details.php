<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dolphins Hotel - Room Details</title>
        <!--CSS Swiperjs -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
        <?php include('inc/links.php'); ?>
    </head>
    
    <body class="bg-dw">

        <?php include('inc/header.php'); ?>

        <?php
            if(!isset($_GET['id'])){
                redirect('rooms.php');
            }

            $data = filteration($_GET);

            $room_res = select("SELECT * FROM `rooms` WHERE `id`=? AND `status`=? AND `removed`=?",[$data['id'],1,0],'iii');

            if(mysqli_num_rows($room_res)==0){
                redirect('rooms.php');
            }

            $room_data = mysqli_fetch_assoc($room_res);

        ?>

        
        <div class="container">
            <div class="row ">

                <!-- ROOM NAME DETAILS -->
                <div class="col-12 my-5 mb-4 px-4">
                    <h2 class="fw-bold h-font color-blue"><?php echo $room_data['name']?></h2>
                    <div style="font-size:14px;">
                        <a href="index.php" class="text-secondary text-decoration-none">HOME</a>
                        <span class="text-secondary"> > </span>
                        <a href="rooms.php" class="text-secondary text-decoration-none">ROOMS</a>
                    </div>
                </div>

                <!-- ROOM PICS -->
                <div class="col-lg-7 col-md-12 px-4">
                    <div id="roomCarousel" class="carousel slide carousel-fade">
                        <div class="carousel-inner mb-5">
                            <?php
                                $room_img = ROOMS_IMG_PATH."thumbnail.jpg";
                                $img_q = mysqli_query($con,"SELECT * FROM `room_images` 
                                    WHERE `room_id`='$room_data[id]'");

                                if(mysqli_num_rows($img_q) > 0)
                                {
                                    $active_class = 'active';

                                    while($img_res = mysqli_fetch_assoc($img_q))
                                    {
                                        echo "
                                            <div class='carousel-item $active_class'>
                                            <img src='".ROOMS_IMG_PATH.$img_res['image']."' class='d-block w-100 rounded'>
                                            </div>
                                        ";
                                        $active_class ='';
                                    }
                                }
                                else{
                                    echo "
                                        <div class='carousel-item active'>
                                        <img src='$room_img' class='d-block w-100 '>
                                        </div>
                                    ";
                                }
                            ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#roomCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#roomCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 px-4">
                    <div class="card mb-4 border-0 shadow rounded-3">
                        <div class="card-body">
                            <?php
                                echo<<<price
                                    <h5>₱ $room_data[price] per night</h5>
                                price;
                                
                                echo<<<rating
                                    <h6 class="mb-1 mt-3">Rating</h6>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star text-warning"></i>
                                rating;

                                echo<<<features
                                    <div class="features mb-4 mt-3">
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
                                features;

                                echo<<<facilities
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
                                facilities;

                                echo<<<guests
                                    <div class="guest mb-4">
                                        <h6 class="mb-1">Guests</h6>
                                        <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                            $room_data[adult] Adults
                                        </span>
                                        <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                            $room_data[children] Children
                                        </span>
                                    </div>
                                guests;

                                echo<<<area
                                    <div class="mb-3">
                                        <h6 class="mb-1">Area</h6>
                                        <span class="badge rounded-pill text-dark bg-infog text-wrap">
                                            $room_data[area] sq. ft.
                                        </span>
                                    </div>
                                area;

                                echo<<<book
                                    <a href="#" class="btn w-100 text-white custom-bg shadow-none mb-1">Book Now</a>
                                book;
                            ?>
                        </div>
                    </div>
                </div>

                <!-- DESCRIPTION -->
                <div class="col-12 mt-4 px-4">
                    <div class="mb-5">
                        <h5>Description</h5>
                        <p>
                            <?php echo $room_data['description']?>
                        </p>
                    </div>
                    <div>
                        <h5 class="mb-3">Review & Rating</h5>
                        <div>
                            <div class="d-flex align-text-center mb-4">
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