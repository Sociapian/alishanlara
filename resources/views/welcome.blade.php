<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alishan | Home</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
   <!-- Option 1: Include in HTML -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- gogle fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sen:wght@400..800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sen:wght@400..800&display=swap" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href={{ asset("css/style.css")}}>
</head>
<body>
  @include('layout.header')

  <!-- A royal Affair Section -->
   <section class="royal-affair">
    <div class="row">
        <div class="col-md-6 ra-left">
            <img src={{ asset("imgs/royal-affair.png")}} alt="Royal Affair Image">
            <p>Experience the exquisite flavor of our premium rice, where each grain is a celebration of quality. Sourced from the best fields, our rice elevates every dish to culinary perfection.</p>
        </div>
        <div class="col-md-6 ra-right">
            <img src={{ asset("imgs/biryani-png.png")}} alt="rice-creative">
        </div>
    </div>
   </section>
   <!-- End of the Royal Affair -->

   <!-- about us section -->
    <section class="about-us">
        <div class="row">
            <div class="col-md-6 about-left">  
                <p>“Where rice is not just a product but a constant and growing endeavour for the best.” The pristine foothills of the Himalayas have been the home to the flavorful, aromatic Basmati Rice for centuries. Basmati Rice has become an inevitable part of many world cuisines. Starting in 1983, Alishaan has been relentlessly working towards producing, preserving, and bringing to its customers ‘a wholesome culinary experience’.</p>
            </div>
            <div class="col-md-6 about-right">
                <hr class="gradient-line"> 
                <img src={{ asset("imgs/about-us.png")}} alt="about">
            </div>
        </div>
        <div class="row why-us">
            <h4 class="text-left">WHY US</h4>
            <hr class="gradient-line"> 
            <!-- Four Columns -->
            <div class="row why-us-section mb-5">
            <div class="col-md-3 col-sm-6">
                <div class="why-us-card">
                <img src={{ asset("imgs/legacy.png")}} alt="legacy">
                <h5>Legacy</h5>
                <p>Our journey involves 37 determined years and millions of satisfied taste buds.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="why-us-card">
                <img src={{ asset("imgs/quality.png")}} alt="quality">
                <h5>Quality</h5>
                <p>Every step in the process is quality controlled to provide you with the best grains.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="why-us-card">
                <img src={{ asset("imgs/sp.png")}} alt="sp">
                <h5>Strategic Planing</h5>
                <p>We are committed to enhancing the customer experience to an all-new level.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="why-us-card">
                <img src={{ asset("imgs/certification.png")}} alt="certification">
                <h5>Certifications</h5>
                <p>Each grain of Alishaan basmati rice is certified and approved.</p>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- end about us -->

    <!-- being alishaan -->
    <section class="being-alishan">
        <div class="container-fluid mb-5 ba-prod">
            <div class="row">
                <!-- Product Images -->
                <div class="col-lg-6 text-center m-0 rice">
                        <img class="first-img" src={{ asset("imgs/rice01.png")}} alt="rice image">
                    <div class="vr"></div>
                    <img src={{ asset("imgs/rice02.png")}} alt="rice image">
                    <div class="vr"></div>
                    <img src={{ asset("imgs/rice03.png")}} alt="rice image">
                    <div class="vr"></div>
                    <img src={{ asset("imgs/rice04.png")}} alt="rice image">
                    <div class="vr"></div>
                    <img src={{ asset("imgs/rice05.png")}} alt="rice image">
                    <div class="vr"></div>
                </div>

                <!-- Descriptive Text -->
                <div class="col-lg-6 mt-5 being-right">
                    <span>BEING</span><img src={{ asset("imgs/Alishaan-head.png")}} class="ms-3" alt="alishan">
                    <hr>
                    <p>“There is no love sincerer than the love of food.”― George Bernard Shaw” At Alishaan we savor a legacy that has a grain of tradition, the culture of purity, and the value of exclusivity. Our profound legacy of over 40 years coupled with the best milling and production practices bring to you, not just the finest varieties of <a href="#" class="text-white">Superba</a>, <a href="#" class="text-white">XL Sella</a>, <a href="#" class="text-white">Delight</a>,<a href="#" class="text-white"> Aroma A1</a>, <a href="#" class="text-white">Brown Basmati Rice</a>, but the finest dining experience. </p>
                    <p class="mt-3">Born in the lap of the Himalayas and nurtured with the holy Ganges river,<a href="#" class="text-white"> each grain of Alishaan</a> is a culinary delight. Careful seed selection and the best farming practices ensure the longest and the most aromatic grains that are pure, full of flavor, and fluffy. The state-of-the-art multi-level processing ensures a salubrious aroma, a delectable taste, and immaculately clean rice.</p>
                  </div>
            </div>
        </div>
    </section>
     <!-- End being alishaan -->

  <!-- recipe section -->
  <section class="recipe-section">
  <div class="container-fluid p-5">
    <h2 class="text-uppercase">Our Recipes</h2>
    <hr class="r-line">
    <div id="videoCardSlider" class="carousel slide">
        <!-- Controls -->
        <div class="custom-carousel-controls">
            <!-- Previous Button -->
            <button class="carousel-control-prev" type="button" data-bs-target="#videoCardSlider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <!-- Next Button -->
            <button class="carousel-control-next" type="button" data-bs-target="#videoCardSlider" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="carousel-inner">
            <!-- First slide -->
            <div class="carousel-item active">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="video-card position-relative">
                                <img src={{ asset("imgs/recipe-vdo.png")}} alt="Recipe 1">
                            <a href="video1.mp4" class="play-icon" target="_blank">
                                <i class="bi bi-play-fill"></i>
                            </a>
                            <div class="p-3">
                                <h5 class="video-card-title">Our Chef Recommended</h5>
                                <p class="video-card-subtitle">It’s not just food; it’s an invitation to savor moments shared around the table.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="video-card position-relative">
                                <img src={{ asset("imgs/recipe-vdo2.png")}} alt="Recipe 2">
                            <a href="video2.mp4" class="play-icon" target="_blank">
                                <i class="bi bi-play-fill"></i>
                            </a>
                            <div class="p-3">
                                <h5 class="video-card-title">Our Chef Recommended</h5>
                                <p class="video-card-subtitle">It’s not just food; it’s an invitation to savor moments shared around the table.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="video-card position-relative">
                                <img src={{ asset("imgs/recipe-vdo.png")}} alt="Recipe 3">
                            <a href="video3.mp4" class="play-icon" target="_blank">
                                <i class="bi bi-play-fill"></i>
                            </a>
                            <div class="p-3">
                                <h5 class="video-card-title">Our Chef Recommended</h5>
                                <p class="video-card-subtitle">It’s not just food; it’s an invitation to savor moments shared around the table.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- second slide -->
            <div class="carousel-item active">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="video-card position-relative">
                            <img src={{ asset("imgs/recipe-vdo.png")}} alt="Recipe 1">
                            <a href="video1.mp4" class="play-icon" target="_blank">
                                <i class="bi bi-play-fill"></i>
                            </a>
                            <div class="p-3">
                                <h5 class="video-card-title">Our Chef Recommended</h5>
                                <p class="video-card-subtitle">It’s not just food; it’s an invitation to savor moments shared around the table.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="video-card position-relative">
                            <img src={{ asset("imgs/recipe-vdo2.png")}} alt="Recipe 2">
                            <a href="video2.mp4" class="play-icon" target="_blank">
                                <i class="bi bi-play-fill"></i>
                            </a>
                            <div class="p-3">
                                <h5 class="video-card-title">Our Chef Recommended</h5>
                                <p class="video-card-subtitle">It’s not just food; it’s an invitation to savor moments shared around the table.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="video-card position-relative">
                            <img src={{ asset("imgs/recipe-vdo.png")}} alt="Recipe 3">
                            <a href="video3.mp4" class="play-icon" target="_blank">
                                <i class="bi bi-play-fill"></i>
                            </a>
                            <div class="p-3">
                                <h5 class="video-card-title">Our Chef Recommended</h5>
                                <p class="video-card-subtitle">It’s not just food; it’s an invitation to savor moments shared around the table.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!-- map -->   
   <div class="container-fluid mt-5 text-center map">
        <h3 class="mt-5">From Fields to Families</h3>
        <hr>
        <p class="text-uppercase">Our Presence</p>

        <!-- Map Container -->
        <div class="map-container">
            <!-- Location Icons with Tooltips -->
            <i class="fas fa-map-marker-alt location-icon location-uk" data-bs-toggle="tooltip" data-bs-placement="top" title="United Kingdom"></i>
            <i class="fas fa-map-marker-alt location-icon location-netherlands" data-bs-toggle="tooltip" data-bs-placement="top" title="Netherlands"></i>
            <i class="fas fa-map-marker-alt location-icon location-italy" data-bs-toggle="tooltip" data-bs-placement="top" title="Italy"></i>
            <i class="fas fa-map-marker-alt location-icon location-malaysia" data-bs-toggle="tooltip" data-bs-placement="top" title="Malaysia"></i>
            <i class="fas fa-map-marker-alt location-icon location-south-africa" data-bs-toggle="tooltip" data-bs-placement="top" title="South Africa"></i>
        </div>
    </div>
   <!-- end map -->

  </section> 
