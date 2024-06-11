
<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="mt-5">Edit Product</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="tensp">Product Name:</label>
            <input type="text" class="form-control" id="tensp" name="tensp" value="{{ $product->tensp }}" required>
        </div>
        <div class="form-group">
            <label for="gia">Price:</label>
            <input type="text" class="form-control" id="gia" name="gia" value="{{ $product->gia }}" required>
        </div>
        <div class="form-group">
            <label for="soluong">Quantity:</label>
            <input type="number" class="form-control" id="soluong" name="soluong" value="{{ $product->soluong }}" required>
        </div>
        <div class="form-group">
            <label for="mota">Description:</label>
            <textarea class="form-control" id="mota" name="mota">{{ $product->mota }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
</div>
</body>
</html>
