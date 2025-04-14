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
    
    <div class="container col-lg-12 p-5 mx-auto">
        <input type="text" class="form-control m-3" placeholder="Search...">
    <div class=" col-lg-12 d-flex">
        <div class="col-lg-3 bg-secondary p-2">

            <h3 class="m-2">Category</h3>
            <ul style="list-style-type: none;">
                @php
                    $categories = App\Models\Category::all();
                @endphp
                @foreach ($categories as $category)
                    <li><a href="/category/{{ $category->c_id }}"
                            class="text-decoration-none">{{ $category->c_name }}</a></li>
                @endforeach

            </ul>
        </div>
        
        <div class="d-flex">
            
            <div class="bg-danger">
                <div class="card m-3 d-flex " style="width:200px">
                    <img class="card-img-top" src="img_avatar1.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
                <div class="card m-3 d-flex " style="width:200px">
                    <img class="card-img-top" src="img_avatar1.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
                <div class="card m-3 d-flex " style="width:200px">
                    <img class="card-img-top" src="img_avatar1.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                </div>

            </div>
        
            <div class="bg-danger">
                <div class="card m-3 d-flex" style="width:200px">
                    <img class="card-img-top" src="img_avatar1.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
                <div class="card m-3 d-flex " style="width:200px">
                    <img class="card-img-top" src="img_avatar1.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
                <div class="card m-3 d-flex " style="width:200px">
                    <img class="card-img-top" src="img_avatar1.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text.</p>
                        <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@include('common.footer')

</html>
