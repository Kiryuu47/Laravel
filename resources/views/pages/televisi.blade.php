<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Televisi</title>
</head>
<body>

    <fieldset>

        <legend>Jadwal Televisi</legend>

        @foreach($televisi as $tivi)
        Nama : {{ $tivi['channel']}} <br>
        Jadwal :
        
        <br>

        @foreach($tivi['jadwal'] as $tayang)
        Judul : {{ $tayang['judul']}} <br>
        Jam Tayang : {{ $tayang['jam_tayang']}} <br>
        Tanggal Tayang : {{ $tayang['tanggal_tayang']}} 
        
        <br> <hr>

        @endforeach

        @endforeach

    </fieldset> 
    
</body>
</html>