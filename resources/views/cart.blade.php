@extends('layouts.menu')
@section('content')
<div class="col-25">
    <div class="container" style="padding-top:110px; padding-bottom:50px;">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="#">Product 1</a> <span class="price">$15</span></p>
      <p><a href="#">Product 2</a> <span class="price">$5</span></p>
      <p><a href="#">Product 3</a> <span class="price">$8</span></p>
      <p><a href="#">Product 4</a> <span class="price">$2</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
    </div>
  </div>

 
<div class="container">
<form method="post" action="/addtocart/{{ $d->id }}/{{ Auth::user()->id }}">
  {{ csrf_field() }}
  <h1>{{ Auth::user()->name }} Cart</h1>

<table border="1" style="width:70%; float:left;">
<tr>
<th>order id</th>
<th>Item name</th>
<th>qty</th>
<th>unit</th>
<th>add </th>
<th>delete </th>
<th>Amount </th>
</tr>
@foreach($data as $d)

<tr>
<td>{{ $d->id }}</td>
<td>{{ $d->Foodname }}</td>

<td>{{ $d->Qty }}</td>
<td>{{ $d->Unit }}</td>
<td><a href="addorder/{{ $d->id }}">Add </a></td>
<td><a href="delorder/{{ $d->id }}">reduce </a></td>
<td>{{ $d->Amount }}</td>
</tr>
@endforeach
</table>

<h3>Total Amount</h3>

<h3>{{  }}</h3>
 
<input type="submit" value="payment">
</form>


@endsection