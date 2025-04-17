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
    <div class="container col-lg-12">
        <div class="col-lg-12 justify-content-center">

            <form action="{{ route('search_product') }}" class="d-flex m-3" method="post">
                @csrf
                <input type="text" class="form-control mx-2" value="{{ @$search }}" placeholder="Search..."
                    name="search">
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
        <div class=" col-lg-12 d-flex">
            <div class="col-lg-3 p-2">
                <h3 class="m-2 px-3">Category</h3>
                <ul style="list-style-type: none;">
                    <li><a href="/" class="text-decoration-none">All</a></li>
                    @foreach ($categories as $category)
                        <li><a href="{{ url('/' . $category->c_id) }}"
                                class="text-decoration-none">{{ $category->c_name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3 g-4">
                @foreach ($products as $product)
                    <div class="col">
                        <div class="card m-2" style="width:200px">
                            <img class="card-img-top" src="{{ url('storage/' . $product->p_image) }}" height="100"
                                alt="Card image">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->p_name }}</h5>
                                <p class="card-text">₹{{ $product->p_price }}</p>
                                <a href="{{ url(path: 'product_detail/' . $product->p_id) }}" class="btn btn-primary">Shop</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @include('common.footer')

</html>
