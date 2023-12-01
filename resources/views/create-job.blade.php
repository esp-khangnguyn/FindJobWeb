@include('header')
<link rel="stylesheet" href="{{ asset('assets/css/create-job.css')}}">
<main id="main">
  <div data-aos="fade" class="page-title">
    <div class="heading ps-4 ">
      <h1 class="text-white ">Đăng tin tuyển dụng</h1>
    </div>
  </div>
  <section>
      <div class="container">
        <form action="/submit-form" method="post">
          <div class="form-floating mb-4">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Tiêu đề công việc</label>
          </div>
          <div class="form-floating mb-4">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Điểm mạnh của công ty</label>
          </div>
          <div class="form-floating mb-4">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Mô tả công việc</label>
          </div>
          <div class="form-floating mb-4">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Yêu cầu công việc</label>
          </div>
          <div class="form-floating mb-4">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Tại sao bạn lại làm việc tại đây</label>
          </div>
          <div class="form-floating mb-4">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Điểm mạnh của công ty</label>
          </div>
          <div class="mb-3">
            <input type="number" class="form-control" id="luong" name="luong" placeholder="Nhập lương">
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
              Active
            </label>
          </div>
          <div class="form-check mb-4">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
              Unactive
            </label>
          </div>
          <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Đăng tin">
          </div>
        </form>
      </div>
  </section>
</main>
@include('footer')