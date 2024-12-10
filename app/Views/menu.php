<body>
<style>
  html, body {
    margin: 0;
    padding: 0;
    overflow-y: hidden; /* Hindari scroll horizontal */
    height: 100%; /* Pastikan tinggi halaman 100% */
    font-family: Arial, sans-serif; /* Sesuaikan font jika diperlukan */
}
#banner {
    background: #F9F3EC;
    padding: 1px 0; /* Sesuaikan padding vertikal sesuai kebutuhan */
    overflow: hidden; /* Hindari elemen yang meluber */
}
.img-wrapper {
    max-width: 400px; /* Sesuaikan ukuran maksimum gambar */
}
</style>
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;"></svg>
  <div class="preloader-wrapper">
    <div class="preloader">
    </div>
  </div>

  <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart" aria-labelledby="My Cart">
    <div class="offcanvas-header justify-content-center">
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="order-md-last">
        

        <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
      </div>
    </div>
  </div>

  
    <div class="container">
      <nav class="main-menu d-flex navbar navbar-expand-lg ">


       
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

          <div class="offcanvas-header justify-content-center">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>

          <div class="offcanvas-body justify-content-between">
           
            <ul class="navbar-nav menu-list list-unstyled d-flex gap-md-3 mb-0">
            
            </ul>

            <div class="d-none d-lg-flex align-items-end">
              <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                
                            </div>
                        </div>
                    </div>
              <ul class="d-flex justify-content-end list-unstyled m-0">
              
            
</ul>
</div>
</div>
</div>
</nav>
</div>
</header>
</body>

    </div>
  </section>
 <section id="banner" style="background: #FFEBF0;"> 
    <div class="container">
        <div class="swiper main-swiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide py-5">
                    <div class="row banner-content align-items-center">
                        <div class="img-wrapper col-md-5">
                            <img src="<?= base_url('images/banner-img2.png') ?>" class="img-fluid">
                        </div>
                        <div class="content-wrapper col-md-7 p-5 mb-5">
                            <h2 class="banner-title display-1 fw-normal" style="font-family: 'Comic Sans MS', cursive; color: #004A7C;">
                                Feeling Paw-some? 🐾
                            </h2>
                            <p style="font-size: 1.5rem; font-family: 'Poppins', sans-serif; color: #003B5C;">
                                Explore the cutest pets and learn how to care for them! 💕
                            </p>
                            <a href="<?= base_url('home/login') ?>" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1" style="background: #82CFFD; color: white; border: none; font-family: 'Poppins', sans-serif;">
                                LOGIN HERE
                                <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
                                    <use xlink:href="#arrow-right"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

</section>

           

      
         

  

 