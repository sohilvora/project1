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
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h3 class="card-title mb-4">Your Cart</h3>
                            @if (!$cartitems)
                                <p>Your cart is empty.</p>
                            @else
                                @foreach ($cartitems as $item)
                                    <!-- Cart Item -->
                                    <div class="d-flex justify-content-between align-items-center mb-3"
                                        data-price="{{ $item->product->p_price }}">
                                        <a href="{{ route('remove_from_cart', $item->id) }}" class="ms-1 btn btn-danger">X</a>
                                        <div>
                                            <h5 class="mb-0">{{ $item->product->p_name }}</h5>
                                        </div>
                                        <div class="d-flex align-items-end">
                                            <input type="number" class="form-control form-control-sm me-2"
                                                style="width: 70px;" value="{{ $item->qty }}" min="1"
                                                onchange="updateTotal()">
                                            <span class="text-muted">₹{{ $item->product->p_price }}</span>
                                        </div>
                                    </div>
                                    @php
                                        $cartids[] = $item->id;
                                    @endphp
                                @endforeach

                                <hr>
                                <div class="d-flex justify-content-between">
                                    <h5>Total:</h5>
                                    <h5>₹ <span id="cart-total">0.00</span></h5>
                                </div>
                                <div class="text-end mt-4">
                                    <a href="{{ route('proceed', implode(',', $cartids)) }}">Proceed to Checkout</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function updateTotal() {
                const items = document.querySelectorAll('.card-body > div[data-price]');
                let total = 0;
                items.forEach(item => {
                    const price = parseFloat(item.getAttribute('data-price'));
                    const quantity = parseInt(item.querySelector('input').value);
                    total += price * quantity;
                });
                document.getElementById('cart-total').textContent = total.toFixed(2);
            }

            // Calculate total on page load
            updateTotal();
        </script>


    </div>
    @include('common.footer')

</html>
