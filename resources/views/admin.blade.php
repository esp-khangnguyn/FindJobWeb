@include('header')
  <link rel="stylesheet" href="./assets/css/admin.css">
  <link rel="stylesheet" href="./assets/css/profile-nav.css">
  <main id="main blog-details">
    <section id="blog-details" class="blog-details">
      <div class="" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-5 d-flex position-relative justify-content-center gap-2">  
            <div class="col-lg-2 box-content box-sidebar">
                <div class="sidebar box">
                    <h4 class="text-center fw-bold ">DASHBOARD</h4>
                    <ul class="list-group list-group-flush mt-4 ">
                        <li class="list-group-item">
                            <a href="./admin.php" class="tab d-flex flex-row align-items-center ">
                                <img src="./assets/img/user.png" alt="" width="30" height="30" class="me-4">
                                <p>Overview</p>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="./admin-employ-manage.php" class="tab d-flex flex-row align-items-center ">
                                <img src="./assets/img/user.png" alt="" width="30" height="30" class="me-4">
                                <p>Employee</p>
                            </a>
                        </li>
                        <li class="list-group-item d">
                            <a href="./admin-company-manage.php" class="tab d-flex flex-row align-items-center">
                                <img src="./assets/img/portfolio.png" alt="" width="30" height="30" class="me-4">
                                <p>Company</p>
                            </a>
                        </li>
                    </ul>
                    <button type="file" class="w-100 bg-color border-0 button rounded-2 p-2 text-white mt-4" data-bs-toggle="modal" data-bs-target="#editCVModal">
                       
                    </button>
                </div><!-- End Sidebar -->

          </div>  
          <div class="col-lg-8  box-content">
            <div class="container text-center">
              <div class="row">
                <div class="col a-box rounded-4 p-4">
                  <h3 class="fw-bold main-color">Total emloyees</h3>
                  <p>400</p>
                </div>
                <div class="col a-box rounded-4 p-4 ">
                  <h3 class="fw-bold main-color">Total emloyees</h3>
                  <p>600</p>
                </div>
              </div>
              <div class="row">
                <div class="col a-box rounded-4 p-4">
                  <h3 class="fw-bold main-color">Total emloyer</h3>
                  <p>400</p>
                </div>
                <div class="col a-box rounded-4 p-4 ">
                  <h3 class="fw-bold main-color">Total contact</h3>
                  <p>600</p>
                </div>
              </div>
              <div class="row">
                <div class="col a-box rounded-4 p-4">
                  <h3 class="fw-bold main-color">Total emloyer</h3>
                  <p>400</p>
                </div>
              </div>
            </div>
          </div>     
        
        </div>

      </div>

    </section><!-- End Blog-details Section -->

  </main>


@include('footer')