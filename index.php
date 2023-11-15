
    <!-- ======= Header ======= -->
    <?php include 'header.php';?>
    <!-- End Header -->
    <link rel="stylesheet" href="./assets/css/home.css">
    <main id="main">
      <!-- Hero Section - Home Page -->
      <section id="hero" class="hero section-1">
        <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in" />
        <div class="container">
          <div class="row">
            <div class="col-lg-10">
              <h2 data-aos="fade-up" data-aos-delay="100">
                Chào mừng dến với  
                <span class="welcome-title main-color">Find Your Job</span>
              </h2>
              <p data-aos="fade-up" data-aos-delay="200">
                Chúng tôi giúp bạn định hướng nghề nghiệp 
              </p>
            </div>
            <div class="col-lg-5">
              <form
                action="search.php"
                class="sign-up-form d-flex"
                data-aos="fade-up"
                data-aos-delay="300"
              >
                <input
                  type="text"
                  name="e"
                  class="form-control"
                  placeholder="Nhập key word bạn muốn tìm"
                />
                <input type="submit" class="btn btn-primary" value="Tìm kiếms" name="key" />
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- End Hero Section -->

      <!-- Clients Section - Home Page -->
      <section id="clients" class="clients">
        <div class="container-fluid" data-aos="fade-up">
          <div class="row gy-4">
            <div class="col-xl-2 col-md-3 col-6 client-logo">
              <img
                src="assets/img/clients/client-1.png"
                class="img-fluid"
                alt=""
              />
            </div>
            <!-- End Client Item -->

            <div class="col-xl-2 col-md-3 col-6 client-logo">
              <img
                src="assets/img/clients/client-2.png"
                class="img-fluid"
                alt=""
              />
            </div>
            <!-- End Client Item -->

            <div class="col-xl-2 col-md-3 col-6 client-logo">
              <img
                src="assets/img/clients/client-3.png"
                class="img-fluid"
                alt=""
              />
            </div>
            <!-- End Client Item -->

            <div class="col-xl-2 col-md-3 col-6 client-logo">
              <img
                src="assets/img/clients/client-4.png"
                class="img-fluid"
                alt=""
              />
            </div>
            <!-- End Client Item -->

            <div class="col-xl-2 col-md-3 col-6 client-logo">
              <img
                src="assets/img/clients/client-5.png"
                class="img-fluid"
                alt=""
              />
            </div>
            <!-- End Client Item -->

            <div class="col-xl-2 col-md-3 col-6 client-logo">
              <img
                src="assets/img/clients/client-6.png"
                class="img-fluid"
                alt=""
              />
            </div>
            <!-- End Client Item -->
          </div>
        </div>
      </section>
      <!-- End Clients Section -->

      <!-- About Section - Home Page -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="d-flex flex-column align-items-xl-center gy-5 ">
            <div class="w-100 content text-center mb-4">
              <h3>Chúng tôi là</h3>
              <h2>Website hàng đầu đồng hành tìm kếm cùng bạn</h2>
              <p>
              Chúng tôi tự hào là nguồn cung cấp đa dạng thông tin về công việc và các lĩnh vực trong thị trường lao động, đem lại cơ hội không ngừng cho những người tìm kiếm nghề nghiệp và thị trường lao động giàu tiềm năng. Hãy khám phá cùng chúng tôi, nơi những cánh cửa sự nghiệp mở ra với vô số cơ hội đa dạng và hấp dẫn.
              </p>
            </div>

            <div class="w-100">
              <div class="d-flex flex-wrap">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon-box">
                    <i class="bi bi-buildings"></i>
                    <h3>Tìm kiếm việc làm</h3>
                    <p>
                     Nơi cung cấp cơ hội và thông tin xu hướng nghề nghiệp hiện nay. Hãy cùng khám phá và tiến xa hơn trong sự nghiệp của bạn.
                    </p>
                  </div>
                </div>
                <!-- End Icon Box -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon-box">
                    <i class="bi bi-clipboard-pulse"></i>
                    <h3>Hồ sơ cá nhân</h3>
                    <p>
                    Chúng tôi cung cấp mẫu hồ sơ chuyên nghiệp, giúp bạn nổi bật và thu hút sự chú ý của nhà tuyển dụng với bộ hồ sơ ấn tượng.
                    </p>
                  </div>
                </div>
                <!-- End Icon Box -->

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon-box">
                    <i class="bi bi-command"></i>
                    <h3>Nắm Bắt Thông Tin Mới</h3>
                    <p>
                    Cập nhật thông tin nghề nghiệp, lương thưởng, chế độ làm việc, xu hướng mới và kiến thức sâu rộng trong lĩnh vực IT.
                    </p>
                  </div>
                </div>
                <!-- End Icon Box -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Section -->

      <!-- Stats Section - Home Page -->
      <section id="stats" class="stats">
        <img src="assets/img/stats-bg.jpg" alt="" data-aos="fade-in" />

        <div
          class="container position-relative"
          data-aos="fade-up"
          data-aos-delay="100"
        >
          <div class="row gy-4">
            <div class="col-lg-3 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="232"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <p>Khách hàng</p>
              </div>
            </div>
            <!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="521"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <p>Cơ hội</p>
              </div>
            </div>
            <!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="1453"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <p>Doanh Nghiệp</p>
              </div>
            </div>
            <!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span
                  data-purecounter-start="0"
                  data-purecounter-end="32"
                  data-purecounter-duration="1"
                  class="purecounter"
                ></span>
                <p>Đang làm việc</p>
              </div>
            </div>
            <!-- End Stats Item -->
          </div>
        </div>
      </section>
      <!-- End Stats Section -->

      <!-- Features Section - Home Page -->

      <!-- End Features Section -->

      <!-- Portfolio Section - Home Page -->

      <!-- End Portfolio Section -->

      <!-- Pricing Section - Home Page -->

      <!-- End Pricing Section -->

      <!-- Faq Section - Home Page -->
      <!-- End Faq Section -->

      <!-- Team Section - Home Page -->
      <!-- End Team Section -->

      <!-- Call-to-action Section - Home Page -->

      <!-- End Call-to-action Section -->

      <!-- Testimonials Section - Home Page -->
      <section id="testimonials" class="testimonials">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
              <h3>Phản hồi tích cực</h3>
              <p>
               Hàng trăm khách hàng đã tìm kiếm thành công công việc tốt. Từ đó FYJ nhận được những đánh giá tích cực, cộng đồng FYJ ngày càng đông đảo người ủng hộ.
              </p>
            </div>

            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
              <div class="swiper">
                <template class="swiper-config">
                  { "loop": true, "speed" : 600, "autoplay": { "delay": 5000 },
                  "slidesPerView": "auto", "pagination": { "el":
                  ".swiper-pagination", "type": "bullets", "clickable": true } }
                </template>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="d-flex">
                        <img
                          src="assets/img/testimonials/testimonials-1.jpg"
                          class="testimonial-img flex-shrink-0"
                          alt=""
                        />
                        <div>
                          <h3>Quốc Bảo</h3>
                          <h4>Ceo & Founder</h4>
                          <div class="stars">
                            <i class="bi bi-star-fill"></i
                            ><i class="bi bi-star-fill"></i
                            ><i class="bi bi-star-fill"></i
                            ><i class="bi bi-star-fill"></i
                            ><i class="bi bi-star-fill"></i>
                          </div>
                        </div>
                      </div>
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span
                          >Tôi không bao giờ nghĩ rằng việc tìm kiếm công việc có thể dễ dàng đến vậy cho đến khi tôi tìm thấy FIND YOUR JOB.
                           Họ làm cho quá trình này trở nên mượt mà và hiệu quả.</span
                        >
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                    </div>
                  </div>
                  <!-- End testimonial item -->

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="d-flex">
                        <img
                          src="assets/img/testimonials/testimonials-2.jpg"
                          class="testimonial-img flex-shrink-0"
                          alt=""
                        />
                        <div>
                          <h3>Lê Khang</h3>
                          <h4>Designer</h4>
                          <div class="stars">
                            <i class="bi bi-star-fill"></i
                            ><i class="bi bi-star-fill"></i
                            ><i class="bi bi-star-fill"></i
                            ><i class="bi bi-star-fill"></i
                            ><i class="bi bi-star-fill"></i>
                          </div>
                        </div>
                      </div>
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span
                          >Tôi đã tìm kiếm việc làm trong nhiều năm và đã thử nhiều dịch vụ khác nhau. 
                          Tuy nhiên, sau khi sử dụng FIND YOUR JOB, tôi đã tìm thấy công việc mà tôi thực sự đam mê và phù hợp với tôi. Họ không chỉ giúp tôi tìm việc, mà còn giúp tôi định hình lại sự nghiệp của mình.</span
                        >
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                    </div>
                  </div>
                  <!-- End testimonial item -->

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="d-flex">
                        <img
                          src="assets/img/testimonials/testimonials-3.jpg"
                          class="testimonial-img flex-shrink-0"
                          alt=""
                        />
                        <div>
                          <h3>Minh Công</h3>
                          <h4>Store Owner</h4>
                          <div class="stars">
                            <i class="bi bi-star-fill"></i
                            ><i class="bi bi-star-fill"></i
                            ><i class="bi bi-star-fill"></i
                            ><i class="bi bi-star-fill"></i
                            ><i class="bi bi-star-fill"></i>
                          </div>
                        </div>
                      </div>
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span
                          >"FIND YOUR JOB đã mang lại cho tôi một trải nghiệm tuyệt vời trong việc tìm kiếm việc làm. Họ cung cấp nhiều tài liệu hữu ích và tư vấn chi tiết về cách nộp đơn và phỏng vấn.
                           Tôi đã thành công trong việc tìm việc và đây thực sự là một nơi tuyệt vời để bắt đầu.</span
                        >
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                    </div>
                  </div>
                  <!-- End testimonial item -->

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="d-flex">
                        <img
                          src="assets/img/testimonials/testimonials-4.jpg"
                          class="testimonial-img flex-shrink-0"
                          alt=""
                        />
                        <div>
                          <h3>Minh Tuệ</h3>
                          <h4>Freelancer</h4>
                          <div class="stars">
                            <i class="bi bi-star-fill"></i
                            ><i class="bi bi-star-fill"></i
                            ><i class="bi bi-star-fill"></i
                            ><i class="bi bi-star-fill"></i
                            ><i class="bi bi-star-fill"></i>
                          </div>
                        </div>
                      </div>
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span
                          >Sự nhiệt tình và chuyên nghiệp của FIND YOUR JOB đã khiến tôi cảm thấy an tâm và tự tin trong việc tìm kiếm công việc. 
                          Họ đã tận dụng mạng lưới kết nối của họ để giới thiệu tôi với nhiều cơ hội nghề nghiệp tiềm năng.</span
                        >
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                    </div>
                  </div>
                  <!-- End testimonial item -->

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="d-flex">
                        <img
                          src="assets/img/testimonials/testimonials-5.jpg"
                          class="testimonial-img flex-shrink-0"
                          alt=""
                        />
                        <div>
                          <h3>Minh Huy</h3>
                          <h4>Entrepreneur</h4>
                          <div class="stars">
                            <i class="bi bi-star-fill"></i
                            ><i class="bi bi-star-fill"></i
                            ><i class="bi bi-star-fill"></i
                            ><i class="bi bi-star-fill"></i
                            ><i class="bi bi-star-fill"></i>
                          </div>
                        </div>
                      </div>
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span
                          >"Tôi đã được FIND YOUR JOB giúp đỡ trong việc tạo và cập nhật hồ sơ cá nhân của mình. 
                          Điều này đã giúp tôi nổi bật trong việc xin việc và thu hút sự chú ý của nhà tuyển dụng. Tôi rất biết ơn sự hỗ trợ này.</span
                        >
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                    </div>
                  </div>
                  <!-- End testimonial item -->
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Testimonials Section -->

      <!-- Recent-posts Section - Home Page -->

      <!-- End Recent-posts Section -->
      <div class="section-top-client section-title container">
        <h2>Top Employment</h2>
        <div class="swiper mySwiper section-intro">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="assets/img/clients/client-1.png" alt="">
          </div>
          <div class="swiper-slide">
            <img src="assets/img/clients/client-2.png" alt="">
          </div>
          <div class="swiper-slide">
            <img src="assets/img/clients/client-3.png" alt="">
          </div>
          <div class="swiper-slide">
            <img src="assets/img/clients/client-4.png" alt="">
          </div> 
          <div class="swiper-slide">
            <img src="assets/img/clients/client-5.png" alt="">
          </div>
        </div>
      </div>
    </div>
      <!-- Contact Section - Home Page -->
      <section id="contact" class="contact">
        <!--  Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Contact</h2>
          <p>
          Hãy liên hệ với chúng tôi ngay
          </p>
        </div>
        <!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row gy-4">
            <div class="col-lg-6">
              <div class="row gy-4">
                <div class="col-md-6">
                  <div class="info-item" data-aos="fade" data-aos-delay="200">
                    <i class="bi bi-geo-alt"></i>
                    <h3>Địa chỉ</h3>
                    <p>Đường Hàn Thuyên</p>
                    <p>Khu phố 6,TP.Thủ Đức</p>
                    <p>Thành phố Hồ Chí Minh</p>
                  </div>
                </div>
                <!-- End Info Item -->

                <div class="col-md-6">
                  <div class="info-item" data-aos="fade" data-aos-delay="300">
                    <i class="bi bi-telephone"></i>
                    <h3>SMS</h3>
                    <p>+1 23456789</p>
              
                  </div>
                </div>
                <!-- End Info Item -->

                <div class="col-md-6">
                  <div class="info-item" data-aos="fade" data-aos-delay="400">
                    <i class="bi bi-envelope"></i>
                    <h3>Email</h3>
                    <p>nhom_7@example.com</p>
                   
                  </div>
                </div>
                <!-- End Info Item -->

                <div class="col-md-6">
                  <div class="info-item" data-aos="fade" data-aos-delay="500">
                    <i class="bi bi-clock"></i>
                    <h3>Giờ mở cửa</h3>
                    <p>Monday - Friday</p>
                    <p>9:00AM - 05:00PM</p>
                  </div>
                </div>
                <!-- End Info Item -->
              </div>
            </div>

            <div class="col-lg-6">
              <form
                action="forms/contact.php"
                method="post"
                class="php-email-form"
                data-aos="fade-up"
                data-aos-delay="200"
              >
                <div class="row gy-4">
                  <div class="col-md-6">
                    <input
                      type="text"`
                      name="name"
                      class="form-control"
                      placeholder="Họ tên"
                      required
                    />
                  </div>

                  <div class="col-md-6">
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      placeholder="Email"
                      required
                    />
                  </div>

                  <div class="col-md-12">
                    <input
                      type="text"
                      class="form-control"
                      name="subject"
                      placeholder="Tiêu đề"
                      required
                    />
                  </div>

                  <div class="col-md-12">
                    <textarea
                      class="form-control"
                      name="message"
                      rows="6"
                      placeholder="Nội dung"
                      style="resize: none;"
                      required
                    ></textarea>
                  </div>

                  <div class="col-md-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">
                    Cảm ơn bạn đã liên hệ với chúng tôi. Nếu bạn cần thêm thông tin hoặc có bất kỳ câu hỏi nào khác, đừng ngần ngại liên hệ lại. Chúng tôi luôn sẵn lòng hỗ trợ bạn. Chúc bạn một ngày tốt lành!
                    </div>
                    <button type="submit">Gửi</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- End Contact Form -->
          </div>
        </div>
      </section>
      <!-- End Contact Section -->
    </main>

    
    <!-- ======= Footer ======= -->
    <?php include 'footer.php'  ?>
    <!-- End Footer -->

