<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">
</head>

<header class="bg-light">
    @if (session('email'))
        <a href="/" class="m-2 btn border-primary">Home</a>
        <a href="{{ route('users_list') }}" class="m-2 btn border-primary">User list</a>
        <a href="{{ route('category') }}" class="m-2 btn border-primary">Category</a>
        <a href="{{ route('product') }}" class="m-2 btn border-primary">Product</a>
        <a href="{{ route('cart') }}" class="m-2 btn border-primary">Cart</a>
        <a href="{{ route('my_order') }}" class="m-2 btn border-primary">Myorder</a>
        <a href="{{ route('logout') }}" class="m-2 btn border-primary">Logout</a>
    @else
        <a href="/" class="m-2 btn border-primary">Home</a>
        <a href="{{ route('register') }}" class="m-2 btn border-primary">Register</a>
        <a href="{{ route('login') }}" class="m-2 btn border-primary">Login</a>
    @endif
</header>
