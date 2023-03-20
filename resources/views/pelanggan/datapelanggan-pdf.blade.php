<!DOCTYPE html>
<html>

<head>
    <style>
        table,
        td,
        th {
            border: 1px solid black;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }
    </style>
</head>

<body>

    <h1 align="center">Data Pelanggan</h2>

        <table id="customers">
            <tr>
                <th scope="col">Kode</th>
                <th scope="col">Nama</th>
                <th scope="col">HB Solar</th>
                <th scope="col">HJ Solar</th>
                <th scope="col">HJ Oli</th>
                <th scope="col">HJ Lain</th>
                <th scope="col">Diskon</th>
                <th scope="col">Phone</th>
                <th scope="col">Kontak</th>
                <th scope="col">Wilayah</th>
            </tr>
            @php
            $no=1;
            @endphp
            @foreach($data as $row)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->hbsolar }}</td>
                <td>{{ $row->hjsolar }}</td>
                <td>{{ $row->hjoli }}</td>
                <td>{{ $row->hjlain }}</td>
                <td>{{ $row->diskon }}</td>
                <td>0{{ $row->phone }}</td>
                <td>{{ $row->kontak }}</td>
                <td>{{ $row->wilayah }}</td>
            </tr>
            @endforeach
        </table>
        <script>
            window.print();
        </script>
</body>

</html>