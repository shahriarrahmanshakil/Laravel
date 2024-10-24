<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
</head>
<body>
    <h1>Create Product</h1>
    <form action="{{route('products.update', ['product' => $product])}}" method="POST">
        @csrf
        @method('put')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="name" value="{{$product->name}}">
        </div><br>
        <div>
            <label for="qty">Quantity</label>
            <input type="text" name="qty" id="qty" placeholder="qty" value="{{$product->qty}}">
        </div><br>
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" id="price" placeholder="price" value="{{$product->price}}">
        </div><br>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" id="description" placeholder="description" value="{{$product->description}}">
        </div><br>
        <div>
            <input type="submit" value="Update">
        </div>
    </form>
</body>
</html>