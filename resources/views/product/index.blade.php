@extends('template')

@section('content')

<div style="margin-top:20vh;" class="container">
    <div class="row">
        <div class="col-xs-12 col-md-12 text-center">
            <h2 style="font-family: 'Berkshire Swash', cursive;" class="garis">Products Table</h2>
        </div>
        <table class="table table-bordered table-hover">
            <thead>
                <tr class="text-center"></tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $d)
                <tr>
                    <td>{{$d['name']}}</td>
                    <td>{{$d['price']}}</td>
                    <td><img class="gambar" src="images/{{$d['image']}}"></td>
                    <td><a href="{{action('HomeController@edit',$d['id'])}}" class="btn btn-primary">Edit</a>
                        <form action="{{action('HomeController@destroy',$d['id'])}}" method="post">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="text-center">
            <div class="add">
                <a href="{{url('create')}}" class="button">Add product</a>
            </div>
    </div>
</div>

@endsection
