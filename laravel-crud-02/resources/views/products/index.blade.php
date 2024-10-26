<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="bg-dark py-3">
        <h3 class="text-white text-center">Laravel crud operations</h3>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center mt-3">
            <div class="col-md-10 d-flex justify-content-end">
                <a class="btn btn-dark" href="{{route('products.create')}}">Create</a>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            @if (Session::has('success'))
                    <div class="col-md-10">
                        <div class="alert alert-success mt-4">
                            <h4> {{Session::get('success')}} </h4>
                        </div>
                    </div> 
            @endif
            <div class="col-md-10">
                    <div class="card borde-0 shadow-lg my-5">
                        <div class="card-header bg-dark text-white">
                            <h3>Products</h3>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>SKU</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                    <th></th>
                                </tr>
                                @if ($products->isNotEmpty())
                                    @foreach ($products as $product )
                                        <tr>
                                            <td>{{$product->id}}</td>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->sku}}</td>
                                            <td>{{$product->price}}</td>
                                            <td>{{$product->description}}</td>
                                            <td></td>
                                        </tr>
                                    @endforeach
                                @endif
                            </table>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>