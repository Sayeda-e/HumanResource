@extends('app.main')
@section('content')


<div class=" row">

     <div id="roun"> 
         
    <div class=" rounded rounded-corner emp">
    <a href="employee/listKarmandan" class="btn btn-light">
    <div><h3>لیست کارمندان</h3></div>
   
    <div><img src="{{ URL::to('/image/employee.png')}}" alt="Card image" width="150" height="150" /></div>
    </a>
    </div>

    <div class=" rounded rounded-corner emp">
    <a href="karmand" class="btn btn-light">
    <div><h3>خلص سوانح</h3></div>
   
    <div><img src="{{ URL::to('/image/employee.png')}}" alt="Card image" width="150" height="150" /></div>
    </a>
    </div>
    


    
    <div class=" rounded rounded-corner emp">
    <a href="kargar" class="btn btn-light">
    <div><h3>ارزیابی</h3></div>
   
    <div><img src="{{ URL::to('/image/employee.png')}}" alt="Card image" width="150" height="150" /></div>
    </a>
    </div>
    

   
    
    <div class=" rounded rounded-corner emp">
    <a href="rokhsati" class="btn btn-light">
    <div><h3>تقاعد</h3></div>
   
    <div><img src="{{ URL::to('/image/employee.png')}}" alt="Card image" width="150" height="150" /></div>
    </a>
    </div>

</div>
   </div>
@endsection