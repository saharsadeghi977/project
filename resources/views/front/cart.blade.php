<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cart</title>

  <link rel="stylesheet" href="../../assets/css/bootstrap-rtl.css">
  <script src="../../assets/scripts/jquery-1.10.2.min.js"></script>
  <script src="../../scripts/bootstrap-rtl.js"></script>
</head>

<body>
  @include('front.navbar')
 
<div style="width: 100%;min-height: 900px; margin-top: 100px; display: flex; align-items: center; flex-direction: column; gap: 10px;">
    <button style="border: none;background-color: green;padding: 10px; color: white; font-size: 20px; border-radius: 5px;">پرداخت نهایی</button>
    
   
    <table style="width: 80%;">
        <thead>
         
            <tr style="padding-block: 10px;border-bottom: 1px solid black;" >
                <td style="padding-block: 10px;text-align: center;">num</td>
                <td style="padding-block: 10px;text-align: center;">نام</td>
                <td style="padding-block: 10px;text-align: center;">تصویر</td>
                <td style="padding-block: 10px;text-align: center;">تعداد</td>
                <td style="padding-block: 10px;text-align: center;">قیمت</td>
                <td style="padding-block: 10px;text-align: center;">قیمت نهایی</td>
            </tr>
        </thead>
        <tbody>
         @php $total=0 @endphp
         @if (session('cart'))
         @foreach(session('cart') as $id=>$item)
         @php $total+=$item['price']*$item['count'] @endphp
            <tr style="padding-block: 10px;border-bottom: 1px solid rgb(196, 196, 196);" data-id="{{$id}}">
              <td style="padding-block: 10px;text-align: center;"></td>
              <td style="padding-block: 10px;text-align: center;">{{$item['title']}}</td>
                <td style="padding-block: 10px;text-align: center;"><img width="50px" src="{{url()->asset("storage/".$item['image'])}}" ></td>
                <td style="padding-block: 10px;text-align: center;"><form action=""  >
                 
                 
                  <div class="d-inline-block me-1">
                    <input type="number" name="count" id="count" class="form-control" vlue="{{$item['count']}}" placeholder="{{$item['count']}}"  >

                  </div>
              
                  </form>
                 
                

                </td>
                <td style="padding-block: 10px;text-align: center;">{{number_format($item['price'])}}$</td>
                <td style="padding-block: 10px;text-align: center;">{{$item['price'] * $item['count']}}$</td>
                <td style="padding-block: 10px;text-align: center;">    
                 
                  
                    @csrf
                    <a href="{{route('update')}}"
                    
                    class="badge badge-warning"> ویرایش</a>
                 
              <a href="{{route('remove')}}"
                  onclick="return confirm('؟آیا آیتم مورد نظر از سبد خرید  حذف شود');"
                  class="badge badge-warning"> حذف </a></td>
            </tr>
            
           @endforeach
           @endif
        </tbody>
    </table>
</div>


  
 
   
<div id="footer" class="row" >


<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
<path fill="rgb(38, 5, 90)" fill-opacity="2.99" d="M0,288L120,272C240,256,480,224,720,218.7C960,213,1200,235,1320,245.3L1440,256L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
</svg>


</div>

</body>

</html>