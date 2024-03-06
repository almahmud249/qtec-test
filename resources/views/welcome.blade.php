<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fnm air international Ltd</title>
    <!-- OWN CSS -->
    <link rel="stylesheet" href="./assets/css/main.css" />

    <!--  bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- font css -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/brands.min.css" />
</head>

<body>
<!-------------------------- Navbar --------------------------->
<header style="position: sticky;top: 0;z-index: 1111;">
    <nav class="navbar navbar-expand-lg shadow navbar-light bg-light justify-content-between align-items-center ">
        <div class="container d-flex justify-content-between">
            <div class="d-flex justify-content-between toggle-wraper">
                <a class="navbar-brand" href="./index.html"><img src="/assets/images/nav-footer-img/logo.png" alt="" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <ul class="collapse navbar-collapse ms-auto p-2 h-100 m-0 p-lg-0 bg-light" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="">Our Clients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="">Contact</a>
                    </li>
                </ul>
            </ul>
        </div>
    </nav>
</header>
<!-- Home Section -->
<!--Cover-->

<!--SERVICES-->
<div class="service">
    <div class="heading">
        <h1>Our Services</h1>
        <div class="service-border">
            <span></span>
        </div>
    </div>
</div>
<div
    class="service-items container"
>
    <div class="card-1 first-card">
        <div
            class="ui_ux first-card shadow-lg one"
            onmouseenter="cardShowHide(this)"
            onmouseout="showDefaultCard(this)"
        >
            <div class="img first-card"></div>
            <!-- <img src="./images/home-img/Frame.svg" alt="ux" /> -->
            <p class="card_1_text first-card">Recruitment Package</p>
        </div>
        <div class="card_1_details hide" id="first-card-details">
            <div class="intro1">
                <h2>Recruitment Package</h2>
                <p class="intro_text1 text-secondary">
                    We are Always here for you! Knock us on Messenger anytime or Call our Hotline (10AM - 10PM).
                </p>
                <button class="btn1">Learn More...</button>
            </div>
        </div>
    </div>
    <div class="card-1 second-card">
        <div
            class="ui_ux second-card shadow-lg two"
            onmouseenter="cardShowHide(this)"
            onmouseout="showDefaultCard(this)"
        >
            <div class="img second-card"></div>
            <!-- <img src="./images/home-img/Frame.svg" alt="ux" /> -->
            <p class="card_1_text second-card">Visa Processing</p>
        </div>
        <div class="card_1_details hide" id="second-card-details">
            <div class="intro1">
                <h2>Visa Processing</h2>
                <p class="intro_text1 text-secondary">
                    We are Always here for you! Knock us on Messenger anytime or Call our Hotline (10AM - 10PM).
                </p>
                <button class="btn1">Learn More...</button>
            </div>
        </div>
    </div>
    <div class="card-1 third-card">
        <div
            class="ui_ux third-card shadow-lg three"
            onmouseenter="cardShowHide(this)"
            onmouseout="showDefaultCard(this)"
        >
            <div class="img third-card"></div>
            <!-- <img src="./images/home-img/Frame.svg" alt="ux" /> -->
            <p class="card_1_text third-card">Air Tickets</p>
        </div>
        <div
            class="card_1_details three-card_1_details"
            id="third-card-details"
        >
            <div class="intro1">
                <h2>Air Tickets</h2>
                <p class="intro_text1 text-secondary">
                    We are Always here for you! Knock us on Messenger anytime or Call our Hotline (10AM - 10PM).
                </p>
                <button class="btn1">Learn More...</button>
            </div>
        </div>
    </div>
    <div class="card-1 four-card">
        <div
            class="ui_ux four-card shadow-lg four"
            onmouseenter="cardShowHide(this)"
            onmouseout="showDefaultCard(this)"
        >
            <div class="img four-card"></div>
            <!-- <img src="./images/home-img/Frame.svg" alt="ux" /> -->
            <p class="card_1_text four-card">Ummrah Hajj Package</p>
        </div>
        <div
            class="card_1_details hide four-card-details"
            id="forth-card-details"
        >
            <div class="intro1">
                <h2>Ummrah Hajj Package</h2>
                <p class="intro_text1 text-secondary">
                    We are Always here for you! Knock us on Messenger anytime or Call our Hotline (10AM - 10PM).
                </p>
                <button class="btn1">Learn More...</button>
            </div>
        </div>
    </div>
    <div class="card-1 five-card">
        <div
            class="ui_ux five-card shadow-lg five"
            onmouseenter="cardShowHide(this)"
            onmouseout="showDefaultCard(this)"
        >
            <div class="img five-card"></div>
            <!-- <img src="./images/home-img/Frame.svg" alt="ux" /> -->
            <p class="card_1_text five-card">Visit Package</p>
        </div>
        <div
            class="card_1_details hide five-card-details"
            id="fifth-card-details"
        >
            <div class="intro1">
                <h2>Visit Package</h2>
                <p class="intro_text1 text-secondary">
                    We are Always here for you! Knock us on Messenger anytime or Call our Hotline (10AM - 10PM).
                </p>
                <button class="btn1">Learn More...</button>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <!-- about section-1  -->
    <section id="about">
     
      <div class="row row-cols-1 row-cols-lg-2 mt-5" id="about-row">
        <div class="col-12  col-md-12 col-lg-6 order-last order-lg-first about-left d-flex justify-content-center justify-content-lg-start">
          <div class="about-text">
            <div class="about-content d-flex flex-column flex-md-row justify-content-between">
              <img
                src="images/about-img/we create solution.gif"
                alt="We create solution"
              />
              <h1 class="font-effect-outline ">About Us</h1>
            </div>
            <p>
              Since our founding in 2021, we grew to understand the importance
              of time values, culture, design and development. We're not
              simply a team of high-tech professionals. We're resourceful
              problem solvers and prolific intrapreneurs. We're a team of more
              than 30 relentlessly curious project managers, business
              analysts, software engineers, who love their job every bit as
              much as you.
              <br />
              <br />
              The general purpose of Excel IT AI is to develop and promote
              advanced information technologies for multi-user operation.
              Excel IT AI business philosophy is to assure the highest quality
              product, total client satisfaction, timely delivery of solutions
              and the best quality price ratio found in the industry. We
              provide a wide range of services, including Mobile Application
              Development, Web Design And Development, Customized Application
              Development, Project Management System, CRMS, School Management
              System, Hospital Management System, Online Health System, UI/UX
              design services,e-commerce solutions, etc. We like solving
              difficult problems and creating high-performance software that's
              easy to use. Each day, we continue building long-lasting
              partnerships with our clients all across the world without ever
              losing the drive to strive for excellence and innovation.
            </p>
          </div>
        </div>
        <div class="col-12  col-md-12  col-lg-6 order-first order-lg-last about-right">
          <img
            src="images/about-img/abou-us/image 73.png"
            alt="About Us Excel IT AI" class="img-fluid"
          />
        </div>
      </div>
  </section>
