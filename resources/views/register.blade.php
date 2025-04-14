<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>

<body>
    @include('common.header')
    <div class="container col-lg-3 col-md-6 col-sm-8 mt-5">
        <form action="/register" method="post" class="form-group justify-content-center">
            <h1>Register</h1>
            @csrf
            <div class="mb-1">
                <label for="name" class="form-label">Name</label><span
                    class="text-danger">{{ $errors->first('name') }} </span>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                    placeholder="Name">
                <span class="text-danger">{{ $errors->first('name') }}</span><br>
            </div>
            <div class="mb-1">
                <label for="email" class="form-label">Email address</label><span
                    class="text-danger">{{ $errors->first('email') }} </span>
                <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}"
                    placeholder="Email">
                <span class="text-danger">{{ $errors->first('email') }}</span><br>
            </div>
            <div class="mb-1">
                <label for="mobile" class="form-label">Mobile</label><span
                    class="text-danger">{{ $errors->first('mobile') }} </span>
                <input type="tel" class="form-control" name="mobile" value="{{ old('mobile') }}" maxlength="10" placeholder="Mobile">
                <span class="text-danger">{{ $errors->first('mobile') }}</span><br>
            </div>
            <div class="mb-1">
                <label for="password" class="form-label">Password</label><span
                    class="text-danger">{{ $errors->first('password') }}</span><br>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>
            <div class="mb-1 justify-content-center d-flex">
                <button type="submit" class="btn btn-primary mx-3">Register</button>
            </div>
        </form>
    </div>
</body>
@include('common.footer')

</html>
