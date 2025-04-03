<?php 
include("inc/header.php");
?>

<!-- Contact Section -->
<section id="contact" class="contact section">
<br/><br/>
<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Contact Us</h2>
<p>If you have any questions, inquiries, or would like to discuss your project, please don't hesitate to reach out. We are here to help you bring your vision to life!</p></div><!-- End Section Title -->

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row gy-4">

    <div class="col-lg-5">

      <div class="info-wrap">
        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
          <i class="bi bi-geo-alt flex-shrink-0"></i>
          <div>
            <h3>Address</h3>
            <p>Kigali , KIBAGABAGA</p>
          </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
          <i class="bi bi-telephone flex-shrink-0"></i>
          <div>
            <h3>Call Us</h3>
            <p>+250781420771 | +250791593366</p>
          </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-envelope flex-shrink-0"></i>
          <div>
            <h3>Email Us</h3>
            <p>abdigitalarts250@gmail.com</p>
          </div>
        </div><!-- End Info Item -->
<div style="width:80px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.5515641392835!2d30.111490573116082!3d-1.931452536667737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca7000990329b%3A0xd6027701998fe635!2sTrinity%20Plaza!5e0!3m2!1sen!2srw!4v1731330869136!5m2!1sen!2srw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="width:80px;"></iframe>
        </div>
      </div>
    </div>

    <div class="col-lg-7">
      <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
        <div class="row gy-4">

          <div class="col-md-6">
            <label for="name-field" class="pb-2">Your Name</label>
            <input type="text" name="name" id="name-field" class="form-control" required="">
          </div>

          <div class="col-md-6">
            <label for="email-field" class="pb-2">Your Email</label>
            <input type="email" class="form-control" name="email" id="email-field" required="">
          </div>

          <div class="col-md-12">
            <label for="subject-field" class="pb-2">Subject</label>
            <input type="text" class="form-control" name="subject" id="subject-field" required="">
          </div>

          <div class="col-md-12">
            <label for="message-field" class="pb-2">Message</label>
            <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
          </div>

          <div class="col-md-12 text-center">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>

            <button type="submit">Send Message</button>
          </div>

        </div>
      </form>
    </div><!-- End Contact Form -->


<?php 
include("inc/footer.php");
?>
