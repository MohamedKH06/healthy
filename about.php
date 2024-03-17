<?php 
$name_page="ABOUT";

include 'config/functions.php';
include './head.php' ;
include './navbar.php';
include './page_name.php';

$about = selectOne('about', 1);
?>

    <!-- start about us-main -->
        <section class="about-area pt-85">
          <div class="container-om">
          <div class="container">
                <div class="row gy-5 flex-row-reverse">
                    <div class="col-xm-12 col-lg-6">
                        <div class="about-image">
                            <img class="img-fluid_about" src="images/<?php echo $about['img'] ?>" alt="">
                        </div>
                    </div>
                    <div class="col-xm-12 col-lg-6">
                        <div class="about-container">
                            <div class="about-text">
                                <h3><?php echo $about['title'] ?></h3>
                                <p><?php echo $about['descriptions'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </section>
        <!-- end about us-main -->
    
            <!-- start countme -->
            <section class="fun-factor-area bg-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-xm-6">
                            <div class="single-fun-factor text-center">
                                <div class="fun-icon"><img src="images/koffee-white.png" alt=""></div>
                                <h3><span class="counter2" id="num11">740</span></h3>
                                <h4>koffee Cup</h4>
                            </div>
                        </div>
                        <div class="col-md-3 col-xm-6">
                            <div class="single-fun-factor text-center">
                                <div class="fun-icon"><img src="images/face.png" alt=""></div>
                                <h3><span class="counter2" id="num12">1480</span></h3>
                                <h4>Happy Client</h4>
                            </div>
                        </div>
                        <div class="col-md-3 col-xm-6">
                            <div class="single-fun-factor text-center">
                                <div class="fun-icon"><img src="images/car-white.png" alt=""></div>
                                <h3><span class="counter2" id="num13">1850</span></h3>
                                <h4>Home Delivery</h4>
                            </div>
                        </div>
                        <div class="col-md-3 col-xm-6">
                            <div class="single-fun-factor text-center">
                                <div class="fun-icon"><img src="images/like.png" alt=""></div>
                                <h3><span class="counter2" id="num14">712</span></h3>
                                <h4>Like On Average</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end countme -->
    
    
    
        <!-- start image-area -->
        <section class="image-area">
            <div class="container-om">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8">
                      <div class="section-title text-center">
                        <h1>Why Choose Us?</h1>
                        <!-- smollogo -->
                        <span><img src="images/" alt="" /></span>
                        <p>
                          Lorem Ipsum is simply dummy text of the printing and typesetting
                          industry. Lorem Ipsum has been the industry's standard dummy
                          text ever since.
                          Lorem Ipsum is simply dummy text of the printing and typesetting
                          industry. Lorem Ipsum has been the industry's standard dummy
                          text ever since.
                        </p>
                      </div>
                    </div>
                  </div>
              <div class="row g-3">
                <div class="col-lg-3 col-sm-6">
                  <div class="single-image-item">
                    <div class="image-wrapper text-center">
                      <img src="images/banner-img-3.png" alt="" />
                      <div class="image-hover-text">
                        <div class="text-tablecell">
                          <img src="images/asset 9.png" alt="" />
                          <h3>First Delivery</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="single-image-item">
                    <div class="image-wrapper text-center">
                      <img src="images/banner-img-4.png" alt="" />
                      <div class="image-hover-text">
                        <div class="text-tablecell">
                          <img src="images/asset 10.png" alt="" />
                          <h3>Online Booking</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="single-image-item">
                    <div class="image-wrapper text-center">
                      <img src="images/banner-img-5.png" alt="" />
                      <div class="image-hover-text">
                        <div class="text-tablecell">
                          <img src="images/asset 11.png" alt="" />
                          <h3>Best Quality</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="single-image-item text-center">
                    <div class="image-wrapper">
                      <img src="images/banner-img-6.png" alt="" />
                      <div class="image-hover-text">
                        <div class="text-tablecell">
                          <img src="images/asset 12.png" alt="" />
                          <h3>Event Booking</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    <!-- end  -->

<?php include 
'./footer.php'
?>