<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap-rtl.css') }}">
    
  </head>
  
  
  <body>
   
    
      <div style="flex: 1">
        <div class="container">
          <a href="#" class="list-group-item">
            <h4 style="margin-top: 50px">پنل ادمین</h4>
          </a>
        </div>
        <div class="container" style="margin-top: 170x" id="sidebar">
          <div class="panel panel-primary">
              @include('back.messages')
            <div class="panel-heading">دسته بندی جدید </div>
          
        
            <div class="panel-body">
              <form action="{{route('admin.categories.store')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="title">عنوان محصول </label>
                  <input type="text" class="form-control  @error('name') is-invalid @enderror" id="title"  name="name"  value="{{old('name')}}" />
                  @error('name')
                  <div class="alert alert-danger">{{$message}}</div>
                  @enderror
                </div>
              
              
            
               
                <div class="form-group">
                  
                  <button type="submit" class="btn btn-success">ذخیره</button>
                  <a href="{{route('admin.categories')}}" class="btn btn-warning"> انصراف </a>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>
  </body>
</html>
