<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body>
    @include('common.header')

    
        @if (session('success'))
            <div class="alert alert-success"><span>{{ session('success') }}</span></div>
        @elseif (session('error'))
            <div class="alert alert-danger"><span>{{ session('error') }}</span></div>
        @endif

        <div class="container col-lg-3 col-md-6 col-sm-8 mt-5">
            <h1>Add Product</h1>
            <form action="/add_product" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="product_name" class="form-label">Product Name</label><span
                        class="text-danger">{{ $errors->first('product_name') }} </span>
                    <input type="text" class="form-control" id="product_name" name="product_name"
                        value="{{ old('product_name') }}">
                </div>
                <div class="mb-3">
                    <label for="product_description" class="form-label">Product Details</label><span
                        class="text-danger">{{ $errors->first('product_detail') }} </span>
                    <textarea class="form-control" id="product_detail" name="product_detail">{{ old('product_detail') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="product_price" class="form-label">Product Price</label><span
                        class="text-danger">{{ $errors->first('product_price') }} </span>
                    <input type="number" class="form-control" id="product_price" name="product_price"
                        value="{{ old('product_price') }}">
                </div>
                <div class="mb-3">
                    <label for="product_category" class="form-label">Product Category</label>
                    <input type="text" class="form-control" id="product_category" name="product_category"
                        value="{{ old('product_category') }}">
                </div>
                <div class="mb-3">
                    <label for="product_image" class="form-label">Product Image</label>
                    <input type="file" class="form-control" id="product_image" name="product_image"
                        accept=".png, .jpg, .jpeg">
                </div>
                <div class="mb-3 justify-content-center d-flex">
                    <button type="submit" class="btn btn-primary mx-3">Add Product</button>

                </div>
            </form>
        </div>
    
    @include('common.footer')
</body>

</html>
