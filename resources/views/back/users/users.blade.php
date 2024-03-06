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
      <div style="flex: 1">
        <div class="container">
          <a href="https://toplearn.com" class="list-group-item">
            <h4 style="margin-top: 50px">پنل ادمین</h4>
          </a>
        </div>
        <div class="container" style="margin-top: 170x" id="sidebar">
          <div class="panel panel-primary">
            <div class="panel-heading">لیست کاربران</div>
            <div class="panel-body">
              <table style="width:100%;">
                <thead>
                    <tr style="padding-block: 10px;border-bottom: 1px solid black;">
                        <td style="padding-block: 10px;text-align: center;">id</td>
                        <td style="padding-block: 10px;text-align: center;">نام کاربر</td>
                        <td style="padding-block: 10px;text-align: center;">ایمیل</td>
                        <td style="padding-block: 10px;text-align: center;">نقش کاربر</td>
                        
                    </tr>
                </thead>
                <tbody>

                 @foreach ($users as $user)


                                @switch($user->role)
                                @case(1)
                                @php $role = 'مدیر' @endphp
                                @break
                                @case(2)
                                @php $role = 'کاربر' @endphp
                                @break
                                @default
                                @endswitch
                    <tr style="padding-block: 10px;border-bottom: 1px solid rgb(196, 196, 196);">
                        <td style="padding-block: 10px;text-align: center;">{{$user->id}}</td>
                        <td style="padding-block: 10px;text-align: center;">{{$user->name}}</td>
                        <td style="padding-block: 10px;text-align: center;">{{$user->email}}</td>
                        <td style="padding-block: 10px;text-align: center;">{{$role}}</td>
                      <td><a href="{{route('admin.profile',$user->id)}}"
                                            class="badge badge-success">ویرایش</a>
                                        <a href="{{route('admin.user.delete',$user->id)}}"
                                            onclick="return confirm('آیا آیتم مورد نظر حذف شود');"
                                            class="badge badge-warning"> حذف </a> </td>
                     </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
           
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
