@extends('app.main');

@section('content')
<div class="col-sm-12"><a class="btn btn-primary mt-5 ml-1" href="/employee/listKarmandan">برگشت</a></div>
<div class="mt-5 col-sm-9">
{!! Form::open(['url' => 'karmandJaded/karmand']) !!}

<div class="form-group">
    <div class="row">
    <div class="col-sm-2 text text-right mr-5">
        {{Form::label('id', 'ای دی')}} 
</div>
<div class="col-sm-8">
        
        {{Form::text('id','', ['class'=>'form-control'])}}
        @error('id')
         <div class="er text text-right">لطفا ای دی را وارد نمایید</div>
          @enderror
</div>
        
</div>

    </div>

<div class="form-group">
    <div class="row">
    <div class="col-sm-2 text text-right mr-5">
        {{Form::label('name', 'نام')}} 
</div>
<div class="col-sm-8">
        {{Form::text('name','', ['class'=>'form-control'])}}
        @error('name')
         <div class="er text text-right">لطفا اسم را وارد کنید</div>
          @enderror
                         
</div>
        
</div>

    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-2 text text-right mr-5">
        {{Form::label('E_name', 'اسم به انگلیسی')}} 
</div>
<div class="col-sm-8">
        {{Form::text('E_name','', ['class'=>'form-control'])}}
        @error('E_name')
         <div class="er text text-right">لطفا اسم را وارد کنید</div>
          @enderror
        
</div>
        
</div>

    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-2 text text-right mr-5">
        {{Form::label('lastname', 'تخلص')}} 
</div>
<div class="col-sm-8">
        {{Form::text('lastname','', ['class'=>'form-control'])}}
        @error('lastname')
         <div class="er text text-right">لطفا تخلص را وارد کنید</div>
          @enderror
</div>
        
</div>

    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-2 text text-right mr-5">
        {{Form::label('E_lastname', 'تخلص به انگلیسی')}} 
</div>
<div class="col-sm-8">
        {{Form::text('E_lastname','', ['class'=>'form-control'])}}
        @error('E_lastname')
         <div class="er text text-right">لطفا تخلص را وارد کنید</div>
          @enderror
</div>
        
</div>

    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-2 text text-right mr-5">
        {{Form::label('Fname', 'نام پدر')}} 
</div>
<div class="col-sm-8">
        {{Form::text('Fname','', ['class'=>'form-control'])}}
        @error('Fname')
         <div class="er text text-right">لطفا اسم پدر را وارد کنید</div>
          @enderror
   
</div>
        
</div>

    </div>


    <div class="form-group">
    <div class="row">
    <div class="col-sm-2 text text-right mr-5">
        {{Form::label('padarkalan', 'پدرکلان')}} 
</div>
<div class="col-sm-8">
        {{Form::text('padarkalan','', ['class'=>'form-control'])}}
        @error('padarkalan')
         <div class="er text text-right">لطفا اسم پدرکلان را وارد کنید</div>
          @enderror
</div>
        
</div>

    </div>


    <div class="form-group">
    <div class="row">
    <div class="col-sm-2 text text-right mr-5">
        {{Form::label('tarikhtawalod', 'تاریخ تولد')}} 
</div>
<div class="col-sm-8">
        {{Form::date('tarikhtawalod','', ['class'=>'form-control'])}}
        @error('tarikhtawalod')
         <div class="er text text-right">لطفا تاریخ را وارد کنید</div>
          @enderror
</div>
        
</div>

    </div>



    <div class="form-group">
    <div class="row">
    <div class="col-sm-2 text text-right mr-5">
        {{Form::label('numberTazkira', 'نمبر تذکره')}} 
</div>
<div class="col-sm-8">
        {{Form::text('numberTazkira','', ['class'=>'form-control'])}}
        @error('numberTazkira')
         <div class="er text text-right">لطفا نمبر تذکره را وارد کنید</div>
          @enderror
</div>
        
</div>

    </div>



    <div class="form-group">
    <div class="row">
    <div class="col-sm-2 text text-right mr-5">
        {{Form::label('safha', 'صفحه')}} 
</div>
<div class="col-sm-8">
        {{Form::text('safha','', ['class'=>'form-control'])}}
        @error('safha')
         <div class="er text text-right">لطفا صفحه تذکره را وارد کنید</div>
          @enderror

</div>
        
</div>

    </div>




    <div class="form-group">
    <div class="row">
    <div class="col-sm-2 text text-right mr-5">
        {{Form::label('jold', 'جلد')}} 
</div>
<div class="col-sm-8">
        {{Form::text('jold','', ['class'=>'form-control'])}}
        @error('jold')
         <div class="er text text-right">لطفا جلد تذکره را وارد کنید</div>
          @enderror
</div>
        
</div>

    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-2 text text-right mr-5">
        {{Form::label('sokonatAsly', 'سکونت اصلی')}} 
</div>
<div class="col-sm-8">
        {{Form::text('sokonatAsly','', ['class'=>'form-control','placeholder'=>'ولایت/ولسوالی/ناحیه'])}}
        @error('sokonatAsly')
         <div class="er text text-right">لطفا سکونت اصلی را وارد کنید</div>
          @enderror
</div>
        
</div>

    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-2 text text-right mr-5">
        {{Form::label('sokonatFehly', 'سکونت فعلی')}} 
