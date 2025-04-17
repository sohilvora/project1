<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>
</head>

<body>

    @include('common.header')

    <h1>Category List</h1>
    @if (session('success'))
        <div class="alert alert-success"><span>{{ session('success') }}</span></div>
    @elseif (session('error'))
        <div class="alert alert-danger"><span>{{ session('error') }}</span></div>
    @endif

    <div>
        <a href="{{ route('add_product') }}" class="m-2 btn border-primary">Add Product</a>
        <div class="table-responsive">

            <table class="table table-primary border table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Detail</th>
                        <th scope="col">Category</th>
                        <th scope="col">Image</th>
                        <th class="text-center" scope="col" colspan="2">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @if (!$products)
                        <tr>
                            <h1 class='text-center'>No Data Found</h1>
                        </tr>
                    @else
                        @foreach ($products as $product)
                            <tr>
                                <td scope="row">{{ $product->p_id }}</td>
                                <td>{{ $product->p_name }}</td>
                                <td>{{ $product->p_price }}</td>
                                <td>{{ $product->p_detail }}</td>
                                <td>{{ $product->p_c_id }}</td>
                                <td>{{ $product->p_image }}</td>

                                <td class="text-center"><a href="/update/{{ $product->p_id }}"
                                        class="btn btn-warning">Update</a></td>
                                <td class="text-center"><a href="/deleteproduct/{{ $product->p_id }}"
                                        class="btn btn-danger">Delete</a></td>
                            </tr>
                        @endforeach
                </tbody>
                @endif
            </table>
        </div>

    </div>

    @include('common.footer')
</body>

</html>
