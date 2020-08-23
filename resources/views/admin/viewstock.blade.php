@extends('admin.layouts.stock')

@section('content')
  
<h1>View Stock</h1>

<div class="container">

<table border="1" style="width:70%; float:left;">
<tr>
<th>Stock id</th>
<th>foodid</th>

<th>qty</th>
<th>unit</th>
<th>add </th>

</tr>
@foreach($data as $d)

<tr>
<td>{{ $d->id }}</td>
<td>{{ $d->Foodid }}</td>

<td>{{ $d->Qty }}</td>
<td>{{ $d->Unit }}</td>
<td><a href="/admin/enterstock/{{ $d->id }}">Add Stock </a></td>
</tr>
</table>
@endforeach

@endsection
