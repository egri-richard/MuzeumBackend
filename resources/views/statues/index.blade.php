<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <p><a class="btn btn-warning" href="{{ route('home') }}">Vissza a főoldalra</a></p>

    <table class="table table-striped">
        <tr>
            <th>Person</th>
            <th>Height</th>
            <th>Price</th>
            <th>Delete</th>
        </tr>
    @foreach ($statues as $statue)
        <tr>
            <td>
                <a class="btn btn-link" href="{{ route('statues.show', $statue->id) }}">{{ $statue->person }}</a>
            </td>
            <td>{{ $statue->height }}</td>
            <td>{{ $statue->price }}</td>
            <td>
                <form method="POST" action="{{ route('statues.destroy', $statue->id) }}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Törlés" class="btn btn-danger">
                </form>
            </td>
        </tr>
    @endforeach
        <tr>
            <td colspan="4"><a class="btn btn-warning" href="{{ route('statues.create') }}">Új szobor</a></td>
        </tr>
    </table>
</body>
</html>
