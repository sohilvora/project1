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
    <form action="/register" method="post" class="form-group justify-content-center">
        <h1>Register</h1>
        @csrf
        <input type="text" name="name" id="" value="{{old('name')}}" placeholder="Name"> <span class="text-danger">{{ $errors->first('name') }}</span><br>
        <input type="email" name="email" id="" value="{{old('email')}}" placeholder="Email"> <span class="text-danger">{{ $errors->first('email') }}</span><br>
        <input type="tel" name="mobile" value="{{old('mobile')}}" maxlength="10" placeholder="Mobile"> <span class="text-danger">{{ $errors->first('mobile') }}</span><br>
        <input type="password" name="password" id="" placeholder="Password"> <span class="text-danger">{{ $errors->first('password') }}</span><br>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</body>
@include('common.footer')
</html>