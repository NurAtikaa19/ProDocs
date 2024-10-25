@extends('layout.master')

@section('title')
    Add Product
@endsection

@section('content')
<form action="/film" method="post" enctype="multipart/form-data">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @csrf
    <div class="form-group">
      <label>Product_name</label>
      <input type="text" class="form-control" name="product_name">
    </div>
    <div class="form-group">
        <label>create_date</label>
        <input type="dateTime" class="form-control" name="create_date">
      </div>
      <div class="form-group">
        <label>versi</label>
        <input type="string" class="form-control" name="versi">
      </div>
      <button type="submit" class="btn btn-primary mr-2">Submit</button>
      <a href="/film"><button type="button" class="btn btn-light" >Cancel</button></a>
  </form>
@endsection