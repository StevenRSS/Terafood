@include('components.navbar')


<section class="main" style="background: url(images/terabackgrop.jpg)">

    <div class="container py-5" >
        <div class="row py-4">
            <div class="col-lg-7 pt-5 text-center">
                <p class="fw-bold" style="color: #c8272f">AMAN, SEHAT, NIKMAT</p>
                <h1 class="text-light"> Terafood </h1>
                <a href="/aboutus"><button class="btn1 mt-3">See More</button></a>
            </div>
        </div>
    </div>
</section>
{{-- ================= --}}

<section class="about">
    <div class="container mt-5 mb-5">
        <div class="row mt-5 mb-5">
            <div class="col-lg-6 d-flex align-items-center">
                <img src="images/sosissapi.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-lg-0 content">
                <h3 mt-5>TERA SUKSES ABADI</h3>
                <p class="mt-5 fst-italic">
                   CV Tera Sukses Abadi atau yang popular disebut sebagai TSA merupakan perusahaan yang bergerak di bidang further meat and chicken processing. Memulai aktifitasnya di awal 2014, saat ini TSA telah memproduksi beraneka ragam sosis dan bakso dan telah di distribusikan di berbagai daerah mulai dari jawa timur, jawa tengah, jawa barat, bali dan beberapa daerah di luar pulau. Didukung oleh tenaga yang berpengalaman dan mesin-mesin yang berteknologi tinggi, saat ini TSA memproduksi brand yang cukup dikenal yaitu Terachick, Yikko dan Venno. Produk-produk dari TSA Telah bersertifikasi BPOM dan halal sehingga aman, sehat dan nikmat untuk dikonsumsi oleh semua kalangan.
                </p>
            </div>
        </div>
    </div>


</section>
{{-- ================= --}}

{{-- <section class="about" style="background-color:#D4D4D4">
    <div class="container py-5 text-center">
        <h1 style="color:#AC2128;">Why Choose Us?</h1>
        <div class="row pt-5">
            <div class="col-lg-7 m-auto text-center">
                <div class="row text-center">
                    <div class="col-lg-4">
                        <img src="images/skills.png" class="img-luid mb-3" style="height: 100px " alt="">
                        <h6>Produk Berkualitas<h6>
                    </div>
                    <div class="col-lg-4">
                        <img src="images/skills.png" class="img-luid mb-3" style="height: 100px" style="height: 100px" alt="">
                        <h6>Harga Terjangkau<h6>
                    </div>

                    <div class="col-lg-4">
                        <img src="images/skills.png" class="img-luid mb-3" style="height: 100px" class="img-luid" alt="">
                        <h6>Praktis & Lezat<h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section> --}}

<section id="feature" class="section-p1" style="background:#E5E0E0;">
        <div class="fe-box">
            <img src="img/features/f1.png" alt="">
            <h6>Produk Berkualitas</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f2.png" alt="">
            <h6>Lezat</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f3.png" alt="">
            <h6>Praktis</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f4.png" alt="">
            <h6>Produk Bervariasi</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f5.png" alt="">
            <h6>Sehat</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f6.png" alt="">
            <h6>Harga Terjangkau</h6>
        </div>
    </section>

{{-- ================= --}}

 <section id="product1" class="section-p1">
        <h1> Our Products </h1>
                <h5 style="color: red"> Here is some of our bestselling products </h6>
          
        <div class="pro-container">

            @for($i = 0; $i < 4; $i++) 
              <div class="pro" onclick="window.location.href='/productdetail/{{$products[$i]['id']}}';">
                <img src="../images/{{$products[$i]['imagename']}}" alt="">
                <div class="des">
                    <span>{{$products[$i]['brand']}}</span>
                    <h5>{{$products[$i]['nama_produk']}}</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>{{$products[$i]['berat']}}</h4>
                </div>
                <a href="/productdetail/{{$products[$i]['id']}}"><i class="fal fa-shopping-cart cart"></i></a>
        </div>

        @endfor
        
        </div>
             <div class="row mt-5">
                <div class="col-lg-6 text-center m-auto">
                    <a href="/products"><button class="btn1">See More</button></a>
                </div>
            </div>
    </section>

{{-- ================= --}}
    <section id="newsletter" class="section-p1 section-m1" style="background:black;">
     {{-- <section id="newsletter" class="section-p1 section-m1" style="background:#3D251e;"> --}}
        <div class="newstext">
            <h4>Connect With Us</h4>
            <p>Dapatkan email mengenai informasi produk terbaru serta <span>promo menarik.</span> </p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>
{{-- ================= --}}
{{-- <section class="blog">
    <div class="container">
        <div class="row pb-5">
            <div class="col-lg-8 m-auto text-center">
                <h1>Resep</h1>
                <h5 style="color:red" class="mt-3">Berbagai Resep umtuk produk kami</h5>
            </div>
            <div class="row mt-5 ">
                <div class="col-lg-4 text-center border border-dark p-5">
                    <img src="images/omeletsosis.jpeg" style="height: 100px" class="img-fluid mb-3" alt="">
                    <h4>Omelet Sosis</h4>
                    <p>dfssadads dfasdfadsfas fadsfdsafasdfsadf dsfsdafasfa fdsfsdfds fdsf ads fads f das fads f das fdas f dsaf adfds af sf saf </p>
                </div>
                <div class="col-lg-4 text-center">
                    <img src="images/sosisasammanis.jpeg" style="height: 100px" class="img-fluid mb-3" alt="">
                    <h4>Jamur Sosis Saus Asam Manis</h4>
                    <p>dfssadads dfasdfadsfas fadsfdsafasdfsadf dsfsdafasfa fdsfsdfds fdsf ads fads f das fads f das fdas f dsaf adfds af sf saf </p>
                </div>
                <div class="col-lg-4 text-center">
                    <img src="images/rotisosis.jpeg" style="height: 100px" class="img-fluid mb-3" alt="">
                    <h4>Roti Panggang Sosis</h4>
                    <p>dfssadads dfasdfadsfas fadsfdsafasdfsadf dsfsdafasfa fdsfsdfds fdsf ads fads f das fads f das fdas f dsaf adfds af sf saf </p>
                </div>

            </div>

            <div class="row mt-3">
                <div class="col-lg-6 text-center m-auto">
                    <button class="btn1">See More</button>
                </div>
            </div>
        </div>
    </div>
    

</section> --}}

 <div class="container">
      <!--Section: Content-->
      <section class="text-center">
        <h2 ><strong>Resep</strong></h2>
                 <h5 class="mt-2 mb-4" style="color: red"> Rekomendasi resep menggunakan produk kami </h5>

        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="images/omeletsosis.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Omelete Sosis</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the
                  card's content.
                </p>
                <a href="/recipe" class="btn btn-dark">Read</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="images/jamursosis.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Sosis Asam Manis</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the
                  card's content.
                </p>
                <a href="/recipe" class="btn btn-dark">Read</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="images/rotipanggang.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body rounded">
                <h5 class="card-title">Roti Sosis</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the
                  card's content.
                </p>
                <a href="/recipe" class="btn btn-dark">Read</a>
              </div>
            </div>
          </div>
        </div>
     <div class="row mt-3 mb-5">
                <div class="col-lg-6 text-center m-auto">
                    <a href="/recipe"><button class="btn1">See More</button></a>
                </div>
            </div>
       
      </section>
      </div>

  @include('components.footer')



</body>
</html>
