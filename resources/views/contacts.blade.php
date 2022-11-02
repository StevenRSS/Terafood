@include('components.navbar')

<div class="container-fluid rounded-bottom" style="background-color: #AC2128">
    <div class="text-center">
        <h1 class="pt-5 fw-bold" style="color: #FFB52B">CONTACT</h1>
        <h6 class="pb-5 text-light">Terafood - Contact</h6>
    </div>
</div>

{{-- Content Container --}}
<div class="container-fluid">
    {{-- Outer Grid --}}
    <div class="row row-cols-2 pt-5">
        {{-- Left Side --}}
        <div class="col container">
            <div class="row row-cols-2">
                <div class="col-4">
                    <img class="ps-5" src="images/location.png" alt="">
                </div>
                <div class="col pt-3">
                    <div class="">
                        <h5 class="fw-bold">Lokasi</h5>
                        <p>Factory:</p>
                        <p>Jl. Candi Lontar 41 J no. 84, Surabaya</p>
                        <p>Office: </p>
                        <p>Jl. Raya Candi Lontar 43 L no. 1, Surabaya</p>
                    </div>
                </div>
            </div>

                <div class="row row-cols-2 pt-2">
                    <div class="col-4">
                        <img class="ps-5" src="images/phone.png" alt="">
                    </div>
                    <div class="col pt-3">
                        <div class="">
                            <h5 class="fw-bold">Telepon</h5>
                            <p>Tel. +62.81 216 552 481</p>
                        </div>
                    </div>
                
            </div>
        </div>

        <div class="col container">
            
        </div>
    </div>

   
</div>
<div class="mt-5">
    @include('components.footer')
</div>
    
</body>

</html>