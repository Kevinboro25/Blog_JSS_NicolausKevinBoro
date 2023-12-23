    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Blog JSS</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="assets/img/favicon-pemkot.png" rel="icon">
        <link href="assets/img/logo-pemkot.png" rel="logo-pemkot-icon">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">

        <!-- Template Main CSS Files -->
        <link href="assets/css/variables.css" rel="stylesheet">
        <link href="assets/css/main.css" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/variables.css') }}">

    </head>

    <body>

        <!-- ======= Header ======= -->
        <header id="header" class="header d-flex align-items-center fixed-top">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

                <a href="index.html" class="logo d-flex align-items-center">
                    <img src="assets/img/logo-pemkot.png" alt="">
                    <h1>Blog JSS</h1>
                </a>

                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a href="/">Beranda</a></li>
                        <li><a href="TerpopulerPage">Terpopuler</a></li>
                        <li class="dropdown"><a href="category.html"><span>Kategori</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li><a href="#">Info Terkini</a></li>
                                <li class="dropdown"><a href="#"><span>Layanan JSS</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                                    <ul>
                                        <li><a href="#">Pendidikan</a></li>
                                        <li><a href="#">Portal Berita</a></li>
                                        <li><a href="#">Lingkungan</a></li>
                                        <li><a href="#">Informasi Publik</a></li>
                                        <li><a href="#">Kementrian Agama</a></li>
                                        <li><a href="#">Layanan JSS lainnya</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Berita Utama</a></li>
                                <li><a href="#">Berita Wilayah</a></li>
                                <li><a href="#">Hotspot Jogja</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">Tentang</a></li>
                        <li><a href="contact.html">Kontak</a></li>
                    </ul>
                </nav><!-- .navbar -->

                <div class="position-relative">
                    <a href="LoginPage" target="_blank" class="mx-2"><span class="bi-person-circle"> Login Admin</span></a>
                    <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
                    <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
                    <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

                    <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
                    <i class="bi bi-list mobile-nav-toggle"></i>

                    <!-- ======= Search Form ======= -->
                    <div class="search-form-wrap js-search-form-wrap">
                        <form action="search-result.html" class="search-form">
                            <span class="icon bi-search"></span>
                            <input type="text" placeholder="Search" class="form-control">
                            <button class="btn js-search-close"><span class="bi-x"></span></button>
                        </form>
                    </div><!-- End Search Form -->

                </div>

            </div>

        </header><!-- End Header -->

        <main id="main">

            <!-- ======= Hero Slider Section ======= -->
            <section id="hero-slider" class="hero-slider">
                <div class="container-md" data-aos="fade-in">
                    <div class="row">
                        <div class="col-12">
                            <div class="swiper sliderFeaturedPosts">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-1.jpg');">
                                            <div class="img-bg-inner">
                                                <h2>The Best Homemade Masks for Face (keep the Pimples Away)</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="swiper-slide">
                                        <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-2.jpg');">
                                            <div class="img-bg-inner">
                                                <h2>17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="swiper-slide">
                                        <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-3.jpg');">
                                            <div class="img-bg-inner">
                                                <h2>Pengelolaan Sampah di Kota Jogja</h2>
                                                <p>Kegiatan ini dikelola dan diawasi oleh dinas lingkungan kota Jogja</p>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="swiper-slide">
                                        <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-4.jpg');">
                                            <div class="img-bg-inner">
                                                <h2>9 Half-up/half-down Hairstyles for Long and Medium Hair</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="custom-swiper-button-next">
                                    <span class="bi-chevron-right"></span>
                                </div>
                                <div class="custom-swiper-button-prev">
                                    <span class="bi-chevron-left"></span>
                                </div>

                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End Hero Slider Section -->

            <!-- ======= Post Grid Section ======= -->
            <section id="posts" class="posts">
                <div class="container" data-aos="fade-up">
                    <div class="row g-5">
                        <div class="col-lg-4">
                            <div class="post-entry-1 lg">
                                <a href="single-post.html"><img src="assets/img/post-landscape-1.jpg" alt="" class="img-fluid"></a>
                                <div class="post-meta"><span class="date">Smart Service</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2><a href="single-post.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                                <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus repudiandae, inventore pariatur numquam cumque possimus exercitationem? Nihil tempore odit ab minus eveniet praesentium, similique blanditiis molestiae ut saepe perspiciatis officia nemo, eos quae cumque. Accusamus fugiat architecto rerum animi atque eveniet, quo, praesentium dignissimos</p>

                                <div class="d-flex align-items-center author">
                                    <div class="photo"><img src="assets/img/person-1.jpg" alt="" class="img-fluid"></div>
                                    <div class="name">
                                        <h3 class="m-0 p-0">Cameron Williamson</h3>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-8">
                            <div class="row g-5">
                                <div class="col-lg-4 border-start custom-border">
                                    <div class="post-entry-1">
                                        <a href="single-post.html"><img src="assets/img/post-landscape-2.jpg" alt="" class="img-fluid"></a>
                                        <div class="post-meta"><span class="date">Sport</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2><a href="single-post.html">Let’s Get Back to Work, New York</a></h2>
                                    </div>
                                    <div class="post-entry-1">
                                        <a href="single-post.html"><img src="assets/img/post-landscape-5.jpg" alt="" class="img-fluid"></a>
                                        <div class="post-meta"><span class="date">Food</span> <span class="mx-1">&bullet;</span> <span>Jul 17th '22</span></div>
                                        <h2><a href="single-post.html">How to Avoid Distraction and Stay Focused During Video Calls?</a></h2>
                                    </div>
                                    <div class="post-entry-1">
                                        <a href="single-post.html"><img src="assets/img/post-landscape-7.jpg" alt="" class="img-fluid"></a>
                                        <div class="post-meta"><span class="date">Design</span> <span class="mx-1">&bullet;</span> <span>Mar 15th '22</span></div>
                                        <h2><a href="single-post.html">Why Craigslist Tampa Is One of The Most Interesting Places On the Web?</a></h2>
                                    </div>
                                </div>
                                <div class="col-lg-4 border-start custom-border">
                                    <div class="post-entry-1">
                                        <a href="single-post.html"><img src="assets/img/post-landscape-3.jpg" alt="" class="img-fluid"></a>
                                        <div class="post-meta"><span class="date">Berita Utama</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2><a href="single-post.html">6 Easy Steps To Create Your Own Cute Merch For Instagram</a></h2>
                                    </div>
                                    <div class="post-entry-1">
                                        <a href="single-post.html"><img src="assets/img/post-landscape-6.jpg" alt="" class="img-fluid"></a>
                                        <div class="post-meta"><span class="date">Tech</span> <span class="mx-1">&bullet;</span> <span>Mar 1st '22</span></div>
                                        <h2><a href="single-post.html">10 Life-Changing Hacks Every Working Mom Should Know</a></h2>
                                    </div>
                                    <div class="post-entry-1">
                                        <a href="single-post.html"><img src="assets/img/post-landscape-8.jpg" alt="" class="img-fluid"></a>
                                        <div class="post-meta"><span class="date">Travel</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2><a href="single-post.html">5 Great Startup Tips for Female Founders</a></h2>
                                    </div>
                                </div>

                                <!-- Trending Section -->
                                <div class="col-lg-4">

                                    <div class="trending">
                                        <h3>Terpopuler</h3>
                                        <ul class="trending-post">
                                            <li>
                                                <a href="single-post.html">
                                                    <span class="number">1</span>
                                                    <h3>The Best Homemade Masks for Face (keep the Pimples Away)</h3>
                                                    <span class="author">Jane Cooper</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="single-post.html">
                                                    <span class="number">2</span>
                                                    <h3>17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</h3>
                                                    <span class="author">Wade Warren</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="single-post.html">
                                                    <span class="number">3</span>
                                                    <h3>Pengelolaan Sampah di Kota Jogja</h3>
                                                    <span class="author">Esther Howard</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="single-post.html">
                                                    <span class="number">4</span>
                                                    <h3>9 Half-up/half-down Hairstyles for Long and Medium Hair</h3>
                                                    <span class="author">Cameron Williamson</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="single-post.html">
                                                    <span class="number">5</span>
                                                    <h3>Life Insurance And Pregnancy: A Working Mom’s Guide</h3>
                                                    <span class="author">Jenny Wilson</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div> <!-- End Trending Section -->
                            </div>
                        </div>

                    </div> <!-- End .row -->
                </div>
            </section> <!-- End Post Grid Section -->

            <!-- ======= Smart Service Category Section ======= -->
            <section class="category-section">
                <div class="container" data-aos="fade-up">

                    <div class="section-header d-flex justify-content-between align-items-center mb-5">
                        <h2>Smart Service</h2>
                        <div><a href="category.html" class="more">Lihat Semua Layanan</a></div>
                    </div>

                    <div class="row">
                        <div class="col-md-9">

                            <div class="d-lg-flex post-entry-2">
                                <a href="single-post.html" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                                    <img src="assets/img/post-landscape-6.jpg" alt="" class="img-fluid">
                                </a>
                                <div>
                                    <div class="post-meta"><span class="date">Smart Service</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h3><a href="single-post.html">What is the son of Football Coach John Gruden, Deuce Gruden doing Now?</a></h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas, nobis error deserunt aliquam temporibus sapiente, laudantium dolorum itaque libero eos deleniti?</p>
                                    <div class="d-flex align-items-center author">
                                        <div class="photo"><img src="assets/img/person-2.jpg" alt="" class="img-fluid"></div>
                                        <div class="name">
                                            <h3 class="m-0 p-0">Wade Warren</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="post-entry-1 border-bottom">
                                        <a href="single-post.html"><img src="assets/img/post-landscape-1.jpg" alt="" class="img-fluid"></a>
                                        <div class="post-meta"><span class="date">Smart Service</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="single-post.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                        <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus repudiandae, inventore pariatur numquam cumque possimus</p>
                                    </div>

                                    <div class="post-entry-1">
                                        <div class="post-meta"><span class="date">Smart Service</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="single-post.html">5 Great Startup Tips for Female Founders</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="post-entry-1">
                                        <a href="single-post.html"><img src="assets/img/post-landscape-2.jpg" alt="" class="img-fluid"></a>
                                        <div class="post-meta"><span class="date">Smart Service</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="single-post.html">How to Avoid Distraction and Stay Focused During Video Calls?</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                        <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus repudiandae, inventore pariatur numquam cumque possimus</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Smart Service</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="single-post.html">How to Avoid Distraction and Stay Focused During Video Calls?</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Smart Service</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="single-post.html">17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Smart Service</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="single-post.html">9 Half-up/half-down Hairstyles for Long and Medium Hair</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Smart Service</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="single-post.html">Life Insurance And Pregnancy: A Working Mom’s Guide</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Smart Service</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="single-post.html">The Best Homemade Masks for Face (keep the Pimples Away)</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Smart Service</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="single-post.html">10 Life-Changing Hacks Every Working Mom Should Know</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End Smart Service Category Section -->

            <!-- ======= Berita Utama Category Section ======= -->
            <section class="category-section">
                <div class="container" data-aos="fade-up">

                    <div class="section-header d-flex justify-content-between align-items-center mb-5">
                        <h2>Berita Utama</h2>
                        <div><a href="category.html" class="more">Lihat Semua Berita Utama</a></div>
                    </div>

                    <div class="row">
                        <div class="col-md-9 order-md-2">

                            <div class="d-lg-flex post-entry-2">
                                <a href="single-post.html" class="me-4 thumbnail d-inline-block mb-4 mb-lg-0">
                                    <img src="assets/img/post-landscape-3.jpg" alt="" class="img-fluid">
                                </a>
                                <div>
                                    <div class="post-meta"><span class="date">Berita Utama</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h3><a href="single-post.html">What is the son of Football Coach John Gruden, Deuce Gruden doing Now?</a></h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas, nobis error deserunt aliquam temporibus sapiente, laudantium dolorum itaque libero eos deleniti?</p>
                                    <div class="d-flex align-items-center author">
                                        <div class="photo"><img src="assets/img/person-4.jpg" alt="" class="img-fluid"></div>
                                        <div class="name">
                                            <h3 class="m-0 p-0">Wade Warren</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="post-entry-1 border-bottom">
                                        <a href="single-post.html"><img src="assets/img/post-landscape-5.jpg" alt="" class="img-fluid"></a>
                                        <div class="post-meta"><span class="date">Berita Utama</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="single-post.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                        <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus repudiandae, inventore pariatur numquam cumque possimus</p>
                                    </div>

                                    <div class="post-entry-1">
                                        <div class="post-meta"><span class="date">Berita Utama</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="single-post.html">5 Great Startup Tips for Female Founders</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="post-entry-1">
                                        <a href="single-post.html"><img src="assets/img/post-landscape-7.jpg" alt="" class="img-fluid"></a>
                                        <div class="post-meta"><span class="date">Berita Utama</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="single-post.html">How to Avoid Distraction and Stay Focused During Video Calls?</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                        <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus repudiandae, inventore pariatur numquam cumque possimus</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Berita Utama</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="single-post.html">How to Avoid Distraction and Stay Focused During Video Calls?</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Berita Utama</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="single-post.html">17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Berita Utama</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="single-post.html">9 Half-up/half-down Hairstyles for Long and Medium Hair</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Berita Utama</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="single-post.html">Life Insurance And Pregnancy: A Working Mom’s Guide</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Berita Utama</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="single-post.html">The Best Homemade Masks for Face (keep the Pimples Away)</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Berita Utama</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="single-post.html">10 Life-Changing Hacks Every Working Mom Should Know</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End Berita Utama Category Section -->

            <!-- ======= Berita Wilayah Category Section ======= -->
            <section class="category-section">
                <div class="container" data-aos="fade-up">

                    <div class="section-header d-flex justify-content-between align-items-center mb-5">
                        <h2>Berita Wilayah</h2>
                        <div><a href="category.html" class="more">Lihat Semua Berita Wilayah</a></div>
                    </div>

                    <div class="row g-5">
                        <div class="col-lg-4">
                            <div class="post-entry-1 lg">
                                <a href="single-post.html"><img src="assets/img/post-landscape-8.jpg" alt="" class="img-fluid"></a>
                                <div class="post-meta"><span class="date">Berita Wilayah</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2><a href="single-post.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                                <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus repudiandae, inventore pariatur numquam cumque possimus exercitationem? Nihil tempore odit ab minus eveniet praesentium, similique blanditiis molestiae ut saepe perspiciatis officia nemo, eos quae cumque. Accusamus fugiat architecto rerum animi atque eveniet, quo, praesentium dignissimos</p>

                                <div class="d-flex align-items-center author">
                                    <div class="photo"><img src="assets/img/person-7.jpg" alt="" class="img-fluid"></div>
                                    <div class="name">
                                        <h3 class="m-0 p-0">Esther Howard</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Berita Wilayah</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="single-post.html">The Best Homemade Masks for Face (keep the Pimples Away)</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-entry-1">
                                <div class="post-meta"><span class="date">Berita Wilayah</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="single-post.html">10 Life-Changing Hacks Every Working Mom Should Know</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                        </div>

                        <div class="col-lg-8">
                            <div class="row g-5">
                                <div class="col-lg-4 border-start custom-border">
                                    <div class="post-entry-1">
                                        <a href="single-post.html"><img src="assets/img/post-landscape-6.jpg" alt="" class="img-fluid"></a>
                                        <div class="post-meta"><span class="date">Berita Wilayah</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2><a href="single-post.html">Let’s Get Back to Work, New York</a></h2>
                                    </div>
                                    <div class="post-entry-1">
                                        <a href="single-post.html"><img src="assets/img/post-landscape-5.jpg" alt="" class="img-fluid"></a>
                                        <div class="post-meta"><span class="date">Berita Wilayah</span> <span class="mx-1">&bullet;</span> <span>Jul 17th '22</span></div>
                                        <h2><a href="single-post.html">How to Avoid Distraction and Stay Focused During Video Calls?</a></h2>
                                    </div>
                                    <div class="post-entry-1">
                                        <a href="single-post.html"><img src="assets/img/post-landscape-4.jpg" alt="" class="img-fluid"></a>
                                        <div class="post-meta"><span class="date">Berita Wilayah</span> <span class="mx-1">&bullet;</span> <span>Mar 15th '22</span></div>
                                        <h2><a href="single-post.html">Why Craigslist Tampa Is One of The Most Interesting Places On the Web?</a></h2>
                                    </div>
                                </div>
                                <div class="col-lg-4 border-start custom-border">
                                    <div class="post-entry-1">
                                        <a href="single-post.html"><img src="assets/img/post-landscape-3.jpg" alt="" class="img-fluid"></a>
                                        <div class="post-meta"><span class="date">Berita Wilayah</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2><a href="single-post.html">6 Easy Steps To Create Your Own Cute Merch For Instagram</a></h2>
                                    </div>
                                    <div class="post-entry-1">
                                        <a href="single-post.html"><img src="assets/img/post-landscape-2.jpg" alt="" class="img-fluid"></a>
                                        <div class="post-meta"><span class="date">Berita Wilayah</span> <span class="mx-1">&bullet;</span> <span>Mar 1st '22</span></div>
                                        <h2><a href="single-post.html">10 Life-Changing Hacks Every Working Mom Should Know</a></h2>
                                    </div>
                                    <div class="post-entry-1">
                                        <a href="single-post.html"><img src="assets/img/post-landscape-1.jpg" alt="" class="img-fluid"></a>
                                        <div class="post-meta"><span class="date">Berita Wilayah</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2><a href="single-post.html">5 Great Startup Tips for Female Founders</a></h2>
                                    </div>
                                </div>
                                <div class="col-lg-4">

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Berita Wilayah</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="single-post.html">How to Avoid Distraction and Stay Focused During Video Calls?</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Berita Wilayah</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="single-post.html">17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Berita Wilayah</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="single-post.html">9 Half-up/half-down Hairstyles for Long and Medium Hair</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Berita Wilayah</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="single-post.html">Life Insurance And Pregnancy: A Working Mom’s Guide</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Berita Wilayah</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="single-post.html">The Best Homemade Masks for Face (keep the Pimples Away)</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Berita Wilayah</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="single-post.html">10 Life-Changing Hacks Every Working Mom Should Know</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div> <!-- End .row -->
                </div>
            </section><!-- End Berita Wilayah Category Section -->

            <!-- ======= Hotspot Jogja Category Section ======= -->
            <section class="category-section">
                <div class="container" data-aos="fade-up">

                    <div class="section-header d-flex justify-content-between align-items-center mb-5">
                        <h2>Hotspot Jogja</h2>
                        <div><a href="category.html" class="more">Lihat Semua Layanan</a></div>
                    </div>

                    <div class="row g-5">
                        <div class="col-lg-4">
                            <div class="post-entry-1 lg">
                                <a href="single-post.html"><img src="assets/img/post-landscape-8.jpg" alt="" class="img-fluid"></a>
                                <div class="post-meta"><span class="date">Hotspot Jogja</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2><a href="single-post.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                                <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus repudiandae, inventore pariatur numquam cumque possimus exercitationem? Nihil tempore odit ab minus eveniet praesentium, similique blanditiis molestiae ut saepe perspiciatis officia nemo, eos quae cumque. Accusamus fugiat architecto rerum animi atque eveniet, quo, praesentium dignissimos</p>

                                <div class="d-flex align-items-center author">
                                    <div class="photo"><img src="assets/img/person-7.jpg" alt="" class="img-fluid"></div>
                                    <div class="name">
                                        <h3 class="m-0 p-0">Esther Howard</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">Hotspot Jogja</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="single-post.html">The Best Homemade Masks for Face (keep the Pimples Away)</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                            <div class="post-entry-1">
                                <div class="post-meta"><span class="date">Hotspot Jogja</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2 class="mb-2"><a href="single-post.html">10 Life-Changing Hacks Every Working Mom Should Know</a></h2>
                                <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>

                        </div>

                        <div class="col-lg-8">
                            <div class="row g-5">
                                <div class="col-lg-4 border-start custom-border">
                                    <div class="post-entry-1">
                                        <a href="single-post.html"><img src="assets/img/post-landscape-6.jpg" alt="" class="img-fluid"></a>
                                        <div class="post-meta"><span class="date">Hotspot Jogja</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2><a href="single-post.html">Let’s Get Back to Work, New York</a></h2>
                                    </div>
                                    <div class="post-entry-1">
                                        <a href="single-post.html"><img src="assets/img/post-landscape-5.jpg" alt="" class="img-fluid"></a>
                                        <div class="post-meta"><span class="date">Hotspot Jogja</span> <span class="mx-1">&bullet;</span> <span>Jul 17th '22</span></div>
                                        <h2><a href="single-post.html">How to Avoid Distraction and Stay Focused During Video Calls?</a></h2>
                                    </div>
                                    <div class="post-entry-1">
                                        <a href="single-post.html"><img src="assets/img/post-landscape-4.jpg" alt="" class="img-fluid"></a>
                                        <div class="post-meta"><span class="date">Hotspot Jogja</span> <span class="mx-1">&bullet;</span> <span>Mar 15th '22</span></div>
                                        <h2><a href="single-post.html">Why Craigslist Tampa Is One of The Most Interesting Places On the Web?</a></h2>
                                    </div>
                                </div>
                                <div class="col-lg-4 border-start custom-border">
                                    <div class="post-entry-1">
                                        <a href="single-post.html"><img src="assets/img/post-landscape-3.jpg" alt="" class="img-fluid"></a>
                                        <div class="post-meta"><span class="date">Hotspot Jogja</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2><a href="single-post.html">6 Easy Steps To Create Your Own Cute Merch For Instagram</a></h2>
                                    </div>
                                    <div class="post-entry-1">
                                        <a href="single-post.html"><img src="assets/img/post-landscape-2.jpg" alt="" class="img-fluid"></a>
                                        <div class="post-meta"><span class="date">Hotspot Jogja</span> <span class="mx-1">&bullet;</span> <span>Mar 1st '22</span></div>
                                        <h2><a href="single-post.html">10 Life-Changing Hacks Every Working Mom Should Know</a></h2>
                                    </div>
                                    <div class="post-entry-1">
                                        <a href="single-post.html"><img src="assets/img/post-landscape-1.jpg" alt="" class="img-fluid"></a>
                                        <div class="post-meta"><span class="date">Hotspot Jogja</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2><a href="single-post.html">5 Great Startup Tips for Female Founders</a></h2>
                                    </div>
                                </div>
                                <div class="col-lg-4">

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Hotspot Jogja</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="single-post.html">How to Avoid Distraction and Stay Focused During Video Calls?</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Hotspot Jogja</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="single-post.html">17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Hotspot Jogja</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="single-post.html">9 Half-up/half-down Hairstyles for Long and Medium Hair</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Hotspot Jogja</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="single-post.html">Life Insurance And Pregnancy: A Working Mom’s Guide</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Hotspot Jogja</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="single-post.html">The Best Homemade Masks for Face (keep the Pimples Away)</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Hotspot Jogja</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="single-post.html">10 Life-Changing Hacks Every Working Mom Should Know</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div> <!-- End .row -->
                </div>
            </section><!-- End Hotspot Jogja Category Section -->

        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">

            <div class="footer-content">
                <div class="container">

                    <div class="row g-5">
                        <div class="col-lg-4">
                            <h3 class="footer-heading">Tentang Blog JSS</h3>
                            <p>Blog JSS adalah sebuah aplikasi penyedia layanan .....</p>
                            <p><a href="about.html" class="footer-link-more">Lihat lebih banyak</a></p>
                        </div>
                        <div class="col-6 col-lg-2">
                            <h3 class="footer-heading">Informasi Terkini</h3>
                            <ul class="footer-links list-unstyled">
                                <li><a href="index.html"><i class="bi bi-chevron-right"></i> Beranda</a></li>
                                <li><a href="index.html"><i class="bi bi-chevron-right"></i> Tepopuler</a></li>
                                <li><a href="single-post.html"><i class="bi bi-chevron-right"></i> Terbaru</a></li>
                                <li><a href="about.html"><i class="bi bi-chevron-right"></i> Tentang Blog JSS</a></li>
                                <li><a href="contact.html"><i class="bi bi-chevron-right"></i> Kontak</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-lg-2">
                            <h3 class="footer-heading">Kategori</h3>
                            <ul class="footer-links list-unstyled">
                                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Pendidikan</a></li>
                                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Portal Berita</a></li>
                                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Lingkungan</a></li>
                                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Informasi Publik</a></li>
                                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Kementrian Agama</a></li>
                                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Layanan JSS lainnya</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-4">
                            <h3 class="footer-heading">Berita Terbaru</h3>

                            <ul class="footer-links footer-blog-entry list-unstyled">
                                <li>
                                    <a href="single-post.html" class="d-flex align-items-center">
                                        <img src="assets/img/post-sq-1.jpg" alt="" class="img-fluid me-3">
                                        <div>
                                            <div class="post-meta d-block"><span class="date">Smart Service</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                            <span>5 Great Startup Tips for Female Founders</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="single-post.html" class="d-flex align-items-center">
                                        <img src="assets/img/post-sq-2.jpg" alt="" class="img-fluid me-3">
                                        <div>
                                            <div class="post-meta d-block"><span class="date">Smart Service</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                            <span>What is the son of Football Coach John Gruden, Deuce Gruden doing Now?</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="single-post.html" class="d-flex align-items-center">
                                        <img src="assets/img/post-sq-3.jpg" alt="" class="img-fluid me-3">
                                        <div>
                                            <div class="post-meta d-block"><span class="date">Smart Service</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                            <span>Life Insurance And Pregnancy: A Working Mom’s Guide</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="single-post.html" class="d-flex align-items-center">
                                        <img src="assets/img/post-sq-4.jpg" alt="" class="img-fluid me-3">
                                        <div>
                                            <div class="post-meta d-block"><span class="date">Smart Service</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                            <span>How to Avoid Distraction and Stay Focused During Video Calls?</span>
                                        </div>
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-legal">
                <div class="container">

                    <div class="row justify-content-between">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            <div class="copyright">
                                © Copyright <strong><span>Blog JSS</span></strong>. All Rights Reserved
                            </div>
                            <div class="credits">
                                Designed by <a href="https://www.instagram.com/nicolauskevinboro/" target="_blank">Nicolaus Kevin Boro</a>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </footer>

        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>
    </body>

    </html>