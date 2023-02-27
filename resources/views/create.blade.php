<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>


    <div class="row justify-between">
        <form class="col-6" action="{{ route('post.store') }}" method="POST">
            @csrf
            <div>
                <label class="form-label" for="name">Title</label>
                <input class="form-control" type="text" name="Title">
            </div>
            <div>
                <label class="form-label" for="price">posted_by</label>
                <input class="form-control" type="text" name="posted_by">
            </div>
            <div>
                <label class="form-label" for="description">created_at</label>
                <input class="form-control" type="text" name="created_at">
            </div>
            <input class="btn btn-primary" type="submit">
        </form>
    </div>
</body>

</html>
