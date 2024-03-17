<?php
$name_page="CONTACT US";
include './head.php';
include './navbar.php';
include './page_name.php';


?>

<div class="contact_area pt-85">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="contact_message content">
                    <h3>contact us</h3>
                    <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum formas human. qui sequitur mutationem consuetudium lectorum. Mirum est notare quam</p>
                    <ul>
                        <li><i class="fa-solid fa-location-dot" style="color: #d7af7b;"></i><a href=""> Address : No 40 Baria Sreet 133/2 NewYork City</a></li>
                        <li><i class="fa-solid fa-envelope"  style="color: #d7af7b;" ></i> <a href="#">Infor@roadthemes.com</a></li>
                        <li><i class="fa fa-phone"  style="color: #d7af7b;" ></i><a href="tel:0(1234)567890">0(1234) 567 890</a> </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="contact_message form">
                    <h3>Tell us your project</h3>
                    <form id="contact-form" method="POST" action="assets/mail.php">
                        <p>
                            <label> Your Name (required)</label>
                            <input name="name" placeholder="Name *" type="text">
                        </p>
                        <p>
                            <label> Your Email (required)</label>
                            <input name="email" placeholder="Email *" type="email">
                        </p>
                        <p>
                            <label> Subject</label>
                            <input name="subject" placeholder="Subject *" type="text">
                        </p>
                        <div class="contact_textarea">
                            <label> Your Message</label>
                            <textarea placeholder="Message *" name="message" class="form-control2"></textarea>
                        </div>
                        <div class="pq-btn-container_contact">
                      <a href="booking-table.html" class="pq-button">
                        <div class="pq-button-block">
                          <span class="pq-button-line-left"></span>
                          <span class="pq-button-text">Send</span>
                          <span class="pq-button-line-right"></span>
                        </div>
                      </a>
                    </div>
                        <p class="form-messege"></p>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?php
include './footer.php';
?>