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

<body>

  @include('front.navbar')

<div style="width: 100%;min-height: 900px;display: flex;justify-content: center; align-items: center;gap: 5px; flex-direction: column;">
    <img src="{{ url()->asset('storage/' . $product->image) }}">
    <div style="display: flex;justify-content: center; flex-direction: column;width: 50%; align-items: center; gap: 15px;">
        <div style="display: flex;justify-content: space-between; width: 100%;;">
            <h2>{{ $product->title }} </h2>
            <h3 ><span style="margin-left: 4px;">{{ number_format($product->price) }}$</span></h3>
        </div>
        <form action="{{route('add_to_cart',$product->id)}}" method="POST">
          @csrf
        <button style="border: none;background-color: green;padding: 10px; color: white; font-size: 20px; border-radius: 5px;">افزودن به سبد خرید</button>
        </form>
        <h3 style="text-align: justify;line-height: 40px;"></h3>

    </div>
</div>

<div id="footer" class="row" >


<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
<path fill="rgb(38, 5, 90)" fill-opacity="2.99" d="M0,288L120,272C240,256,480,224,720,218.7C960,213,1200,235,1320,245.3L1440,256L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
</svg>


</div>

</body>

</html>