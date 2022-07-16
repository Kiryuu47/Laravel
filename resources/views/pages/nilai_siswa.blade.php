<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Siswa</title>
</head>
<body>

    <fieldset>
        <legend>Nilai Siswa</legend>

        @foreach($nilai_siswa as $siswa)

        Nama Siswa : {{ $siswa['nama']}} <br>
        Perolehan Nilai : 
        <ul>
            @php
                $totalnilai = 0;
            @endphp
            @foreach($siswa['nilai'] as $perolehnilai)
                <li>
                    Mata Pelajaran : {{ $perolehnilai['mapel']}} <br>
                    Nilai : {{ $perolehnilai['nilai_mapel']}}
                </li>
                @php
                    $totalnilai += $perolehnilai['nilai_mapel'];
                @endphp
                @endforeach   
        </ul>

        @php
            $ratarata = $totalnilai / count($siswa['nilai']);
            $grade;
            if ($ratarata >= 85) {
                $grade = 'A';
            } else if ($ratarata >= 75) {
                $grade = 'B';
            } else if ($ratarata >= 60) {
                $grade = 'C';
            } else if ($ratarata >= 50) {
                $grade = 'D';
            } else if ($ratarata >= 0) {
                $grade = 'E';
            } else {
                $grade = 'Nilai Tidak Ada';
            }
        @endphp

        Total Nilai : {{ $totalnilai }} <br>
        Rata - Rata : {{ $ratarata }} <br>
        Grade : {{ $grade }}

        <hr>

        @endforeach

    </fieldset>
    
</body>
</html>