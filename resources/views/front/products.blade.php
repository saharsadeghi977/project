

  @include('front.navbar')
 
  
  <div class="container">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><button type="submit" class="btn btn-primery btn-block"> محصولات پرفروش</button></a></li>

     <li><a href="#"><button type="submit" class="btn btn-primery btn-block">  محصولات تخفیف خورده</button>  </a> </li>
     <li><a href="#"><button type="submit" class="btn btn-primery btn-block">  </button>  </a> </li>
    </ul>
  </div>
  {{-- @foreach($products as $product) --}}
  <div class="container" style="margin-top: 10px">
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        {{-- <img src="{{url()->asset("storage/".$product->image)}}" alt="..."> --}}
        <div class="caption">
          <h3>آموزش بوت استرپ (BootStrap) </h3>
          <h4 >25000000</h4>
          <p><a href="./productDetail.html" class="btn btn-primary" role="button">جزئیات</a> </p>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="https://toplearn.com/img/course/img-course-%D8%AF%D9%88-%D8%B4%D9%86%D8%A8%D9%87-%DB%B2%DB%B7-%D8%A2%D8%B0%D8%B1-%DB%B1%DB%B3%DB%B9%DB%B6-57906034-1014.jpg" alt="...">
              <div class="caption">
                <h3> آموزش حرفه ای کار با Alexa  </h3>
                <h4 >450000</h4>
                <p><a href="./productDetail.html" class="btn btn-primary" role="button">جزئیات</a></p>
              </div>
            </div>
          </div>


          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="https://toplearn.com/img/course/img-course-%D8%B3%D9%87-%D8%B4%D9%86%D8%A8%D9%87-%DB%B5-%D8%AF%DB%8C-%DB%B1%DB%B3%DB%B9%DB%B6-54859757-1114.jpg" alt="...">
              <div class="caption">
                <h3>آموزش بوت استرپ (BootStrap) </h3>
                <h4 >3500000</h4>
                <p><a href="./productDetail.html" class="btn btn-primary" role="button">جزئیات</a></p>
              </div>
            </div>
          
            </div>
    
            
           
  





