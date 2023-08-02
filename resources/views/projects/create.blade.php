<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>

    <style>
        form {
            max-width: 500px;
            margin: 0 auto;
            margin-top: 100px;
            padding: 20px 40px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group.mb-3 .btn-primary {
            display: block;
            width: 100%;
            margin-top: 20px;
        }
    </style>


</head>

<body>

    <form action="{{ route('project.store') }}" method="post">
        <h1>Create Short Link</h1>
        @csrf
        @method('post')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="old_url">Old Url</label>
                    <input type="text" name="old_url" id="old_url"
                        class="form-control @error('old_url') is-invalid   @enderror">
                    @error('old_url')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>



                <div class="form-group mb-3">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror"
                        rows="7"></textarea>
                    @error('description')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-group mb-6">
            <button type="submit" class="btn btn-success">Submit</button>
            <a href="{{ route('project.index') }}" class="btn btn-primary">Back</a>
        </div>
    </form>
</body>

</html>
