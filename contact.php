  <?php include("header.php"); ?>
  <!--  Banner START -->

  <div class="banner">
      <div class="banner__overlay">
          <div class="container">
              <div class="row">
                  <div class="col-12 text-center text-lg-start">
                      <h1 class="global__title global__title-dark text-capitalize">kontak kami</h1>
                      <ul class="banner__ul">
                          <li class="banner__ul-list p-0">
                              <a class="banner__ul-link" href="<?php echo "index.php"; ?>">
                                  beranda
                              </a>
                          </li>
                          <li class="banner__ul-list">
                              kontak kami
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="banner__element d-none d-lg-block">
                  <img src="assets/img/element-3.svg" alt="image">
              </div>
              <div class="banner__polygon d-none d-lg-block">
                  <img src="assets/img/polygon.svg" alt="image">
              </div>
          </div>
      </div>
  </div>

  <!--  Banner END -->

  <!--  Social START -->

  <div class="social global__py pt-0">
      <div class="container p-sm-0">
          <div class="row justify-content-center gap-5 gap-lg-0">
              <div class="col-12 col-sm-10 col-lg-4">
                  <div class="social__body">
                      <div class="">
                          <div class="social__body--loc"></div>
                          <div class="social__i">
                              <img class="" src="assets/img/location-i.svg" alt="image">
                          </div>
                          <div class="">
                              <h4 class="social__text">Alamat</h4>
                              <p class="social__number">Jl. Sirojulmunir Rt 01 Rw 01 No. 18 Kel. Jatisari Kec.
                                  Jatiasih Kota Bekasi Jawa Barat 17426</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-12 col-sm-10 col-lg-4">
                  <div class="social__body">
                      <div class="">
                          <div class="social__body--con"></div>
                          <div class="social__i">
                              <img class="" src="assets/img/phone-icon.svg" alt="image">
                          </div>
                          <div class="">
                              <h4 class="social__text">Nomor Telp</h4>
                              <p class="social__number">(021) 56925036</p>
                              <p class="social__number">0811-263-636</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-12 col-sm-10 col-lg-4">
                  <div class="social__body">
                      <div class="">
                          <div class="social__body--mail"></div>
                          <div class="social__i">
                              <img class="" src="assets/img/mail-icon.svg" alt="image">
                          </div>
                          <div class="">
                              <h4 class="social__text">E-Mail</h4>
                              <p class="social__number">sejahterabersamanahra@gmail.com</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!--  Social END -->

  <!--  Contact START -->

  <div class="contact global__py pt-0">
      <div class="container p-sm-0">
          <div class="row">
              <form action="contact.html#" method="POST" class="contact__form">
                  <div class="col-12 col-md-9 col-lg-6 text-center m-auto" data-aos="fade-down"
                      data-aos-duration="1000">
                      <h3 class="global__text">kontak kami</h3>
                      <h2 class="global__heading">Get in Touch With Us
                      </h2>
                  </div>
                  <div class="contact__form-body">
                      <div class="">
                          <input id="nameInp" class="contact__form-inp form-control" type="text"
                              placeholder="Enter Your Name">
                          <div class="">
                              <span class="sign__text sign__text-name text-danger d-none">Use a valid
                                  name</span>
                              <span class="sign__text sign__text-name--required text-danger d-none">Name
                                  is
                                  required</span>
                          </div>
                      </div>
                      <div class="">
                          <input id="emailInp" class="contact__form-inp form-control" type="email"
                              placeholder="Enter Your Email">
                          <div class="">
                              <span class="sign__text sign__text-email text-danger d-none">Email must
                                  be
                                  valid</span>
                              <span class="sign__text sign__text-email--required text-danger d-none">Email
                                  is
                                  required</span>
                          </div>
                      </div>
                      <div class="">
                          <input id="phnInp" class="contact__form-inp form-control" type="tel"
                              placeholder="Enter Phone Number">
                          <div class="">
                              <span class="sign__text sign__text-phn--required text-danger d-none">Phone number
                                  is
                                  required</span>
                              <span class="sign__text sign__text-phn text-danger d-none">Number must be valid</span>
                          </div>
                      </div>
                      <div class="">
                          <select class="contact__form-inp form-select">
                              <option value="1">Choose Subject</option>
                              <option value="2">Choose two</option>
                              <option value="3">Choose three</option>
                              <option value="4">Choose four</option>
                          </select>
                      </div>
                      <div class="contact__form-body--comnt">
                          <textarea class="contact__form-inp form-control" id="comment" cols="30" rows="5"
                              placeholder="Write Your Message"></textarea>
                          <span class="sign__text sign__text-msg--required text-danger d-none">Message
                              is
                              required</span>
                      </div>
                      <div class="">
                          <input class="donation__btn global__btn mt-0" type="submit" value="send message">
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>

  <!--  Contact END -->

  <!--  Map START -->

  <div class="contact__map">
      <iframe class="w-100"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.4956336954656!2d90.36980847512216!3d23.836527785464774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c1cb3b7d94db%3A0xa1df58d67a2ce274!2sUi%20Barn!5e0!3m2!1sen!2sbd!4v1692610804504!5m2!1sen!2sbd"
          width="600" height="785" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

  <!--  Map END -->

  <!--  Join_US START -->

  <div class="join">
      <div class="container p-sm-0">
          <div class="row">
              <div class="card join__card">
                  <img src="assets/img/BG-Element.png" class="img-fluid join__card-img" alt="image">
                  <div class="card-img-overlay join__card-layer">
                      <div class="col-11 col-md-7">
                          <h3 class="join__text global__text">Become a volenteer</h3>
                          <h2 class="join__heading global__heading">Join Your hand with us for a better life and
                              future
                          </h2>
                          <button class="join__card-layer--btn global__btn">Discover More</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!--  Join_US END -->



  <?php include("footer.php"); ?>

  <?php include("js.php"); ?>