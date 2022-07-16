<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jurusan</title>
</head>
<body>

    <fieldset>
        <legend>Data Jurusan</legend>

        <table border = 1>

            <tr>
                <td>Nomor</td>
                <td>Nama Jurusan</td>
                <td>Singkatan</td>
                <td>Pengajar</td>
                <td>Jumlah pengajar</td>
                <td>Siswa</td>
            </tr>

            @php $no = 1 @endphp

            @foreach ($jurusan as $jurusan)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $jurusan->nama_jurusan }}</td>
                <td>{{ $jurusan->singkatan }}</td>
                <td>{{ $jurusan->pengajar }}</td>
                <td>{{ $jurusan->jumlah_p }}</td>
                <td>{{ $jurusan->jumlah_m }}</td>
            </tr>
            @endforeach

        </table>

    </fieldset>

</body>
</html>
