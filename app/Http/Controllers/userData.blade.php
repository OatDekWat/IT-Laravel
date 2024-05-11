<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <table class = "table table-bordered">
        <thead class = "table-sm">
            <tr>
                <th scope = "col" class="col-2">ID</th>
                <th scope = "col" class="col-2">name</th>
                <th scope = "col" class="col-2">Email</th>
                <th scope = "col" class="col-2">Action</th>
                12
            </tr>

        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tr>
            @endforeach
        </tbody>

    </table>
</body>
</html>