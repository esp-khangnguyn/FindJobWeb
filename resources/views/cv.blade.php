@include('header')
  <link rel="stylesheet" href="{{ asset ('assets/css/cv.css')}}">
  <main id="main blog-details">

    <!-- Blog Details Page Title & Breadcrumbs -->
    <div data-aos="fade" class="page-title">
      <div class="heading">

      </div>
    </div><!-- End Page Title -->

    <!-- Blog-details Section - Blog Details Page -->
    <section id="blog-details" class="blog-details">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-5 d-flex gap-2 position-relative">  
        <div class="col-lg-3 box-content box-sidebar">
            <div class="sidebar box">
                <h3>Hoàn thiện cv của bạn</h3>
                <ul class="list-group list-group-flush mt-4 ">
                    <li class="list-group-item"> + Thêm thông tin cá nhân</li>
                    <li class="list-group-item"> + Kinh nghiệm làm việc</li>
                    <li class="list-group-item"> + Thêm học vấn</li>
                    <li class="list-group-item"> + Thêm kỹ năng</li>
                    <li class="list-group-item"> + Thêm chứng chỉ</li>
                </ul>
                <button type="file" class="w-100 bg-color border-0 button rounded-2 p-2 text-white mt-4" >
                    Xem và tải cv
                </button>
            </div><!-- End Sidebar -->

          </div>  
          <div class="col-lg-8 box-content">
            <div class="box">
              <div class="content d-flex flex-row">
                <div class="avatar-containter">
                    <img src="{{asset('assets/img/blog/blog-author-2.jpg')}}" alt="" class="w-100 ">
                </div>
                <div class="info-container ms-4 ">
                    <h3>Minh Công</h3>
                    <p>congcac@gmail.com</p>
                </div>
              </div>
            </div>
            <div class="box">
              <div class="content">
                <h3>
                  Giới thiệu bản thân
                </h3>
                <hr />
                <p>
                    Sinh ra trong một gia đình nghèo khó, mẹ bán ve chai, ba vá xe , nên sớm nuôi ý chí trở thành một con người vô hại cho xã hội.
                </p>
              </div>
            </div>
            <div class="box">
              <div class="content">
                <h3>
                  Học vấn
                </h3>
                <p>
                    Sinh viên năm 6 UIT
                </p>
              </div>
            </div>
            <div class="box">
              <div class="content">
                <h3>
                    Kinh nghiệm làm việc
                </h3>
                <p>
                    Trải qua 20 năm ăn hàng ở không
                </p>
              </div>
            </div>
            <div class="box">
              <div class="content">
                <h3>
                   Kỹ năng
                </h3>
                <p>
                   Hít thở bằng miệng , ăn mì bằng mũi
                </p>
              </div>
            </div>
            <div class="box">
              <div class="content">
                <h3>
                   Dự án cá nhân
                </h3>
                <p>
                   PetShop
                </p>
              </div>
            </div>
            <div class="box">
              <div class="content">
                <h3>
                   Chứng chỉ
                </h3>
                <p>
                  Tốt nghiệp THPT
                </p>
              </div>
            </div>
            <div class="box">
              <div class="content">
                <h3>
                    Giải thưởng
                </h3>
                <p>
                    Vua chữ đẹp
                </p>
              </div>
            </div>
          </div>     
           
          
        </div>

      </div>

    </section><!-- End Blog-details Section -->

  </main>
  @include('footer')