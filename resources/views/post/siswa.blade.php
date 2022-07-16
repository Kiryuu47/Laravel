<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa</title>
</head>
<body>

    <fieldset>
            <legend>Data Siswa</legend>

            <br>

            <table border = 1>

                <tr>
                    <th>Nomor</th>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Umur</th>
                    <th>Jenis Kelamin</th>
                    <th>Jurusan</th>
                    <th>Alamat</th>
                </tr>

                @php $no = 1 @endphp

                @foreach ($siswa as $siswa)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $siswa->nama }}</td>
                    <td>{{ $siswa->nis }}</td>
                    <td>{{ $siswa-> umur }}</td>
                    <td>{{ $siswa->jenis_kelamin }}</td>
                    <td>{{ $siswa->jurusan }}</td>
                    <td>{{ $alamat->alamat }}</td>
                </tr>
                @endforeach

            </table>

        </fieldset>

</body>
</html>
