@extends('admin.layouts.stock')

@section('content')
  
<h1>Select Food</h1>

<div class="container" style="padding-left:10px;">

<table border="1" style="width:70%; ">
<tr>
<th>Food id</th>
<th>foodname</th>

<th>add stock</th>


</tr>
@foreach($data as $d)
<tr>
<td>{{ $d->id }}</td>
<td>{{ $d->Foodname }}</td>
<td><a href="/admin/enterstock/{{ $d->id }}">Add Stock </a></td>





</tr>
@endforeach

@endsection
