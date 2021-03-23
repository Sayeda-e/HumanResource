@extends('app.main')

@section('content')





<div class="mt-5 col-sm-9">
{!! Form::open(['url' => 'Taqaror/taqaror']) !!}

<div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('T_id', 'ای دی')}} 
</div>
<div class="col-sm-8">
<select class="form-control" name="T_id">
<option></option>
      @foreach($cust as $custs)
      <option value="{{old('name') ? : $custs->id }}">{{ $custs->name }}</option>
      @endforeach
     
      </select>
        
</div>     
</div>
    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('number_hokm', 'نمبر حکم')}} 
</div>
<div class="col-sm-8">
        {{Form::text('number_hokm','', ['class'=>'form-control'])}}
        
        @error('id')
         <div class="er text text-right">لطفا اسم پدر خود را درج کنید</div>
          @enderror
</div>     
</div>
    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('marjeHokm', 'مرجع حکم')}} 
</div>
<div class="col-sm-8">
        {{Form::text('marjeHokm','', ['class'=>'form-control'])}}
        
        @error('id')
         <div class="er text text-right">لطفا اسم پدر خود را درج کنید</div>
          @enderror
</div>     
</div>
    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('tarikhTaqaror', 'تاریخ تقرر')}} 
</div>
<div class="col-sm-8">
        {{Form::date('tarikhTaqaror','', ['class'=>'form-control'])}}
        
        @error('id')
         <div class="er text text-right">لطفا اسم پدر خود را درج کنید</div>
          @enderror
</div>     
</div>
    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('enwanBast', 'عنوان بست')}} 
</div>
<div class="col-sm-8">
        {{Form::text('enwanBast','', ['class'=>'form-control'])}}
        
        @error('id')
         <div class="er text text-right">لطفا اسم پدر خود را درج کنید</div>
          @enderror
</div>     
</div>
    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('bastChand', 'بست چند')}} 
</div>
<div class="col-sm-8">
        {{Form::text('bastChand','', ['class'=>'form-control'])}}
        
        @error('id')
         <div class="er text text-right">لطفا اسم پدر خود را درج کنید</div>
          @enderror
</div>     
</div>
    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('codeBast', 'کود بست')}} 
</div>
<div class="col-sm-8">
        {{Form::text('codeBast','', ['class'=>'form-control'])}}
        
        @error('id')
         <div class="er text text-right">لطفا اسم پدر خود را درج کنید</div>
          @enderror
</div>     
</div>
    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('wazifa', 'وظیفه')}} 
</div>
<div class="col-sm-8">
        {{Form::text('wazifa','', ['class'=>'form-control'])}}
        
        @error('id')
         <div class="er text text-right">لطفا اسم پدر خود را درج کنید</div>
          @enderror
</div>     
</div>
    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('E_wazifa', 'وظیفه به انگلیسی')}} 
</div>
<div class="col-sm-8">
        {{Form::text('E_wazifa','', ['class'=>'form-control'])}}
        
        @error('id')
         <div class="er text text-right">لطفا اسم پدر خود را درج کنید</div>
          @enderror
</div>     
</div>
    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('edareMarbod', 'اداره مربوط')}} 
</div>
<div class="col-sm-8">
        {{Form::text('edareMarbod','', ['class'=>'form-control'])}}
        
        @error('id')
         <div class="er text text-right">لطفا اسم پدر خود را درج کنید</div>
          @enderror
</div>     
</div>
    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-sm-3 text text-left">
        {{Form::label('E_edara', 'اداره به انگلیسی')}} 
</div>
<div class="col-sm-8">
        {{Form::text('E_edara','', ['class'=>'form-control'])}}
        
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