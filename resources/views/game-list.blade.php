<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
    <title>Game List</title>
</head>

<body>
    <h3>Game List</h3>
    <table>
        <tr>
            <th>Game</th>
            <th>Generation</th>
        </tr>
        @foreach ($gameList as $game)
        <tr>
            <td>{{ $game->gamename }}</td>
            <td>{{ $game->genname }}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>
