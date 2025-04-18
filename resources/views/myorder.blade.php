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

    <div class="container mt-5">
        @if (session('success'))
            <div class="alert alert-success"><span>{{ session('success') }}</span></div>
        @elseif (session('error'))
            <div class="alert alert-danger"><span>{{ session('error') }}</span></div>
        @endif
        <h2 class="mb-4">My Orders</h2>

        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>

                        <th>Order No</th>
                        <th>Product Name</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Street No</th>
                        <th>House No</th>
                        <th>Landmark</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>

                            <td>{{ $order->order_id }}</td>
                            <td>{{ $order->product->p_name }}</td>
                            <td>{{ $order->user->name }}</td>
                            <td>{{ $order->user->email }}</td>
                            <td>{{ $order->mobile }}</td>
                            <td>{{ $order->street_no }}</td>
                            <td>{{ $order->house_no }}</td>
                            <td>{{ $order->landmark }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('common.footer')

</html>
