<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>
<body>
    <h1>Products Page</h1>
    <div>
        @if (@session()->has('sucess'))
           <h4> {{session('sucess')}}</h4>  
        @endif
    </div>
    <div>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>QTY</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            @foreach ( $products as $product )
            <tbody>
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->qty}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->description}}</td>
                    <td>
                        <button>
                            <a style="text-decoration:none; color:rgb(0, 0, 0);" href="{{route('products.edit', ['product' => $product])}}">Edit</a>
                        </button>
                    </td>
                    <td>
                        <form method="POST" action="{{route('products.destroy', ['product' => $product])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</body>
</html>