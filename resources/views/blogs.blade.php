@include('components.navbar')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech2etc Ecommerce Tutorial</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="designs/bstyle.css">
</head>

<body>

   

    <section id="page-header" class="blog-header" style="background: url(images/blogbg.jpeg)">

        <h2>Blog</h2>

        <p>Baca blog yang berkaitan dengan produk kami </p>

    </section>


    <section id="blog">
        @foreach($blogs as $bl)
        <div class="blog-box">
            <div class="blog-img">
                <img src="images/{{$bl['imagename']}}" alt="">
            </div>
            <div class="blog-details">
                <h4>{{$bl['title']}}</h4>
                <p>{{$bl['sneakpeek']}}</p>
                <a href="/blogarticle/{{$bl['id']}}">Selengkapnya</a>
            </div>
            <h1>{{$bl['date']}}</h1>
        </div>
              @endforeach
    </section>
  



       @include('components.footer')


</body>

</html>