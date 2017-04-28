@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-warning">
                <div class="panel-heading">Manage Products</div>

                <div class="panel-body">

                <a href="{{route('products.create')}}" class="btn btn-primary pull-right">Create product</a>


                <table class="table table-striped table-bordered table-hover">
                    <head>
                        <tr>
                            <th>Product Title</th>
                            <th>Product Description</th>
                            <th>Price</th>
                            <th>Location</th>
                            <th>Condition</th>
                            <th>Category</th>
                            <th>Brand</th>

                        </tr>
                    </head>
                    <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->product_description }}</td>
                        <td>{{ $product->product_price }}</td>
                        <td>{{ $product->area_id }}</td>
                        <td>{{ $product->condition }}</td> 
                        <td>{{ $product->subcategory_id }}</td>
                        <td>{{ $product->brand->brands_name }}</td>
                        
                    </tr>

                    @endforeach
                    </tbody>

                </table>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
