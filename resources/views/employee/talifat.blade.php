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
        {{Form::label('id', 'نام اثر')}} 
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
        {{Form::label('id', 'سال چاپ')}} 
</div>
<div class="col-sm-8">
        {{Form::date('id','', ['class'=>'form-control'])}}
        
        @error('id')
         <div class="er text text-right">لطفا اسم پدر خود را درج کنید</div>
          @enderror
</div>     
</div>
    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('id', 'حکم')}} 
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
        {{Form::label('id', 'تدوین')}} 
</div>
<div class="col-sm-8">
        {{Form::text('id','', ['class'=>'form-control'])}}
        
        @error('id')
         <div class="er text text-right">لطفا اسم پدر خود را درج کنید</div>
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