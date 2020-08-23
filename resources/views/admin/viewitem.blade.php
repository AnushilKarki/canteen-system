@extends('admin.layouts.item')

@section('content')
  
  
<h1>view Item</h1>

<div class="container">

<table border="1" style="width:100%;">
<tr>
<th>Food id</th>
<th>food name</th>

<th>Amount</th>
<th>edit</th>
<th>delete</th>


</tr>
@foreach($data as $d)
<tr>
<td>{{ $d->id }}</td>
<td>{{ $d->Foodname }}</td>
<td>{{ $d->Foodprice }}</td>
<td><a href="edititem/{{$d->id}}">Edit</a></td>
<td><a href="delitem/{{$d->id}}">Delete</a></td>





</tr>
@endforeach
</table>
@endsection
