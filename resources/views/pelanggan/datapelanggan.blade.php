<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Data Pelanggan</title>
</head>

<body>
    <h1 class="text-center mb-4">Data Pelanggan</h1>
    <div class="container">
        <a href="/pelanggan/tambahpelanggan" type="button" class="btn btn-success">Tambah Pelanggan</a>
        <div class="row g-3 align-items-center mt-2">
            <div class="col-auto">
                <form action="/pelanggan/datapelanggan" method="GET">
                    <input type="search" id="inputPassword6" name="search" class="form-control" aria-describedby="passwordHelpInline">
                </form>
            </div>
            <div class="col-auto">
                <a href="/pelanggan/exportpdf" target="_blank" class="btn btn-danger">Export PDF<i class="fa fa-print" aria-hidden="true"></i> </a>
            </div>
            <div class="col-auto">
                <a href="/pelanggan/exportexcel" target="_blank" class="btn btn-dark">Export Excel<i class="fa fa-print" aria-hidden="true"></i> </a>
            </div>

            <!-- <div class="col-auto">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Import Data
                </button>
            </div> -->

            <!-- Button trigger modal -->


            <!-- Modal -->
            <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="/pelanggan/importexcel" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="file" name="file" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div> -->

        </div>
        <div class="row">
            <!-- @if($message = Session::get('sukses'))
            <div class="alert alert-success" role="alert">
                {{$message}}
            </div>
            @endif -->
            <table class="table">
                <thead>
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
                        <th scope="col">Dibuat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach( $data as $index => $row )
                    <tr>
                        <th scope="row">{{ $index + $data->firstItem() }}</th>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->hbsolar }}</td>
                        <td>{{ $row->hjsolar }}</td>
                        <td>{{ $row->hjoli }}</td>
                        <td>{{ $row->hjlain }}</td>
                        <td>{{ $row->diskon }}</td>
                        <td>0{{ $row->phone }}</td>
                        <td>{{ $row->kontak }}</td>
                        <td>{{ $row->wilayah }}</td>
                        <td>{{ $row->created_at->diffForhumans() }}</td>
                        <td>
                            <a href="/pelanggan/tampilpelanggan/{{ $row->id }}" type="button" class="btn btn-info">Edit</a>
                            <a href="#" class="btn btn-danger delete" data-id="{{ $row->id }}" data-nama=" {{ $row->nama }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $data->links() }}
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
<script>
    $('.delete').click(function() {
        var pelangganid = $(this).attr('data-id');
        var nama = $(this).attr('data-nama');
        swal({
                title: "Hapus Data ?",
                text: "Kamu Akan Menghapus data dengan nama " + nama + "",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/pelanggan/deletepelanggan/" + pelangganid + ""
                    swal("Data Berhasil Di Hapus", {
                        icon: "success",
                    });
                } else {
                    swal("Data Tidak Di Hapus");
                }
            });
    });
</script>
<script>
    @if(Session::has('sukses'))
    toastr.success("{{ Session::get('sukses')}}");
    @endif
</script>

</html>