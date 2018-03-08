@extends('template')

@section('content')
<div style="margin-top:20vh; margin-bottom:5vh;" class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br/>
    @endif
        <div class="row">
            <div style="margin-bottom:5vh;" class="col-xs-12 col-md-12 text-center">
                <h2 class="garis">Add Product</h2>
            </div>
            <div class="col-xs-12 col-md-12">
            <form method="post" action="{{url('/create')}}" enctype="multipart/form-data">
            <div class="form-group">
                <input type="hidden" value="{{csrf_token()}}" name="_token" />
                <label for="name">Name:</label>
                <input value="{{ isset($data)?$data->{ $name }:'' }}" type="text" class="form-control" name="name"/>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" class="form-control" name="price"/>
            </div>
            <div class="form-group">
                <label>Image:</label>
                <input type="file" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
            </form>
            </div>
        </div>
    </div>
@endsection