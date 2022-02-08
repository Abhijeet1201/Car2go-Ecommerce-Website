<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <title>Car2Go</title>
    <style>
.navbar{
    opacity: 0.7;
}

.navbar-nav li a{
    font-weight: bold;
}

.navbar-brand{
    font-weight: bold;
    text-align:center;
}

.navbar-nav li a:hover {
    color: #0d6efd !important;
    border-bottom: solid 2px #0d6efd;
}

.header-1{
    text-align:left;
    font-size: 6rem;
    color: #000000;
}

.header-2{
    text-align: center;
    font-size: 6rem;
}

.header-3{
    text-align: right;
    font-size: 6rem;
    color: #000000;
}

.section_divider{
    margin-top: 20px;
    margin-bottom: 20px;
    padding-top: 20px;
    padding-bottom: 20px;
    text-align: center !important;
}

.gradient {
    background: rgb(0, 97, 242);
    background: linear-gradient(
      135deg,
      rgba(0, 97, 242, 1) 0%,
      rgba(105, 0, 199, 1) 100%
    );
  }
  
  .page-header {
    margin-top: 4rem;
    font-size: 1.25rem;
    color: #fff;
  }
  

.contact-form{
    margin-top: 5%;
    padding-top: 5%;
    padding-bottom: 5%;
    width: 70%;
    border-style:solid;
}
.contact-form .form-control{
    border-radius:1rem;
}
.contact-image{
    text-align: center;
}
.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -18%;
    transform: rotate(29deg);
    border-style: solid;
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}  
.form-group{
    margin: 5%;
}

.accordion-section .panel-default > .panel-heading {
    border: 0;
    background: #f4f4f4;
    padding: 0;
}
.accordion-section .panel-default .panel-title a {
    display: block;
    font-style: italic;
    font-size: 1.5rem;
}
.accordion-section .panel-default .panel-title a:after {
    font-family: 'FontAwesome';
    font-style: normal;
    font-size: 3rem;
    content: "\f106";
    color: #1f7de2;
    float: right;
    margin-top: -12px;
}
.accordion-section .panel-default .panel-title a.collapsed:after {
    content: "\f107";
}
.accordion-section .panel-default .panel-body {
    font-size: 1.2rem;
}

.title::after {
    content: '';
    background: #000000;
    height: 5px;
    width: 60px;
    margin-right: auto;
    margin-left: auto;
    margin-bottom: 0px;
    display: block;
    transform: translateY(8px);
}

#featured_cars{
  margin: 5%;
}

.section_padding_130 {
    padding-top: 130px;
    padding-bottom: 130px;
}
.faq_area {
    position: relative;
    z-index: 1;
    background-color: #f5f5ff;
}

.faq-accordian {
    position: relative;
    z-index: 1;
}
.faq-accordian .card {
    position: relative;
    z-index: 1;
    margin-bottom: 1.5rem;
}
.faq-accordian .card:last-child {
    margin-bottom: 0;
}
.faq-accordian .card .card-header {
    background-color: #ffffff;
    padding: 0;
    border-bottom-color: #ebebeb;
}
.faq-accordian .card .card-header h6 {
    cursor: pointer;
    padding: 1.75rem 2rem;
    color: #3f43fd;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -ms-grid-row-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
}
.faq-accordian .card .card-header h6 span {
    font-size: 1.5rem;
}
.faq-accordian .card .card-header h6.collapsed {
    color: #070a57;
}
.faq-accordian .card .card-header h6.collapsed span {
    -webkit-transform: rotate(-180deg);
    transform: rotate(-180deg);
}
.faq-accordian .card .card-body {
    padding: 1.75rem 2rem;
}
.faq-accordian .card .card-body p:last-child {
    margin-bottom: 0;
}

@media only screen and (max-width: 575px) {
    .support-button p {
        font-size: 14px;
    }
}

.support-button i {
    color: #3f43fd;
    font-size: 1.25rem;
}
@media only screen and (max-width: 575px) {
    .support-button i {
        font-size: 1rem;
    }
}

.support-button a {
    text-transform: capitalize;
    color: #2ecc71;
}
@media only screen and (max-width: 575px) {
    .support-button a {
        font-size: 13px;
    }
}

