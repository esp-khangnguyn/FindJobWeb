<?php include 'header.php';?>
<link rel="stylesheet" href="./assets/css/create-job.css">
<main id="main">
    <div data-aos="fade" class="page-title">
      <div class="heading ps-4 ">
        <h1 class="text-white ">Đăng tin tuyển dụng</h1>
      </div>
    </div>
    <section>
        <div class="container">
          <form action="/submit-form" method="post">
            <div class="mb-3">
              <label for="chuyen-mon">Keyword</label>
              <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Nhập tên keyword , ví dụ; React Nodejs Lavarel ...">
            </div>
            <div class="mb-3">
              <label for="kinh-nghiệm">Kinh nghiệm</label>
              <input type="number" class="form-control" id="kinh-nghiệm" name="kinh-nghiệm" placeholder="Nhập kinh nghiệm">
            </div>
            <div class="mb-3">
              <label for="dia-chi">Địa chỉ</label>
              <input type="text" class="form-control" id="dia-chi" name="dia-chi" placeholder="Nhập địa chỉ">
            </div>
            <div class="mb-3">
              <label for="mo-ta">Mô tả</label>
              <textarea class="form-control" id="mo-ta" name="mo-ta" rows="3"></textarea>
            </div>
            <div class="mb-3">
              <label for="yeu-cau">Yêu cầu</label>
              <input type="text" class="form-control" id="yeu-cau" name="yeu-cau" placeholder="Nhập yêu cầu">
            </div>
            <div class="mb-3">
              <label for="luong">Lương</label>
              <input type="number" class="form-control" id="luong" name="luong" placeholder="Nhập lương">
            </div>
            <div class="mb-3">
              <label for="hinh-anh">Hình ảnh</label>
              <input type="file" class="form-control" id="hinh-anh" name="hinh-anh">
            </div>
            <div class="mb-3">
              <input type="submit" class="btn btn-primary" value="Đăng tin">
            </div>
          </form>
        </div>
    </section>
</main>
<?php include 'footer.php';?>
