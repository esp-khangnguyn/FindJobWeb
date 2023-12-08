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
          <form action="@Url.Action("Create", "Job")" method="post">
          <div class="form-floating mb-4">
            <textarea class="form-control" name="Name" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Tiêu đề công việc</label>
          </div>
          <div class="form-floating mb-4">
            <textarea class="form-control" name="Location" placeholder="" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Nơi làm việc</label>
          </div>
          <div class="form-floating mb-4">
            <textarea wrap="hard" class="form-control" name="Descriptions" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Mô tả công việc</label>
          </div>
          <div class="form-floating mb-4">
            <textarea class="form-control" name="Requirements" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Yêu cầu công việc</label>
          </div>
          <div class="form-floating mb-4">
            <textarea class="form-control" name="Reasons" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Điểm mạnh của công ty</label>
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" id="luong" name="Salary" placeholder="Nhập lương">
          </div>
          <div class="mb-3">
              <p class="fw-bold">Hình thức làm việc</p>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="WorkType" value="Remote" id="remote">
                <label class="form-check-label" for="remote">
                      Remote
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="WorkType" value="Offline" id="offline" checked>
                <label class="form-check-label" for="offline">
                  Offline
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="WorkType" value="Remote & Offline" id="both" >
                <label class="form-check-label" for="both">
                  Both
                </label>
              </div>
          </div>
          <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Status" id="flexRadioDefault1" value="active">
                <label class="form-check-label" for="flexRadioDefault1">
                  Active
                </label>
              </div>
              <div class="form-check mb-4">
                <input class="form-check-input" type="radio" name="Status" id="flexRadioDefault2" value="unactive" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                  Unactive
                </label>
              </div>
          </div>
          <div class="mb-3">
            <button type="submit" class="btn btn-primary">Đăng tin</button>
          </div>
        </form>
      </div>
  </section>
</main>
<?php include 'footer.php';?>
