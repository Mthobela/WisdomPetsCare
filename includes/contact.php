
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title" data-aos="zoom-out">
            <h2>Contact</h2>
            <p>Get In Touch With Us</p>
        </div>

        <div class="row mt-5">

            <div class="col-lg-4" data-aos="fade-right">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>108 Arum Street, Cape Town, CP</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>wisdomPets@gmail.com</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p>+27 84 201 1670</p>
                    </div>

                </div>

            </div>

            <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

                <form action="forms/contactForm.php" method="POST" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit" onclick="sendEmail()" name="sendMail" >Send Message</button></div>
                </form>


            </div>

        </div>

    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">
    function sendEmail(){

        var name = $("#name");
        var email = $("#email");
        var subject = $("#subject");
        var message = $("#message");

        if(isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(message)){
            // ajax call

            $.ajax({
                url:'contact.php',
                method:'POST',
                dataType: 'json',
                data:{
                    name: name.val(),
                    email: email.val(),
                    subject: subject.val(),
                    message: message.val(),
                }success: function(response){
                    console.log(response);
                }
            });
        }
    }

    function isNotEmpty(value){
        if(value.val() == ""){
            value.css('border', '2px solid red');
            return false;
        }else{
            value.css('border', '');
        }
    }
</script>
