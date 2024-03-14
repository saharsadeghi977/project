<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ url('assets/css/bootstrap-rtl.css') }}">
    <script src="{{ url('/assets/scripts/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ url('/assets/scripts/bootstrap-rtl.js') }}"></script>

</head>

<body>

    @include('front.navbar')
    <div class="row" style="margin-top:60px ">

        <div class="col-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->

                <div class="carousel-inner" role="listbox">


                    <div class="item active">
                        <img src="ImagesSlider/1.jpg" width="100%" alt="...">
                        <div class="carousel-caption">
                            تصویر شماره 1
                        </div>
                    </div>
                    <div class="item">
                        <img src="ImagesSlider/2.jpg" width="100%" alt="...">
                        <div class="carousel-caption">
                            تصویر شماره 2

                        </div>
                    </div>
                    <div class="item">
                        <img src="ImagesSlider/3.jpg" width="100%" alt="...">
                        <div class="carousel-caption">
                            تصویر شماره 3
                        </div>
                    </div>

                </div>


            </div>
        </div>

    </div>


    </div>

    </div>

    </div>
    <div class="container">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><button type="submit" class="btn btn-primery btn-block"> محصولات پرفروش</button></a>
            </li>

            <li><a href="#"><button type="submit" class="btn btn-primery btn-block"> محصولات تخفیف خورده</button>
                </a> </li>
            <li><a href="#"><button type="submit" class="btn btn-primery btn-block"> </button> </a> </li>
        </ul>
    </div>
    @foreach ($products as $product)
    <div class="container" style="margin-top: 10px">
       
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{ url()->asset('storage/' . $product->image) }}">
                    <div class="caption">
                        <h3>{{ $product->title }} </h3>
                        <h4>{{ number_format($product->price) }}$</h4>
                        <p><a href="{{ route('productDetail',$product->id) }}" class="btn btn-primary" role="button">جزئیات</a>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach


        <div class="row justify-content-center">
            <div class= "col-auto">
                {{$products->links()}}
            </div>
          </div>


            <div id="footer" class="row">


                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="rgb(38, 5, 90)" fill-opacity="2.99"
                        d="M0,288L120,272C240,256,480,224,720,218.7C960,213,1200,235,1320,245.3L1440,256L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z">
                    </path>
                </svg>


            </div>


</body>

</html>
