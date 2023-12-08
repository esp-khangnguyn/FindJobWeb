<?php include 'header-login.php'  ?>
<link rel="stylesheet" href="./assets/css/admin.css">
<link rel="stylesheet" href="./assets/css/profile-nav.css">
<link rel="stylesheet" href="./assets/css/admin-user.css">
<main id="main blog-details">
    <section id="blog-details" class="blog-details">
        <div class="" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-5 d-flex position-relative justify-content-center gap-2">
                <div class="col-lg-2 box-content box-sidebar">
                     <?php include 'admin-sidebar.php'  ?>
                </div>
                <div class="col-lg-8  box-content">
                    <div class="box">
                        <h3>Employee</h3>
                        <div class="view-content p-4">
                            <form class="input-group flex-nowrap mb-4 " action="/Admin/EmpManage" method="get">
                                <span class="input-group-text" id="addon-wrapping"></span>
                                <input name="name" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
                            </form>
                            <div class="w-100 user-container d-flex flex-wrap">
                                <div class="row w-100">
                                    <div class="col a-box rounded-4 p-4 item-user w-50 position-relative" style="border-radius: 12px;">
                                        <form class="position-absolute top-0 end-0 mt-1 me-4" action="/Admin/Accept/@Model.ElementAt(i).Id">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary bg-color" type="submit" >
                                                    Xác nhận
                                                </button>
                                            </div>
                                        </form>
                                        <div class="col pt-2 ">
                                            <p class="row fw-bold p-0 m-0">Belimo</p>
                                            <p class="row  p-0 m-0">Belimo@gmail.com</p>

                                        </div>
                                        <div class="row">
                                            <div class="col pt-2 ">
                                                <p class="row fw-bold p-0 m-0">Địa chỉ</p>
                                                <p class="pt-2  p-0 m-0">HN</p>
                                            </div>
                                            <div class="col pt-2 ">
                                                <p class="row fw-bold p-0 m-0">SĐT </p>
                                                <p class="pt-2 p-0 m-0">12312323</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row w-100">
                                    <div class="col a-box rounded-4 p-4 item-user w-50 position-relative" style="border-radius: 12px;">
                                        <form class="position-absolute top-0 end-0 mt-1 me-4" action="/Admin/Accept/@Model.ElementAt(i).Id">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary bg-color" type="submit" >
                                                    Xác nhận
                                                </button>
                                            </div>
                                        </form>
                                        <div class="col pt-2 ">
                                            <p class="row fw-bold p-0 m-0">Belimo</p>
                                            <p class="row  p-0 m-0">Belimo@gmail.com</p>

                                        </div>
                                        <div class="row">
                                            <div class="col pt-2 ">
                                                <p class="row fw-bold p-0 m-0">Địa chỉ</p>
                                                <p class="pt-2  p-0 m-0">HN</p>
                                            </div>
                                            <div class="col pt-2 ">
                                                <p class="row fw-bold p-0 m-0">SĐT </p>
                                                <p class="pt-2 p-0 m-0">12312323</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</main>
<?php include 'footer.php'  ?>