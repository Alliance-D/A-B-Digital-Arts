<!--<img src="assets/img/logo2.png" alt="">-->
<title>A&B Digital Arts | Home</title>
<?php 
include ("inc/header.php");
?>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background" 
    style="background-color: aliceblue; color:black">

      <div class="container" style="color:black">
        <div class="row gy-4" style="color:black">

          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out" style="color:black">
            <h5 style="color:black">Comprehensive Creative Solutions for You</h5> 
            <h6 ><p style="color:black">At A&B Digital Arts, our talented team specializes in delivering a wide array of services, 
              from stunning photography and videography.</p></h6>
              
              <div class="d-flex">


              <a href="booking.php" class="btn-get-started" style="background-color:black;">Book Us</a>

              <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center">
                <i class="bi bi-play-circle" style="color:black"></i><span style="color:black">Watch Video</span></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/bigCamera2.png" class="img-fluid animated" alt="" style="height: 450px;">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">

      <div class="container" data-aos="zoom-in">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 5,
                  "spaceBetween": 120
                },
                "1200": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>

    </section><!-- /Clients Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About Us</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p>
                At A&B Digital Arts, we are dedicated to providing a wide range of creative solutions tailored to meet your needs. Our expertise spans photography, videography, web development, and more, ensuring that your vision comes to life.
            </p>
            <ul>
                <li><i class="bi bi-check2-circle"></i> <span>Expert photography and videography to capture your special moments.</span></li>
                <li><i class="bi bi-check2-circle"></i> <span>Comprehensive event and wedding planning services for a seamless experience.</span></li>
                <li><i class="bi bi-check2-circle"></i> <span>Custom web and mobile app development to elevate your business.</span></li>
            </ul>
        </div>

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <p>At A&B Digital Arts, we pride ourselves on delivering exceptional creative services that cater to your unique needs. From breathtaking photography and videography to innovative web and mobile app development, our team is committed to helping you shine. We also offer expert event and wedding planning, ensuring every detail is perfectly executed for your special occasions.</p>
          <a href="#" class="read-more"><span>Discover Our Services</span><i class="bi bi-arrow-right"></i></a>
      </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="section why-us light-background" data-builder="section">

      <div class="container-fluid">

        <div class="row gy-4">

          <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

            <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
              <center><img src="assets/icon/cute-camera.gif" alt="" style="height: 100px;"></center>
              <h3><span>Transform Your Vision</span><strong> with A&B Digital Arts</strong></h3>
              <p>
                  At A&B Digital Arts, we understand the importance of creativity and innovation. Our talented team works diligently to provide tailored solutions, including stunning photography, videography, and custom web and mobile app development, ensuring your brand stands out in a competitive market.
              </p>
          </div>

            <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

              <div class="faq-item faq-active">
                <h3><span>01</span> How can A&B Digital Arts help elevate my brand?</h3>
                <div class="faq-content">
                    <p>A&B Digital Arts offers a comprehensive range of services, including photography, videography, and web development, designed to enhance your brand's visibility and engagement. Our creative team collaborates closely with you to understand your vision and deliver tailored solutions that resonate with your audience.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item">
              <h3><span>02</span> What types of projects does A&B Digital Arts specialize in?</h3>
              <div class="faq-content">
                  <p>A&B Digital Arts specializes in a variety of projects, including corporate branding, event photography, promotional videos, and web and mobile app development. Our diverse skill set allows us to cater to different industries and deliver high-quality results tailored to your specific needs.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3><span>03</span> How does A&B Digital Arts ensure quality in its projects?</h3>
            <div class="faq-content">
                <p>At A&B Digital Arts, we prioritize quality by employing a rigorous project management process that includes thorough planning, regular check-ins, and quality assurance testing. Our experienced team is dedicated to delivering exceptional results, ensuring that every aspect of your project meets the highest standards.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
        </div><!-- End Faq item-->

            </div>

          </div>

          <div class="col-lg-5 order-1 order-lg-2 why-us-img">

            <img src="assets/img/kissHand.jpeg" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
          </div>
        </div>

      </div>

    </section><!-- /Why Us Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">

          <div class="col-lg-6 d-flex align-items-center">
            <img src="assets/img/w (1).jpeg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 pt-4 pt-lg-0 content">
          <center><img src="assets/icon/picture.gif" alt="" style="height: 100px;"></center>
            <h3>What is the vision behind A&B Digital Arts?</h3>
            <p class="fst-italic">
                At A&B Digital Arts, our vision is to empower brands through innovative digital solutions that captivate and engage audiences. We strive to blend creativity with technology, ensuring that every project not only meets but exceeds our clients' expectations, fostering long-term partnerships built on trust and excellence.
            </p>

            <div class="skills-content skills-animation">

              <div class="progress">
                <span class="skill"><span>Web Design</span> <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div><!-- End Skills Item -->
            
            <div class="progress">
                <span class="skill"><span>Brand Identity</span> <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div><!-- End Skills Item -->
            
            <div class="progress">
                <span class="skill"><span>Digital Marketing</span> <i class="val">85%</i></span>
                <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div><!-- End Skills Item -->
            
            <div class="progress">
                <span class="skill"><span>SEO Optimization</span> <i class="val">80%</i></span>
                <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div><!-- End Skills Item --><!-- End Skills Item -->

              <div class="progress">
                <span class="skill"><span>Photography</span> <i class="val">99.9%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><!-- End Skills Item -->

              <div class="progress">
                <span class="skill"><span>Photoshop</span> <i class="val">55%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><!-- End Skills Item -->

            </div>

          </div>
        </div>

      </div>

    </section><!-- /Skills Section -->

    <!-- Services Section -->
    <section id="services" class="services section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Services</h2>
        <p>At A&B Digital Arts, we specialize in delivering innovative solutions tailored to elevate your brand. From web design and development to digital marketing and branding, we ensure that your vision comes to life with creativity and precision.</p>
    </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-activity icon"></i></div>
              <h4><a href="" class="stretched-link">Creative Design Solutions</a></h4>
