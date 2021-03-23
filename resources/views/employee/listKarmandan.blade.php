
@extends('app.main')

@section('content')


 
 
 
 

 <div class="col-sm-12 mb-5 mt-4" id="navbar">
 @include('app.searchId')
 @include('navbar.menu')
 </div>

 <div class="col-sm-4" align="right">
  <a class="btn btn-primary" href="karmandJaded">ایجاد کارمند جدید</a>
 </div>

 <div class="col-sm-4">
 <div class="searchbox">
    
    <form action="{{ url('/employee/search') }}" type="get">
    <input type="search" name="query" />
    <input type="submit" value="جستجو"   />
    </form>
</div>
</div>

<div class="col-sm-4">
<a class="btn btn-primary" href="karmandJaded">چاپ کارت هویت</a>
</div>
<div class="col-sm-12 mt-3">
@include('app.success')
</div>

<div class="col-sm-12">

<table class="table table-sm table-striped mt-3">
    
<tr class="table-primary text text-center">
    <th>ای دی</th>
    <th>نام</th>
    <th>نام پدر</th>
    <th>تخلص</th>
    <th>جنسیت</th>
    <th>نمبر تذکره</th>
    <th>کود تشکیلاتی</th>
    <th>ملیت</th>
    <th>شماره تماس</th>
    <th>گروپ خون</th>
    <th width="150">عملیات</th>
</tr>
@if(count($karmand)>0)
@foreach($karmand as $stuff)
<tr class="text text-center">
  <td>{{$stuff->id}}</td>
  <td>{{$stuff->name}}</td>
  <td>{{$stuff->Fname}}</td>
  <td>{{$stuff->lastname}}</td>
  <td>{{$stuff->jensiat}}</td>
  <td>{{$stuff->numberTazkira}}</td>
  <td>{{$stuff->codeTashkilaty}}</td>
  <td>{{$stuff->milyat}}</td>
  <td>{{$stuff->phone}}</td>
  <td>{{$stuff->groupeKhoon}}</td>
  <td><form action="#" method="POST">
  <a href={{"edit/".$stuff['id']}} class="li"> اصلاح</a>
  <a href={{ "delete/".$stuff['id']}} class="li"> حذف</a>
  @csrf
  </form>
  </td>
  </tr>

@endforeach


@endif

</table>
</div>

@endsection