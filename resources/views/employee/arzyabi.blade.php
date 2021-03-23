@extends('app.main')

@section('content')
<div class="mt-5 col-sm-9">
{!! Form::open(['url' => '']) !!}

<div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('id', 'ای دی')}} 
</div>
<div class="col-sm-8">
        {{Form::text('id','', ['class'=>'form-control'])}}
        
        @error('id')
         <div class="er text text-right">لطفا اسم پدر خود را درج کنید</div>
          @enderror
</div>     
</div>
    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('id', 'تاریخ')}} 
</div>
<div class="col-sm-8">
        {{Form::text('id','', ['class'=>'form-control'])}}
       
</div>     
</div>
    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('id', 'نوع ارزیابی')}} 
</div>
<div class="col-sm-8">
       <select class="form-control">
           <option>------</option>
           <option>امتحانی</option>
           <option>سالانه</option>
       </select>
       
</div>     
</div>
    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('id', 'نمره')}} 
</div>
<div class="col-sm-8">
        {{Form::text('id','', ['class'=>'form-control'])}}
       
</div>     
</div>
    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('id', 'نتیجه')}} 
</div>
<div class="col-sm-8">
        {{Form::text('id','', ['class'=>'form-control'])}}
       
</div>     
</div>
    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('id', 'قدم')}} 
</div>
<div class="col-sm-8">
        {{Form::text('id','', ['class'=>'form-control'])}}
       
</div>     
</div>
    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('id', 'امتیاز')}} 
</div>
<div class="col-sm-8">
        {{Form::text('id','', ['class'=>'form-control'])}}
       
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