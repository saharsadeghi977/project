<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="../../assets/css/bootstrap-rtl.css">
  <script src="../../assets/scripts/jquery-1.10.2.min.js"></script>
  <script src="../../assets/scripts/bootstrap-rtl.js"></script>
</head>
<div class="container ">
    <a href="https://toplearn.com" class="list-group-item">
        <h4 style="margin-top :50px  ;" >صفحه اصلی </h4>
        
      </a>
</div>
<body>
@include('front.messages')
    <div class=" container " style="margin-top:170x"  id="sidebar" >
        

        <div class="panel panel-primary">
            <div class="panel-heading">فعال سازی حساب کاربری </div>
            <div class="panel-body">
                <form>
                    <div class="form-group">
                      <label for="exampleInputEmail1">ایمیل خود  را وارد کنید </label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="ایمیل">
                    </div>
                    
                    
                    <button type="submit" class="btn btn-success btn-block">تایید</button>
                    <button type="submit" class="btn btn-success btn-block">ورود به سایت</button>
                  </form>
            </div>
        </div>
    </div>
         
</body>


</html>