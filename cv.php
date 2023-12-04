<?php include 'header-login.php'  ?>
  <link rel="stylesheet" href="./assets/css/cv.css">
  <link rel="stylesheet" href="./assets/css/profile-nav.css">
  <main id="main blog-details">

    <!-- Blog Details Page Title & Breadcrumbs -->
    
    <div data-aos="fade" class="page-title">
        <div class="heading">
        </div>
    </div>
    <div class="container profile-nav d-flex flex-row justify-content-start ">
        <a href="cv.php" class="fs-5 active">
            Thông tin
        </a>
        <a href="employ-management.php" class="fs-5">
            Quản lý tuyển dụng
        </a>
    </div>
    <section id="blog-details" class="blog-details">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row g-5 d-flex gap-2 position-relative">
              <div class="col-lg-3 box-content box-sidebar">
                  <div class="sidebar box">
                      <div class="progress-container w-100 d-flex justify-content-center mb-2">
                          <div class="progress-bar">
                              <progress min="0" max="100" value="90" style="visibility:hidden;height:0;width:0;">90%</progress>
                          </div>
                      </div>

                      <h6 class="fw-bold mb-2 text-center">Hoàn thiện hồ sơ của bạn</h6>
                      <ul class="list-group list-group-flush mt-4 ">

                          <li class="list-group-item">
                              <a href="#introduce-section">
                                  + Giới thiệu
                              </a>
                          </li>
                          <li class="list-group-item">
                              <a href="#location-section">
                                  + Địa chỉ
                              </a>
                          </li>
                          <li class="list-group-item">
                              <a href="#workingtime-section">
                                  + Thời gian làm việc
                              </a>
                          </li>
                          <li class="list-group-item">
                              <a href="#project-section">
                                  + Dự án đã thực hiện
                              </a>
                          </li>
                          <li class="list-group-item">
                              <a href="#prize-section">
                                  + Giải thưởng
                              </a>
                          </li>
                      </ul>
                      <button class="w-100 bg-color border-0 button rounded-2 p-2 text-white mt-4">
                      </button>
                  </div>
                  <!-- End Sidebar -->
              </div>

              <form class="col-lg-8 box-content"  >
                  <div class="box" id="introduce-section">
                      <div class="content d-flex flex-row">
                          <div class="avatar-containter">
                              <img src="./assets/img/blog/blog-author-2.jpg" alt="" class="w-100 ">
                              <input type="file" name="" id="" class="w-100 h-100 opacity-0 top-0 bottom-0 position-absolute left-0 start-0 end-0  ">
                          </div>

                          <div class="info-container ms-4 ">
                              <input type="text" name="name" value="@Model.Name" />
                              <p>@Model.Email</p>
                          </div>
                      </div>
                  </div>
                  <div class="box" id="location-section">
                      <div class="content">
                          <h3>
                              Giới thiệu bản thân
                          </h3>
                          <div class="form-floating">
                              <textarea name="Introduce" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">@Model.Introduce</textarea>
                          </div>
                      </div>
                  </div>
                  <div class="box">
                      <div class="content" id="workingtime-section">
                          <h3>
                              Học vấn
                          </h3>
                          <div class="form-floating">
                              <textarea name="Education" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">@Model.Education</textarea>
                          </div>
                      </div>
                  </div>
                  <div class="box">
                      <div class="content">
                          <h3>
                              Kinh nghiệm
                          </h3>
                          <div class="form-floating" id="project-section">
                              <textarea name="Expirience" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">@Model.Expirience</textarea>
                          </div>
                      </div>
                  </div>
                  <div class="box" id="prize-section">
                      <div class="content">
                          <h3>
                              Kĩ năng
                          </h3>
                          <div class="form-floating">
                              <textarea name="Skill" class="form-control" id="floatingTextarea2" style="height: 100px">@Model.Skill</textarea>
                          </div>
                      </div>
                  </div>


                  <div class="box" id="prize-section">
                      <div class="content">
                          <h3>
                              Dự án đã thực hiện
                          </h3>
                          <div class="form-floating">
                              <textarea name="OwnProject" class="form-control" id="floatingTextarea2" style="height: 100px">@Model.OwnProject</textarea>
                          </div>
                      </div>
                  </div>

                  <div class="box" id="prize-section">
                      <div class="content">
                          <h3>
                              Chứng chỉ
                          </h3>
                          <div class="form-floating">
                              <textarea name="Certificate" class="form-control" id="floatingTextarea2" style="height: 100px">@Model.Certificate</textarea>
                          </div>
                      </div>
                  </div>
                
                  <div class="box">
                      <div class="content">
                          <h3>
                              Giải thưởng
                          </h3>
                          <div class="form-floating">
                              <textarea name="Prize" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">@Model.Prize</textarea>

                          </div>
                      </div>
                  </div>
                  <button type="submit" class="w-100 bg-color border-0 button rounded-2 p-2 text-white mt-4">
                      Cập nhật
                  </button>
              </form>
          </div>
      </div>
  </section>

  </main>


  <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Chỉnh sửa thông tin</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Giới thiệu bản thân</label>
              <textarea class="form-control" id="message-text"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
          <button type="button" class="btn btn-primary bg-color">Chấp nhận</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="editCVModal" tabindex="-1" aria-labelledby="editCVModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="editCVModal">Chỉnh sửa thông tin</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <img src="./assets/img/cv.png" alt="" class="cv-image">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
          <button type="button" class="btn btn-primary bg-color">Chấp nhận</button>
        </div>
      </div>
    </div>
  </div>
  <?php include 'footer.php'  ?>