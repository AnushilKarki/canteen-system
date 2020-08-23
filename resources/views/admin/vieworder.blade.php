@extends('admin.layouts.order')

@section('content')

  
  
<h1>view Orders</h1>

<div class="container">

<table border="1" style="width:70%; float:left;">
<tr>
<th>order id</th>
<th>foodname</th>
<th>Qty</th>
<th>Unit</th>
<th>Amount</th>
<th>User id</th>

</tr>
@foreach($data as $d)
<tr>
<td>{{ $d->id }}</td>
<td>{{ $d->Foodname }}</td>
<td>{{ $d->Qty }}</td>
<td>{{ $d->Unit }}</td>
<td>{{ $d->Amount }}</td>
<td>{{ $d->Userid }}</td>




</tr>
@endforeach
</table>
@endsection
