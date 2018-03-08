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
        </div><br />
    @endif
    <div class="row">
    <form method="post" action="{{action('HomeController@update', $data)}}" enctype="multipart/form-data">
        {{csrf_field()}}
        {{ method_field('PUT') }}
        <input name="_method" type="hidden" value="PATCH">
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="name">Name:</label>
            <input type="text" value="{{ $data->name }}" class="form-control" name="name"/>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" value="{{ $data->price }}" class="form-control" name="price"/>
        </div>
        <div class="form-group">
            <label>Image:</label>
            <input type="file" value="{{ $data->image }}" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
@endsection