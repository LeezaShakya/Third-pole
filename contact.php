<?php include('assets/include/header.php');?>
<div class="contactus">
    <div class="contact-banner d-flex justify-content-center flex-column">
        <div class="section-padding">
            <p class="page-title--secondary "> <a class="home-list" href="index.php">Home</a> • <a class="active-list" href="contact.php">Contact</a></p>
            <h3 class="page-title ">Contact Us</h3> 
        </div>
    </div>
    <div class="spad">
        <div class="section-padding">
            <div class="contact-section">
                <div class="row contact-details">
                    <div class="col-lg-6">
                        <h1 class="message-title" style="text-align: left;">
                            Send a Message
                        </h1>
                        <form action="POST">
                            <div class="form-group">
                                <label for="uname">Name(required)</label>
                                <input  class="form-control" type="text" name="name" id="uname">
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Email(required)</label>
                                <input  class="form-control" type="email" name="email" id="email">
                            </div>

                            <div class="form-group">
                                <label for="subj">Subject</label>
                                <input  class="form-control" type="text" name="subject" id="subj">
                            </div>

                            <div class="form-group">
                                <label for="msg">Message</label>
                                <textarea class="form-control" name="message" id="msg" cols="20" rows="10"></textarea>
                            </div>
                            <input type="submit"  class="contact-btn" value="Send Message">
                        </form>
                    </div>

                    <div class="col-lg-6 ">
                        <div class="contact-info mb-4">
                            <p><img src="assets/icons/location.png" height="27" width="27" class="mr-3"> Budhanilkantha-10, Kapan, Kathmandu, Nepal</p>
                            <p><img src="assets/icons/call.png" height="22" width="22" class="mr-3">+977 -1-4822960, +977 -1-4822940</p>
                            <p><img src="assets/icons/mail.png" height="23" width="23" class="mr-3">info@sevensummittreks.com</p>
                            <p><img src="assets/icons/web.png" height="25" width="25" class="mr-3">www.sevensummittravels.com</p>
                        </div>
                        <!--Google map-->
                        <div id="map-container-google-1" class="z-depth-1-half map-container" style="width: 100%;">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14125.308693765308!2d85.359075!3d27.738053!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0:0x7f40f2d9c7a8d596!2sSeven+Summit+Treks+Pvt.Ltd.!5e0!3m2!1sen!2snp!4v1491719676964"  width="100%" height="500" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <!--Google Maps-->
                    </div>
                </div>
                <!-- <img src="assets/img/mountain-11951.png" alt="mountains" width="100%" height="400px" > -->
                <div class="contact-mountain"></div>
            </div>
        </div>
    </div>
</div>
<?php include('assets/include/footer.php');?>