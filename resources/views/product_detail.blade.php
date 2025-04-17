<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Detail</title>
</head>

<body>
    @include('common.header')
    <div class="container col-lg-12 py-5">
        <div class="col-lg-12 justify-content-center">

            <form action="{{ route('search_product') }}" class="d-flex m-3" method="post">
                @csrf
                <input type="text" class="form-control mx-2" value="{{ @$search }}" placeholder="Search..."
                    name="search">
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>

            <div class="row">
              <!-- Product Image -->
              <div class="col-md-6 p-5">
                <img src="{{ url('storage/' . $product->p_image) }}" width="100%" alt="Product Image" class="img-fluid rounded shadow-sm"/>
              </div>
          
              <!-- Product Details -->
              <div class="col-md-6 mt-3">
                <h2 class="fw-bold mb-3">{{$product->p_name}}</h2>
                <h4 class="text-success mb-3">₹{{$product->p_price}}</h4>
                <p class="mb-4">
                  {{$product->p_detail}}
                </p>
          
                <!-- Quantity Selector -->
                <div class="d-flex align-items-center mb-4">
                  <label class="me-2 fw-semibold" for="quantity">Quantity:</label>
                  <input type="number" id="qty" value="1" min="1" class="form-control w-25"/>
                </div>
          
                <!-- Add to Cart Button -->
                <button class="btn btn-primary btn-lg">
                  <i class="bi bi-cart-plus me-2"></i>Add to Cart
                </button>
              </div>
            </div>
          </div>
          
    </div>
    @include('common.footer')

</html>
