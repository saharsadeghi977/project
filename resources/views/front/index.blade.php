<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="{{url('assets/css/bootstrap-rtl.css')}}">
  <script src="{{url('/assets/scripts/jquery-1.10.2.min.js')}}"></script>
  <script src="{{url('/assets/scripts/bootstrap-rtl.js')}}"></script>
  
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
  
 


@include('front.footer')

</body>

</html>