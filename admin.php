<?php include 'header-login.php'  ?>
<link rel="stylesheet" href="./assets/css/admin.css">
<link rel="stylesheet" href="./assets/css/profile-nav.css">
<main id="main ">
   <section id="blog-details" class="blog-details">
      <div class="" data-aos="fade-up" data-aos-delay="100">
         <div class="row g-5 d-flex position-relative justify-content-center gap-2">
            <div class="col-lg-2 box-content box-sidebar">
              <?php include 'admin-sidebar.php'  ?>
            </div>
            <div class="col-lg-8  box-content">
               <div class="container text-center">
                  <div class="row">
                     <div class="col a-box rounded-4 p-4 item-dashboard" style="border-radius: 12px;">
                        <h3 class="fw-bold main-color">Total jobs</h3>
                        <h2>
                        @ViewBag.TotalJob</p>
                     </div>
                     <div class="col a-box rounded-4 p-4 item-dashboard" style="border-radius: 12px;">
                        <h3 class="fw-bold main-color">Total emloyees</h3>
                        <h2>@ViewBag.TotalEmp</h2>
                     </div>
                     <div class="col a-box rounded-4 p-4 item-dashboard" style="border-radius: 12px;">
                        <h3 class="fw-bold main-color">Total emloyer</h3>
                        <h2>@ViewBag.TotalUser</h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</main>


<?php include 'footer.php'  ?>