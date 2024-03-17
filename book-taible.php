<?php
$name_page="BOOK A TAIBLE";
include './head.php';
include './navbar.php';
include './page_name.php';


?>


    <!-- start Book a table -->

    <section class="reservation-form">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="pq-section-title-style-1 text-center">
              <span class="pq-section-sub-title">Make a Reserve</span>
              <h5 class="pq-section-title"> Book A table On time</h5>
            </div>
            <form class="pq-applyform" novalidate="" method="post" action="mail.php">
              <div class="pq-reservation">
                <div class="row">
                  <div class="col-lg-6">
                    <input type="text" size="40" placeholder="Your Name" required="" name="name" >
                  </div>
                  <div class="col-lg-6">
                    <input type="text" size="40" placeholder="Your Phone" required="" name="phone" >
                  </div>
                  <div class="col-lg-4">
                    <input type="text" size="40" placeholder="Persons" required="" name="person" >
                    <p></p>
                  </div>
                  <div class="col-lg-4">
                    <input type="date" required="" name="date" >
                  </div>
                  <div class="col-lg-4">
                    <input type="text" size="40" placeholder="Time" required="" name="time" >
                  </div>
                  <div class="pq-btn-container pq-section-btn text-center " >
                    <button class="pq-button" type="submit" name="booking" >
                        <div class="pq-button-block">
                            <span class="pq-button-line-left"></span>
                            <span class="pq-button-text">Book a taibel</span>
                            <span class="pq-button-line-right"></span>
                        </div>
                    </button>
                </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- End Book a table -->

<!-- map -->

<section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 text-center my-5 map-tatle">

        <span class="sub-title d-flex justify-content-center"><img class="left-vec" src="images/sub-title-vec.svg" alt="sub-title-vec">
              <h2 class="mx-1" >faind us</h2>
              <img class="right-vec" src="images/sub-title-vec.svg" alt="sub-title-vec" />
        </span>

          <!-- <h1>faind us</h1> -->
        </div>
        <div class="col-12 p-0 map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d50431.941511182566!2d144.99807691479975!3d-37.81355460864125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20Victoria%20Australia!3m2!1d-37.8136276!2d144.96305759999998!5e0!3m2!1sar!2sma!4v1652389994789!5m2!1sar!2sma"
            width="100%" height="100%" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </section>



<?php
include './footer.php';
?>