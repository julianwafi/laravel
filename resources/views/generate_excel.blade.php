<!-- resources/views/generate_excel.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Generate Excel from Table Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <table class="table">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>Tanggal Pembayaran</th>
            <th>Jumlah</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tableData as $data)
            <tr>
                <td>{{ $data->No}}</td>
                <td>{{ $data->NamaSiswa }}</td>
                <td>{{ $data->TanggalPembayaran }}</td>
                <td>{{ $data->Jumlah }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <button class="btn btn-primary" id="generate-button">Generate Data to Excel</button>
</div>

<script>
    document.getElementById('generate-button').addEventListener('click', function () {
        window.location.href = '/generate-excel';
    });
</script>
</body>
</html>
