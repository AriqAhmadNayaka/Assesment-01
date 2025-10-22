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
    <div style="justify-content: center; align-items: center; display: flex; flex-direction: column; width: 100%; height: 100vh;">
        <h1>Form Sensor</h1>
        <form action="/proses-data" method="POST">
            @csrf
            <table >
                <tr>
                    <td>Lokasi Sensor</td>
                    <td>:</td>
                    <td>
                        <select required name="lokasiSensor">
                            <option value="Dayeuhkolot">Dayeuhkolot</option>
                            <option value="Baleendah">Baleendah</option>
                            <option value="Majalaya">Majalaya</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Ketinggian Air (Cm)</td>
                    <td>:</td>
                    <td>
                        <input required type="number" name="ketinggianAir" required>
                    </td>
                </tr>
                <tr>
                    <td>Curah Hujan (Mm)</td>
                    <td>:</td>
                    <td>
                        <input required type="number" name="curahHujan">
                    </td>
                </tr>
                <tr>
                    <td>Kelembapan Tanah (%)</td>
                    <td>:</td>
                    <td>
                        <input required type="number" name="kelembapanTanah">
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><Button class="btn btn-primary">Submit</Button></td>
                </tr>
            </table>
            
        </form>
    </div>
</body>
</html>