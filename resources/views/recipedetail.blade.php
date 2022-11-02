@include('components.navbar')

    <div class="container-fluid text-center mt-5">
        <div class="d-flex justify-content-center mx-auto" style="width: 50rem">
                <img src="/images/logo.png" alt="">
                <h1 class="ms-2 fw-bold" style="margin-top: 35px; color: #FFB52B">{{$recipe['recipename']}}</h1>
        </div>
        <p>{{$recipe['date']}}</p>
        <img class="img-thumbnail img-fluid" src="/images/{{$recipe['recipeimg']}}" style="width: 50rem">

        <div class="row row-cols-2 mt-5">

            <div class="col border" style="background-color: #AC2128">
                <h2 class="fw-bold mt-4 text-light">Description</h2>
                <div style="background-color: white; border-radius: 10px">
                   <p class="m-3 p-3">{{$recipe['recipedesc']}}</p> 
                </div>
                
            </div>

            <div class="col border" style="background-color: #AC2128">
                <h2 class="fw-bold mt-4 text-light">Ingredients</h2>
                <div style="background-color: white; border-radius: 10px">
                    <p class="m-3 p-3">{{$recipe['ingredients']}}</p> 
                 </div>
            </div>
        </div> 
    </div>
        <div class="text-center">
            <div class="p-3" style="background-color: #2f2e2e">
                <h2 class="pt-3 fw-bold text-light">How to Cook</h2>
            </div>
            <div class="mt-4 ms-2 me-2 mb-5 text-start">
                <ol>
                    <li>{{$recipe['howtocook1']}}</li>
                    <li class="pt-1">{{$recipe['howtocook2']}}</li>
                    <li class="pt-1">{{$recipe['howtocook3']}}</li>
                    <li class="pt-1">{{$recipe['howtocook4']}}</li>
                    <li class="pt-1">{{$recipe['howtocook5']}}</li>
                    <li class="pt-1">{{$recipe['howtocook6']}}</li>
                    <li class="pt-1">{{$recipe['howtocook7']}}</li>
                </ol>
            </div>
       </div>
       @include('components.footer')
    
   
    