<p>Transform your ideas into stunning visuals with our expert design services, ensuring your brand stands out in a competitive market.</p>
          </div><!-- End Service Item -->
</div>

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
              <h4><a href="" class="stretched-link">Digital Marketing Strategies</a></h4>
<p>Maximize your online presence with our tailored digital marketing strategies, designed to engage your audience and drive results.</p></div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
              <h4><a href="" class="stretched-link">Web Development Excellence</a></h4>
<p>Crafting responsive and user-friendly websites that not only look great but also deliver exceptional performance and functionality.</p></div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-broadcast icon"></i></div>
              <h4><a href="" class="stretched-link">Innovative Branding Solutions</a></h4>
<p>Building strong brand identities that resonate with your target audience and create lasting impressions in the market.</p></div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

      <img src="assets/img/cta-bg.jpg" alt="">

      <div class="container">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-9 text-center text-xl-start">
            <h3>Get Started Today!</h3>
<p>Transform your ideas into reality with our expert services. Whether you need a stunning website, a powerful digital marketing strategy, or a compelling brand identity, we are here to help. Contact us now to discuss your project and discover how we can elevate your business to new heights!</p></div>
          <div class="col-xl-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>

    </section><!-- /Call To Action Section -->

    
    
    <!-- Pricing Section -->
    <section id="pricing" class="pricing section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Pricing</h2>
