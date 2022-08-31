<x-frontend.layout>
    <x-slot name="title">Resort Booking</x-slot>

    @if (session()->has('message'))
      <div class="alert alert-info" role="alert">
      <p>
        {{session('message')}}
      </p>
      </div>
    @endif
    <div class="container px-4 px-lg-5">
    <!-- Heading Row-->
    <div class="row gx-4 gx-lg-5 align-items-center my-5">
        <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="https://images.unsplash.com/photo-1610641818989-c2051b5e2cfd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="..."/></div>
        <div class="col-lg-5">
            <h1 class="font-weight-light">Resort Finder</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione eos rerum perspiciatis a dolorem. Consectetur dolore deleniti neque ducimus labore ullam rerum quae mollitia accusantium? Deleniti explicabo excepturi numquam eligendi!</p>
            <a class="btn btn-primary" href="{{route('home.booking')}}">Book Resort Now</a>
        </div>
    </div>

    <!-- Content Row-->

    <div class="row gx-4 gx-lg-5">
        @foreach ($resorts as $resort)
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">{{$resort->name}}</h2>
                    <img src="{{$resort->image ? asset('storage/'.$resort->image) : asset('/images/no-image.png')}}" alt="resort_image" width="400px"></td>
                    <p class="card-text">{{$resort->description}}</p>
                </div>
                <div class="card-footer d-flex">
                    <a class="btn btn-primary btn-sm mx-5" href="{{route('home.booking')}}">Book Here</a>
                    <p>Price {{$resort->price}}$</p>
                </div>
            </div>
        </div>
    @endforeach
    </div>
{{$resorts->links()}}
</div>
</x-frontend.layout>
