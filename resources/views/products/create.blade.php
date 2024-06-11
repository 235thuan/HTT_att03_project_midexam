
<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container">

    <h1 class="mt-5">Add New Product</h1>
    <div class="mt-2 d-flex justify-content-end">
        <a href="{{ route('products.index') }}" class="btn btn-primary">View All Products</a>
    </div>

    <form action="{{ route('products.add') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="tensp">Product Name:</label>
            <input type="text" class="form-control" id="tensp" name="tensp" required>
        </div>
        <div class="form-group">
            <label for="gia">Price:</label>
            <input type="text" class="form-control" id="gia" name="gia" required>
        </div>
        <div class="form-group">
            <label for="soluong">Quantity:</label>
            <input type="number" class="form-control" id="soluong" name="soluong" required>
        </div>
        <div class="form-group">
            <label for="mota">Description:</label>
            <textarea class="form-control" id="mota" name="mota"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
</div>
</body>
</html>
