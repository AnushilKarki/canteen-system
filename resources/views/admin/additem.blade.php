@extends('admin.layouts.item')

@section('content')
<form method="POST" action="{{ route('admin.add.item') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group{{ $errors->has('foodtype') ? ' has-error' : '' }}">
                                <label for="foodtype" class="col-md-4 control-label">Food type</label>

                                <div class="col-md-6">
                                    

                                           <select name="Foodtype">
  <option value="khana">khana</option>
  <option value="khaja">khaja</option>
  <option value="breakfast">breakfast</option>
  <option value="drinks">drinks</option>
</select> 

                                    @if ($errors->has('foodtype'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('foodtype') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
    <div class="form-group{{ $errors->has('foodname') ? ' has-error' : '' }}">
                                <label for="foodname" class="col-md-4 control-label">Food Name</label>
 
                                <div class="col-md-6">
                                    <input id="foodname" type="text" class="form-control" name="Foodname"
                                           value="{{ old('foodname') }}" required autofocus>

                                    @if ($errors->has('foodname'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('foodname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                          
                            <div class="form-group{{ $errors->has('unit') ? ' has-error' : '' }}">
                                <label for="unit" class="col-md-4 control-label">Unit</label>

                                <div class="col-md-6">
                                    <input id="unit" type="text" class="form-control" name="Foodunit"
                                           value="{{ old('unit') }}" required autofocus>

                                    @if ($errors->has('unit'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('unit') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                <label for="price" class="col-md-4 control-label"> Price</label>

                                <div class="col-md-6">
                                    <input id="price" type="text" class="form-control" name="Foodprice"
                                           value="{{ old('price') }}" required autofocus>

                                    @if ($errors->has('price'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                                <label for="photo" class="col-md-4 control-label">Photo</label>

                                <div class="col-md-6">
                                    <input id="photo" type="file" class="form-control" name="Foodimage"
                                           value="{{ old('photo') }}" required autofocus>

                                    @if ($errors->has('photo'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('photo') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
   
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Add
                                    </button>

                            
                                </div>
                            </div>
                        </form>
@endsection
