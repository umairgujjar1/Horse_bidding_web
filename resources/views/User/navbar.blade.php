<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Nurcery Shoping Website</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
</head>

<header>



    </div>

    <div class="header-2">

        <a href="/images/neha.png" class="logo"> <i class="images/ln"></i> LOGO </a>

        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>

    </div>

    <div class="header-3">

        <div id="menu-bar" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#category">category</a>
            <a href="#product">product</a>
            <a href="#deal">deal</a>
            <a href="{{url('/contact')}}">contact</a>
        </nav>

        <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            {{-- <a href="#" class="fas fa-heart"></a> --}}
            <a href="#" class="fas fa-user-circle"></a>
        </div>

    </div>

</header>
