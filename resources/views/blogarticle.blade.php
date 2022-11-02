@include('components.navbar')
<head>
  <link rel="stylesheet" href="../designs/bstyle.css">
</head>
<article class="mb-4">
            <div class="container mt-4 px-4 px-lg-5">

                <div class="row gx-4 gx-lg-5 mt-5 justify-content-center">

                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <h1 class="p-3"style="color:brown">{{$blog['title']}}</h1>
                        <a href="#!"><img class="img-fluid" src="../images/{{$blog['imagename']}}"></a>
                        <div class="mt-3 mb-3 small text-muted fst-italic">Upload Date: {{$blog['date']}} </div>
                        <p class="mt-3" style="color:black">{{$blog['article']}}</p>

                    </div>
                </div>
            </div>
        </article>
       @include('components.footer')

</body>

</html>