i{
    padding:5px;
    color: black;
}
.about{
  width:50%;
  justify-content: center;
}
      </style>
  </head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="bootstrap" viewBox="0 0 118 94">
        <title>Bootstrap</title>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
      </symbol>
      <symbol id="facebook" viewBox="0 0 16 16">
        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
      </symbol>
      <symbol id="instagram" viewBox="0 0 16 16">
          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
      </symbol>
      <symbol id="twitter" viewBox="0 0 16 16">
        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
      </symbol>
    </svg>

  
  <div>
    <?php
       require 'navbar.php';
    ?>

      <!--Landing Page-->
      <section id="Home">
          <header class="page-header gradient">
            <div class="container pt-3">
              <div class="row align-items-center justify-content-center">
                <div class="col-md-5">
                  <h1 class="header-1">BUY</h1>
      
                  <p>
                    <h1 class="header-2">CARS</h1>
                  </p>  
                  <p>
                    <h1 class="header-3">QUICK</h1>
                  </p>
                </div>
                
              </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 250">
              <path
                fill="#fff"
                fill-opacity="1"
                d="M0,128L48,117.3C96,107,192,85,288,80C384,75,480,85,576,112C672,139,768,181,864,181.3C960,181,1056,139,1152,122.7C1248,107,1344,117,1392,122.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
              ></path>
            </svg>
          </header>
      </section>

      <!-- Section Divider-->
      <div class="jumbotron jumbotron-fluid section_divider" id="AboutUs">
        <div class="container-fluid">
          <h1 class="title display-4 justify-content-end">About Us</h1>
          </div>
          </div>
      <!-- About Us-->
        <section>
            <div class="about container" >
          <p class="text-right p-5">Car2Go is a used car dealership located in South East London. 
            We started as a small dealership in the year 2011 and have grown to become one of the best used car dealerships around London. 
            Our fleet includes a wide variety of cars ranging from different brands and types. 
            We are taking our business online to serve you better and increase our already wide customer base.
            We strive to serve each and every customer better.
            <br>
            <br>
            In the past 20 years we have delivered more than 1000 cars through our wide network across th UK. By going digital we wish to increase this number further more. Come join us in our journey. Be a part of the Car2Go Family. </p>
            </div>
          </section>

    <!-- Section Divider-->
    <div class="jumbotron jumbotron-fluid section_divider" id="featured_cars">
      <div class="container-fluid">
        <h1 class="title display-4 justify-content-end">Featured Cars</h1>
      </div>
    </div>

<!-- Featured Cars -->

<section>
 <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Range Rover Vogue</h5>
          <img src="images/Car12_RR.jpg" class="card-img-top" alt="...">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Price: £ 42,000</li>
            <li class="list-group-item">Mileage: 12,000 miles</li>
            <li class="list-group-item">Fuel type: Petrol</li>
            <li class="list-group-item">Color: Silver</li>
           </ul>
        </div>
        
          <a href="login.php" class="btn btn-primary" >Buy</a>
        
        </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">BMW 5 series</h5>
          <img src="images/Car1_BMW.jpg" class="card-img-top" alt="...">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Price: £ 42,000</li>
            <li class="list-group-item">Mileage: 25,000 miles</li>
            <li class="list-group-item">Fuel type: Petrol</li>
            <li class="list-group-item">Color: Grey</li>
           </ul>
        </div>
        
          <a href="login.php" class="btn btn-primary" >Buy</a>
        
      </div>
    </div>

    <div class="col">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">BMW 3 series</h5>
          <img src="images/Car11_BMW.jpg" class="card-img-top" alt="...">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Price: £ 37,000</li>
            <li class="list-group-item">Mileage: 7000</li>
            <li class="list-group-item">Fuel type: Hybrid</li>
            <li class="list-group-item">Color: White</li>
           </ul>
        </div>
        
          <a href="login.php" class="btn btn-primary" >Buy</a>
        
      </div>
    </div>

      <div class="view_more text-center invisible">
        <button href="" type="button" class="btn btn-primary"></button>
      </div>

      <div class="view_more text-center mt-5">
        <a href="login.php" class="btn btn-primary">View Our Stock<i class="bi bi-arrow-right"></i></a>
      </div>

      <div class="view_more text-center invisible">
        <button type="button" class="btn btn-primary"></button>
      </div>
      
    </section>

    

    <!-- Section Divider-->
