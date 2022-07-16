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

        @foreach($siswa as $murid)

            @if($murid['age'] >= 17)

            Nama : {{ $murid['name'] }} <br>
            Umur : {{ $murid['age']}} <br>
            Status : Sudah Punya KTP

            @else
            Nama : {{ $murid['name'] }} <br>
            Umur : {{ $murid['age']}} <br>
            Status : Belum Punya KTP
            
            @endif

            <br>
            Hobi :
            @foreach($murid['hobi'] as $hobi)
                <li>{{ $hobi }}</li>
            @endforeach

        <hr>
        @endforeach

    </fieldset>
    
</body>
</html>