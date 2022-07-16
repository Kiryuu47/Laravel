<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja</title>
</head>
<body>

    <fieldset>

        <legend>Toko</legend>

        @foreach($belanja as $belanja)
        <hr>
            NAMA PEMBELI : {{ $belanja['nama'] }} <br>

            <?php $total = 0 ?>
            @foreach($belanja['pembelian'] as $barang)

            <br>

            - JENIS : {{ $barang['jenis'] }}<br>
            - MERK : {{ $barang['merk'] }} <br>
            - HARGA : {{ $barang['harga'] }}

            <hr>

            <?php $total += $barang['harga'] ?>
            Total Harga : {{ number_format($total, 0, ',', '.') }} <br>

            <hr>

            Di Tambah :

            <br>
            @endforeach

            <br>
            
            @if($total > 250000 && $total < 500000)

            @php
            $cashback = (5/100) * $total 
            @endphp

            @elseif($total >= 500)

            @php
            $cashback = (10/100) * $total 
            @endphp

            @else
            @endif

                Cashback : {{ number_format($cashback, 0, ',', '.') }} <br>
                Total Harga : {{ number_format  ($total - $cashback, 0, ',', '.')}}

        @endforeach

    </fieldset>
    
</body>
</html>