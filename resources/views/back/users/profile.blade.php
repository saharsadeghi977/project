

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>مدیریت کاربران</title>

    <link rel="stylesheet" href="../../assets/css/bootstrap-rtl.css" />
    <script src="../../scripts/jquery-1.10.2.min.js"></script>
    <script src="../../scripts/bootstrap-rtl.js"></script>
  </head>
  <body>
    @include('back.sidebar')

<div class="row">


    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">


                <form action="{{route('admin.profileupdate',$user->id)}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">نام و نام خانوادگی</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{$user->name}}">
                        @error('name')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="title">ایمیل</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{$user->email}}">
                        @error('email')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="title">تلفن همراه</label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror"
                            name="phone" value="{{$user->phone}}">
                        @error('phone')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="title">رمز ورود</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password">
                        @error('password')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="title">تکرار رمز ورود</label>
                        <input type="password"
                            class="form-control @error('password_confirmation') is-invalid @enderror"
                            name="password_confirmation">
                        @error('password_confirmation')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="title"></label>
                        <button type="submit" class="btn btn-success">ویرایش پروفایل</button>
                        <a href="{{route('admin.users')}}" class="btn btn-warning"> انصراف </a>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>