@extends('admin.app')

@section('main-content')


<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">My Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Products List</li>
    </ol>
    <!-- Example DataTables Card-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i> Data of all products</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>Added</th>
                <th>Delete</th>
                <th>Update</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>Added</th>
                <th>Delete</th>
                <th>Update</th>
              </tr>
            </tfoot>
            <tbody>
                @if(!empty(@products))
                  @forelse($products as $product)
              <tr>
                <td>{{$product->title}}</td>
                <td>{{$product->description}}</td>
              <td>{{$product->price}}</td>
                <td>{{$product->created_at}}</td>
                {!! Form::open(['method'=>'DELETE', 'route'=>['products.destroy',$product->id]]) !!}
              <td>  <button data-toggle="tooltip" data-placement="top" title="Delete" type="submit"
               class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this item?');"
               class='btn btn-danger'>Delete
             </button></td>
  {!! Form::close() !!}
                <td><button  class="btn btn-success" type="button" name="button">Edit</button></td>
                @empty
                <td>NO data</td>
              </tr>
              @endforelse
              @endif
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>

    </div>
      <a class="btn btn-primary" href="{{ route('products.create') }}">Add Products</a>
  </div>
@endsection
