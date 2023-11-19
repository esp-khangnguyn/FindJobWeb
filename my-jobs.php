<?php include 'header-login.php'  ?>
  <link rel="stylesheet" href="./assets/css/cv.css">
  <link rel="stylesheet" href="./assets/css/profile-nav.css">
  <main id="main blog-details">

    <!-- Blog Details Page Title & Breadcrumbs -->
    <div data-aos="fade" class="page-title">
      <div class="heading">

      </div>
    </div><!-- End Page Title -->

    <!-- Blog-details Section - Blog Details Page -->
    <div class="container profile-nav d-flex flex-row justify-content-start ">
      <a href="cv.php" class="fs-5 ">
          Hồ sơ của tôi
      </a>
      <a href="my-jobs.php" class="fs-5 active">
          Công việc
      </a>
    </div>
    <section id="blog-details" class="blog-details">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-5 d-flex position-relative justify-content-center gap-2">  
            <div class="col-lg-3 box-content box-sidebar">
                <div class="sidebar box">
                    <h3>Thông kê</h3>
                    <ul class="list-group list-group-flush mt-4 ">
                        <li class="list-group-item">
                            <p>Kinh nghiệm</p>
                            <h3 class="main-color text-center">6 năm</h3>
                        </li>
                        <li class="list-group-item">
                            <p>Vị trí cao nhất</p>
                            <h3 class="main-color text-center">Junior</h3>
                        </li>
                        <li class="list-group-item">
                            <p>Công ty từng làm việc</p>
                            <h3 class="main-color text-center">10</h3>
                        </li>
                    </ul>
                    <button type="file" class="w-100 bg-color border-0 button rounded-2 p-2 text-white mt-4" data-bs-toggle="modal" data-bs-target="#editCVModal">
                       
                    </button>
                </div><!-- End Sidebar -->

          </div>  
          <div class="col-lg-8 box-content">
            <div class="box">
              <div class="content d-flex flex-row">
                <div class="avatar-containter d-flex ">
                    <img src="./assets/img/blog/blog-author-2.jpg" alt="" class="w-100 ">
                </div>
                <div class="info-container ms-4 ">
                    <h3>React ,Node js</h3>
                    <p>company name</p>
                </div>

                <div class="info-container ms-4 text-end flex-grow-1 ">
                    <h3>2020 - 2022</h3>
                </div>
              </div>
            </div>
            <div class="box">
              <div class="content d-flex flex-row">
                <div class="avatar-containter d-flex ">
                    <img src="./assets/img/blog/blog-author-2.jpg" alt="" class="w-100 ">
                </div>
                <div class="info-container ms-4 ">
                    <h3>React ,Node js</h3>
                    <p>company name</p>
                </div>

                <div class="info-container ms-4 text-end flex-grow-1 ">
                    <h3>2020 - 2022</h3>
                </div>
              </div>
            </div>
            <div class="box">
              <div class="content d-flex flex-row">
                <div class="avatar-containter d-flex ">
                    <img src="./assets/img/blog/blog-author-2.jpg" alt="" class="w-100 ">
                </div>
                <div class="info-container ms-4 ">
                    <h3>React ,Node js</h3>
                    <p>company name</p>
                </div>

                <div class="info-container ms-4 text-end flex-grow-1 ">
                    <h3>2020 - 2022</h3>
                </div>
              </div>
            </div>
            <div class="box">
              <div class="content d-flex flex-row">
                <div class="avatar-containter d-flex ">
                    <img src="./assets/img/blog/blog-author-2.jpg" alt="" class="w-100 ">
                </div>
                <div class="info-container ms-4 ">
                    <h3>React ,Node js</h3>
                    <p>company name</p>
                </div>

                <div class="info-container ms-4 text-end flex-grow-1 ">
                    <h3>2020 - 2022</h3>
                </div>
              </div>
            </div>
          </div>     
           
          
        </div>

      </div>

    </section><!-- End Blog-details Section -->

  </main>


  <?php include 'footer.php'  ?>