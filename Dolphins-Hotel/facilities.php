<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dolphins Hotel - Facilities</title>
        <!--CSS Swiperjs -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
        <?php include('inc/links.php'); ?>
        
        <style>
            .pop:hover{
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
            <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font color-blue">OUR FACILITIES</h2>
            <div class="h-line bg-dark"> </div>
            <p class="text-center mt-3">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                Aspernatur tempora nostrum  rem eaque consectetur ipsum impedit hic harum accusamus. 
                Expedita tempore voluptatibus tempora temporib
            </p>
        </div>
        
        <div class="container">
            <div class="row">

                <?php
                    $res = selectAll('facilities');
                    $path = FACILITIES_IMG_PATH;

                    while($row = mysqli_fetch_assoc($res)){
                        echo <<< data
                        <div class="col-lg-4 col-md-6 mb-5 px-4">
                            <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                                <div class="d-flex align-items-center mb-2">
                                    <img src="$path$row[icon]" width="40px">
                                    <h5 class="m-0 ms-2">$row[name]</h5>
                                </div>
                                <p>$row[description]</p>
                            </div>
                        </div>
                        data;
                    }
                ?>
                
            </div>
        </div>

        <!-- JS Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!-- JS Swipersjs -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
          
    </body>

</html>