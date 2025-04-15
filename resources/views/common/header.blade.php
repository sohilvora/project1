<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">
</head>

<header class="bg-light">
    @if (session('email'))
        
    <a href="/" class="m-2 btn border-primary">Home</a>
    <a href="/users_list" class="m-2 btn border-primary">User list</a>
    <a href="/category" class="m-2 btn border-primary">Category</a>
    <a href="/product" class="m-2 btn border-primary">Product</a>
    <a href="/logout" class="m-2 btn border-primary">Logout</a>    
    @else
        
    <a href="/" class="m-2 btn border-primary">Home</a>
    {{-- <a href="/users_list" class="m-2 btn border-primary">User list</a>
    <a href="/category" class="m-2 btn border-primary">Category</a>
    <a href="/product" class="m-2 btn border-primary">Product</a> --}}
    <a href="/register" class="m-2 btn border-primary">Register</a>
    <a href="/login" class="m-2 btn border-primary">Login</a>
    
    @endif
</header>