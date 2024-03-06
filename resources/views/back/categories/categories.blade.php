<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link rel="stylesheet" href="../../assets/css/bootstrap-rtl.css" />
    <script src="../../scripts/jquery-1.10.2.min.js"></script>
    <script src="../../scripts/bootstrap-rtl.js"></script>
  </head>
  <body>
    <div style="display: flex">
      <div
        style="
          height: 100vh;
          width: 300px;
          background-color: #428bca;
          color: white;
        "
      >
        <div style="padding-right: 25px">
          <h3 style="margin-block: 20px;">فهرست پنل</h3>
          <h4><a style="text-decoration: none; color: white;" href="{{route('admin.productes.create')}}">لیست محصولات</a></h4>
          <h4><a style="text-decoration: none; color: white;" href="{{route('admin.users')}}">لیست کاربران</a></h4>
          <h4><a style="text-decoration: none; color: white;" href="{{route('admin.categories')}}">لیست دسته بندی ها</a></h4>
        </div>
      </div>
      <div style="flex: 1">
        <div class="container">
          <a href="https://toplearn.com" class="list-group-item">
            <h4 style="margin-top: 50px">پنل ادمین</h4>
          </a>
        </div>
        @include('back.messages')
        <div class="container" style="margin-top: 170x" id="sidebar">
          <div class="panel panel-primary">
            <div class="panel-heading"> <a href="{{route('admin.categories.create')}}" class="btn btn-success btn-fw  ">دسته
                بندی جدید</a></div>
            <div class="panel-body">
              <table style="width:100%;">
                <thead>
                    <tr style="padding-block: 10px;border-bottom: 1px solid black;">
                        <td style="padding-block: 10px;text-align: center;">نام دسته بندی</td>
                       
                        <td style="padding-block: 10px;text-align: center;">نام مستعار</td>
                     
                      
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr style="padding-block: 10px;border-bottom: 1px solid rgb(196, 196, 196);">
                     
                        <td style="padding-block: 10px;text-align: center;">{{$product->name}}</td>
                     
                     
                        <td style="padding-block: 10px;text-align: center;">    <a href="{{route('admin.categories.edit',$category->id)}}"
                          class="badge badge-success">ویرایش</a>
                      <a href="{{route('admin.categories.destroy',$category->id)}}"
                          onclick="return confirm('آیا آیتم مورد نظر حذف شود');"
                          class="badge badge-warning"> حذف </a></td>
                        
                    
                    </tr>
                </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>