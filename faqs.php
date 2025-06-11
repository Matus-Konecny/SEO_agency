<?php
  include ("templates/header.php");
?>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 align-self-center">
          <div class="caption  header-text">
            <h6>SEO DIGITAL AGENCY</h6>
            <div class="line-dec"></div>
            <h4>Most Frequently Asked <em>Questions</em> Here <em>?</em></h4>
          </div>
        </div>
        <div class="col-lg-5">
          <img src="assets/images/faqs-image.jpg" alt="">
        </div>
      </div>
    </div>
  </div>

  <div class="happy-steps">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2>Our 4 Steps To Success &amp; Happy Clients</h2>
        </div>
        <div class="col-lg-12">
          <div class="steps">
            <div class="row">
              <div class="col-lg-3">
                <div class="item">
                  <img src="assets/images/services-01.jpg" alt="" style="max-width: 66px; border-radius: 50%; margin: 0 auto;">
                  <h4>Project Introduction</h4>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="item">
                  <img src="assets/images/services-02.jpg" alt="" style="max-width: 66px; border-radius: 50%; margin: 0 auto;">
                  <h4>Work Development</h4>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="item">
                  <img src="assets/images/services-03.jpg" alt="" style="max-width: 66px; border-radius: 50%; margin: 0 auto;">
                  <h4>Data Analysis</h4>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="item last-item">
                  <img src="assets/images/services-04.jpg" alt="" style="max-width: 66px; border-radius: 50%; margin: 0 auto;">
                  <h4>Project Finishing</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="most-asked section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Most <em>Frequently</em> Asked <span>Questions</span> ?</h2>
            <div class="line-dec"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doers.</p>
          </div>
        </div>
      </div>
      <main>
  
      <section class="most-asked">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="accordions is-first-expanded">
                <?php
                  $faqs = new Faqs();
                  foreach ($faqs->index() as $item) {
                    echo '<article class="accordion">';
                    echo '  <div class="accordion-head">';
                    echo '    <span>' . htmlspecialchars($item['question']) . '</span>';
                    echo '    <span class="icon"><i class="icon fa fa-chevron-right"></i></span>';
                    echo '  </div>';
                    echo '  <div class="accordion-body">';
                    echo '    <div class="content"><p>' . htmlspecialchars($item['answer']) . '</p></div>';
                    echo '  </div>';
                    echo '</article>';
                  }
                ?>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="get-free-quote">
                <form id="free-quote" method="post" role="search" action="#">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="section-heading">
                        <h2>Get a <em>Free Quote</em> Now</h2>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail" required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <input type="website" name="website" id="website" placeholder="Website URL" autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <input type="phone-number" name="phone-number" id="phone-number" placeholder="Phone Number" autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <input type="full-name" name="full-name" id="full-name" placeholder="Full Name" autocomplete="on">
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="orange-button">Get Your Free Quote</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div> 
        </div> 
      </section>

  <div class="cta section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <h4>Are You Ready To Work &amp; Develop With Us ?<br>Don't Hesitate &amp; Contact Us !</h4>
        </div>
        <div class="col-lg-4">
          <div class="main-button">
            <a href="contact.php">Contact Us Now!</a>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
  include ("templates/footer.php");
?>