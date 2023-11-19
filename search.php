
  <?php include 'header.php'  ?>
  <link rel="stylesheet" href="./assets/css/search.css">


  <div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="filterModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Bộ lọc</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h3 class="text-black fw-700">Cấp bậc</h3>
          <input type="checkbox" class="btn-check" id="btn-check" autocomplete="off" >
          <label class="btn btn-primary bg-transparent text-black border-1 border-color-primary" for="btn-check">Fresher</label>
          <input type="checkbox" class="btn-check" id="btn-check-2" autocomplete="off" >
          <label class="btn btn-primary bg-transparent text-black border-1 border-color-primary" for="btn-check-2">Junior</label>
          <input type="checkbox" class="btn-check" id="btn-check-3" autocomplete="off" >
          <label class="btn btn-primary bg-transparent text-black border-1 border-color-primary" for="btn-check-3">Senior</label>
          <input type="checkbox" class="btn-check" id="btn-check-4" autocomplete="off" >
          <label class="btn btn-primary bg-transparent text-black border-1 border-color-primary" for="btn-check-4">Manager</label>
        </div>
        <div class="modal-body">
          <h3 class="text-black fw-700">Loại công ty</h3>
          <input type="checkbox" class="btn-check" id="btn-check-product" autocomplete="off" >
          <label class="btn btn-primary bg-transparent text-black border-1 border-color-primary" for="btn-check-product">Fresher</label>
          <input type="checkbox" class="btn-check" id="btn-check-outsrc" autocomplete="off" >
          <label class="btn btn-primary bg-transparent text-black border-1 border-color-primary " for="btn-check-outsrc">Junior</label>
        </div>
        <div class="modal-body">
          <h3 class="text-black fw-700">Loại công ty</h3>
          <input type="checkbox" class="btn-check" id="btn-check-remote" autocomplete="off" >
          <label class="btn btn-primary bg-transparent text-black border-1 border-color-primary" for="btn-check-remote">Từ xa</label>
          <input type="checkbox" class="btn-check" id="btn-check-office" autocomplete="off" >
          <label class="btn btn-primary bg-transparent text-black border-1 border-color-primary " for="btn-check-office">Tại văn phòng</label>
          <input type="checkbox" class="btn-check" id="btn-check-flex" autocomplete="off" >
          <label class="btn btn-primary bg-transparent text-black border-1 border-color-primary " for="btn-check-flex">Linh hoạt</label>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary bg-color border-0 "  data-bs-dismiss="modal" >Áp dụng</button>
        </div>
      </div>
    </div>
  </div>

  <main id="main">
    <!-- Blog Page Title & Breadcrumbs -->
    <div data-aos="fade" class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8 w-100 d-flex justify-content-center gap-2   flex-row">
              <select class="form-select w-auto" aria-label="Default select example">
                <option selected>Địa điểm</option>
                <option value="1">Hồ Chí Minh</option>
                <option value="2">Hà Nội</option>
                <option value="3">Đà nẵng </option>
                <option value=""> Cần Thơ</option>
                <option value="">Huế</option>
              </select>
              <input class="w-50 p-3 rounded-2 " type="text" placeholder="Nhập từ khóa" >
              <button class="w-auto p-3 rounded-2 bg-color d-flex justify-content-center align-content-center border-0 ">
                <img src="./assets/img/search.png" width="32px" height="32px;" alt="">
                <p class="m-0 fw-bold text-light ">Tìm kiếm</p>
              </button>
            </div>
          </div>
          <div class="row mt-2 ">
            <form action="" method="get">
              <ul class="row d-flex  flex-row bull list-unstyled justify-content-center ">
                <li class="w-auto p-2  ">Gợi ý: </li>
                <li class="list-item w-auto p-2 rounded-2 border-light border-1 ">
                  <button class="hint-item  rounded-2  bg-transparent text-light" type="submit" name="key" value="java">Java</button>
                </li>
                <li class="list-item w-auto p-2 rounded-2 border-light border-1 ">
                  <button class="hint-item  rounded-2  bg-transparent text-light" type="submit" name="key" value="C#">C#</button>
                </li>
                <li class="list-item w-auto p-2 rounded-2 border-light border-1 ">
                  <button class="hint-item  rounded-2  bg-transparent text-light" type="submit" name="key" value="Golang">Golang</button>
                </li>
                <li class="list-item w-auto p-2 rounded-2 border-light border-1 ">
                  <button class="hint-item  rounded-2  bg-transparent text-light" type="submit" name="key" value="React">React</button>
                </li>
              </ul>
            </form>
          </div>
        </div>
      </div>
    </div><!-- End Page Title -->

    <!-- Blog Section - Blog Page -->
    <section id="blog" class="blog">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <button class="w-auto p-3 rounded-2 bg-color d-flex justify-content-center align-content-center border-0 mb-2"  data-bs-toggle="modal" data-bs-target="#filterModal">
         <p class="m-0 fw-bold text-light "> Lọc</p>
        </button>
        <div class="row gy-4 posts-list">

          <div class="col-xl-6 col-lg-6">
            <article>
              <h2 class="title">
                <a href="blog-details.php">Java Backend Developer (MySQL, Spring)</a>
              </h2>
              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Maria Doe</p>
                  <p>Salary $1000 - $2000</p>
                  <p>at Company</p>
                  <p>Ho Chi Minh</p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->
          <div class="col-xl-6 col-lg-6">
            <article>
              <h2 class="title">
                <a href="blog-details.php">Java Backend Developer (MySQL, Spring)</a>
              </h2>
              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Maria Doe</p>
                  <p>Salary $1000 - $2000</p>
                  <p>at Company</p>
                  <p>Ho Chi Minh</p>
                </div>
              </div>

            </article>
          </div><!-- End post list item --><div class="col-xl-6 col-lg-6">
            <article>
              <h2 class="title">
                <a href="blog-details.php">Java Backend Developer (MySQL, Spring)</a>
              </h2>
              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Maria Doe</p>
                  <p>Salary $1000 - $2000</p>
                  <p>at Company</p>
                  <p>Ho Chi Minh</p>
                </div>
              </div>

            </article>
          </div><!-- End post list item --><div class="col-xl-6 col-lg-6">
            <article>
              <h2 class="title">
                <a href="blog-details.php">Java Backend Developer (MySQL, Spring)</a>
              </h2>
              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Maria Doe</p>
                  <p>Salary $1000 - $2000</p>
                  <p>at Company</p>
                  <p>Ho Chi Minh</p>
                </div>
              </div>

            </article>
          </div><!-- End post list item --><div class="col-xl-6 col-lg-6">
            <article>
              <h2 class="title">
                <a href="blog-details.php">Java Backend Developer (MySQL, Spring)</a>
              </h2>
              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0 col-4 ">
                <div class="post-meta">
                  <p class="post-author">Maria Doe</p>
                  <p>Salary $1000 - $2000</p>
                  <p>at Company</p>
                  <p>Ho Chi Minh</p>
                </div>
              </div>

            </article>
          </div><!-- End post list item --><div class="col-xl-6 col-lg-6">
            <article>
              <h2 class="title">
                <a href="blog-details.php">Java Backend Developer (MySQL, Spring)</a>
              </h2>
              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Maria Doe</p>
                  <p>Salary $1000 - $2000</p>
                  <p>at Company</p>
                  <p>Ho Chi Minh</p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

        

        </div><!-- End blog posts list -->

        <div class="pagination d-flex justify-content-center">
          <ul>
            <li class="active"><a href="#">1</a></li>
            <li ><a href="#">2</a></li>
            <li><a href="#">3</a></li>
          </ul>
        </div><!-- End pagination -->

      </div>

    </section><!-- End Blog Section -->

  </main>

  <!-- ======= Footer ======= -->
  <?php include 'footer.php'  ?>