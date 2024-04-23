<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dolphins Hotel - About Us</title>
        <!--CSS Swiperjs -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
        <?php include('inc/links.php'); ?>
        <style>
            .box:hover{
                border-top-color: var(--blue) !important;
                transform: scale(1.03);
                transition: all 0.03s;
            }
        </style>

    </head>
    
    <body class="bg-dw">

        <?php include('inc/header.php'); ?>
        <!-- OUR FACILITIES -->
        <div class="my-5 px-4">
            <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font color-blue">ABOUT US</h2>
            <div class="h-line bg-dark"> </div>
            <p class="text-center mt-3">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                Aspernatur tempora nostrum  rem eaque consectetur ipsum impedit hic harum accusamus. 
                Expedita tempore voluptatibus tempora temporib
            </p>
        </div>

        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                    <h3 class="mb-3">Lorem ipsum dolor sit</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                        Esse possimus neque illo, assumenda molestias laborum recusandae, 
                        enim accusantium exercitationem vitae quidem? 
                        Ullam accusantium vel minima quibusdam consequatur quos? Hic, tempora!
                    </p>
                </div>
                <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                    <img src="images/persons/people.jpg" class="w-100">
                </div>
            </div>
        </div>
        
        <div class="container mt-5">
            <div class="row">
                <!-- rooms -->
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                        <img src="images/icon/BED.png" width="90px">
                        <h4 class="mt-3">500+ ROOMS</h4>
                    </div>
                </div>
                <!-- customers -->
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                        <img src="images/icon/customer.png" width="60px">
                        <h4 class="mt-3">2,000+ CUSTOMERS</h4>
                    </div>
                </div>
                <!-- reviews -->
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                        <img src="images/icon/review.png" width="90px">
                        <h4 class="mt-3">2,000+ REVIEWS</h4>
                    </div>
                </div>
                <!-- staff -->
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                        <img src="images/icon/staff.png" width="90px">
                        <h4 class="mt-3">100+ STAFFS</h4>
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