<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guru</title>
</head>
<body>

    <fieldset>
        <legend>Data Guru</legend>

        <table border =1>

            <tr>
                <td>Nomor</td>
                <td>Nama</td>
                <td>NIK</td>
                <td>Umur</td>
                <td>Jenis Kelamin</td>
                <td>Mata Pelajaran</td>
                <td>Alamat</td>
            </tr>

            @php $no = 1 @endphp

            @foreach ($guru as $guru)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $guru->nama }}</td>
                <td>{{ $guru->nik }}</td>
                <td>{{ $guru->umur }}</td>
                <td>{{ $guru->jenis_kelamin }}</td>
                <td>{{ $guru->mapel}}</td>
                <td>{{ $guru->alamat}}</td>
            </tr>
            @endforeach

        </table>

    </fieldset>

</body>
</html>
