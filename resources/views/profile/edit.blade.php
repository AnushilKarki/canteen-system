@extends('layouts.profile')
@section('content')


	
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/editprofile/{{ Auth::user()->id }}" method="post"enctype="multipart/form-data">
      {{ csrf_field }}
        <div class="row">
          <div class="col-50">
            <h3>Profile</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Anushil Karki">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="Karkivhai@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Student roll no.</label>
            <input type="text" id="adr" name="rollno" placeholder="161743">
            <label for="city"><i class="fa fa-institution"></i> Programme</label>
            <input type="text" id="city" name="programme" placeholder="Software">

            <div class="row">
              <div class="col-50">
                <label for="state">Faculty</label>
                <input type="text" id="state" name="faculty" placeholder="civil">
              </div>
              <div class="col-50">
                <label for="zip">Year</label>
                <input type="number" id="zip" name="zip" placeholder="2019">
              </div>
            </div>
          </div>

       
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Order Adress As Canteen
        </label>
        <input type="submit" value="Update Profile" class="btn">
      </form>
    </div>
  </div>
 
</div>
@endsection
