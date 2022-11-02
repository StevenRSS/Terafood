@include('components.navbar')
<!DOCTYPE html>
<html lang="en">



<body>


    <section id="prodetails" class="section-p1">
        <div class="single-pro-image align-right">
            <img src="../images/{{$product['imagename']}}" width="100%" id="MainImg" alt="">
        </div>

        <div class="single-pro-details">
            <h5 class="mb-2">{{$product['brand']}}</h5>
            <h2 class="mt-2">{{$product['nama_produk']}}</h2>
            <h3>{{$product['harga']}}</h3>
            <h6>Isi: {{$product['isi']}}</h6>
            <h6>Berat: {{$product['berat']}}</h6>

            <h4>Product Details</h4>
            <span>{{$product['deskripsi']}}</span>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Produk Lain </h2>
        <p>Rekomendasi produk untuk menambah menu hidangan anda</p>
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
    </section>


  @include('components.footer')

   
</body>

</html>
