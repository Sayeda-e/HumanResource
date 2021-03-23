<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>منابع بشری</title>
</head>
<body>
<div class="container-fluid bg-primary article">
<div class="row">
<div class="col-lg-9 text text-right mt-4 text text-center">
    <h1>سیستم مدیریت منابع بشری پوهنتون بلخ</h1>
    
    </div>
    <div class="col-lg-3"><a href="{{ route('Home')}}"><img src="{{ URL::to('/image/balkh.jpg')}}"  style="border-radius:50%" width="80" height="80"></a></div>
</div>
</div>
<div class="container">
    <div class="row">
    
    
    @if(Request::is('karmand'))
    <div class="col-sm-8 text text-right mt-5 mb-5 title">
        <h3>کارمندان</h3>
        </div>
        <div class="col-sm-4"><a class="btn btn-primary mt-5 ml-4" href="/">برگشت</a></div>
        @elseif(Request::is('kargar'))
    <div class="col-sm-8 text text-right mt-5 mb-5 title">
        <h3>کارگر</h3>
        </div>
        <div class="col-sm-4"><a class="btn btn-primary mt-5 ml-4" href="/">برگشت</a></div>
        @elseif(Request::is('rokhsati'))
    <div class="col-sm-8 text text-right mt-5 mb-5 title">
        <h3>رخصتی</h3>
        </div>
        <div class="col-sm-4"><a class="btn btn-primary mt-5 ml-4" href="/">برگشت</a></div>
        
        @endif
        

      
       @yield('content')
       
    </div>
    </div>
</body>
</html>