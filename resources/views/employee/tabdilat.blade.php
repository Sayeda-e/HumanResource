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
        {{Form::label('id', 'حکم')}} 
</div>
<div class="col-sm-8">
        {{Form::text('id','', ['class'=>'form-control'])}}
       
</div>     
</div>
    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('id', 'اداره قبلی')}} 
</div>
<div class="col-sm-8">
        {{Form::text('id','', ['class'=>'form-control'])}}
       
</div>     
</div>
    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('id', 'اداره فعلی')}} 
</div>
<div class="col-sm-8">
        {{Form::text('id','', ['class'=>'form-control'])}}
       
</div>     
</div>
    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('id', 'بست قبلی')}} 
</div>
<div class="col-sm-8">
        {{Form::text('id','', ['class'=>'form-control'])}}
       
</div>     
</div>
    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('id', 'بست فعلی')}} 
</div>
<div class="col-sm-8">
        {{Form::text('id','', ['class'=>'form-control'])}}
       
</div>     
</div>
    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('id', 'عنوان بست')}} 
</div>
<div class="col-sm-8">
        {{Form::text('id','', ['class'=>'form-control'])}}
       
</div>     
</div>
    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('id', 'کود بست')}} 
</div>
<div class="col-sm-8">
        {{Form::text('id','', ['class'=>'form-control'])}}
       
</div>     
</div>
    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('id', 'درجه')}} 
</div>
<div class="col-sm-8">
        {{Form::text('id','', ['class'=>'form-control'])}}
       
</div>     
</div>
    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('id', 'تاریخ شروع')}} 
</div>
<div class="col-sm-8">
        {{Form::text('id','', ['class'=>'form-control'])}}
       
</div>     
</div>
    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('id', 'تاریخ ختم')}} 
</div>
<div class="col-sm-8">
        {{Form::text('id','', ['class'=>'form-control'])}}
       
</div>     
</div>
    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('id', 'مرجع مربوط')}} 
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