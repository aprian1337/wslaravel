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
    <div class="container">
        <form action="{{route('admin.kelola.update', [$edit->id])}}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input class="form-control" type="text" name="name" id="" value="{{$edit->name}}">
            </div>
            <div class="form-group">
                <label for="">Username</label>
                <input class="form-control" type="text" name="username" id="" value="{{$edit->username}}">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input class="form-control" type="password" name="password" id="">
                <small for="">Password tidak perlu diisi jika tidak ada perubahan</small>
            </div>
            <br>
            <a href="{{route('admin.kelola.index')}}">BACK</a>
            <button class="btn btn-success" type="submit">Submit</button>
        </form>
    </div>
</body>
</html>