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
    <div class="container col-lg-3 col-md-6 col-sm-8 mt-5">
        @if (session('error'))
            <div class="alert alert-danger"><span>{{ session('error') }}</span></div>
        @endif
        <h1>Login</h1>
        <form action="/login" method="post">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label><span
                    class="text-danger">{{ $errors->first('email') }} </span>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label><span
                    class="text-danger">{{ $errors->first('password') }} </span>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3 justify-content-center d-flex">
                <button type="submit" class="btn btn-primary mx-3">Login</button>
                <a href="/register" class="btn border-primary mx-3">Register</a>
            </div>
        </form>
    </div>
</body>
@include('common.footer')

</html>