<!-- end recipe section -->

  <!-- imalishan section -->
  <section class="iamlishan">
    <div class="container-fluid text-center">
        <div class="imaImg pt-5"><span>I AM </span><img src={{ asset("imgs/Alishaan-head.png")}} class="me-3" alt="alishan"><span>BASMATI RICE</span></div>
        <P>Born in the lap of Himalayas, nurtured with 4000 liters of water, soaked in 120 days of sun, a masterpiece of over a 1000 craftsmen, I fascinate, I entice, I tantalize.</P>
    </div>
  </section> 
   <!-- end imalishan -->

   <!-- social and blog section -->
    <section class="socialblog">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="ms-5">We Are Social</h2>
                    <hr>
                    <h3 class="ms-5 text-white">From Field to Feast: The Essence of Rice</h3>
                    <p class="ms-5 text-white">With its delicate aroma and fluffy texture, our rice transforms simple meals into gourmet experiences. Whether it’s a comforting bowl of rice or a festive biryani, every bite delivers pure delight.</p>
                    <div class="mt-5 ms-5 content-border">
                        <img src={{ asset("imgs/insta-icon.png")}} alt="insta"><span>Follow us on Instagram</span>
                    </div>
                </div>
                <div class="col-md-6 bb"></div>
                    <div class="row insta-sec">
                        <section>
                            <div class="container">
                                <div class="row">
                                <!-- <div class="col-6">
                                    <h3 class="mb-3">Image Slider</h3>
                                </div>
                                <div class="col-6 text-end">
                                    <button class="btn btn-primary mb-3" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <i class="fa fa-arrow-left"></i>
                                    </button>
                                    <button class="btn btn-primary mb-3" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <i class="fa fa-arrow-right"></i>
                                    </button>
                                </div> -->
                                <div class="col-12">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <!-- First Slide -->
                                            <div class="carousel-item active">
                                            <div class="row">
                                                <div class="col-md-4 mt-3">
                                                <img src={{ asset("imgs/insta1.png")}} class="d-block w-100" alt="Image 1">
                                                </div>
                                                <div class="col-md-4 mt-3">
                                                <img src={{ asset("imgs/insta2.png")}} class="d-block w-100" alt="Image 2">
                                                </div>
                                                <div class="col-md-4 mt-3">
                                                <img src={{ asset("imgs/insta3.png")}} class="d-block w-100" alt="Image 3">
                                                </div>
                                            </div>
                                            </div>
                                            <!-- Second Slide -->
                                            <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-md-4 mt-3">
                                                <img src={{ asset("imgs/insta4.png")}} class="d-block w-100" alt="Image 4">
                                                </div>
                                                <div class="col-md-4 mt-3">
                                                <img src={{ asset("imgs/insta1.png")}} class="d-block w-100" alt="Image 5">
                                                </div>
                                                <div class="col-md-4 mt-3">
                                                <img src={{ asset("imgs/insta2.png")}} class="d-block w-100" alt="Image 6">
                                                </div>
                                            </div>
                                            </div>
                                            <!-- Add more slides as needed -->
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    
                    <section class="pt-5 pb-5 blog">
                        <div class="container">
                            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <!-- First Slide -->
                                <div class="carousel-item active">
                                <div class="row align-items-center">
                                    <!-- Image -->
                                    <div class="col-md-7">
                                    <img src={{ asset("imgs/blog1.png")}} class="d-block w-75 rounded" alt="Image 2">
                                    </div>
                                    <!-- Text -->
                                    <div class="col-md-5 text-white blog-title">
                                    <h4 class="mb-3" >OUR BLOG</h4>
                                    <hr>
                                    <h2 class="mb-3">Discover the Secrets of Perfectly Cooked Biryani</h2>
                                    <p>
                                        Perfect biryani is all about the right rice. Learn how Alishaan Basmati Rice brings out the flavor and aroma of this royal dish with its superior quality and long grains.
                                    </p>
                                    <a href="#" class="btn btn-outline-light vb" >View Our Blogs</a>
                                    </div>
                                </div>
                                </div>

                                <!-- Second Slide -->
                                <div class="carousel-item">
                                <div class="row align-items-center">
                                    <!-- Image -->
                                    <div class="col-md-7">
                                    <img src={{ asset("imgs/blog1.png")}} class="d-block w-75 rounded" alt="Image 2">
                                    </div>
                                    <!-- Text -->
                                    <div class="col-md-5 text-white blog-title">
                                    <h4 class="mb-3" >OUR BLOG</h4>
                                    <hr>
                                    <h2 class="mb-3">Discover the Secrets of Perfectly Cooked Biryani</h2>
                                    <p>
                                        Perfect biryani is all about the right rice. Learn how Alishaan Basmati Rice brings out the flavor and aroma of this royal dish with its superior quality and long grains.
                                    </p>
                                        <a href="#" class="btn btn-outline-light vb">View Our Blogs</a>
                                    </div>
                                </div>
                                </div>

                                <!-- Third Slide -->
                                <div class="carousel-item">
                                <div class="row align-items-center">
                                    <!-- Image -->
                                    <div class="col-md-7">
                                    <img src={{ asset("imgs/blog1.png")}} class="d-block w-75 rounded" alt="Image 3">
                                    </div>
                                    <!-- Text -->
                                    <div class="col-md-5 text-white blog-title">
                                    <h4 class="mb-3">OUR BLOG</h4>
                                    <hr>
                                    <h2 class="mb-3 blog-title">Health Benefits of Eating Basmati Rice</h2>
                                    <p>
                                        Discover the numerous health benefits of incorporating basmati rice into your diet. Alishaan Basmati Rice ensures both taste and nutrition in every grain.
                                    </p>
                                        <a href="#" class="btn btn-outline-light vb" >View Our Blogs</a>
                                    </div>
                                </div>
                                </div>
                            </div>

                            <!-- Controls -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                            </div>
                        </div>
                        </section>
        </div>
    </section>
   <!-- end blog and social section -->

   <!-- our testimonials -->
    <section class="testimonial">
        <div class="container-fluid testimonial-container">
            <h2 class="ms-5">Our Testimonials</h2>
            <hr>
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <!-- Indicators (dots) -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>

                <!-- Slides -->
                <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="row">
                        <!-- Left Column: Testimonial Text -->
                        <div class="col-lg-6 col-md-12 testimonial-content">
                            <div class="d-flex align-items-center mb-3">
                            <img src="assets/imgs/testi-1.png" alt="Rina Martin" class="testimonial-image me-3"><br/>
                            <div class="testimonial-info">
                                <h5 class="mb-0">Rina Martin</h5>
                                <small>(Food Blogger)</small>
                            </div>
                            </div>
                            <p>
                            <span class="testimonial-quote">"</span>
                            When it comes to Basmati Rice, the world has expectations of premiumness. Known as the <span class="highlight">King of Rice</span>, Basmati Rice is no ordinary long grain of rice. Alishaan Basmati Rice is grown in the Himalayas with extreme care and love to meet the legacy of Basmati Rice.
                            <span class="testimonial-quote">"</span>
                            </p>
                        </div>
                        <!-- Right Column: Image -->
                        <div class="col-lg-6 col-md-12">
                            <!-- <img src="rice-and-spices.jpg" alt="Rice and Spices" class="img-fluid rounded"> -->
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="row">
                        <!-- Left Column: Testimonial Text -->
                        <div class="col-lg-6 col-md-12 testimonial-content">
                            <div class="d-flex align-items-center mb-3">
                            <img src="assets/imgs/testi-1.png" alt="Rina Martin" class="testimonial-image me-3"><br/>
                            <div class="testimonial-info">
                                <h5 class="mb-0">Rina Martin</h5>
                                <small>(Food Blogger)</small>
                            </div>
                            </div>
                            <p>
                            <span class="testimonial-quote">"</span>
                            When it comes to Basmati Rice, the world has expectations of premiumness. Known as the <span class="highlight">King of Rice</span>, Basmati Rice is no ordinary long grain of rice. Alishaan Basmati Rice is grown in the Himalayas with extreme care and love to meet the legacy of Basmati Rice.
                            <span class="testimonial-quote">"</span>
                            </p>
                        </div>
                        <!-- Right Column: Image -->
                        <div class="col-lg-6 col-md-12">
                            <!-- <img src="rice-and-spices.jpg" alt="Rice and Spices" class="img-fluid rounded"> -->
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">
                    <div class="row">
                        <!-- Left Column: Testimonial Text -->
                        <div class="col-lg-6 col-md-12 testimonial-content">
                            <div class="d-flex align-items-center mb-3">
                            <img src="assets/imgs/testi-1.png" alt="Rina Martin" class="testimonial-image me-3"><br/>
                            <div class="testimonial-info">
                                <h5 class="mb-0">Rina Martin</h5>
                                <small>(Food Blogger)</small>
                            </div>
                            </div>
                            <p>
                            <span class="testimonial-quote">"</span>
                            When it comes to Basmati Rice, the world has expectations of premiumness. Known as the <span class="highlight">King of Rice</span>, Basmati Rice is no ordinary long grain of rice. Alishaan Basmati Rice is grown in the Himalayas with extreme care and love to meet the legacy of Basmati Rice.
                            <span class="testimonial-quote">"</span>
                            </p>
                        </div>
                        <!-- Right Column: Image -->
                        <div class="col-lg-6 col-md-12">
                            <!-- <img src="rice-and-spices.jpg" alt="Rice and Spices" class="img-fluid rounded"> -->
                        </div>
                    </div>
                </div>

                <!-- Carousel Controls -->
                <!-- <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button> -->
            </div>
        </div>
    </section>
    <!-- end our testimonials -->
     @include('layout.footer')

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
