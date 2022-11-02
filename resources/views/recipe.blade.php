@include('components.navbar')

<div class="container-fluid" id="page-header" style="background: url(images/recipebanner.png)">
    <h2 class="fw-bold mt-3" style="color: #FFB52B">RECIPE</h2>
    <p></p>
</div>

<div class="container-fluid" style="margin-top: 80px; margin-bottom: 80px">

    <div class="row row-cols-auto justify-content-center">
    @foreach ($recipes as $rp)
    <div class="col">
        <div class="card border border-danger" style="width: 18rem;">
            <img src="images/{{$rp['recipeimg']}}" class="card-img-top" alt="...">
            <div class="card-body text-center mt-3">
                <h5 class="card-title">{{$rp['recipename']}}</h5>
                <p class="card-text">{{$rp['date']}}</p>
                <a href="/recipedetail/{{$rp['id']}}" class="btn text-light fw-bold" style="background-color: #FFB52B">Let's Cook!</a>
            </div>
        </div>
    </div>
    @endforeach
    </div>
    
</div>

@include('components.footer')
</body>
</html>
