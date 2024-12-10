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

nav.main-menu {
    background: none; /* Hapus background header */
    box-shadow: none; /* Hapus bayangan */
    border-bottom: none; /* Hapus garis bawah jika ada */
}

.nav-link, .navbar-nav .nav-item a {
    color: #333; /* Warna teks menu */
    text-decoration: none; /* Hapus garis bawah */
}

.navbar-nav .nav-item a:hover {
    color: #555; /* Warna saat hover */
}

.navbar-toggler, .btn-close {
    color: #333; /* Warna ikon hamburger & tombol close */
}
</style>

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
  <nav class="main-menu d-flex navbar navbar-expand-lg">
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header justify-content-center">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>

      <div class="offcanvas-body justify-content-between">
        <ul class="navbar-nav menu-list list-unstyled d-flex gap-md-3 mb-0">
        <!--   <li class="nav-item">
            <a href="<?= base_url('home/index')?>" class="nav-link active">Home</a>
          </li> -->
          <a class="nav-link collapsed" data-bs-target="#components-nav" href="<?= base_url('home/dashboard')?>">
            <i class="bi bi-menu-button-wide"></i><span>Dashboard</span>
          </a>

           <?php
      if(session()->get('level')==2)
      {
        ?>
          <a class="nav-link collapsed" data-bs-target="#components-nav" href="<?= base_url('home/user')?>">
            <i class="bi bi-menu-button-wide"></i><span>User</span>
          </a>
          <?php
}else{

}
?>
   <?php
      if(session()->get('level')==2)
      {
        ?>
          <a class="nav-link collapsed" data-bs-target="#components-nav" href="<?= base_url('home/buku')?>">
            <i class="bi bi-menu-button-wide"></i><span>Buku</span>
          </a>
          <?php
}else{

}
?>
          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" href="<?= base_url('home/logout')?>">
              <i class="bi bi-menu-button-wide"></i><span>Logout</span>
            </a>
          </li>
        </ul>

        <div class="d-none d-lg-flex align-items-end">
          <ul class="d-flex justify-content-end list-unstyled m-0">
         <li>
   <!-- Menampilkan gambar profil -->
   <img src="<?= base_url('images/user.jpg') ?>" alt="Profile Photo" style="width: 50px; height: 50px; border-radius: 50%;">

   <!-- Menampilkan nama pengguna sesuai yang ada di session -->
<?= session()->get('username') ?>
</li>

            <li>
              
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</div>
</body>