</div>
<!-------- scroll to top ------------->
<img src="./assets/images/nav-footer-img/01545454.gif" onclick="topFunction()" id="myBtn" title="Go to top" alt="Scrollbar" />

<!--------------- footer -------------->
<section class="box-soluation">
    <div class="container">
        <div class="businessSolution-content row row-cols-1 row-cols-md-2">
            <div class="box-1 col h-auto flex-grow-1">
                <h1>Looking for the best  solutions for the trip?</h1>
                <p>We are Always here for you! Knock us on Messenger anytime or Call our Hotline (10AM - 10PM).</p>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <div class="footer-content-container row row-cols-sm-1 row-cols-md-2 row-cols-lg-4">
            <div class="col">
                <div class="footer-left">
                    <img src="./assets/images/nav-footer-img/logo.png" alt="Excel IT AI logo" class="img-fluid" />
                    <p>
                        A travel agency is like a wizard's wand, turning dreams into vivid realities.
                        At Fnm air international Ltd, we specialize in creating unforgettable journeys that
                        go beyond the ordinary. Our goal is simple: to spark your wanderlust, ignite your
                        curiosity, and make your travel experiences seamless and amazing..
                    </p>
                </div>
            </div>
            <div class="col">
                <h4 class="text-white">Useful Links</h4>
                <ul>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    <li>
                        <a href="#">Team</a>
                    </li>
                </ul>
            </div>
            <div class="col">
                <h4 class="text-white">Quick Contact</h4>

                <span>
            <img src="./assets/images/nav-footer-img/phone-call.png" alt="Icon phone call" class="contactIcon" />
            +88 01851-988311</span>
                <br/>
                <span>
              <img src="./assets/images/nav-footer-img/phone-call.png" alt="Icon phone call" class="contactIcon" />
              +88 01840-068939</span>
                <br/>
                <span>
              <img src="./assets/images/nav-footer-img/phone-call.png" alt="Icon phone call" class="contactIcon" />
              +88 01317750243</span>
                <br />
                <span>
            <img src="./assets/images/nav-footer-img/logos_google-gmail.png" alt="Icon google-mail" class="contactIcon" />
            fnmairinternational79@gmail.com
          </span>
                <div class="social">
                    <a class="facebook" href="" target="_blank"><i
                            class="fa-brands fa-facebook-f"></i></a>
                    <a class="instagram" href="" target="_blank"><i
                            class="fa-brands fa-instagram"></i></a>
                    <a class="twitter" href="" target="_blank"><i
                            class="fa-brands fa-twitter"></i></a>
                    <a class="linkedin" href="" target="_blank"><i
                            class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>
            <div class="location-container col">
                <h4 class="text-white">Office Location</h4>
                <p>
                    Oriental Trade centre, 69/1, 3rd floor, purana paltan, Lane, VIP Road,Dhaka 1000
                </p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29216.07084082253!2d90.40331262792938!3d23.74706363502094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9429ba26f25%3A0x43e4f8a957b87440!2sFnm%20air%20international%20Ltd.!5e0!3m2!1sen!2sbd!4v1701024267534!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</footer>

<footer class="bg-light p-2 text-center">
    <div class="footer-last">
        <p class="text-muted">
            © copyright 2022, All rights reserved by Fnm air international Ltd
        </p>
    </div>
</footer>
<!------------ own js ------------------->
<script src="./js/script.js"></script>

<!--------------- Bootstrap JS ------------------->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
