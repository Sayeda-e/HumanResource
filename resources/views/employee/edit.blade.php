@extends('app.main');

@section('content')
<div class="col-sm-12"><a class="btn btn-primary mt-5 ml-1" href="/employee/listKarmandan">برگشت</a></div>

<div class="mt-5 col-sm-9">
{!! Form::open(['url' => 'employee/edit']) !!}

<div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('id', 'ای دی')}} 
</div>
<div class="col-sm-8">
        {{Form::text('id',$stuffs->id, ['class'=>'form-control'])}}
        
</div>
        
</div>

    </div>

<div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('name', 'نام')}} 
</div>
<div class="col-sm-8">
        {{Form::text('name',$stuffs->name, ['class'=>'form-control'])}}
       
                         
</div>
        
</div>

    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('E_name', 'اسم به انگلیسی')}} 
</div>
<div class="col-sm-8">
        {{Form::text('E_name',$stuffs->E_name, ['class'=>'form-control'])}}
     
        
</div>
        
</div>

    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('lastname', 'تخلص')}} 
</div>
<div class="col-sm-8">
        {{Form::text('lastname',$stuffs->lastname, ['class'=>'form-control'])}}
      
</div>
        
</div>

    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('E_lastname', 'تخلص به انگلیسی')}} 
</div>
<div class="col-sm-8">
        {{Form::text('E_lastname',$stuffs->E_lastname, ['class'=>'form-control'])}}
      
</div>
        
</div>

    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('Fname', 'نام پدر')}} 
</div>
<div class="col-sm-8">
        {{Form::text('Fname',$stuffs->Fname, ['class'=>'form-control'])}}
       
   
</div>
        
</div>

    </div>


    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('padarkalan', 'پدرکلان')}} 
</div>
<div class="col-sm-8">
        {{Form::text('padarkalan',$stuffs->padarkalan, ['class'=>'form-control'])}}
       
</div>
        
</div>

    </div>


    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('tarikhtawalod', 'تاریخ تولد')}} 
</div>
<div class="col-sm-8">
        {{Form::date('tarikhtawalod',$stuffs->tarikhtawalod, ['class'=>'form-control'])}}
       
</div>
        
</div>

    </div>



    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('numberTazkira', 'نمبر تذکره')}} 
</div>
<div class="col-sm-8">
        {{Form::text('numberTazkira',$stuffs->numberTazkira, ['class'=>'form-control'])}}
       
</div>
        
</div>

    </div>



    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('safha', 'صفحه')}} 
</div>
<div class="col-sm-8">
        {{Form::text('safha',$stuffs->safha, ['class'=>'form-control'])}}
      

</div>
        
</div>

    </div>




    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('jold', 'جلد')}} 
</div>
<div class="col-sm-8">
        {{Form::text('jold',$stuffs->jold, ['class'=>'form-control'])}}
        
</div>
        
</div>

    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('sokonatAsly', 'سکونت اصلی')}} 
</div>
<div class="col-sm-8">
        {{Form::text('sokonatAsly',$stuffs->sokonatAsly, ['class'=>'form-control','placeholder'=>'ولایت/ولسوالی/ناحیه'])}}
       
</div>
        
</div>

    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('sokonatFehly', 'سکونت فعلی')}} 
</div>
<div class="col-sm-8">
        {{Form::text('sokonatFehly',$stuffs->sokonatFehly, ['class'=>'form-control','placeholder'=>'ولایت/ولسوالی/ناحیه'])}}
       
</div>
        
</div>

    </div>



    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('jensiat', 'جنسیت')}} 
</div>
<div class="col-sm-8">
<select class="form-control" name="jensiat">
          <option ></option>
          <option value="مرد" {{ $stuffs->jensiat=='مرد' ? 'selected' : ''}}>مرد</option>
          <option value="زن" {{ $stuffs->jensiat=='زن' ? 'selected' : ''}}>زن</option>
      </select>
     
</div>
        
</div>

    </div>



    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('phone', 'تماس')}} 
</div>
<div class="col-sm-8">
        {{Form::text('phone',$stuffs->phone, ['class'=>'form-control'])}}
       
</div>
        
</div>

    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('email', 'ایمیل آدرس')}} 
</div>
<div class="col-sm-8">
        {{Form::text('email',$stuffs->email, ['class'=>'form-control'])}}
  
</div>
        
</div>

    </div>


    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('halatMadany', 'حالت مدنی')}} 
</div>
<div class="col-sm-8">
      <select class="form-control" name="halatMadany">
          <option></option>
          <option  value="مجرد" {{ $stuffs->halatMadany=='مجرد' ? 'selected' : ''}}>مجرد</option>
          <option  value="متاهل" {{ $stuffs->halatMadany=='متاهل' ? 'selected' : ''}}>متاهل</option>
      </select>
      
</div>
        
</div>

    </div>


    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('mashMaslaky', 'معاش مسلکی')}} 
</div>
<div class="col-sm-8">
        {{Form::number('mashMaslaky',$stuffs->mashMaslaky, ['class'=>'form-control'])}}
     
</div>
        
</div>

    </div>


    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('mashShakhsy', 'معاش شخصی')}} 
</div>
<div class="col-sm-8">
        {{Form::number('mashShakhsy',$stuffs->mashShakhsy, ['class'=>'form-control'])}}
 
</div>
        
</div>

    </div>


    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('codeTashkilaty', 'کود تشکیلاتی')}} 
</div>
<div class="col-sm-8">
        {{Form::text('codeTashkilaty',$stuffs->codeTashkilaty, ['class'=>'form-control'])}}
      
</div>
        
</div>

    </div>


    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('milyat', 'ملیت')}} 
</div>
<div class="col-sm-8">
        {{Form::text('milyat',$stuffs->milyat, ['class'=>'form-control'])}}
       
</div>
        
</div>

    </div>


    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('sazmanSiasy', 'عضویت در سازمان های سیاسی')}} 
</div>
<div class="col-sm-8">
        {{Form::text('sazmanSiasy',$stuffs->sazmanSiasy, ['class'=>'form-control'])}}

</div>
        
</div>

    </div>


    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('groupeKhoon', 'گروپ خون')}} 
</div>
<div class="col-sm-8">
        {{Form::text('groupeKhoon',$stuffs->groupeKhoon, ['class'=>'form-control'])}}
        
</div>
        
</div>

    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('role', 'رول')}} 
</div>
<div class="col-sm-8">
      <select class="form-control"  name="role">
          <option></option>
          <option  value="کارمند" {{ $stuffs->role=='کارمند' ? 'selected' : ''}}>کارمند</option>
          <option  value="استاد" {{ $stuffs->role=='استاد' ? 'selected' : ''}}>استاد</option>
      </select>
      
</div>
        
</div>

    </div>

   
    
    <div class="col-sm-11">
        {{Form::submit('ثبت',['class'=>'btn btn-success', 'id'=>'save'])}}
    </div>
    
    
{!! Form::close() !!}

</div>




@endsection