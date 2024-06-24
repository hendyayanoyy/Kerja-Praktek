<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!--====== Icon ======-->
  <link rel="icon" href="assets/img/smp/logo.png" type="image/png">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">


  <title>SMP | MBIS</title>

  <!-- Icon -->
  <link rel="stylesheet" type="text/css" href="assets/css/LineIcons.2.0.css">
  <!-- Animate -->
  <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
  <!-- Tiny Slider  -->
  <link rel="stylesheet" type="text/css" href="assets/css/tiny-slider.css">
  <!-- Tailwind css -->
  <link rel="stylesheet" type="text/css" href="assets/css/tailwind.css">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      overflow-x: hidden;
    }

    @media (max-width: 768px) {
      .flex-col.md\:flex-row {
        flex-direction: column;
      }

      #home h1 {
        font-size: 3rem;
        /* Ukuran font untuk tablet dan desktop */
      }
    }

    /* Untuk perangkat yang lebih besar */

    @media (min-width: 1024px) {
      #home h1 {
        font-size: 4rem;
        /* Ukuran font untuk desktop */
      }
    }

    /* Untuk perangkat yang lebih kecil */
    @media (max-width: 767px) {
      #home h1 {
        font-size: 2rem;
        /* Ukuran font untuk ponsel */
      }
    }

    .navbar {
      color: black;
    }

    .navbar .navbar-nav .nav-item .page-scroll {
      color: black;
      font-weight: bold;
      text-shadow: 1px -1px 2px rgba(255, 255, 255, 1);
      transition: color 0.3s;
    }

    .carousel-area {
      overflow: hidden;
    }

    .carousel-item {
      position: relative;
      width: calc(100% - 20px);
      /* Mengurangi lebar dengan total margin */
      height: 500px;
      /* Atur tinggi sesuai kebutuhan Anda */
      margin: 0 10px;
      /* Menambahkan margin kiri dan kanan */
    }

    .carousel-img {
      position: absolute;
      top: 50%;
      left: 50%;
      width: 100%;
      height: 100%;
      object-fit: cover;
      /* Menjaga rasio aspek gambar */
      transform: translate(-50%, -50%);
    }

    .button-staff {
      padding-top: 20px;
    }
  </style>
</head>

