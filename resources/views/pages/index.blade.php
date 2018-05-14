@extends('layouts.master')

@section('title')
Ecommerce
@endsection

@section('styles')
<style>
.my-div {
  height: 100%;
  background-color: rgb(250,250,250);
}
</style>
@endsection

@section('content')
<main role="main">
  <div class="jumbotron">
    <div class="row pb-3">

      <div class="col-md-3"><!--Categories_Section-->
        <div class="my-div">
          <div class="p-3">
            <h3>CATEGORY</h4>
              <ul class="list-group">
                @for($i=1; $i<3; $i++)
                <li class="list-group-item"><a href="#">category {{$i}}</a></li>
                @endfor
                <li class="list-group-item list-group-item-success">Dapibus</li>
                <li class="list-group-item list-group-item-info">Cras sit</li>
                <li class="list-group-item list-group-item-warning">Porta ac</li>
                <li class="list-group-item list-group-item-danger">Vestibulum</li>
              </ul>
            </div>
          </div>
        </div><!--Categories_Section-->

        <div class="col-md-9 px-3">
          <div class="my-div">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active" style="max-height: 400px">
                  <img class="first-slide" src="{{url('images', $products[0]->imagePath)}}" alt="First slide">
                  <div class="container">
                    <div class="carousel-caption text-left">
                      <h1>Example headline.</h1>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                      <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item" style="max-height: 400px">
                  <img class="second-slide" src="{{url('images', $products[1]->imagePath)}}" alt="Second slide">
                  <div class="container">
                    <div class="carousel-caption">
                      <h1>Another example headline.</h1>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                      <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item" style="max-height: 400px">
                  <img class="third-slide" src="{{url('images', $products[2]->imagePath)}}" alt="Third slide">
                  <div class="container">
                    <div class="carousel-caption text-right">
                      <h1>One more for good measure.</h1>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                      <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                    </div>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>

      </div>
      <section>
        <div class="row">

          <div class="col-md-3">
            <div class="my-div px-2">
              <h2 class="title text-center">HOT DEALS</h2>
              <div class="card-header">
                <h4 class="my-0 font-weight-normal">{{$products[1]->title}}</h4>
              </div>
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" style="height: 240px" src="{{url('images', $products[1]->imagePath)}}" alt="product">
                <div class="card-body">
                  <p class="card-text" style="height: 120px; overflow: hidden">{{$products[1]->description}}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      @guest
                      @else
                      <a href="{{route('product.addToCart', ['id' =>$products[1]->id])}}" class="btn btn-success float-right" role="button">Add to Cart</a>
                      @endguest
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    </div>
                    <small class="text-muted">$ {{$products[1]->price}}</small>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-9"><!--new_products_section-->
            <div class="my-div px-2">
              <h2 class="title text-center">NEW PRODUCTS</h2>
              <div class="row">
                @foreach($products as $product)
                <div class="col-md-4">
                  <div class="card-header">
                    <h4 class="my-0 font-weight-normal">{{$product->title}}</h4>
                  </div>
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top" style="height: 240px" src="{{url('images', $product->imagePath)}}" alt="product">
                    <div class="card-body">
                      <p class="card-text" style="height: 120px; overflow: hidden">{{$product->description}}</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          @guest
                          @else
                          <a href="{{route('product.addToCart', ['id' =>$product->id])}}" class="btn btn-success float-right" role="button">Add to Cart</a>
                          @endguest
                          <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        </div>
                        <small class="text-muted">$ {{$product->price}}</small>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>

        </div>
      </section>
    </div>
  </main>
  @endsection
