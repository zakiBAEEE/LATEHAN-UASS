<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Anggotas yang terdaftar</h1>
   <table border="1">
    <tr>
        <th>Nama</th>
        <th>NPM</th>
    </tr>
    @foreach ($anggotas as $anggota)
        <tr>
            <td>{{ $anggota['nama'] }}</td>
            <td>{{ $anggota['npm'] }}</td>
        </tr>
    @endforeach
   </table>
</body>
</html>