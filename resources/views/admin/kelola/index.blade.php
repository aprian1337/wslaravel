<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        Selamat datang {{Auth::guard('admin')->user()->name}}
        <a href="{{route('auth.logout')}}">Logout</a>
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <table class="table">
            <div class="float-left">
                <h1>List Admin</h1>
            </div>
            <div class="float-right">
                <a href="{{route('admin.kelola.create')}}" class="btn btn-success">Tambah data</a>
            </div>
            <thead>
                <th>#</th>
                <th>Name</th>
                <th>Username</th>
                <th>Password
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($admin as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->username }}</td>
                        <td>{{ $data->password }}</td>
                        <td>
                            <a href="{{route('admin.kelola.edit', $data->id)}}" class="btn btn-warning">Edit</a>
                            <form method="POST" action="{{ route('admin.kelola.destroy', [$data->id]) }}">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
