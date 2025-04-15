<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Category</title>
</head>

<body>
    @include('common.header')

        @if (session('success'))
            <div class="alert alert-success"><span>{{ session('success') }}</span></div>
        @elseif (session('error'))
            <div class="alert alert-danger"><span>{{ session('error') }}</span></div>
        @endif

        <div class="container col-lg-3 col-md-6 col-sm-8 mt-5">
            <h1>Add Category</h1>
            <form action="/add_category" method="post" >
                @csrf
                <div class="mb-3">
                    <label for="category_name" class="form-label">Category Name</label><span
                        class="text-danger">{{ $errors->first('category_name') }} </span>
                    <input type="text" class="form-control" id="category_name" name="category_name"
                        value="{{ old('category_name') }}">
                </div>
                
                <div class="mb-3 justify-content-center d-flex">
                    <button type="submit" class="btn btn-primary mx-3">Add Category</button>

                </div>
            </form>
        </div>
    
    @include('common.footer')
</body>

</html>
