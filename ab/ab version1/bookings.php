<?php
include 'inc/header.php';
include 'inc/pop.php';
?>

<main class='main'>

<br/><br/>

  <!-- Starter Section Section -->
  <section id='starter-section' class='starter-section section'>

    <!-- Section Title -->
    <div class='container section-title' data-aos='fade-up'>

    <br/><br/>
          <form action='forms/book.php' method='post' class='php-email-form'
            data-aos='fade-up' data-aos-delay='600'>
            <center>
              <h4 class='mb-2 mb-lg-0' style="color: chocolate">BOOK US</h4>
            </center>
            <br /> <br />
            <div class='row gy-4'>

              <div class='col-md-6'>
                <input type='text' name='name' class='form-control'
                  placeholder='Your Name' required>
              </div>

              <div class='col-md-6 '>
                <input type='email' class='form-control' name='email'
                  placeholder='Your Email' required>
              </div>

              <div class='col-md-12'>
                <input type='text' class='form-control' name='Phone Number'
                  placeholder='Subject' required>
              </div>

              <div class='col-md-12'>
                <input type='number' class='form-control' name='...r'
                  placeholder='Telephone number ...' required>
              </div>

              <div class='col-md-12'>
              <!--<label for = 'service' style = 'color:black;'>Select Service:</label>-->
              <select id='service' name='service' required>
                <option value=''>Select Service</option>
                <option value='Photography'>Photography</option>
                <option value='Videography'>Videography</option>
                <option value='Events planning'>Events planning</option>
                <option value='Wedding planning'>Wedding planning</option>
                <option value='Computer programming'>Computer programming</option>
                <option value='Web development'>Web development</option>
                <option value='Mobile apps development'>Mobile apps development</option>
                <option value='Graphics design'>Graphics design</option>
                <option value='Large format printing'>Large format printing</option>
                <option value='Business flyers'>Business flyers</option>
                <option value='Stickers'>Stickers</option>
                <option value='Makeup artist'>Makeup artist</option>
                <option value='Bride Maids'>Bride Maids</option>
              </select>
              </div>

              <div class='col-md-12'>
                <textarea class='form-control' name='message' rows='6'
                  placeholder='Message' required></textarea>
              </div>

              <div class='col-md-12 text-center'>
                <div class='loading'>Loading</div>
                <div class='error-message'></div>
                <div class='sent-message'>Your message has been sent. Thank
                  you!</div>

                <div style='text-align: center; margin-top: 10px;'>
                  <button class='btn btn-blue-yellow animated pulse' type='submit' style="background-color:black;">
                    Book Now</button>
                </div>
              </div>

            </div>
          </form>

          <!-- End Contact Form -->

        </div>

      </section>

    </div>

  </section><!-- /Starter Section Section -->

</main>

<?php
include 'inc/footer.php';
?>