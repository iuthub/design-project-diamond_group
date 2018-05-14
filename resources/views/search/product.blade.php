@extends('layouts.master')

@section('title')
Ecommerce
@endsection

@section('content')
<div class="well" style="background: #ffa64d;">
	<p style="margin-left: 100px;">Main->results</p>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
             	<h1>Search Results</h1>
            </div>
           @foreach($products as $product)
           {{ csrf_field() }}
           	 <div class="media" style="margin-left: 40px;">
				<div class="media-left" style="margin-top: 30px;">
					<img style="width: 250px; height: 250px;" src="{{URL::to('src\product_images\6.jpg')}}" alt="">
				</div>
				<div class="media-body" style="margin: 20px;">
					<h3 class="media-heading">{{$product->products}} $ {{ $product->price }}</h3>
					<p> {{$product->description}} <h4>But this product this is designed for you</h4> </p>
				</div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
