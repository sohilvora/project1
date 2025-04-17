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

            
          
    </div>
    @include('common.footer')

</html>
