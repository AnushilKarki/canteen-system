@extends('admin.layouts.stock')

@section('content')
@foreach($data as $f)

<form method="POST" action="/admin/enterstock/{{ $f->id }}" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
                             

                            
                            <div class="form-group{{ $errors->has('unit') ? ' has-error' : '' }}">
                                <label for="unit" class="col-md-4 control-label">Unit</label>

                                <div class="col-md-6">
                                    <input id="unit" type="text" class="form-control" name="unit"
                                           value="{{ old('unit') }}" required autofocus>

                                    @if ($errors->has('unit'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('unit') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                <label for="price" class="col-md-4 control-label"> Qty</label>

                                <div class="col-md-6">
                                    <input id="price" type="number" class="form-control" name="qty"
                                           value="{{ old('price') }}" required autofocus>

                                    @if ($errors->has('price'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        
   
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Add Stock
                                    </button>

                            
                                </div>
                            </div>
                        </form>
                        @endforeach
                    
@endsection
