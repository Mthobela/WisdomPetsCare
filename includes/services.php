

<?php if (isset($_SESSION['email'])) : ?>
      <!-- if user logged in  then have access to services -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title" data-aos="zoom-out">
                <h2>Services</h2>
                <p>What we do offer</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box" data-aos="zoom-in-left">
                        <h4 class="title">Pets Selling</h4>
                        <p class="description">Being a pet owner is a big responsibility. Children love the idea of pets and their companionship that they offer.</p>
                        <br>
                        <br>
                        <br>

                        <a href="includes/Afford.php" target="_blank">
                            <button class="btn btn-primary" data-bs-toggle="modal" style="margin-left: auto; margin-right:auto; display:block;"  id="exampleModalToggle">Afford Pets</button>
                        </a>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
                    <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
                        <h4 class="title">Pets Daily Care</h4>
                        <p class="description">
                            Are you busy during the day? and There is No one to take care of your best friends at Home? well Wisdom Pet is there for you, Drop your Pet for daily great care.
                        </p>
                        <br>
                        <a href="includes/Accommodate.php" target="_blank">
                            <button class="btn btn-primary" style="margin-left: auto; margin-right:auto; display:block; ">Accommodate Your Pets</button>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
                    <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
                        <h4 class="title">Pets Training</h4>
                        <p class="description">
                            There are several options for training your new pet. Wisdom Pets can help your pets to acquire a specific behavior.
                        </p>
                        <br>
                        <br>
                        <br>
                        <a href="includes/Training.php" target="_blank">
                            <button class="btn btn-primary" style="margin-left: auto; margin-right:auto; display:block;" >Educate Your Pets</button>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>


<?php endif;?>

<?php if (!isset($_SESSION['email'])) : ?>
    <!-- if user not logged in  then have not access to services -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title" data-aos="zoom-out">
                <h2>Services</h2>
                <p>What we do offer</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box" data-aos="zoom-in-left">
                        <h4 class="title">Pets Selling</h4>
                        <p class="description">Being a pet owner is a big responsibility. Children love the idea of pets and their companionship that they offer.</p>
                        <br>
                        <br>
                        <br>
                        <a href="#" data-toggle="tooltip" title="Login To have Access">
                            <button class="btn btn-primary" style="margin-left: auto; margin-right:auto; display:block;pointer-events: none;" disabled>Afford Pets</button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
                    <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
                        <h4 class="title">Pets Daily Care</h4>
                        <p class="description">
                            Are you busy during the day? and There is No one to take care of your best friends at Home? well Wisdom Pet is there for you, Drop your Pet for daily great care.
                        </p>
                        <br>
                        <a href="#" data-toggle="tooltip" title="Login To have Access">
                            <button class="btn btn-primary" style="margin-left: auto; margin-right:auto; display:block; pointer-events: none;" disabled>Accommodate Your Pets</button>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
                    <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
                        <h4 class="title">Pets Training</h4>
                        <p class="description">
                            There are several options for training your new pet. Wisdom Pets can help your pets to acquire a specific behavior.
                        </p>
                        <br>
                        <br>
                        <br>
                        <a href="#" data-toggle="tooltip" title="Login To have Access">
                            <button class="btn btn-primary" style="margin-left: auto; margin-right:auto; display:block;pointer-events: none;" disabled>Educate Your Pets</button>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>
<?php endif ?>



