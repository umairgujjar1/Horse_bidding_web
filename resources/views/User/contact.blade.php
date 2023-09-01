@extends("User/user_layout")
@section('content')

<style>
#formBody {

    background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
}


.contact-form {

    background: #fff;
    margin-top: 9%;
    margin-bottom: 5%;


    width: 100%;
}

.contact-form .form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 2.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 4.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

.contact-image {
    text-align: center;
}

.contact-image img {
    /* border-radius: 6rem; */
    width: 11%;
    margin-top: -7%;
    /* transform: rotate(29deg); */
}

.contact-form form {
    padding-top: 11%;
    padding-left: 2%;
    padding-right:2%;
    padding-bottom: 9%;

}

.contact-form form .row {
    margin-bottom: -7%;
}

.contact-form h3 {
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}

.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}

.contact-form .btnContact:hover
{
    background: #0072ff;
}
.btnContactSubmit {
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}

.form {

    /* width: 100%; */
    /* padding:none; */
    /* margin:0px!important; */






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















<div class="fluid-container contact-form " id="formBody">
    <div class="contact-image">
        <img src="{{ asset('images/logo/logo5.png') }}" alt="rocket_contact" />
    </div>
    <form action="{{URL::to('save-contact')}}" method="post">
        @csrf()
        <h3>Drop Us a Message</h3>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Your Name *" value="" />
                </div>
                <div class="form-group">
                    <input type="text" name="email" class="form-control" placeholder="Your Email *" value="" />
                </div>
                <div class="form-group">
                    <input type="text" name="phone" class="form-control" placeholder="Your Phone Number *" value="" />
                </div>
                <div class="form-group">
                    <textarea name="message" class="form-control" placeholder="Your Message *"
                        style="width: 100%; height: 150px;"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                </div>
            </div>
            <div class="col-lg-6 ifram">
                <div style="width: 100%"><iframe width="100%" height="400" frameborder="0" scrolling="no"
                        marginheight="0" marginwidth="0"
                        src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=layyah,%20punjab+(Horse%20Bidding)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                            href="https://www.maps.ie/population/">Population calculator map</a></iframe></div>
            </div>
        </div>
    </form>
</div>















<!--
<form action="{{URL::to('save-contact')}}" method="post">
                        @csrf()

                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h2><i class="fa fa"></i>Contact Us</h2>
                                    <p class="m-0">Enter Your Detail</p>
                                </div>
                            </div>
                            <div class="card-body p-3" style="margin-left: 34%">


                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nombre" name="name" placeholder="Enter Name" required style="width:320px">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="nombre" name="email" placeholder="example@gmail.com" style="width:320px" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <textarea class="form-control" placeholder="Your Message" name="message" style="width:320px" required></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="Send Message" class="btn btn-info btn-block rounded-0 py-2" style="width:200px">
                                </div>
                            </div>

                        </div>
                    </form> -->

<br>



@endsection
