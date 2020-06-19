@extends('products.layout')

@section('content')
<br/>

<br/>
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-6">
    <h1>Products</h1>
    </div>
    <div class="col-md-6 ">
    <a class="btn btn-primary float-right" href="#">Create Product</a>
    </div>     
</div>
</div>
<br><br><br>
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>DataTables </h3>
                </div>
                <div class="card-body">
                    <table class="table table-borderd">
                        
                        <thead>
                            <tr>
                                <th width="100px">ID</th>
                                <th width="150px">Product Name</th>
                                <th width="150px">Product No</th>
                                <th width="200px">Product Details</th>
                                <th width="100px">Logo</th>
                                <th width="280px">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($product as $pro)
                          <tr>
                          <td>{{$pro -> id }}</td>
                          <td>{{$pro -> product_name }}</td>
                          <td>{{$pro -> product_code }}</td>
                          <td>{{$pro -> product_details }}</td>
                          <td>{{$pro -> logo }}</td>
                          <td>
                          <a class="btn btn-info" href="#">Show</a>
                          <a class="btn btn-success" href="#">edit</a>
                          <a class="btn btn-danger" href="#">delete</a>
                          </td>
                          </tr>
                        </tbody>
                        @endforeach
                    </table>
                    
                </div>
            </div>
        </div>
    </div>


@endsection