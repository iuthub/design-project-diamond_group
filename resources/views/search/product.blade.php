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
					<a href="{{url('/search/{$product->id}')}}">
						<img src="{{URL::to('src\product_images\6.jpg')}}" alt="">
					</a>
				</div>
				<div class="media-body" style="margin: 20px;">
					<h3 class="media-heading">{{$product->products}}</h3>
					<p> {{$product->description}} </p>
				</div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="row">
    	<div class="col-md-12">
        	{{ $products->links() }}
    	</div>
	</div>
</div>
@endsection
