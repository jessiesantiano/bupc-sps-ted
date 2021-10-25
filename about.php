<style>
    .hero-wrap {
        background-image: url('assets/img/bupc1.jpg');
        background-attachment: fixed;
    }

    .section-title {
        text-align: center;
        padding-bottom: 30px;
    }

    .section-title h2 {
        font-size: 13px;
        letter-spacing: 1px;
        font-weight: 700;
        padding: 8px 20px;
        margin: 0;
        background: #e7f1fd;
        color: #106eea;
        display: inline-block;
        text-transform: uppercase;
        border-radius: 50px;
    }

    .section-title h3 {
        margin: 15px 0 0 0;
        font-size: 32px;
        font-weight: 700;
    }

    .section-title h3 span {
        color: #106eea;
    }

    .section-title p {
        margin: 15px auto 0 auto;
        font-weight: 600;
    }

    .team {
        padding: 60px 0;
    }

    .team .member {
        margin-bottom: 20px;
        overflow: hidden;
        border-radius: 4px;
        background: #fff;
        box-shadow: 10px 10px 20px rgba(16, 110, 234, 0.15);
    }

    .team .member .member-img {
        position: relative;
        overflow: hidden;
    }

    .team .member .social {
        position: absolute;
        left: 0;
        bottom: 30px;
        right: 0;
        opacity: 0;
        transition: ease-in-out 0.3s;
        text-align: center;
    }

    .team .member .social a {
        transition: color 0.3s;
        color: #222222;
        margin: 0 3px;
        padding-top: 7px;
        border-radius: 4px;
        width: 36px;
        height: 36px;
        background: rgba(16, 110, 234, 0.8);
        display: inline-block;
        transition: ease-in-out 0.3s;
        color: #fff;
    }

    .team .member .social a:hover {
        background: #3b8af2;
    }

    .team .member .social i {
        font-size: 18px;
    }

    .team .member .member-info {
        padding: 25px 15px;
    }

    .team .member .member-info h4 {
        font-weight: 700;
        margin-bottom: 5px;
        font-size: 18px;
        color: #222222;
    }

    .team .member .member-info span {
        display: block;
        font-size: 13px;
        font-weight: 400;
        color: #aaaaaa;
    }

    .team .member .member-info p {
        font-style: italic;
        font-size: 14px;
        line-height: 26px;
        color: #777777;
    }

    .team .member:hover .social {
        opacity: 1;
        bottom: 15px;
    }
</style>




<div class="hero-wrap hero-bread">
    <div class="container bg-light">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <div class="section-title">
                <h3>TEd | <span>About Us</span></h3>
                    <p data-aos="flip-left">Bicol University Polangui Campus</p>
                    
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">


       </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>School Address</h3>
              <p>Bicol University, Polangui Campus, Buhi - Polangui Road, Polangui, Albay</p>
            </div>
          </div>



        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3882.8679519953735!2d123.48249791434691!3d13.296188111271276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a1a0f8e33fed49%3A0x50cbb3fd2083cc1!2sBicol%20University%2C%20Polangui%20Campus!5e0!3m2!1sen!2sph!4v1635061178748!5m2!1sen!2sph" width="100%" height="384" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->