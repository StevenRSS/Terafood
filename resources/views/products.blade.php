@include('components.navbar')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terafood</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <link rel="stylesheet" href="designs/bstyle.css">
</head>

<body>


    <section id="page-header" class="about-header" style="background: url(images/productsbg.jpeg)">

        <h2>Products</h2>

        <p>Katalog Produk-Produk Terafood</p>

    </section>

    <section id="product1" class="section-p1" >
        <div class="pro-container">

        @foreach($products as $pr)
            <div class="pro" onclick="window.location.href='/productdetail/{{$pr['id']}}';">
                <img src="images/{{$pr['imagename']}}" alt="">
                <div class="des">
                    <span>{{$pr['brand']}}</span>
                    <h5>{{$pr['nama_produk']}}</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>{{$pr['berat']}}</h4>
                </div>
                <a href="/productdetail/{{$pr['id']}}"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
          @endforeach
        </div>
    </section>

    {{-- <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fal fa-long-arrow-alt-right"></i></a>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span> </p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section> --}}

   @include('components.footer')


</body>

</html>