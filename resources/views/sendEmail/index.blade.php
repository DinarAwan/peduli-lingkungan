{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>kirim email</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>role</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->role}}</td>
            </tr>  
            @endforeach
        </tbody>
    </table>
    <a href="/kirim">Kirim</a>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kirim email</title>
</head>
<body>
    <form method="POST" action="/kirim">
        @csrf
        <table>
            <thead>
                <tr>
                    <th>Pilih</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $item)
                    <tr>
                        <td><input type="checkbox" name="emails[]" value="{{ $item->email }}"></td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->role }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>
