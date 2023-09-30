<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- FontAwsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="/asset/css/var.css">
</head>

<body>
    <header>
        <!-- Navbar Start -->
        @include('frontend.layouts.partials.navbar2')
        <!-- Navbar End -->

        <div class="topSideBar m-2 gap-2 d-sm-flex">
            <!-- Top Side Section -->
            <section class="col-lg-3 col-sm-5 bg border border-1">
                <label for="" class="fw-bolder fs-5 m-1">Category</label>
                <ul class="list-group rounded-0 border-0">
                    <li class="list-group-item border-0 bg p-0 px-2"><a href=""
                            class="text-decoration-none font">A
                            second item <i class="fa-solid fa-arrow-right"></i></a></li>
                    <li class="list-group-item border-0 bg p-0 px-2"><a href=""
                            class="text-decoration-none font">A
                            second item <i class="fa-solid fa-arrow-right"></i></a></li>
                </ul>
            </section>

            <!-- Carosel -->
            <section class="col-sm-12 col-lg-9 pe-2">
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./asset/image/Slider/1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./asset/image/Slider/2.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./asset/image/Slider/3.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                </div>
            </section>
        </div>
    </header>

    <!-- main section -->
    <main class="my-5">
        <div class="container">
            @yield('content')
        </div>
        <!-- SHOES Category -->
        <div class="container my-5">
            <div class="product_Title text-center mb-4">
                <h3>SHOES</h3>
            </div>
            <div class="row row-cols-1 row-cols-md-4 g-4">

                <div class="col">
                    <div class="card h-100">
                        <img src="./asset/image/Product/1.jpeg" class="card-img-top" alt="..." height="200px">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as
                                a natural lead-in to additional content. This content is a little
                                bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="text-decoration-none">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="./asset/image/Product/2.jpeg" class="card-img-top" alt="..." height="200px">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as
                                a natural lead-in to additional content. This content is a little
                                bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="text-decoration-none">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="./asset/image/Product/5.png" class="card-img-top" alt="..." height="200px">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural
                                lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="text-decoration-none">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="./asset/image/Product/4.jpg" class="card-img-top" alt="..." height="200px">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as
                                a natural lead-in to additional content. This card has even longer
                                content than the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="text-decoration-none">Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Category -->
        <div class="container my-5">
            <div class="product_Title text-center mb-4">
                <h3>PRODUCT</h3>
            </div>
            <div class="row row-cols-1 row-cols-md-4 g-4">

                <div class="col">
                    <div class="card h-100">
                        <img src="./asset/image/Product/1.jpeg" class="card-img-top" alt="..." height="200px">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as
                                a natural lead-in to additional content. This content is a little
                                bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="text-decoration-none">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="./asset/image/Product/2.jpeg" class="card-img-top" alt="..." height="200px">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as
                                a natural lead-in to additional content. This content is a little
                                bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="text-decoration-none">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="./asset/image/Product/5.png" class="card-img-top" alt="..." height="200px">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural
                                lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="text-decoration-none">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="./asset/image/Product/4.jpg" class="card-img-top" alt="..." height="200px">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as
                                a natural lead-in to additional content. This card has even longer
                                content than the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="text-decoration-none">Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <!-- footer -->
    @include('frontend.layouts.partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
