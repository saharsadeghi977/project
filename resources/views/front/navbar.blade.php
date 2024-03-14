<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ url('assets/css/bootstrap-rtl.css') }}">

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
                        <a class="navbar-brand" href="#"> لوگو</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav ">
                            <li class="active"><a href="#"><span class="sr-only">(current)</span></a></li>
                            <li><a href="#" class="link-dark">درباره ما</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">نمونه محصولات ا<span
                                        class="caret"></span></a>
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

                            <a class="nav_Link" href="#" id="basket">
                             <i class="fas fa-shoping-basket item-icon"></i>
                             @if($cart->count>0)
                             <span class="qty">{{$cart->count}}</span>
                            </a>
                             @endif
                         </form>
                
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">همکاری با ما</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">حساب کاربری <span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    @auth

                                        <li><a href="{{ route('profile', Auth::user()) }}">پروفایل کاربری</a></li>
                                        @if (Auth::user()->role == 1)
                                            <li><a href="{{ route('admin.index') }}" target="_blank">پنل مدیریت</a></li>
                                        @endif
                                        <li>

                                            <form action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-success btn-block ">خروج</button>
                                            </form>
                                        </li>
                                    @else
                                        <li><a href="{{ route('register') }}">ثبت نام</a></li>
                                        <li><a href="{{ route('login') }}">ورود</a></li>
                                    @endauth


                                </ul>
                            </li>
                        </ul>

                        <ul>
                            <li>        </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
                </nav>


            </div>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
                integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
                integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
            </script>
</body>

</html>
