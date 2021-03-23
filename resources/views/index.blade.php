@extends('app.main')

@section('content')


  
  

    
    <div class=" row">

     <div id="round">
    <div class=" rounded rounded-corner click">
    <a href="karmand" class="btn btn-light">
    <div><h3>کارمندان</h3></div>
   
    <div><img src="{{ URL::to('/image/employee.png')}}" alt="Card image" width="200" height="200" /></div>
    </a>
    </div>
    


    
    <div class=" rounded rounded-corner click">
    <a href="kargar" class="btn btn-light">
    <div><h3>کارگران</h3></div>
   
    <div><img src="{{ URL::to('/image/kargar.jpg')}}" alt="Card image" width="200" height="200" /></div>
    </a>
    </div>
    

   
    
    <div class=" rounded rounded-corner click">
    <a href="rokhsati" class="btn btn-light">
    <div><h3>رخصتی</h3></div>
   
    <div><img src="{{ URL::to('/image/rokhsati.jpeg')}}" alt="Card image" width="200" height="200" /></div>
    </a>
    </div>

</div>
   </div>
@endsection