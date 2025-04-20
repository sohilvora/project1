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

    <div class="container py-5">
        <div class="row">

            <!-- Billing Form -->
            <div class="col-md-6">
                <form action="{{route('checkout')}}" method="post">
                    @csrf
                    <h4 class="mb-4">Billing Address</h4>
                    <div class="mb-3">
                        <label class="form-label">Full Name</label> <span class="text-danger fw-bolder">*</span>
                        <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label> <span class="text-danger fw-bolder">*</span>
                        <input type="email" name="email" class="form-control" placeholder="email@example.com" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone Number</label> <span class="text-danger fw-bolder">*</span>
                        <input type="tel" name="mobile" class="form-control" placeholder="+91" maxlength="10" required>
                    </div>

                    <!-- Detailed Address Fields -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Street No.</label> <span class="text-danger fw-bolder">*</span>
                            <input type="text" name="street_no" class="form-control" placeholder="e.g. 123" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">House No.</label> <span class="text-danger fw-bolder">*</span>
                            <input type="text" name="house_no" class="form-control" placeholder="e.g. 12-B" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Landmark</label> <span class="text-danger fw-bolder">*</span>
                        <input type="text" name="landmark" class="form-control" placeholder="Near City Mall, Park, etc.">
                    </div>

                    
            </div>

            <!-- Order Summary -->
            <div class="col-md-6">
                <h4 class="mb-4">Order Summary</h4>
                <ul class="list-group mb-3">
                    @foreach ($cartitems as $item)
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">{{ $item->product->p_name }}</h6>
                                <input type="hidden" name="qty" value="{{ $item->qty }}">
                                <small class="text-muted">Qty: {{ $item->qty }}</small>
                            </div>
                            <span class="text-muted">₹{{ $item->product->p_price * $item->qty }}</span>
                        </li>
                    @endforeach
                    <li class="list-group-item d-flex justify-content-between">
                        <strong>Total</strong>
                        <strong>₹{{ $cartitems->sum(fn($item) => $item->product->p_price * $item->qty) }}</strong>
                    </li>
                    <button type="submit" class="btn btn-success w-100 mt-4">Place Order</button>
                </ul>
                </form>
            </div>

        </div>
    </div>
    </div>
    @include('common.footer')
</body>

</html>
