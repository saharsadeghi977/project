<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="../../assets/css/bootstrap-rtl.css">
  <script src="../../assets/scripts/jquery-1.10.2.min.js"></script>
  <script src="../../scripts/bootstrap-rtl.js"></script>
</head>

<body>

  <div class="container">
    <div id="header" class="row">
      <div class="navbar navbar-inverse navbar-fixed-top  " style="background-color:rgb(31, 41, 131) ">
        <div class="container-fluid ">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
              data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="https://www.w3school.com/"> لوگو</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav ">
              <li class="active"><a href="#"><span class="sr-only">(current)</span></a></li>
              <li><a href="#" class="link-dark">درباره ما</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">نمونه محصولات ا<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">زنانه </a></li>
                  <li><a href="#">مردانه</a></li>
                  <li><a href="#">بچه گانه</a></li>


                </ul>
              </li>
            </ul>
            <form class="navbar-form navbar-left">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="جستجو محصولات">
              </div>
              <button type="submit" class="btn btn-default navbar-btn">
                <li class="glyphicon glyphicon-search"></i>

              </button>

            </form>
            <form class="navbar-form navbar-left">

              <button type="submit" class="btn btn-default navbar-btn">
                <li class="glyphicon glyphicon-"><a href="./cart.html">سبد خرید</a></i>

              </button>

            </form>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">حساب کاربری</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">همکاری با ما <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">درباره وب</a></li>
                  <li><a href="#">استخدام</a></li>
                  <li><a href="#">کاراموزی</a></li>
                  <li><a href="#">تماس با ما</a></li>

                </ul>
              </li>
            </ul>

            <ul>
              <li></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
        </nav>


      </div>


    </div>

  </div>

  </div>



      </div>
</div>


<div style="width: 100%;min-height: 900px; margin-top: 100px; display: flex; align-items: center; flex-direction: column; gap: 10px;">
    <button style="border: none;background-color: green;padding: 10px; color: white; font-size: 20px; border-radius: 5px;">پرداخت نهایی</button>
    @if($cart->count>0)
    <table style="width: 80%;">
        <thead>
            <tr style="padding-block: 10px;border-bottom: 1px solid black;">
                <td style="padding-block: 10px;text-align: center;">num</td>
                <td style="padding-block: 10px;text-align: center;">نام</td>
                <td style="padding-block: 10px;text-align: center;">تصویر</td>
                <td style="padding-block: 10px;text-align: center;">نوع</td>
                <td style="padding-block: 10px;text-align: center;">تعداد</td>
                <td style="padding-block: 10px;text-align: center;">قیمت</td>
                <td style="padding-block: 10px;text-align: center;">قیمت نهایی</td>
            </tr>
        </thead>
        <tbody>
          @foreach($cart->products as $key=>$item)
            <tr style="padding-block: 10px;border-bottom: 1px solid rgb(196, 196, 196);">
              <td style="padding-block: 10px;text-align: center;">{{$key+1}}</td>
              <td style="padding-block: 10px;text-align: center;">{{$item['product']->title}}</td>
                <td style="padding-block: 10px;text-align: center;"><img width="50px" src="{{url()->asset("storage/".$item['product']->image)}}" ></td>
                <td style="padding-block: 10px;text-align: center;">بچه گانه </td>
                <td style="padding-block: 10px;text-align: center;"><form action="" method="post" >
                  @csrf
                  @methode
                  ("patch")
                 
                  <div class="d-inline-block me-1">
                    <input type="number" name="count" id="count" class="form-control" vlue="{{$item->count}}">
                  </div>
                  <div class="d-inline-block me-1">
                    <button class="btn btn-warning">ویرایش

                    </button>

                  </div>
                  </form>
                

                </td>
                <td style="padding-block: 10px;text-align: center;">{{number_format($item['product']->price)}}$</td>
                <td style="padding-block: 10px;text-align: center;">{{$item['product']->price * $item->count}}$</td>
                <td style="padding-block: 10px;text-align: center;">
                <form  action="" method="post">
                  @csrf
                  @method("DELETE")
                  <bottm class= "btn btn-warning"> حذف</bottm></form></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@else

    <div class="col-auto">
      <a  class="btn-btn-warning" href={{route{"home"}}}>سبد خرید  شما خالیست</a>
    </div>
    @endif
 
   
<div id="footer" class="row" >


<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
<path fill="rgb(38, 5, 90)" fill-opacity="2.99" d="M0,288L120,272C240,256,480,224,720,218.7C960,213,1200,235,1320,245.3L1440,256L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
</svg>


</div>

</body>

</html>