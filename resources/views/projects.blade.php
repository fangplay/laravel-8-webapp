<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projects</title>
</head>
<body>
    <h3>Projects</h3>
    <table>
        <tr>
            <th>Project Name</th>
            <th>Status</th>
        </tr>
        @foreach ($projects as $p)
            <tr>
                <td>{{ $p->pname }}</td>
                <td>{{ $p->sname }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
