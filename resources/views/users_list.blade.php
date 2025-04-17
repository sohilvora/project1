<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    @include('common.header')

    <h1>Users List</h1>
    @if (session('success'))
        <div class="alert alert-success"><span>{{ session('success') }}</span></div>
    @elseif (session('error'))
        <div class="alert alert-danger"><span>{{ session('error') }}</span></div>
    @endif

    <div>
        <div class="table-responsive">
            <table class="table table-primary border table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile</th>
                        <th class="text-center" scope="col" colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!$users)
                        <tr>
                            <td colspan="5" class="text-center">No Users Found</td>
                        </tr>
                    @else
                        @foreach ($users as $user)
                            <tr>
                                <td scope="row">{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->mobile }}</td>
                                {{-- <td class="text-center"><a href="/update/{{ $user->id }}" class="btn btn-warning">Update</a></td> --}}
                                <td class="text-center"><a href="/delete/{{ $user->id }}"
                                        class="btn btn-danger">Delete</a></td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    @include('common.footer')
</body>

</html>
