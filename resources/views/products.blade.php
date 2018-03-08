@extends('template')
@section('content')

<div class="products">
    <div class="container">
        <div class="row text-center" data-aos="zoom-in">
            <div class="col-xs-12 col-md-12">
                <h2 class="garis">Our Products</h2>
            </div>
            <?php
            $i = 300;
            ?>
            @foreach($product as $d)
            <div class="col-xs-12 col-md-3 p-item" data-aos="flip-right" data-aos-delay="{{$i = $i + 150}}">
                <img class="img-fluid" alt="product" src="images/{{$d['image']}}" height="30%">
                <p><b>Name:</b> {{$d['name']}}<br>
                <b>Price:</b> &euro; {{$d['price']}}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection