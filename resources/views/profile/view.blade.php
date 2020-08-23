@extends('layouts.profile')
@section('content')


	
<div class="row">
  <div class="col-75">
    <div class="container">
      <form>
      {{ csrf_field() }}
        <div class="row">
          <div class="col-50">
            <h3>Profile</h3>
            <h1><?php echo Auth::user()->id ?> </h1>
            
            <h1><?php echo Auth::user()->name ?> </h1>

            <h1><?php echo Auth::user()->email ?> </h1>
            
            <a href="/addprofile/<?php echo Auth::user()->id ?>">Add new profile</a>
            @foreach($data as $d)
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <label for="fname"><i class="fa fa-user"></i> {{ $d->Fullname }}</label><br>
           
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <label for="email"><i class="fa fa-envelope"></i>{{ $d->Email }}</label><br>
        
            <label for="adr"><i class="fa fa-address-card-o"></i> Student roll no.</label>
            <label for="adr"><i class="fa fa-address-card-o"></i> {{ $d->Rollno }}</label><br>

            <label for="city"><i class="fa fa-institution"></i> Programme</label>
            <label for="city"><i class="fa fa-institution"></i>{{$d->Programme}}</label>
        <br>

            <div class="row">
              <div class="col-50">
                <label for="state">Faculty</label>
                <label for="state">{{$d->Faculty}}</label>
            
              </div>
              <div class="col-50">
                <label for="zip">Year</label>
                <label for="zip">{{$d->Year}}</label>
              
              </div>
            </div>
          </div>

       
          
        </div>
   <a href="/home">go back</a>
      </form>
    </div>
  </div>
 
</div>
@endforeach
@endsection
