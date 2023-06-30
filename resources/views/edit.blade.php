<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">

        <form method="post" action="{{url('addDetail',$data->id)}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="name" name="name" class="form-control" id="name" value="{{$data->name}}">
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" value="{{$data->email}}">
            </div>
            <div class="mb-3">
                <label for="image"></label>
                <label for="">Old Image:</label>
                <img src="{{asset('images/'.$data->image)}}" alt="" height="80px" width="90px">
            </div>
            <div style="padding:15px;">
                <label for="">Change Image:</label>
                <input type="file" name="file">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>