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
            padding: 20px;
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
    <form action="{{ route('store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" id="first_name"
                        class="form-control @error('first_name') is-invalid   @enderror">
                    @error('first_name')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>


                <div class="form-group mb-3">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" id="last_name"
                        class="form-control @error('last_name') is-invalid   @enderror">
                    @error('last_name')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>


                <div class="form-group mb-3">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="7"></textarea>
                    @error('description')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-group mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>

</html>
