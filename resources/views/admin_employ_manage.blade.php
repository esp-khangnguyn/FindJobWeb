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
            <div class="box">
              <h3>Employee</h3>
              <div class="view-content p-4">
                    <div class="input-group flex-nowrap mb-4 ">
                        <span class="input-group-text" id="addon-wrapping">@</span>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                    
                    <table class="table">
                        <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Name</th>
                              <th scope="col">Joined day</th>
                              <th scope="col">Jobs applied</th>
                              <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="p-4">
                              <th class="align-middle">
                                <div class="d-flex flex-row align-items-center text-center">
                                  <p class="m-0">1</p>
                                </div>
                              </th>
                              <td>
                                <div class="d-flex flex-row align-items-center ">
                                  <img class="rounded-circle  me-2 " src="./assets/img/features-light-1.jpg" width="80" height="80" alt="">
                                  <p class="m-0">Nguyễn Lê Khang</p>
                                </div>
                              </td>
                              <td class="align-middle">
                                <div class="d-flex flex-row align-items-center ">
                                  <p class="m-0">20/12/2023</p>
                                </div>
                              </td>
                              <td class="align-middle">
                                <div class="d-flex flex-row align-items-center text-center">
                                  <p class="m-0">26</p>
                                </div>
                              </td>
                              <td class="align-middle">
                                <div class="d-flex flex-row align-items-center text-center">
                                  <p class="fw-bold fs-2 ">..</p>
                                </div>
                              </td>
                            </tr>
                            <tr class="p-4">
                              <th class="align-middle">
                                <div class="d-flex flex-row align-items-center text-center">
                                  <p class="m-0">1</p>
                                </div>
                              </th>
                              <td>
                                <div class="d-flex flex-row align-items-center ">
                                  <img class="rounded-circle  me-2 " src="./assets/img/features-light-1.jpg" width="80" height="80" alt="">
                                  <p class="m-0">Nguyễn Lê Khang</p>
                                </div>
                              </td>
                              <td class="align-middle">
                                <div class="d-flex flex-row align-items-center ">
                                  <p class="m-0">20/12/2023</p>
                                </div>
                              </td>
                              <td class="align-middle">
                                <div class="d-flex flex-row align-items-center text-center">
                                  <p class="m-0">26</p>
                                </div>
                              </td>
                              <td class="align-middle">
                                <div class="d-flex flex-row align-items-center text-center">
                                  <p class="fw-bold fs-2 ">..</p>
                                </div>
                              </td>
                            </tr><tr class="p-4">
                              <th class="align-middle">
                                <div class="d-flex flex-row align-items-center text-center">
                                  <p class="m-0">1</p>
                                </div>
                              </th>
                              <td>
                                <div class="d-flex flex-row align-items-center ">
                                  <img class="rounded-circle  me-2 " src="./assets/img/features-light-1.jpg" width="80" height="80" alt="">
                                  <p class="m-0">Nguyễn Lê Khang</p>
                                </div>
                              </td>
                              <td class="align-middle">
                                <div class="d-flex flex-row align-items-center ">
                                  <p class="m-0">20/12/2023</p>
                                </div>
                              </td>
                              <td class="align-middle">
                                <div class="d-flex flex-row align-items-center text-center">
                                  <p class="m-0">26</p>
                                </div>
                              </td>
                              <td class="align-middle">
                                <div class="d-flex flex-row align-items-center text-center">
                                  <p class="fw-bold fs-2 ">..</p>
                                </div>
                              </td>
                            </tr><tr class="p-4">
                              <th class="align-middle">
                                <div class="d-flex flex-row align-items-center text-center">
                                  <p class="m-0">1</p>
                                </div>
                              </th>
                              <td>
                                <div class="d-flex flex-row align-items-center ">
                                  <img class="rounded-circle  me-2 " src="./assets/img/features-light-1.jpg" width="80" height="80" alt="">
                                  <p class="m-0">Nguyễn Lê Khang</p>
                                </div>
                              </td>
                              <td class="align-middle">
                                <div class="d-flex flex-row align-items-center ">
                                  <p class="m-0">20/12/2023</p>
                                </div>
                              </td>
                              <td class="align-middle">
                                <div class="d-flex flex-row align-items-center text-center">
                                  <p class="m-0">26</p>
                                </div>
                              </td>
                              <td class="align-middle">
                                <div class="d-flex flex-row align-items-center text-center">
                                  <p class="fw-bold fs-2 ">..</p>
                                </div>
                              </td>
                            </tr>
                        </tbody>
                    </table>


                  </div>
              </div>
            </div>
          </div>     
        
        </div>

      </div>

    </section><!-- End Blog-details Section -->

  </main>
@include('footer')