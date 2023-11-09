@extends("User/user_layout")

<style>
.jumbotron {
      background: url('about-image.jpg') no-repeat center/cover;
      color: #ffffff;
    }
    .image-slider {
      height: 100vh;
      width:100vh;
    }
    .about-description {
      padding: 30px;
      background-color: #ffffff;
    }
</style>
@section('content')
<div class="jumbotron jumbotron-fluid">


<div class="fluid-container m-5" >
  <div class="row">
    <div class="col-md-6 image-slider">

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style="width: 600px;height:500px">
          <div class="carousel-item active">
            <img src="{{asset('images/about/about (1).jpg')}}" class="d-block w-100vh" alt="Slider Image 1">
          </div>
          <div class="carousel-item">
            <img src="{{asset('images/about/about (2).jpg')}}" class="d-block w-100vh" alt="Slider Image 2">
          </div>
          <div class="carousel-item">
            <img src="{{asset('images/about/about (3).jpg')}}" class="d-block w-100vh" alt="Slider Image 3">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="col-md-6 about-description">
      <h2>About Us</h2>
      <p>At Your Ecommerce Store, we're dedicated to providing the best shopping experience for our customers. Our team of experts is committed to delivering top-quality products and exceptional service. With a wide range of products to choose from, we ensure that your shopping journey is enjoyable and convenient.</p>
    </div>
  </div>
</div>


@endsection