</div>
<div class="col-sm-8">
        {{Form::text('sokonatFehly','', ['class'=>'form-control','placeholder'=>'ولایت/ولسوالی/ناحیه'])}}
        @error('sokonatFehly')
         <div class="er text text-right">لطفا سکونت فعلی را وارد کنید</div>
          @enderror
</div>
        
</div>

    </div>



    <div class="form-group">
    <div class="row">
    <div class="col-sm-2 text text-right mr-5">
        {{Form::label('jensiat', 'جنسیت')}} 
</div>
<div class="col-sm-8">
<select class="form-control" name="jensiat">
          <option></option>
          <option>مرد</option>
          <option>زن</option>
      </select>
      @error('jensiat')
         <div class="er text text-right">لطفا یکی از گزینه های ذیل را انتخاب کنید</div>
          @enderror
</div>
        
</div>

    </div>



    <div class="form-group">
    <div class="row">
    <div class="col-sm-2 text text-right mr-5">
        {{Form::label('phone', 'تماس')}} 
</div>
<div class="col-sm-8">
        {{Form::text('phone','', ['class'=>'form-control'])}}
        @error('phone')
         <div class="er text text-right">لطفا شماره تماس را وارد کنید</div>
          @enderror
</div>
        
</div>

    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-2 text text-right mr-5">
        {{Form::label('email', 'ایمیل آدرس')}} 
</div>
<div class="col-sm-8">
        {{Form::text('email','', ['class'=>'form-control'])}}
  
</div>
        
</div>

    </div>


    <div class="form-group">
    <div class="row">
    <div class="col-sm-2 text text-right mr-5">
        {{Form::label('halatMadany', 'حالت مدنی')}} 
</div>
<div class="col-sm-8">
      <select class="form-control" name="halatMadany">
          <option></option>
          <option>مجرد</option>
          <option>متاهل</option>
      </select>
      @error('halatMadany')
         <div class="er text text-right">لطفا یکی از گزینه های ذیل را انتخاب کنید</div>
          @enderror
</div>
        
</div>

    </div>


    <div class="form-group">
    <div class="row">
    <div class="col-sm-2 text text-right mr-5">
        {{Form::label('mashMaslaky', 'معاش مسلکی')}} 
</div>
<div class="col-sm-8">
        {{Form::number('mashMaslaky','', ['class'=>'form-control'])}}
     
</div>
        
</div>

    </div>


    <div class="form-group">
    <div class="row">
    <div class="col-sm-2 text text-right mr-5">
        {{Form::label('mashShakhsy', 'معاش شخصی')}} 
</div>
<div class="col-sm-8">
        {{Form::text('mashShakhsy','', ['class'=>'form-control'])}}
 
</div>
        
</div>

    </div>


    <div class="form-group">
    <div class="row">
    <div class="col-sm-2 text text-right mr-5">
        {{Form::label('codeTashkilaty', 'کود تشکیلاتی')}} 
</div>
<div class="col-sm-8">
        {{Form::text('codeTashkilaty','', ['class'=>'form-control'])}}
        @error('codeTashkilaty')
         <div class="er text text-right">لطفا کود تشکیلاتی را وارد کنید</div>
          @enderror
</div>
        
</div>

    </div>


    <div class="form-group">
    <div class="row">
    <div class="col-sm-2 text text-right mr-5">
        {{Form::label('milyat', 'ملیت')}} 
</div>
<div class="col-sm-8">
        {{Form::text('milyat','', ['class'=>'form-control'])}}
        @error('milyat')
         <div class="er text text-right">لطفا ملیت را وارد کنید</div>
          @enderror
 
</div>
        
</div>

    </div>


    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('sazmanSiasy', 'عضویت در سازمان های سیاسی')}} 
</div>
<div class="col-sm-8">
        {{Form::text('sazmanSiasy','', ['class'=>'form-control'])}}

</div>
        
</div>

    </div>


    <div class="form-group">
    <div class="row">
    <div class="col-sm-2 text text-right mr-5">
        {{Form::label('groupeKhoon', 'گروپ خون')}} 
</div>
<div class="col-sm-8">
        {{Form::text('groupeKhoon','', ['class'=>'form-control'])}}
        @error('groupeKhoon')
         <div class="er text text-right">لطفا گروپ خون را وارد کنید</div>
          @enderror
</div>
        
</div>

    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-2 text text-right mr-5">
        {{Form::label('role', 'رول')}} 
</div>
<div class="col-sm-8">
      <select class="form-control"  name="role">
          <option></option>
          <option>کارمند</option>
          <option>استاد</option>
      </select>
      @error('role')
         <div class="er text text-right">لطفا یکی از گزینه های ذیل را انتخاب کنید</div>
          @enderror
</div>
        
</div>

    </div>


    <div class="form-group">
    <div class="row">
    <div class="col-sm-2 text text-right mr-5">
        {{Form::label('photo', 'عکس')}} 
</div>
<div class="col-sm-8" id="folder">
{{Form::file('photo')}}
      @error('photo')
         <div class="er text text-right">لطفا عکس کارمند را وارد کنید</div>
          @enderror
</div>
        
</div>

    </div>

   
    
    <div class="col-sm-11">
        {{Form::submit('ثبت',['class'=>'btn btn-success', 'id'=>'save'])}}
    </div>
    
    
{!! Form::close() !!}

</div>

<div class="col-sm-3 text text-center mt-5 parent">

@include('employee.leftnavbar')
</div>


@endsection