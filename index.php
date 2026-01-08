<?php
//menyertakan code dari file koneksi
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cahaya Peradaban Islam</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <link rel="icon" href="img/islamic pattern.png" />

    <!-- WARNA ACCORDION DIUBAH JADI ABU-ABU -->
    <style>
      .accordion-button:not(.collapsed) {
        background-color: #6c757d;
        color: white;
      }
      body.dark section {
    background-color: #444 !important;
    color: #fff !important;
  }

  body.dark footer {
    background-color: #222 !important;
    color: white !important;
  }

  body.dark .card {
    background-color: #555 !important;
    color: white !important;
  }

  body.dark .accordion-button {
    background-color: #444 !important;
    color: white !important;
  }

  body.dark .accordion-body {
    background-color: #555 !important;
    color: white !important;
  }

  body.dark nav {
  background-color: #ffffff !important;
  color: #000 !important;
}

/* Warna tulisan menu navbar */
body.dark nav .nav-link {
  color: #000 !important;
}

/* Hover tetap gelap */
body.dark nav .nav-link:hover {
  color: #444 !important;
}

/* Biar tulisan Last updated putih saat dark mode */
body.dark .card-footer small {
  color: #fff !important;
}
    </style>

  </head>
  <body>
    <!-- NAVBAR START -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">Cahaya Peradaban Islam</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#article">Article</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#schedule">Schedule</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#aboutme">About Me</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php" target="_blank">Login</a>
            </li>
            <li class="nav-item">
            <button id="toggle-dark" class="btn btn-outline-dark ms-3">🌓</button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- NAVBAR END -->

    <!-- HERO START -->
    <section id="hero" class="bg-secondary-subtle py-5">
  <div class="container">
    <div class="row align-items-center text-center text-md-start">

      <!-- Gambar (UKURAN TETAP) -->
      <div class="col-md-6 order-md-2 mb-4 mb-md-0 text-center">
        <img 
          src="img/islamic pattern.png" 
          width="400"
          class="img-fluid"
          alt="Islamic Pattern"
          style="max-width: 400px;"
        >
      </div>

      <!-- Teks -->
      <div class="col-md-6">
        <h1 class="fw-bold display-5 mb-3">
          Mengenal lebih dekat tokoh-tokoh besar dalam sejarah Islam
        </h1>
        <p class="lead fs-4 mb-3">
          yang membawa cahaya ilmu, peradaban, dan kemajuan bagi dunia.
        </p>
        <h6 class="text-muted">
          <span id="tanggal"></span> • <span id="jam"></span>
        </h6>
      </div>

    </div>
  </div>
