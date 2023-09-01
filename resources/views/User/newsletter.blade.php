@extends("User/user_layout")
@section('content')
<style>
.btn {
    width:100px;
    color: white;
    font-size: 14px;
    background-color: green;
    border-redius: 10px;
}
</style>

<!-- ////////////////////////////slider//////////// -->
<div id="demo" class="carousel slide" data-ride="carousel">

<!-- Indicators -->
<ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
</ul>

<!-- The slideshow -->
<div class="carousel-inner">
    <div class="carousel-item active">
        <img src="{{ asset('images/banner/banner1.jpg') }}" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
        <img src="{{ asset('images/banner/banner2.jpg') }}" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
        <img src="{{ asset('images/banner/banner3.jpg') }}" alt="New York" width="1100" height="500">
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


<center>
    <div class="single-widget mt-5">
        <h2>Subcribe Our Newsletter</h2>
        <form action="{{URL::to('save-newsletter')}}" class="searchform" method="post">
            @csrf
            <input type="email" placeholder="Your email address" name="email" required="" />
            <button type="submit" class="btn btn-success" style=" "><i class="fa fa-arrow-circle-o-right"></i>Subscribe </button>
            <p>Get the most recent updates from <br />our site and be updated your self...</p>
        </form>
    </div>
</center>
<br><br><br><br><br><br><br><br><br><br><br>
@endsection
