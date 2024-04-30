<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dolphins Hotel - Contact Us</title>
        <!--CSS Swiperjs -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
        <?php include('inc/links.php'); ?>
    </head>
    
    <body class="bg-dw">

        <?php include('inc/header.php'); ?>
        <!-- OUR FACILITIES -->
        <div class="my-5 px-4">
            <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font color-blue">CONTACT US</h2>
            <div class="h-line bg-dark"> </div>
            <p class="text-center mt-3">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                Aspernatur tempora nostrum  rem eaque consectetur ipsum impedit hic harum accusamus. 
                Expedita tempore voluptatibus tempora temporib
            </p>
        </div>
        
        <div class="container ">
            <div class="row ">
                <!-- Map -->
                <div class="col-lg-6 col-md-6 mb-5 px-4 ">
                    <div class="bg-white rounded shadow p-4 ">
                        <!-- Contact Info -->
                        <iframe class="w-100 rounded mb-4" height="350px" src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d3866.3875574978438!2d120.9611946746245!3d14.288900384632939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3397d58cc7060449%3A0xba193d41bd00d36b!2sPCU%20Dasmari%C3%B1as%20College%20Building%2C%20PCU%20College%20Building%2C%20Dasmari%C3%B1as%2C%204114%20Cavite!3m2!1d14.2887516!2d120.96343909999999!5e0!3m2!1sen!2sph!4v1711165255203!5m2!1sen!2sph"></iframe>
                        <h5>Address</h5>
                        <a href="<?php echo $contact_r['gmap']?>" target="_blank" class="d-inline-block text-decoration-none text-dark">
                            <i class="bi bi-geo-alt-fill"></i> <?php echo $contact_r['address']?>
                        </a>
                        <h5 class="mt-4">Call Us</h5>
                        <a href="tel: +<?php echo $contact_r['pn1']?>" class="d-inline-block mb-2 text-decoration-none text-dark">
                            <i class="bi bi-telephone-fill"></i> +<?php echo $contact_r['pn1']?>
                        </a>
                        <br>
                        <?php
                            if($contact_r['pn2']!=''){
                                echo<<<data
                                <a href="tel: +$contact_r[pn2]" class="d-inline-block mb-2 text-decoration-none text-dark">
                                    <i class="bi bi-telephone-fill"></i> +$contact_r[pn2]
                                </a>
                                data;
                            }
                        ?>
                        
                        <h5 class="mt-4">Email</h5>
                        <a href="mailto: <?php echo $contact_r['email']?>" target="_blank" class="d-inline-block text-decoration-none text-dark">
                            <i class="bi bi-envelope-at-fill"></i> <?php echo $contact_r['email']?>
                        </a>

                        <h5 class="mt-4">Follow Us</h5>
                        <?php
                            if($contact_r['fb']!=''){
                                echo<<<data
                                <a href=" $contact_r[fb]" class="d-inline-block text-dark fs-5 me-2">
                                    <i class="bi bi-facebook"></i>
                                </a>
                                data;
                            }
                        ?>
                        
                        <a href="<?php echo $contact_r['ig']?>" class="d-inline-block text-dark fs-5 me-2">
                            <i class="bi bi-instagram"></i> 
                        </a>
                        <a href="<?php echo $contact_r['tw']?>" class="d-inline-block text-dark fs-5 me-2">
                            <i class="bi bi-twitter"></i> 
                        </a>
                        <a href="<?php echo $contact_r['tk']?>" class="d-inline-block text-dark fs-5 me-2">
                            <i class="bi bi-tiktok"></i>
                        </a>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-6 col-md-6 mb-5 px-4">
                    <div class="bg-white rounded shadow p-4">
                        <form method="POST">
                            <h5>Send a Message</h5>
                            <div class="mt-3">
                                <label class="form-label" style="font-weight:500;">Name</label>
                                <input name="name" required type="text" class="form-control shadow-none">
                            </div>
                            <div class="mt-3">
                                <label class="form-label" style="font-weight:500;">Email</label>
                                <input name="email" required type="email" class="form-control shadow-none">
                            </div>
                            <div class="mt-3">
                                <label class="form-label" style="font-weight:500;">Subject</label>
                                <input name="subject" required type="text" class="form-control shadow-none">
                            </div>
                            <div class="mt-3">
                                <label class="form-label" style="font-weight:500;">Message</label>
                                <textarea name="message" required  class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                            </div>
                            <button type="submit" name="send" class="btn text-white custom-bg mt-4 shadow-none">SEND</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php
        
            if(isset($_POST['send']))
            {
                $frm_data = filteration($_POST);

                $q = "INSERT INTO `user_queries`(`name`, `email`, `subject`, `message`) VALUES (?,?,?,?)";
                $values = [$frm_data['name'],$frm_data['email'],$frm_data['subject'],$frm_data['message']];

                $res = insert($q, $values, 'ssss'); 

                if($res==1){
                    alert('success','Mail sent!');
                }
                else{
                    alert('error', 'Server Down. Try Again Later!');
                }
            }
        
        ?>

        <!-- JS Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!-- JS Swipersjs -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
          
    </body>

</html>