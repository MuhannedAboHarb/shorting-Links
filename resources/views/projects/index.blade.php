<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Short Links</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1> Shorties Links</h1>
        <div class="card">
            <div class="card-body">
                <h1 class="btn btn-success">

                    <a style="text-decoration: none; color:beige;" href="{{ route('project.create') }}">Create Link</a>
                </h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Origin Link</th>
                            <th>Short Link</th>
                            <th>Description</th>
                            <th>Count Visite</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <td>{{ $project->id }}</td>
                                <td>{{ $project->old_url }}</td>
                                <td><a href="{{ route('project.show', $project->new_url) }}" target="_blank">
                                        {{ $project->new_url }}</a></td>
                                <td>{{ $project->description }}</td>
                                <td>{{ $project->visit_count }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
