<header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <h1><a href="index.php"><i class="fa fa-paw" aria-hidden="true"></i>
                    Wisdom Pets</a></h1>
            <!-- For image logo-->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="logo" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#header">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About Us</a></li>
                <li class="dropdown"><a href="#services"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#services">Afford Pets</a></li>
                        <li><a href="#services">Accommodate Your Pets</a></li>
                        <li><a href="#services">Educate Your Pets</a></li>

                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#team">Team</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

                <!-- Check if session username exists -->
                <?php if (isset($_SESSION['email'])) : ?>

                    <li><a class="nav-link scrollto active " href="logout.php?logout=true" id="logout">Logout</a></li> &nbsp;&nbsp;
                    <li id="usernamedisplay"><?php echo 'Hi, ' . ucwords($_SESSION['email'])  ?></li>
                <?php endif;?>
                <!-- Check if session username not exists -->
                <?php if (!isset($_SESSION['email'])) : ?>
                    <li><a class='nav-link scrollto btn btn-dark btn-sm' id='btnlog' href='login.php'  >Login</a></li>
                    <li><a class='nav-link scrollto btn btn-dark btn-sm' id='btnreg' href='register.php' >Register</a></li>

                <?php endif ?>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

    </div>
</header>



