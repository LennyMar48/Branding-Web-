<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
    <link rel="icon" href="<?php echo base_url()."assets/";?>images/logo_bsi.png" />
        <title>Website</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php echo base_url()."assets/";?>images/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url()."assets/";?>css/styles.css" rel="stylesheet">
    <style>
    header.masthead {
  padding-top: 10.5rem;
  padding-bottom: 6rem;
  text-align: center;
  color: #fff;
  background-image: url("assets/img/dashboard1.jpg");
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center center;
  background-size: cover;
}
header.masthead .masthead-subheading {
  font-size: 1.5rem;
  font-style: italic;
  line-height: 1.5rem;
  margin-bottom: 25px;
  font-family: "Roboto Slab", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
header.masthead .masthead-heading {
  font-size: 3.25rem;
  font-weight: 700;
  line-height: 3.25rem;
  margin-bottom: 2rem;
  font-family: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";

}
        </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Tertulis Seketika  </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Pelayanan</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Product</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Selamat Datang !</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="user/autentifikasi/login.php">Silahkan login untuk yang memiliki akses</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Tertulis Seketika</h2>
                    <h3 class="section-subheading text-muted">Toko ini merupakan toko penjualan pakaian dengan desain band terkenal</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Penjualan</h4>
                        <p class="text-muted"> Kalian bisa langsung order via wa / instagram  </p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Cara pemesanan</h4>
                        <p class="text-muted">kalian bisa order lewat dm di instagram kami @Tertulis Seketika atau dengan wa ke no 087743000992</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Aman Terpercaya</h4>
                        <p class="text-muted">jangan takut barang tidak terkirim, karna kami menjual dengan amanah dan bisa COD daerah jatiasih Bekasi</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Product kami </h2>
                    <h3 class="section-subheading text-muted">kami akan memperkanalkan beberapa product kami</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?php echo base_url()."assets/";?>img/portfolio/chrisye.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Chrisye</div>
                                <div class="portfolio-caption-subheading text-muted">Percik Pesona</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?php echo base_url()."assets/";?>img/portfolio/Fariz.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Fariz RM</div>
                                <div class="portfolio-caption-subheading text-muted">Fariz Rustam Munaf </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?php echo base_url()."assets/";?>img/portfolio/TSSD.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Those Shocking Shaking Days</div>
                                <div class="portfolio-caption-subheading text-muted">TSSD</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?php echo base_url()."assets/";?>img/portfolio/Sharkmove.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Sharkmove</div>
                                <div class="portfolio-caption-subheading text-muted">Ghede Chokra's</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?php echo base_url()."assets/";?>img/portfolio/Panbers.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Panbers</div>
                                <div class="portfolio-caption-subheading text-muted">Panber's Hard Rock</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?php echo base_url()."assets/";?>img/portfolio/benyamin.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Benyamin S</div>
                                <div class="portfolio-caption-subheading text-muted">Asal Comot</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?php echo base_url()."assets/";?>img/about/1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Product Asli Indonesia</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Product kami merupakan product asli indonesia, kami mengincar band lawas yang sudah hampir redup. agar semua orang akan mengingat kembali band legend asli indonesia </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?php echo base_url()."assets/";?>img/about/2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Target Marketing</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Target marketing kami yaitu anak muda sampai orang dewasa, karna artikel kami adalah artikel band band lawas yang orang orang yang sudah tidak lagi muda pasti mengetahui product product kami</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?php echo base_url()."assets/";?>img/about/3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Strategi Pemasaran Kami</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Stategi Pemasaran Kami yaitu adalah semua khalangan yang memiliki jiwa musik, dan senang dengan band band lama</p></div>
                        </div>
                    </li>
        
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Berikut adalah profile anggota kelompok kami</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?php echo base_url()."assets/";?>img/team/Daru.jpeg" alt="..." />
                            <h4>Raden Daruryugu</h4>
                            <p class="text-muted">Leader Team / Creating System</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://instagram.com/raden_daruryugu?utm_medium=copy_link"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/daru.ryugu"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/deiktis1?s=08"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?php echo base_url()."assets/";?>img/team/Maul.jpeg" alt="..." />
                            <h4>Maulana Afif Khadapi</h4>
                            <p class="text-muted">Support System</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/piccoloooo_/"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/maulana.khadafi.1"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/afif_kha?t=eDPfHF1dfvtT2pgdguO7ng&s=09"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?php echo base_url()."assets/";?>img/team/enjel.png" alt="..." />
                            <h4>Enjelita Tampubolon</h4>
                            <p class="text-muted">Support System</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/enjelita_tampubolon"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/enjelita.tampubolon.5"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/Enjelita2707?t=wUiY9FlRDdwJiyGh3M7SWw&s=09"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="team-member">
                                <img class="mx-auto rounded-circle" src="<?php echo base_url()."assets/";?>img/team/Nadia.jpeg" alt="..." />
                                <h4>Nadia Ellizafitri</h4>
                                <p class="text-muted">Creating Paper</p>
                                <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/_nadiaelli_"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="https://m.facebook.com/nadia.dannova"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/nadiaelli76?t=33xDnPwJQWZgOAJhD2EJxw&s=08"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>

                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?php echo base_url()."assets/";?>img/team/leni.png" alt="..." />
                            <h4>Lenny Mardiyanti</h4>
                             <p class="text-muted">Support Creating Paper</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/lennyanti_/"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/profile.php?id=100008047097457"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/lennymardiyan48?t=VEFpaaNNEdzYjd9y1fTSpg&s=09"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="<?php echo base_url()."assets/";?>img/logos/microsoft.svg" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="<?php echo base_url()."assets/";?>img/logos/google.svg" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="<?php echo base_url()."assets/";?>img/logos/fb.png" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://instagram.com/tertulisseketika?utm_medium=copy_link"><img class="img-fluid img-brand d-block mx-auto" src="<?php echo base_url()."assets/";?>img/logos/ig.png" alt="..." /></a>
                    </div>
                </div>
            </div>
        </div>
                  
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Raden Daruryugu 2021</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo base_url()."assets/";?>img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Adit Insomnia</h2>
                                    <p class="item-intro text-muted">Brand Ambasador</p>
                                    <img class="img-fluid d-block mx-auto" src="<?php echo base_url()."assets/";?>img/portfolio/A_Chrisye.jpeg" alt="..." />
                                    <p>H. Chrismansyah Rahadi lahir dengan nama Christian Rahadi (16 September 1949 – 30 Maret 2007) yang lebih dikenal dengan nama panggung Chrisye, merupakan seorang penyanyi dan pencipta lagu asal Indonesia.

                                        Ia dilahirkan di Jakarta dari keluarga Tionghoa-Indonesia, Chrisye menjadi tertarik dengan musik saat masih muda. Waktu masih belajar di SMA, Chrisye bermain gitar bas dalam sebuah band yang ia bentuk bersama kakaknya, Joris. Pada akhir dasawarsa 1960-an dia menjadi anggota band Sabda Nada (yang kemudian hari berganti nama menjadi Gipsy).</p>
                                    <ul class="list-inline">
                                       
                                        <li>
                                            <strong>Category:</strong>
                                            Pakaian
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo base_url()."assets/";?>img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Jimi Multhazam</h2>
                                    <p class="item-intro text-muted">Brand Ambasador</p>
                                    <img class="img-fluid d-block mx-auto" src="<?php echo base_url()."assets/";?>img/portfolio/A_Fariz.jpeg" alt="..." />
                                    <p>Fariz terus menelurkan karya-karyanya, baik di Indonesia maupun internasional. Selama 25 tahun kariernya sejak tahun 1978 hingga 2003, Fariz telah menghasilkan 20 album solo, 72 album kolaborasi, 18 album soundtrack, 27 album produksi di mana dia berperan sebagai produser, serta 13 album internasional yang dirilis di Eropa dan Asia Pasifik.[4][rujukan rusak] Di antara lagu-lagu ciptaannya yang terkenal hingga sekarang adalah "Barcelona", "Nada Kasih" (duet dengan Neno Warisman), "Susie Bhelel", "Menggapai Bintang" (Symphony), "Selamat Untukmu" (Jakarta Rhythm Section), dan "Renungan" (Dibayang Dewasa) yang menampilkan duet Fariz RM dengan Marissa Haque.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Category:</strong>
                                            Pakaian
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo base_url()."assets/";?>img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Soleh Solihun</h2>
                                    <p class="item-intro text-muted">Brand Ambasador</p>
                                    <img class="img-fluid d-block mx-auto" src="<?php echo base_url()."assets/";?>img/portfolio/A_TSSD.jpeg" alt="..." />
                                    <p>Dalam misi mengembalikan kembali hegemoni produk rock 70-an lokal, di tahun 2011 lalu muncul album berjudul Those Shocking Shaking Days: Indonesia Hard, Psychedelic, Progressive and Funk 1970-1978 yang merupakan sebuah antologi berupa album kompilasi perjalanan musik psikedelik, progresif rock dan funk Indonesia rentang tahun 1970-1978. Album tersebut memuat 20 lagu dari berbagai kelompok musik jagoan tanah air seperti Koes Plus, Panbers, Rollies, Shark Move, Benny Soebardja, AKA dan lain-lainnya.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Category:</strong>
                                            Pakaian
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo base_url()."assets/";?>img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Benny Soebardja</h2>
                                    <p class="item-intro text-muted">Salah Satu Personil segaligus pendiri Band Sharkmove</p>
                                    <img class="img-fluid d-block mx-auto" src="<?php echo base_url()."assets/";?>img/portfolio/A_Sharkmove.jpeg" alt="..." />
                                    <p>Atas idealisme dari Benny, Shark Move kemudian memilih jalur independen dalam musik mereka. Invasi british music yang sedang melanda Indonesia di dekade 60 hingga 70-an membuat para produser industri major label cenderung mengekang kreativitas musisinya agar senantiasa menciptakan lagu cengeng. Atas modal yang diberikan oleh Bhagu Ramchand selaku vokalis dari band tersebut, mereka kemudian menciptakan label pendistribusian untuk album pertama sekaligus terakhir bagi mereka Ghede Chokra’s yang berarti Great Session dalam bahasa Inggris.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Category:</strong>
                                            Pakaian
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo base_url()."assets/";?>img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Asido Panjaitan</h2>
                                    <p class="item-intro text-muted">Salah satu personil PANBERS yang masih tersisa</p>
                                    <img class="img-fluid d-block mx-auto" src="<?php echo base_url()."assets/";?>img/portfolio/A_Panbers.jpeg" alt="..." />
                                    <p>Panjaitan Bersaudara (Panbers) adalah satu nama kelompok pemusik yang merupakan singkatan dari Pandjaitan Bersaudara. Kelompok musik ini didirikan pada tahun 1965 di Surabaya, terdiri dari empat orang kakak beradik kandung putra-putra dari Drs. J.M.M. Pandjaitan, S.H, (Alm) dengan Bosani S.O. Sitompul. Mereka adalah Hans Panjaitan pada lead guitar, Benny Panjaitan sebagai vokalis dan rhythm guitar, Doan Panjaitan pada bass dan keyboard, serta Asido Panjaitan pada drum. Dalam perkembangannya formasi band ini berubah dan bertambah sejak tahun 1990-an dengan kehadiran Maxi Pandelaki sebagai basssist, Hans Noya sebagai lead guitar, dan Hendri Lamiri pada biola.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Category:</strong>
                                            Pakaian
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="<?php echo base_url()."assets/";?>img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Model</h2>
                                    <p class="item-intro text-muted">Brand Ambasador</p>
                                    <img class="img-fluid d-block mx-auto" src="<?php echo base_url()."assets/";?>img/portfolio/A_benyamin.jpeg" alt="..." />
                                    <p>H. Benyamin Sueb lahir pada tanggal 5 Maret 1939 di kemayoran. beliau merupakan pemeran, pelawak, sutradara, dan penyanyi indoensia. Dengan segudang talentnya ia mampu menghasilkan lebih dari 75 album musik dan 53 judul film. Tanpa diragukan lagi bakat dan telentnya kerap menjadikan dia seorang legendaris pelawak dan musik bagi tanah air. Seniman asal betawi ini tak heran jika menerima julukan ‘Si Biang Kerok’.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Category:</strong>
                                            Pakaian
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo base_url()."assets/";?>js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