</section>

    <!-- HERO END -->

    <!-- ARTICLE START -->
    <section id="article" class="text-center p-5">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">Article</h1>
        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
        				<?php
        $sql = "SELECT * FROM article ORDER BY tanggal DESC";
        $hasil = $conn->query($sql); 
 
        while($row = $hasil->fetch_assoc()){
        ?>  
        <!-- col start -->
          <div class="col">
            <div class="card h-100">
              <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title"><?= $row["judul"]?></h5>
                <p class="card-text">
                  <?= $row["isi"]?>
                </p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary"><?= $row["tanggal"]?></small>
              </div>
            </div>
          </div>
          <!-- col end -->
           <?php
           }
           ?>
        </div>
      </div>
    </section>
    <!-- ARTICLE END -->

    <!-- GALLERY START -->
    <section id="gallery" class="bg-secondary-subtle text-center p-5">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">Gallery</h1>

        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">

            <div class="carousel-item active">
              <img src="img/gambar perang al fatih.jpeg" class="d-block w-100" alt="..." />
            </div>

            <div class="carousel-item">
              <img src="img/khalid-pedang.jpg" class="d-block w-100" alt="..." />
            </div>

            <div class="carousel-item">
              <img src="img/Shalahuddin-al-Ayyubi.jpg" class="d-block w-100" alt="..." />
            </div>

          </div>

          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>

          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>

        </div>
      </div>
    </section>
    <!-- GALLERY END -->

    <!-- SCHEDULE START -->
    <section id="schedule" class="text-center p-5">
      <h1 class="fw-bold display-4 pb-3">Schedule</h1>

      <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-4 g-4 justify-content-center">

        <div class="col">
          <div class="p-4 border rounded shadow-sm h-100">
            <i class="bi bi-book text-danger fs-1"></i>
            <h5 class="mt-3">Membaca</h5>
            <p>Menambah wawasan setiap pagi sebelum beraktivitas.</p>
          </div>
        </div>

        <div class="col">
          <div class="p-4 border rounded shadow-sm h-100">
            <i class="bi bi-laptop text-danger fs-1"></i>
            <h5 class="mt-3">Menulis</h5>
            <p>Mencatat setiap pengalaman harian di jurnal pribadi.</p>
          </div>
        </div>

        <div class="col">
          <div class="p-4 border rounded shadow-sm h-100">
            <i class="bi bi-people text-danger fs-1"></i>
            <h5 class="mt-3">Diskusi</h5>
            <p>Bertukar ide dengan teman dalam kelompok belajar.</p>
          </div>
        </div>

      </div>
    </section>
    <!-- SCHEDULE END -->

    <!-- ABOUT ME START -->
    <section id="aboutme" class="bg-secondary-subtle text-center p-5">
      <h1 class="fw-bold display-4 pb-3">About Me</h1>

      <div class="accordion" id="accordionExample">

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button
              class="accordion-button"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseOne"
            >
              Universitas Dian Nuswantoro Semarang (2024-Now)
            </button>
          </h2>

          <div
            id="collapseOne"
            class="accordion-collapse collapse show"
            data-bs-parent="#accordionExample"
          >
            <div class="accordion-body">
              <strong>This is the first item’s accordion body. It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It’s also worth noting that just about any HTML can go within the .accordion-body, though the transition does limit overflow..</strong>
            </div>
          </div>

        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseTwo"
            >
              SMK Negeri 1 Pringapus (2021–2023)
            </button>
          </h2>

          <div
            id="collapseTwo"
            class="accordion-collapse collapse"
            data-bs-parent="#accordionExample"
          >
            <div class="accordion-body">
              <strong>This is the first item’s accordion body. It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It’s also worth noting that just about any HTML can go within the .accordion-body, though the transition does limit overflow.</strong>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- ABOUT ME END -->

    <!-- FOOTER START -->
    <footer class="text-center p-5">
      <div>
        <i class="h2 bi bi-instagram p-2"></i>
        <i class="h2 bi bi-twitter p-2"></i>
        <i class="h2 bi bi-whatsapp p-2"></i>
      </div>
      <div><p>Jofan Uzlah Firdaus &copy; 2024</p></div>
    </footer>
    <!-- FOOTER END -->
    <button
      id="backToTop"
      class="btn btn-danger rounded-circle position-fixed bottom-0 end-0 m-3"
    >
      <i class="bi bi-arrow-up" title="Back to Top"></i>
    </button>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <script type="text/javascript">
      function tampilwaktu() {
     var waktu = new Date();
  
     var tanggal = waktu.getDate();
     var bulan = waktu.getMonth();
     var tahun = waktu.getFullYear();
     var jam = waktu.getHours();
     var menit = waktu.getMinutes();
     var detik = waktu.getSeconds();

     var arrBulan = ["1", "2", "3", "4","5","6","7","8","9","10","11","12"];

    var tanggal_full = tanggal + "/" + arrBulan[bulan] + "/" + tahun;
    var jam_full = jam + ":" + menit + ":" + detik; 

    document.getElementById("tanggal").innerHTML = tanggal_full;
    document.getElementById("jam").innerHTML = jam_full;
    }

    setInterval(tampilwaktu, 1000);
    </script>

    <script>
  const toggle = document.getElementById("toggle-dark");

  toggle.addEventListener("click", function () {
    document.body.classList.toggle("dark");
  });
</script>
<script type="text/javascript"> 
  const backToTop = document.getElementById("backToTop");

  			window.addEventListener("scroll", function () {
        				if (window.scrollY > 300) {
          backToTop.classList.remove("d-none");
          backToTop.classList.add("d-block");
        } else {
          backToTop.classList.remove("d-block");
          backToTop.classList.add("d-none");
        }
      });

  backToTop.addEventListener("click", function () {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
</script>
  </body>
</html>
