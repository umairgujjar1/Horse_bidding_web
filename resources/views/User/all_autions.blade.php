@extends('User/user_layout')







@section('content')
    <!-- ////////////////////////////slider//////////// -->
    <!-- Bootstrap Carousel -->


    <div id="demo" class="carousel slide" data-ride="carousel" style="z-index: 1">
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/banner/banner1.jpg') }}" class="d-block w-100" alt="Los Angeles">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/banner/banner2.jpg') }}" class="d-block w-100" alt="Chicago">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/banner/banner3.jpg') }}" class="d-block w-100" alt="New York">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>









    <!-- ////////////////////////////////  End Slider /////////////////////// -->

    <section>
        @include('User.message')
        <div class="container">
            <div class="row">

                <div class="col-sm-12 padding-right">
                    <div class="features_items">


                        <h2 class="title text-center">All Auction</h2>
                        @if (!empty($all_auctions))
                            @foreach ($all_auctions as $auction)
                                <div class="col-sm-3" >
                                    <div class="product-image-wrapper" style="border: 1px solid green;border-radius:16px;box-shadow:2px 2px 10px 3px rgb(136, 212, 145)">
                                        <a href="view-auction-detail/{{ $auction->id }}" style="text-decoration: none">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{ asset('images/' . $auction->image) }}" width="200"
                                                        height="200" alt="" style="border-radius:14px;">
                                                </div>
                                                {{-- <h2 class="text-center text-dark">{{ $auction->title }}</h2>
                                                    <p>{{ $auction->categorey_name }}</p> --}}
                                                <div class="card-body" >
                                                    <div class="text-center">
                                                        <h5 class="card-title">{{ $auction->title }}</h5>
                                                        <p class="text-muted mb-4">{{ $auction->type }}</p>
                                                    </div>
                                                    <div>
                                                        <div class="d-flex justify-content-between">
                                                            <span>Age </span><span>{{ $auction->age }}</span>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <span>Height </span><span>{{ $auction->height }}</span>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <span>Weight </span><span>{{ $auction->weight }}</span>
                                                        </div>




                                                    </div>
                                                    <hr>
                                                    <div class="d-flex justify-content-between total font-weight-bold mt-4">
                                                        <span>Total Price</span><span>${{ $auction->price }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <i class="fa fa-plus-square"></i> View Auction --}}
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        <!-- Featured Items -->


                    </div>
                </div>
            </div>
    </section>

@endsection
