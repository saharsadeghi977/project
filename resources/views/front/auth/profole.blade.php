<section id="intro2" class="clearfix"></section>

<main class="container main2">
  <nav aria-label="breadcrumb ">
    <ol class="breadcrumb bgcolor">
      <li class="breadcrumb-item"><a href="#">خانه</a></li>
      <li class="breadcrumb-item active" aria-current="page">ثبت نام</li>
    </ol>
  </nav>




  @include('front.messages')

  <div class="d-flex justify-content-center">
    <form action="{{route('profileupdate',$user->id)}}" method="POST">
      @csrf
      <div class="form-group">
        <label >نام و نام خانوادگی</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}">
        @error('name')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
      </div>

      <div class="form-group">
        <label >ایمیل</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
          value="{{$user->email}}">
        @error('email')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
      </div>
      
      <div class="form-group">
        <label >رمز ورود</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
        @error('password')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
      </div>

      <div class="form-group">
        <label >تکرار رمز ورود</label>
        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
          name="password_confirmation">
        @error('password_confirmation')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
      </div>


      <div class="form-group">
       
        <button type="submit" class="btn btn-success">ویرایش پروفایل</button>
      </div>

    </form>


  </div>
</main>