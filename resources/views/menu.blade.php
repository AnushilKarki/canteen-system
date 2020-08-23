@extends('layouts.menu')
@section('content')

<div class="icon-bar">
  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
  <a href="#" class="google"><i class="fa fa-google"></i></a>
  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
  <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
</div>
<section class="header">

</section>

<br><br>

<style>
  
    .header
{
  height: 7%;

}
img{
  border: 1px solid #ddd;
  height: 250px;
  padding: 10px;
  margin-left: 40px;
  margin-top: 20px;
  margin-bottom: 20px;
  width: 300px;
}
  }
  </style>


<div class="container">
<h1>khana</h1>
@foreach($dataofkhana as $d)
  

   <a href="#"> <img src="/storage/upload/{{ $d->Foodimage }}" class="float-left" alt="Paris" width="304" height="236"/> </a>
<form method="post" action="/addtocart/{{ $d->id }}/{{ Auth::user()->id }}">
  {{ csrf_field() }}
  
  <label> {{ $d->Foodname }}</label><br>
  
  <label>price:</label>
  <label> {{ $d->Foodprice }}</label><br>
<label>qty</label>
<input type="number" name="quantity">
<label>unit</label>
<input type="string" name="unit">
<input type="submit" value="order">
</form>


@endforeach

</div>


<div class="container">
<h1>Breakfast</h1>
@foreach($dataofbreakfast as $d)


<a href="#"> <img src="/storage/upload/{{ $d->Foodimage }}" class="float-left" alt="Paris" width="304" height="236"/> </a>
<form method="post" action="/addtocart/{{ $d->id }}/{{ Auth::user()->id }}">
  {{ csrf_field() }}
  
  <label> {{ $d->Foodname }}</label><br>
  
  <label>price:</label>
  <label> {{ $d->Foodprice }}</label><br>
<label>qty</label>
<input type="number" name="quantity">
<label>unit</label>
<input type="string" name="unit">
<input type="submit" value="order">
</form>


@endforeach

</div>


<div class="container">
<h1>khaja</h1>
@foreach($dataofkhaja as $d)

<a href="#"> <img src="/storage/upload/{{ $d->Foodimage }}" class="float-left" alt="Paris" width="304" height="236"/> </a>
<form method="post" action="/addtocart/{{ $d->id }}/{{ Auth::user()->id }}">
  {{ csrf_field() }}
  
  <label> {{ $d->Foodname }}</label><br>
  
  <label>price:</label>
  <label> {{ $d->Foodprice }}</label><br>
<label>qty</label>
<input type="number" name="quantity">
<label>unit</label>
<input type="string" name="unit">
<input type="submit" value="order">
</form>

@endforeach

</div>


<div class="container">
<h1>Drinks</h1>
@foreach($dataofdrinks as $d)
 

<a href="#"> <img src="/storage/upload/{{ $d->Foodimage }}" class="float-left" alt="Paris" width="304" height="236"/> </a>
<form method="post" action="/addtocart/{{ $d->id }}/{{ Auth::user()->id }}">
  {{ csrf_field() }}
  
  <label> {{ $d->Foodname }}</label><br>
  
  <label>price:</label>
  <label> {{ $d->Foodprice }}</label><br>
<label>qty</label>
<input type="number" name="quantity">
<label>unit</label>
<input type="string" name="unit">
<input type="submit" value="order">
</form>


@endforeach

</div>
@endsection
