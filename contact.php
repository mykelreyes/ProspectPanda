<!DOCTYPE html>
<html lang="en">

<?php
$title='Contact Us - ProspectPanda CRM';
$Title='Home';
$Title2='Contact Us';
$img='assets/images/banner/page-header.png';
?>
<?php include './partials/head.php'?>

<body>
   <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->
   <div class="my-app">

      <!-- Preloader Start -->
      <?php include './partials/preloader.php'?>

      <!-- Cursor Area Start -->
      <?php include './partials/cursor.php'?>

      <!-- ==== header start ==== -->
      <?php include './partials/header.php'?>
      <!-- ==== / header end ==== -->

      <div id="smooth-wrapper">
         <div id="smooth-content">
            <!-- ==== main start ==== -->
            <main>
               <!-- ==== page header start ==== -->
               <?php include './partials/page-header.php'?>
               <!-- ==== / page header end ==== -->

               <!-- ==== contact intro start ==== -->
               <section class="section agency">
                  <div class="container">
                     <div class="row justify-content-center">
                        <div class="col-12 col-lg-10">
                           <div class="section__header text-center">
                              <span class="sub-title">
                                 GET IN TOUCH
                                 <i class="fa-solid fa-arrow-right"></i>
                              </span>
                              <h2 class="title title-anim">Let's start a conversation</h2>
                              <div class="paragraph">
                                 <p>Have questions? Want to see a demo? Our team is here to help. Reach out and we'll get back to you within 24 hours.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- ==== / contact intro end ==== -->

               <!-- ==== contact info start ==== -->
               <section class="section offer fade-wrapper light pt-0">
                  <div class="container">
                     <div class="row gaper justify-content-center">
                        <div class="col-12 col-md-6 col-xl-4">
                           <div class="contact-info-card fade-top">
                              <div class="contact-info-icon">
                                 <i class="fa-brands fa-whatsapp"></i>
                              </div>
                              <h3>WhatsApp</h3>
                              <p>Message us anytime</p>
                              <a href="https://wa.me/639193531856" class="contact-link">+639193531856</a>
                              <p class="contact-hours">Quick responses</p>
                           </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                           <div class="contact-info-card fade-top">
                              <div class="contact-info-icon">
                                 <i class="fa-solid fa-envelope"></i>
                              </div>
                              <h3>Email Us</h3>
                              <p>For general inquiries</p>
                              <a href="mailto:amreyes.ph@gmail.com" class="contact-link">amreyes.ph@gmail.com</a>
                              <p class="contact-hours">Response within 24 hours</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <img src="assets/images/offer/star.png" alt="Image" class="star">
                  <div class="lines d-none d-lg-flex">
                     <div class="line"></div>
                     <div class="line"></div>
                     <div class="line"></div>
                     <div class="line"></div>
                     <div class="line"></div>
                  </div>
               </section>
               <!-- ==== / contact info end ==== -->

               <!-- ==== contact form start ==== -->
               <section class="section agency">
                  <div class="container">
                     <div class="row justify-content-center">
                        <div class="col-12 col-lg-10">
                           <div class="section__header text-center">
                              <span class="sub-title">
                                 SEND A MESSAGE
                                 <i class="fa-solid fa-arrow-right"></i>
                              </span>
                              <h2 class="title title-anim">Ready to grow your business?</h2>
                           </div>
                        </div>
                     </div>
                     <div class="row justify-content-center">
                        <div class="col-12 col-lg-10">
                           <div class="contact-form-wrapper">
                              <form action="#" method="post" class="contact-form">
                                 <div class="row gaper">
                                    <div class="col-12 col-md-6">
                                       <div class="form-group">
                                          <label for="firstName">First Name *</label>
                                          <input type="text" id="firstName" name="firstName" class="form-control" required>
                                       </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                       <div class="form-group">
                                          <label for="lastName">Last Name *</label>
                                          <input type="text" id="lastName" name="lastName" class="form-control" required>
                                       </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                       <div class="form-group">
                                          <label for="email">Email Address *</label>
                                          <input type="email" id="email" name="email" class="form-control" required>
                                       </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                       <div class="form-group">
                                          <label for="phone">Phone Number</label>
                                          <input type="tel" id="phone" name="phone" class="form-control">
                                       </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                       <div class="form-group">
                                          <label for="company">Company Name</label>
                                          <input type="text" id="company" name="company" class="form-control">
                                       </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                       <div class="form-group">
                                          <label for="teamSize">Team Size</label>
                                          <select id="teamSize" name="teamSize" class="form-control">
                                             <option value="">Select team size</option>
                                             <option value="1-5">1-5 people</option>
                                             <option value="6-20">6-20 people</option>
                                             <option value="21-50">21-50 people</option>
                                             <option value="51-200">51-200 people</option>
                                             <option value="201+">201+ people</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="form-group">
                                          <label for="interest">I'm interested in</label>
                                          <select id="interest" name="interest" class="form-control">
                                             <option value="">Select an option</option>
                                             <option value="demo">Scheduling a demo</option>
                                             <option value="trial">Starting a free trial</option>
                                             <option value="pricing">Pricing information</option>
                                             <option value="features">Learning about features</option>
                                             <option value="migration">Migrating from another CRM</option>
                                             <option value="enterprise">Enterprise solutions</option>
                                             <option value="other">Something else</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="form-group">
                                          <label for="message">Message *</label>
                                          <textarea id="message" name="message" class="form-control" rows="6" required></textarea>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="form-group form-check">
                                          <input type="checkbox" id="newsletter" name="newsletter" class="form-check-input">
                                          <label for="newsletter" class="form-check-label">
                                             Send me ProspectPanda news, tips, and updates
                                          </label>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="section__content-cta text-center">
                                          <button type="submit" class="btn btn--primary">Send Message</button>
                                       </div>
                                       <p class="form-disclaimer">
                                          By submitting this form, you agree to our <a href="#">Privacy Policy</a> and <a href="#">Terms of Service</a>.
                                       </p>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <img src="assets/images/star.png" alt="Image" class="star">
               </section>
               <!-- ==== / contact form end ==== -->


               <!-- ==== cta start ==== -->
               <section class="section cta light">
                  <div class="container">
                     <div class="row justify-content-center">
                        <div class="col-12 col-lg-10">
                           <div class="cta__content text-center">
                              <h2 class="title title-anim">Prefer to start right away?</h2>
                              <p>Sign up for a free 14-day trial. No credit card required. Get started in minutes.</p>
                              <div class="section__content-cta">
                                 <a href="#" class="btn btn--primary">Start Free Trial</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <img src="assets/images/star.png" alt="Image" class="star">
                  <div class="lines d-none d-lg-flex">
                     <div class="line"></div>
                     <div class="line"></div>
                     <div class="line"></div>
                     <div class="line"></div>
                     <div class="line"></div>
                  </div>
               </section>
               <!-- ==== / cta end ==== -->
            </main>
            <!-- ==== / main end ==== -->

            <!-- ==== footer start ==== -->
            <?php include './partials/footer.php'?>
            <!-- ==== / footer end ==== -->
         </div>
      </div>
      <div class="line">
         <span></span>
         <span></span>
         <span></span>
         <span></span>
         <span></span>
      </div>
   </div>

   <!-- Back to top area start here -->
   <?php include './partials/scroll-up.php'?>
   <!-- Back to top area end here -->

   <!--<< All JS Plugins >>-->
   <?php include './partials/script.php'?>

</body>

</html>
