<?php include 'header.php'  ?>
  <link rel="stylesheet" href="./assets/css/employer-information.css">
  <link rel="stylesheet" href="./assets/css/profile-nav.css">
  <main id="main blog-details">

    <!-- Blog Details Page Title & Breadcrumbs -->
    <div data-aos="fade" class="page-title">
        <div class="heading">
        </div>
    </div>
    <!-- End Page Title -->
    <!-- Blog-details Section - Blog Details Page -->
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
                    
                        <h6 class="fw-bold mb-2 text-center">Hoàn thiện doanh nghiệp của bạn</h6>
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
                        <button  class="w-100 bg-color border-0 button rounded-2 p-2 text-white mt-4">
                        </button>
                    </div>
                    <!-- End Sidebar -->
                </div>
            
                <form class="col-lg-8 box-content" action="/Employer/Update" method="post" enctype="multipart/form-data">
                    <div class="box" id="introduce-section">
                        <div class="content d-flex flex-row">
                            <div class="avatar-containter position-relative ">
                                <img src="./assets/img/blog/blog-author-2.jpg" alt="" class="w-100 ">
                                <input type="file" name="" id="" class="w-100 h-100 opacity-0 top-0 bottom-0 position-absolute left-0 start-0 end-0  ">
                            </div>
                           
                            <div class="info-container ms-4 ">
                                <h3>@Model.Name</h3>
                                <p>@Model.Email</p>
                            </div>
                        </div>
                    </div>
                    <div class="box"  id="location-section">
                        <div class="content">
                            <h3>
                                Giới thiệu công ty
                            </h3>
                            <div class="form-floating">
                              <textarea name="Introduce" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">@Model.Introduce</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="content" id="workingtime-section">
                            <h3>
                                Địa chỉ
                            </h3>
                            <div class="form-floating">
                                <textarea name="Location" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">@Model.Location</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="content">
                            <h3>
                                Thời gian làm việc
                            </h3>
                            <div class="form-floating" id="project-section">
                                <textarea name="WorkingTime" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">@Model.WorkingTime</textarea>
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
  <?php include 'footer.php'  ?>