<p>At A&B Digital Arts, we believe in providing transparent and competitive pricing tailored to meet the unique needs of our clients. Our pricing structure is designed to reflect the quality and value of our services, ensuring you receive the best return on your investment. Whether you are looking for bespoke digital solutions or comprehensive packages, we offer flexible options to suit every budget and project scope. Contact us for a personalized quote and let us help you bring your vision to life.</p></div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="pricing-item">
              <h3>Basic Photography Package</h3>
              <h4><sup>$</sup>30<span> / Day</span></h4>
              <ul>
                  <li><i class="bi bi-check"></i> <span>1-hour photoshoot session</span></li>
                  <li><i class="bi bi-check"></i> <span>10 high-resolution edited images</span></li>
                  <li><i class="bi bi-check"></i> <span>Online gallery for image sharing</span></li>
                  <li class="na"><i class="bi bi-x"></i> <span>Additional retouching services</span></li>
                  <li class="na"><i class="bi bi-x"></i> <span>Prints and physical albums</span></li>
              </ul>
              <a href="#" class="buy-btn">Inquire Now</a>
          </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="pricing-item featured">
              <h3>Premium Photography Package</h3>
              <h4><sup>$</sup>60<span> / Day</span></h4>
              <ul>
                  <li><i class="bi bi-check"></i> <span>2-hour photoshoot session</span></li>
                  <li><i class="bi bi-check"></i> <span>20 high-resolution edited images</span></li>
                  <li><i class="bi bi-check"></i> <span>Online gallery for easy sharing</span></li>
                  <li><i class="bi bi-check"></i> <span>1 complimentary print of your choice</span></li>
                  <li><i class="bi bi-check"></i> <span>Priority booking and scheduling</span></li>
              </ul>
              <a href="#" class="buy-btn">Inquire Now</a>
          </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="pricing-item">
              <h3>Ultimate Photography Package</h3>
              <h4><sup>$</sup>90<span> / Day</span></h4>
              <ul>
                  <li><i class="bi bi-check"></i> <span>3-hour photoshoot session</span></li>
                  <li><i class="bi bi-check"></i> <span>30 high-resolution edited images</span></li>
                  <li><i class="bi bi-check"></i> <span>Online gallery with download options</span></li>
                  <li><i class="bi bi-check"></i> <span>2 complimentary prints of your choice</span></li>
                  <li><i class="bi bi-check"></i> <span>Customizable photo album design</span></li>
              </ul>
              <a href="#" class="buy-btn">Inquire Now</a>
          </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>

    </section><!-- /Pricing Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
<p>What our clients say about us:</p>
</div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/user (1).jpeg" class="testimonial-img" alt="">
                <h3>Jessica L. ISHIMWE</h3>
                <h4>Client</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>"A&B Digital Arts truly transformed our vision into reality! The team's creativity and attention to detail made our project shine. From the initial consultation to the final edits, every step was handled with professionalism and care. We couldn't be happier with the stunning results!"</span>
                  <i class="bi bi-quote quote-icon-right"></i>
              </p>
              <cite>- Jessica L. ISHIMWE, Satisfied Client</cite>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/user (1).jpeg" class="testimonial-img" alt="">
                <h3>Michael S. MUGABO</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>"Working with A&B Digital Arts was an incredible experience! Their team brought our ideas to life with stunning visuals and a unique artistic touch. The entire process was seamless, and the final product exceeded our expectations. We highly recommend them for any creative project!"</span>
                  <i class="bi bi-quote quote-icon-right"></i>
              </p>
              <cite>- Michael S. MUGABO, Happy Client</cite>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/user (1).jpeg" class="testimonial-img" alt="">
                <h3>Sarah T. UMULISA</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>"A&B Digital Arts exceeded our expectations in every way! Their innovative approach and dedication to quality truly set them apart. From concept to completion, they listened to our needs and delivered a product that perfectly captured our vision. We are thrilled with the results!"</span>
                  <i class="bi bi-quote quote-icon-right"></i>
              </p>
              <cite>- Sarah T. UMULISA, Satisfied Customer</cite>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/user (1).jpeg" class="testimonial-img" alt="">
                <h3>David R. KWIZERA</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>"A&B Digital Arts brought our project to life with exceptional creativity and skill. Their attention to detail and commitment to understanding our needs resulted in a final product that truly reflects our brand. We couldn't be happier with the collaboration and the outcome!"</span>
                  <i class="bi bi-quote quote-icon-right"></i>
              </p>
              <cite>- David R. KWIZERA, Happy Client</cite>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/user (1).jpeg" class="testimonial-img" alt="">
                <h3>Emily J. IRADUKUNDA</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>"Working with A&B Digital Arts was a transformative experience for our brand. Their team's creativity and professionalism helped us articulate our vision in a way we never thought possible. The final product was not only visually stunning but also perfectly aligned with our goals. Highly recommend!"</span>
                  <i class="bi bi-quote quote-icon-right"></i>
              </p>
              <cite>- Emily J. IRADUKUNDA, Satisfied Client</cite>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

 

    

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>


  <?php 
include ("inc/float2.php");
?>



  <?php 
include ("inc/footer.php");
?>