<div class="jumbotron jumbotron-fluid section_divider" id="faqs">
  <div class="container-fluid">
    <h1 class="title display-4 justify-content-end">FAQs</h1>
    </div>
    </div>

    <!--FAQs-->

    <section id="questions" class="p-5" style="background-color:#f5f5ff;">
      <div class="container">
        <h2 class="text-center mb-4">Frequently Asked Questions</h2>
        <div class="accordion accordion-flush" id="questions">
          <!-- Item 1 -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#question-one"
              >
                Where exactly are you located?
              </button>
            </h2>
            <div
              id="question-one"
              class="accordion-collapse collapse"
              data-bs-parent="#questions"
            >
              <div class="accordion-body">
                We are located in South East London near University of Greenwich. You can find our address in the footer.
              </div>
            </div>
          </div>
          <!-- Item 2 -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#question-two"
              >
                Are there any hidden costs of buying online?
              </button>
            </h2>
            <div
              id="question-two"
              class="accordion-collapse collapse"
              data-bs-parent="#questions"
            >
              <div class="accordion-body">
                No, there are no hidden costs. We offer the same price whether you buy it online or offline. Buying it online can sometimes give you better deals and offers.
              </div>
            </div>
          </div>
          <!-- Item 3 -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#question-three"
              >
                Can I cancel my booking?
              </button>
            </h2>
            <div
              id="question-three"
              class="accordion-collapse collapse"
              data-bs-parent="#questions"
            >
              <div class="accordion-body">
                Yes you can cancel your order. Its hassle free. No questions asked.
              </div>
            </div>
          </div>
          <!-- Item 4 -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#question-four"
              >
                How Do I sign up?
              </button>
            </h2>
            <div
              id="question-four"
              class="accordion-collapse collapse"
              data-bs-parent="#questions"
            >
              <div class="accordion-body">
                Just click on the sign up tab in the navigation bar and enter your details.
              </div>
            </div>
          </div>
          <!-- Item 5 -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#question-five"
              >
                How do I book a test drive?
              </button>
            </h2>
            <div
              id="question-five"
              class="accordion-collapse collapse"
              data-bs-parent="#questions"
            >
              <div class="accordion-body">
                You can fill in the contact form and mention which car you would like to test drive. Our representative will contact you.
              </div>
            </div>
            </div>
            <!-- Support Button-->
            <div class="support-button text-center d-flex align-items-center justify-content-center mt-4 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <i class="lni-emoji-sad"></i>
                        <p class="mb-0 px-2">Can't find your answers?</p>
                        <a href="#contact_us"> Contact us</a>
            </div>
        </div>
      </div>
    </section>


  <!-- Section Divider-->
<div class="jumbotron jumbotron-fluid section_divider" id="contact_us">
  <div class="container-fluid">
    <h1 class="title display-4 justify-content-end">Contact Us</h1>
    </div>
    </div>

    <!--contact us-->
<section>
  <div class="container contact-form">
    <div class="contact-image">
        <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
    </div>
    <form method="post">
        <h3>Drop Us a Message</h3>
       <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                </div>
                <div class="form-group">
                    <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                </div>
                <div class="form-group">
                    <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                </div>
                <div class="form-group">
                    <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                </div>
            </div>
        </div>
    </form>
</div>	
</section>
<!--footer-->
<section id="footer">
  <div class="container">
    <footer class="py-5">
      <div class="row">
        <div class="col-2">
          <h5></h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="index.php#Home" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="index.php#AboutUs" class="nav-link p-0 text-muted">About Us</a></li>
            <li class="nav-item mb-2"><a href="index.php#featured_cars" class="nav-link p-0 text-muted">Featured Cars</a></li>
            <li class="nav-item mb-2"><a href="index.php#faqs" class="nav-link p-0 text-muted">FAQ</a></li>
            <li class="nav-item mb-2"><a href="index.php#contact_us" class="nav-link p-0 text-muted">Contact Us</a></li>
          </ul>
        </div>
  
        <div class="col-2">
          <!--
          <h5>Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
          </ul> -->
        </div>
  
        <div class="col-2">
          <!--
          <h5>Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
          </ul> -->
        </div>
  
        <div class="col-4 offset-1">
          <form>
            <h5>Subscribe to our newsletter</h5>
            <p>Monthly digest of whats new and exciting from us.</p>
            <div class="d-flex w-100 gap-2">
              <label for="newsletter1" class="visually-hidden">Email address</label>
              <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
              <button class="btn btn-primary" type="button">Subscribe</button>
            </div>
          </form>
        </div>
      </div>
  
      <div class="d-flex justify-content-between py-4 my-4 border-top">
        <p>© 2021 Car2Go, Inc. All rights reserved.</p>
        <ul class="list-unstyled d-flex">
          <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
        </ul>
      </div>
    </footer>
  </div>
  </section>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
</div>
</body>
</html>

