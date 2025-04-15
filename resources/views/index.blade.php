<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body>
    @include('common.header')

    <div class="container col-lg-12  mx-auto">
        <input type="text" class="form-control m-3" placeholder="Search...">
        <div class=" col-lg-12 d-flex">
            <div class="col-lg-3 p-2">
                <h3 class="m-2 px-3">Category</h3>
                <ul style="list-style-type: none;">
                    @php
                        $categories = App\Models\Category::all();
                        $products = App\Models\Product::all();
                    @endphp
                    @foreach ($categories as $category)
                        <li><a href="/category/{{ $category->c_id }}"
                                class="text-decoration-none">{{ $category->c_name }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3 g-4">
                @foreach ($products as $product)
                    <div class="col">
                        <div class="card m-3" style="width:200px">
                            <img class="card-img-top" src="{{ url('storage/' . $product->p_image) }}" height="100" alt="Card image">
                            <div class="card-body">
                                <h5 class="card-title">{{$product->p_name}}</h5>
                                <p class="card-text">₹{{$product->p_price}}</p>
                                <a href="" class="btn btn-primary">Shop</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @include('common.footer')

</html>
