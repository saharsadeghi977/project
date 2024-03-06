<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link rel="stylesheet" href="../../css/bootstrap-rtl.css" />
    <script src="../../assets/scripts/jquery-1.10.2.min.js"></script>
    <script src="../../assets/scripts/bootstrap-rtl.js"></script>
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
          <h4><a style="text-decoration: none; color: white;" href="./addProduct.html">افزودن محصولات</a></h4>
          <h4><a style="text-decoration: none; color: white;" href="./productList.html">لیست محصولات</a></h4>
          <h4><a style="text-decoration: none; color: white;" href="./usersList.html">لیست کاربران</a></h4>
          <h4><a style="text-decoration: none; color: white;" href="./usersList.html">دسته بندی ها</a></h4>
          <h4><a style="text-decoration: none; color: white;" href="./usersList.html">خروج</a></h4>
        </div>
      </div>
      <div style="flex: 1">
        <div class="container">
          <a href="#" class="list-group-item">
            <h4 style="margin-top: 50px">پنل ادمین</h4>
          </a>
        </div>
        <div class="container" style="margin-top: 170x" id="sidebar">
          <div class="panel panel-primary">
              @include('back.message')
            <div class="panel-heading">افزودن محصول</div>
          
        
            <div class="panel-body">
              <form action="{{route('admin.products.store')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="title">عنوان محصول </label>
                  <input type="text" class="form-control  @error('name') is-invalid @enderror" id="title"  name="name"  value="{{old('name')}}" />
                </div>
                <div class="form-group">
                  <label for="price">قیمت</label>
                  <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"  name="price"  value="{{old('price')}}"  />
                </div>
                <div class="form-group">
                  <label for="title">انتخاب دسته بندی</label>
                  <div id="output"></div>
                  <select class="chosen-select" name="categories[]" multiple style="width:400px">
                      @foreach ($categories as $cat_id => $cat_name)
                      <option value="{{$cat_id}}">{{$cat_name}}</option>
                      @endforeach

                  </select>
              </div>
              <div class="input-group">
                <span class="input-group-btn">
                    <a href="#" id="lfm" data-input="image" data-preview="holder"
                        class="btn btn-primary">
                        <i class="fa fa-picture-o"></i> انتخاب
                    </a>
                </span>
                <input id="image" class="form-control" type="text" name="image">
            </div>
            <img id="holder" style="margin-top:15px;max-height:100px;">
            <hr>
                <div class="form-group">
                  <label for="description">توضیحات</label>
                  <textarea
                  id="editor" type="text"
                  class="form-control @error('description') is-invalid @enderror"
                  name="description">{{old('description')}}
                  ></textarea>
                </div>
                <div class="form-group">
                  
                  <button type="submit" class="btn btn-success">ذخیره</button>
                  <a href="{{route('admin.products')}}" class="btn btn-warning"> انصراف </a>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
