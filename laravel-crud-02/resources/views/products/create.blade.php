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
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <form action="{{route('product.store')}}" method="POST">
                    @csrf
                    <div class="card borde-0 shadow-lg my-5">
                        <div class="card-header bg-dark text-white">
                            <h3>Create Product</h3>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="name" class="form-label h5">Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                            </div>
                            <div class="mb-3">
                                <label for="sku" class="form-label h5">SKU</label>
                                <input type="text" name="sku" id="sku" class="form-control" placeholder="SkU">
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label h5">Price</label>
                                <input type="text" name="price" id="price" class="form-control" placeholder="Price">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label h5">Description</label>
                                <textarea name="description" id="description" cols="30" rows="5" class="form-control" placeholder="Description"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="img" class="form-label h5">Image</label>
                                <input type="file" name="img" id="img" class="form-control">
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-lg btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>