<body>

  <!-- Header Area wrapper Starts -->
  <header id="header-wrap" class="relative">
    <!-- Navbar Start -->
    <div class="navigation fixed top-0 left-0 w-full z-30 duration-300">
      <div class="container">
        <nav class="navbar bold py-2 navbar-expand-lg flex justify-between items-center relative duration-300">
          <a class="navbar-brand" href="index.html">
            <img src="assets/img/smp/logo.png" alt="Logo">
          </a>
          <button class="navbar-toggler focus:outline-none block lg:hidden" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggler-icon"></span>
            <span class="toggler-icon"></span>
            <span class="toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse hidden lg:block duration-300 shadow absolute top-100 left-0 mt-full bg-white z-20 px-5 py-3 w-full lg:static lg:bg-transparent lg:shadow-none" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto justify-center items-center lg:flex text-white">
              <li class="nav-item">
                <a class="page-scroll active" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="page-scroll" href="#services">Fasilities</a>
              </li>
              <li class="nav-item">
                <a class="page-scroll" href="#feature">About</a>
              </li>
              <li class="nav-item">
                <a class="page-scroll" href="#team">Teacher & Staff</a>
              </li>
              <li class="nav-item">
                <a class="page-scroll" href="#partner">Partnership</a>
              </li>
              <li class="nav-item">
                <a class="page-scroll" href="#Gallery">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="page-scroll" href="#contact">Contact</a>
              </li>

            </ul>
            <hr class="my-4 border-t border-black w-full block lg:hidden">

          </div>
        </nav>
      </div>
    </div>
  </header>
  <!-- Header Area wrapper End -->


  <!-- Hero -->
  <section id="home">
    <!-- Jumbotron -->
    <div class="relative overflow-hidden bg-cover bg-no-repeat" style="background-position: 50%; background-image: url('assets/img/smp/1-2.png'); height: 500px;">
      <div class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsla(0,0%,0%,0.75)] bg-fixed">
        <div class="container">
          <div class="row align-items-center justify-content-center" style="height: 100%;">
            <div class="pt-48 md:pb-48 col-md-8 text-center text-white">
              <h1 class="mt-2 mb-4 mb-md-5 text-5xl md:text-sm xl:text-xl font-bold">
                Selamat Datang Di <br><span>SMP Mitra Bintaro Islamic School</span>
              </h1>
              <div class="max-w-xs mx-auto mb-4 mb-md-5">
                <a class="btn btn-primary btn-lg" href="../ppdb.php">PPDB</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  <!-- Hero Area End -->





  <!-- Fasilities Section Start -->
  <section id="services" class="py-24">
    <div class="container">
      <div class="text-center">
        <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">Fasilities</h2>
      </div>
      <div class="flex flex-wrap">
        <!-- Services item -->
        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
          <div class="m-4 wow fadeInRight border border-gray-300 shadow-md rounded-lg" data-wow-delay="0.3s">
            <div class="icon text-5xl">
              <img src="assets/img/smp/5.jpeg" alt="">
            </div>
            <div>
              <h3 class="service-title">Lapangan</h3>
              <p class="text-gray-600">Lapangan kami tidak hanya menjadi pusat kegiatan olahraga, tetapi juga tempat
                yang menyenangkan untuk bersantai dan bermain bersama teman-teman di waktu luang.</p>
            </div>
          </div>
        </div>
        <!-- Services item -->
        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
          <div class="m-4 wow fadeInRight border border-gray-300 shadow-md rounded-lg" data-wow-delay="0.6s">
            <div class="icon text-5xl">
              <img src="assets/img/smp/4.jpeg" alt="">
            </div>
            <div>
              <h3 class="service-title">Musholah</h3>
              <p class="text-gray-600">Musholah kami adalah tempat untuk beribadah dan merenung, memberikan ruang yang
                tenang bagi siswa dan staf untuk berdoa dan berhubungan dengan Tuhan.</p>
            </div>
          </div>
        </div>
        <!-- Services item -->
        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
          <div class="m-4 wow fadeInRight border border-gray-300 shadow-md rounded-lg" data-wow-delay="0.9s">
            <div class="icon text-5xl">
              <img src="assets/img/smp/3.jpeg" alt="">
            </div>
            <div>
              <h3 class="service-title">Kelas</h3>
              <p class="text-gray-600">Kelas-kelas kami dirancang untuk menciptakan lingkungan belajar yang nyaman,
                inspiratif, dan interaktif bagi siswa/siswi.</p>
            </div>
          </div>
        </div>
        <!-- Services item -->
        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
          <div class="m-4 wow fadeInRight border border-gray-300 shadow-md rounded-lg" data-wow-delay="1.2s">
            <div class="icon text-5xl">
              <img src="assets/img/smp/2.jpeg" alt="">
            </div>
            <div>
              <h3 class="service-title">Kantin</h3>
              <p class="text-gray-600">Kantin kami tidak hanya menyajikan makanan dan minuman enak, tetapi juga
                merupakan tempat yang nyaman untuk berkumpul dan berinteraksi setelah jam belajar.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Fasilities Section End -->


  <!-- About Section Start -->
  <div id="feature" class="bg-blue-100 py-24">
    <div class="container">
      <div class="flex flex-wrap items-center justify-between">
        <!-- Image -->
        <div class="w-full lg:w-1/2">
          <div class="mb-5 lg:mb-0">
            <div class="mx-3 lg:mr-0 lg:ml-3 wow fadeInRight" data-wow-delay="0.3s">
              <img src="assets/img/smp/Image1.png" alt="" class="w-full h-auto">
            </div>
          </div>
        </div>
        <!-- Vision and Mission -->
        <div class="w-full lg:w-1/2">
          <div class="mb-5 lg:mb-0">
            <div class="flex flex-wrap pl-10">
              <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">Tentang Kami</h2>
              <div class="flex flex-col md:flex-row w-full gap-8 md:gap-12">
                <!-- Vision -->
                <div class="md:w-1/2">
                  <div class="mt-5 px-8 py-12">
                    <h2 class="text-center text-md md:text-2xl lg:text-2xl font-bold mb-2">Visi</h2>
                    <ul class="text-sm md:text-lg lg:text-lg font-normal list-decimal text-justify text-gray-600">
                      <li><span class="inline-block mr-2">&#8226;</span> Menjadi insan yang sholeh, cerdas, kreatif dan berkarakter.</li>
                    </ul>
                  </div>
                </div>
                <!-- Mission -->
                <div class="md:w-1/2">
                  <div class="mt-5 px-8 py-12">
                    <h2 class="text-center text-md md:text-2xl lg:text-2xl font-bold mb-2">Misi</h2>
                    <ul class="text-sm md:text-lg lg:text-lg font-normal list-decimal text-justify text-gray-600 mx-auto">
                      <li><span class="inline-block mr-2">&#8226;</span> Meningkatkan kualitas keimanan dan ketakwaan.</li>
                      <li><span class="inline-block mr-2">&#8226;</span> Mengembangkan sikap sopan, santun, peduli, saling menghargai, dan anti kekerasan.</li>
                      <li><span class="inline-block mr-2">&#8226;</span> Meningkatkan karakter jujur, disiplin, percaya diri, dan bertanggung jawab.</li>
                      <li><span class="inline-block mr-2">&#8226;</span> Melaksanakan pembelajaran aktif, inovatif, kreatif, efektif, dan menyenangkan.</li>
                      <li><span class="inline-block mr-2">&#8226;</span> Menciptakan lingkungan sekolah yang nyaman, aman, bersih, dan asri.</li>
                      <li><span class="inline-block mr-2">&#8226;</span> Mengembangkan cara berpikir logis dan kritis.</li>
                      <li><span class="inline-block mr-2">&#8226;</span> Meningkatkan mutu tenaga pendidik dan manajemen sekolah.</li>
                      <li><span class="inline-block mr-2">&#8226;</span> Mengembangkan sarana dan prasarana pendidikan.</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
  <!-- About Section End -->





  <!-- Staff & Guru Section Start -->
  <section id="team" class="py-24 text-center">
    <div class="container">
      <div class="text-center">
        <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">Staff & Guru</h2>
      </div>
      <div class="flex flex-wrap justify-center">
        <!-- Team Item Starts -->
        <div class="max-w-sm sm:w-1/2 md:w-1/2 lg:w-1/3">
          <div class="team-item">
            <div class="team-img relative">
              <img class="img-fluid" src="assets/img/smp/staff/tata-usaha1.jpg" alt="">
              <div class="team-overlay">
                <ul class="flex justify-center">
                  <li class="mx-1">
                    <a href="#" class="social-link hover:bg-indigo-500">
                      <i class="lni lni-facebook-original" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="mx-1">
                    <a href="#" class="social-link hover:bg-blue-400">
                      <i class="lni lni-twitter-original" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="mx-1">
                    <a href="#" class="social-link hover:bg-red-500">
                      <i class="lni lni-instagram-original" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="text-center px-5 py-3">
              <h3 class="team-name">Putri Febriani</h3>
              <p>Administrai & Tata Usaha</p>
            </div>
          </div>
        </div>
        <!-- Team Item Ends -->
        <!-- Team Item Starts -->
        <div class="max-w-sm sm:w-1/2 md:w-1/2 lg:w-1/3">
          <div class="team-item">
            <div class="team-img relative">
              <img class="img-fluid" src="assets/img/smp/staff/kesiswaan.jpeg" alt="">
              <div class="team-overlay">
                <ul class="flex justify-center">
                  <li class="mx-1">
                    <a href="#" class="social-link hover:bg-indigo-500">
                      <i class="lni lni-facebook-original" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="mx-1">
                    <a href="#" class="social-link hover:bg-blue-400">
                      <i class="lni lni-twitter-original" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="mx-1">
                    <a href="#" class="social-link hover:bg-red-500">
                      <i class="lni lni-instagram-original" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="text-center px-5 py-3">
              <h3 class="team-name">Dyah Apradita</h3>
              <p>Waka Kesiswaan</p>
            </div>
          </div>
        </div>
        <!-- Team Item Ends -->

        <!-- Team Item Starts -->
        <div class="max-w-sm sm:w-1/2 md:w-1/2 lg:w-1/3">
          <div class="team-item">
            <div class="team-img relative">
              <img class="img-fluid" src="assets/img/smp/staff/kurikulum2.jpeg" alt="">
              <div class="team-overlay">
                <ul class="flex justify-center">
                  <li class="mx-1">
                    <a href="#" class="social-link hover:bg-indigo-500">
                      <i class="lni lni-facebook-original" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="mx-1">
                    <a href="#" class="social-link hover:bg-blue-400">
                      <i class="lni lni-twitter-original" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="mx-1">
                    <a href="#" class="social-link hover:bg-red-500">
                      <i class="lni lni-instagram-original" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="text-center px-5 py-3">
              <h3 class="team-name">Yulia Dewanti</h3>
              <p>Waka Kurikulum</p>
            </div>
          </div>
        </div>
        <!-- Team Item Ends -->
        <div class="button-staff mt-12">
          <a href="teacher_page.php" class="btn btn-primary">Lihat Semua</a>
        </div>
      </div>
    </div>
  </section>
  <!-- Team Section End -->

  <!-- partner Section Start -->
  <div id="partner" class="py-32 bg-blue-100">
    <div class="container">
      <div class="text-center">
        <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">Partnership</h2>
      </div>
      <div class="flex flex-wrap justify-center">
        <div class="w-1/2 md:w-1/4 lg:w-1/4">
          <div class="m-3 wow fadeInUp" data-wow-delay="0.3s">
            <img class="client-logo" src="assets/img/smp/partner/telkomsel.png" alt="">
          </div>
        </div>
        <div class="w-1/2 md:w-1/4 lg:w-1/4">
          <div class="m-3 wow fadeInUp" data-wow-delay="0.6s">
            <img class="client-logo" src="assets/img/smp/partner/yakult.png" alt="">
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- Partner Section End -->

  <!-- Testimonial Section Start -->
  <section id="testimonial" class="py-24 bg-gray-800">
    <div class="container">
      <div class="flex justify-center mx-3">
        <div class="w-full lg:w-7/12">
          <div id="testimonials" class="testimonials">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Testimonial Section End -->


  <section id="Gallery" class="carousel-area bg-gray-800 py-24">
    <div class="container">
      <div class="text-center">
        <h2 class="mb-12 text-white section-heading wow fadeInDown" data-wow-delay="0.3s">Gallery</h2>
      </div>
      <div class="row justify-content-center">
        <div class="col-12 col-md-14">
          <div class="portfolio-carousel">
            <div class="carousel-item">
              <img class="carousel-img" src="assets/img/smp/gallery/gallery1.jpeg" alt="">
            </div>
            <div class="carousel-item">
              <img class="carousel-img" src="assets/img/smp/gallery/gallery2.jpeg" alt="">
            </div>
            <div class="carousel-item">
              <img class="carousel-img" src="assets/img/smp/gallery/gallery3.jpeg" alt="">
            </div>
            <div class="carousel-item">
              <img class="carousel-img" src="assets/img/smp/gallery/gallery4.jpeg" alt="">
            </div>
            <div class="carousel-item">
              <img class="carousel-img" src="assets/img/smp/gallery/gallery5.jpeg" alt="">
            </div>
            <div class="carousel-item">
              <img class="carousel-img" src="assets/img/smp/gallery/gallery6.jpeg" alt="">
            </div>
            <div class="carousel-item">
              <img class="carousel-img" src="assets/img/smp/gallery/gallery7.jpeg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




  <!-- Contact Section Start -->
  <section id="contact" class="py-24 bg-blue-100">
    <div class="container">
      <div class="text-center">
        <h2 class="mb-12 text-4xl text-gray-700 font-bold tracking-wide wow fadeInDown" data-wow-delay="0.3s">Contact
        </h2>
      </div>
      <div class="flex flex-wrap contact-form-area wow fadeInUp" data-wow-delay="0.4s">
        <div class="w-full md:w-1/2">
          <div class="contact">
            <h2 class="uppercase font-bold text-xl text-gray-700 mb-5 ml-3">Contact Form</h2>
            <form id="contactForm" action="assets/contact.php">
              <div class="flex flex-wrap">
                <div class="w-full sm:w-1/2 md:w-full lg:w-1/2">
                  <div class="mx-3">
                    <input type="text" class="form-input rounded-full" id="name" name="name" placeholder="Name" required data-error="Please enter your name">
                  </div>
                </div>
                <div class="w-full sm:w-1/2 md:w-full lg:w-1/2">
                  <div class="mx-3">
                    <input type="text" placeholder="Email" id="email" class="form-input rounded-full" name="email" required data-error="Please enter your email">
                  </div>
                </div>
                <div class="w-full">
                  <div class="mx-3">
                    <input type="text" placeholder="Subject" id="subject" name="subject" class="form-input rounded-full" required data-error="Please enter your subject">
                  </div>
                </div>
                <div class="w-full">
                  <div class="mx-3">
                    <textarea class="form-input rounded-lg" id="message" name="message" placeholder="Your Message" rows="5" data-error="Write your message" required></textarea>
                  </div>
                </div>
                <div class="w-full">
                  <div class="submit-button mx-3">
                    <button class="btn" id="form-submit" type="submit">Send Message</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- get in touch -->
        <div class="w-full md:w-1/2">
          <div class="ml-3 md:ml-12 wow fadeIn">
            <h2 class="uppercase font-bold text-xl text-gray-700 mb-5">Get In Touch</h2>
            <div>
              <div class="flex flex-wrap mb-6 items-center text-gray-600">
                <div class="contact-icon">
                  <i class="lni lni-map-marker"></i>
                </div>
                <a href="https://maps.app.goo.gl/T86f6UEcvfqynnFH7" target="_blank" rel="noopener noreferrer" class="pl-3">
                  Jurang Mangu Barat, Kec. Pd. Aren,<br>Kota Tangerang Selatan, Banten
                </a>
              </div>
              <div class="flex flex-wrap mb-6 items-center">
                <div class="contact-icon">
                  <i class="lni lni-envelope"></i>
                </div>
                <p class="pl-3">
                  <a href="#" class="block">mitrabintaroislamicschool@gmail.com</a>
                  <a href="#" class="block">putrifebriani65@gmail.com</a>
                </p>
              </div>
              <div class="flex flex-wrap mb-6 items-center">
                <div class="contact-icon">
                  <i class="lni lni-phone-set"></i>
                </div>
                <p class="pl-3">
                  <a href="#" class="block">+62 8216 9462 242</a>
                  <a href="#" class="block">+62 8951 3606 272</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact Section End -->

  <!-- Map Section Start -->
  <section id="google-map-area">
    <div class="mx-6 mb-6">
      <div class="flex">
        <div class="w-full">
          <object style="border:0; height: 450px; width: 100%;" data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.075434923931!2d106.71720027402564!3d-6.253791861228607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fa79a7d86fe5%3A0xe3c555152ff6dcce!2sSMP%20MITRA%20BINTARO%20ISLAMIC%20SCHOOL!5e0!3m2!1sid!2sid!4v1714965450378!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>"></object>
        </div>
      </div>
    </div>
  </section>
  <!-- Map Section End -->

  <!-- Footer Section Start -->
  <footer id="footer" class="bg-gray-800 py-16">
    <div class="container">
      <div class="flex flex-wrap">
        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 wow fadeInUp" data-wow-delay="0.2s">
          <div class="mx-3 mb-8">
            <div class="footer-logo">
              <img src="../image/logo.png" alt="SMP Mitra Bintaro Islamic School" style="width: 100px; height: auto;">
            </div>
            <p class="text-gray-300">SMP Mitra Bintaro Islamic School berkomitmen untuk memberikan pendidikan terbaik dengan nilai-nilai Islam.</p>
          </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 wow fadeInUp" data-wow-delay="0.4s">
          <div class="mx-3 mb-8">
            <h3 class="font-bold text-xl text-white mb-5">Sekolah</h3>
            <ul>
              <li><a href="#" class="footer-links">Tentang Kami</a></li>
              <li><a href="#" class="footer-links">Visi dan Misi</a></li>
              <li><a href="#" class="footer-links">Kurikulum</a></li>
            </ul>
          </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 wow fadeInUp" data-wow-delay="0.6s">
          <div class="mx-3 mb-8">
            <h3 class="font-bold text-xl text-white mb-5">Informasi</h3>
            <ul>
              <li><a href="#" class="footer-links">Berita & Acara</a></li>
              <li><a href="#" class="footer-links">Pendaftaran</a></li>
              <li><a href="#" class="footer-links">Hubungi Kami</a></li>
            </ul>
          </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 wow fadeInUp" data-wow-delay="0.8s">
          <div class="mx-3 mb-8">
            <h3 class="font-bold text-xl text-white mb-5">Temukan Kami</h3>

            <ul class="social-icons flex justify-start">
              <li class="mx-2">
                <a href="#" class="footer-icon hover:bg-indigo-500">
                  <i class="lni lni-facebook-original" aria-hidden="true"></i>
                </a>
              </li>
              <li class="mx-2">
                <a href="#" class="footer-icon hover:bg-blue-400">
                  <i class="lni lni-twitter-original" aria-hidden="true"></i>
                </a>
              </li>
              <li class="mx-2">
                <a href="#" class="footer-icon hover:bg-red-500">
                  <i class="lni lni-instagram-original" aria-hidden="true"></i>
                </a>
              </li>
              <li class="mx-2">
                <a href="#" class="footer-icon hover:bg-indigo-600">
                  <i class="lni lni-linkedin-original" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Footer Section End -->

  <section class="bg-gray-800 py-6 border-t-2 border-gray-700 border-dotted">
    <div class="container">
      <div class="flex flex-wrap">
        <div class="w-full text-center">
          <p class="text-white">Designed and Developed by <a class="text-white duration-300 hover:text-blue-600" href="https://tailwindtemplates.co" rel="nofollow">Hendi Saputra</a> and <a class="text-white duration-300 hover:text-blue-600" href="https://uideck.com" rel="nofollow">Farel Sasi Kirana</a>
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Go to Top Link -->
  <a href="#" class="back-to-top w-10 h-10 fixed bottom-0 right-0 mb-5 mr-5 flex items-center justify-center rounded-full bg-blue-600 text-white text-lg z-20 duration-300 hover:bg-blue-400">
    <i class="lni lni-arrow-up"></i>
  </a>

  <!-- Preloader -->
  <!--     <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div> -->
  <!-- End Preloader -->

  <!-- All js Here -->
  <script src="assets/js/wow.js"></script>
  <script src="assets/js/tiny-slider.js"></script>
  <script src="assets/js/contact-form.js"></script>
  <script src="assets/js/main.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var navbar = document.querySelector('.navbar');
      window.addEventListener('scroll', function() {
        if (window.scrollY > 0) {
          navbar.classList.add('scrolled');
        } else {
          navbar.classList.remove('scrolled');
        }
      });
    });
  </script>

</body>

</html>