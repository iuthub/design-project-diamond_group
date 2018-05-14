@extends('admin.app')

@section('main-content')


<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Shopping</a>
        </li>
        <li class="breadcrumb-item active">Add Product</li>
      </ol>
<h3>Add product</h3>

<div class="row">
	<div class="col-md-6 col-md-offset-3">


	{!! Form::open(['route' => 'products.create', 'method' => 'post',
	'files' => true]) !!}
<div class="form-group">
{{ Form::label('title', 'Title') }}
{{ Form::text('title', null, array('class' => 'form-control'))}}
</div>

<div class="form-group">
{{ Form::label('description', 'Description') }}
{{ Form::text('description', null, array('class' => 'form-control'))}}
</div>

<div class="form-group">
{{ Form::label('price', 'Price') }}
{{ Form::text('price', null, array('class' => 'form-control'))}}
</div>

<div class="form-group">
{{ Form::label('imagePath', 'imagePath') }}
{{ Form::file('imagePath', null, array('class' => 'form-control'))}}
</div>

{{ Form::submit('create', array('class' => 'btn btn-success')) }}


	{!! Form::close() !!}

	</div>
	</div>
</div>
</div>

@endsection
