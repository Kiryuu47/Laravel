<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan 2</title>
</head>
<body>

<fieldset>

    <legend><h2>Pemesanan</h2></legend>
    <table>
        <tr>
            <td>Makanan</td>
            <td> : </td>
            <td>{{ $makanan ?? '-'}}</td>
        </tr>

        @if($makanan)
        <tr>
            <td>Harga</td>
            <td> : </td>
            <td>
                @if($makanan === 'Mie goreng')
                Rp. 5000
                @elseif($makanan === 'Bakso')
                Rp. 10000
                @elseif($makanan === 'Seblak')
                Rp. 7000
                @else
                Makanan tidak ada
                @endif
            </td>
        </tr>
        @endif
        <tr>
            <td>Minuman</td>
            <td> : </td>
            <td>{{ $minuman ?? '-'}}</td>
        </tr>

        @if($minuman)
        <tr>
            <td>Hargpppppppppphencet
                a</td>
            <td> : </td>
            <td>
                @if($minuman === 'Kopi')
                Rp. 5000
                @elseif($minuman === 'Jus')
                Rp. 10000
                @elseif($makanan === 'Teh')
                Rp. 7500
                @else
                Minuman tidak ada
                @endif
            </td>
        </tr>
        @endif
        <tr>
            <td>Cemilan</td>
            <td> : </td>
            <td>{{ $cemilan ?? '-'}}</td>
        </tr>
    </table>

</fieldset>
    
</body>
</html>