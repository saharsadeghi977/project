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
          <h4><a style="text-decoration: none; color: white;" href="./usersList.html">خروج</a></h4>
        </div>
      </div>
      <div style="flex: 1">
        <div class="container">
          <a href="https://toplearn.com" class="list-group-item">
            <h4 style="margin-top: 50px">پنل ادمین</h4>
          </a>
        </div>
        <div class="container" style="margin-top: 170x" id="sidebar">
          <div class="panel panel-primary">
            <div class="panel-heading">افزودن محصول</div>
            <div class="panel-body">
              <form>
                <div class="form-group">
                  <label for="title">عنوان محصول </label>
                  <input type="email" class="form-control" id="title" />
                </div>
                <div class="form-group">
                  <label for="price">قیمت</label>
                  <input type="text" class="form-control" id="price" />
                </div>
                <div class="form-group">
                  <label for="price">نوع محصول</label>
                  <input type="text" class="form-control" id="price" />
                </div>
                <div class="form-group">
                  <label for="image">تصویر</label>
                  <input type="file" class="form-control" id="image" />
                </div>
                <div class="form-group">
                  <label for="description">توضیحات</label>
                  <textarea
                    class="form-control"
                    rows="10"
                    id="description"
                  ></textarea>
                </div>
                <button type="submit" class="btn btn-success btn-block">
                  ثبت
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
