<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div style="padding:30%; justify-content: center; align-items: center; display: flex; flex-direction: column; width: 100%; height: 100vh;">
        <Table class="table table-striped" border="1" cellpadding="10" cellspacing="0">
            <tr>
                <td>Lokasi Sensor</td>
                <td>:</td>
                <td>{{ $dataSensor['lokasiSensor'] }}</td>
            </tr>
            <tr>
                <td>Ketinggian Air</td>
                <td>:</td>
                <td>{{ $dataSensor['ketinggianAir'] }}</td>
            </tr>
            <tr>
                <td>Curah Hujan</td>
                <td>:</td>
                <td>{{ $dataSensor['curahHujan'] }}</td>
            </tr>
            <tr>
                <td>Kelembapan Tanah</td>
                <td>:</td>
                <td>{{ $dataSensor['kelembapanTanah'] }}</td>
            </tr>
            <tr>
                <td colspan="3" align="center"><button onclick="document.location.href='/'" class="btn btn-primary">Kembali</button></td>
            </tr>
        </Table>
    </div>
</body>
</html>