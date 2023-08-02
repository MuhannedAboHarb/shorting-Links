<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Project Create</h1>
    <div>
        @if($errors->any())
            <ul>
                @foreach ($errors->all() as $error )
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <form action="{{ route('project.store') }}" method="post">
        @csrf
        @method('post')
        <div>
            <label for="old_url">Old Url</label>
            <input type="text" name="old_url" id="old_url" placeholder="Old Url">
        </div>

        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" placeholder="Description"></textarea>
        </div>

        <div>
            <input type="submit" value=" Save a new project">
        </div>
    </form>
</body>
</html>