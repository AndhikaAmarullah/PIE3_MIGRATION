<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
    <form action="{{ route('admin.store')  }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama_lengkap" name="nama" id="nama" >
        </div>
        <div class="mb-3">
            <label for="tempat lahir" class="form-label">Tempat_Lahir</label>
            <input type="text" class="form-control" name="tempat_lahir" id="tempat lahir">
        </div>
        <div class="mb-3">
            <label for="tanggal ahir" class="form-label">Tanggal lahir </label>
            <input type="text" class="form-control" id="tanggal lahir" name="tanggal_lahir"  >
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat"  >
        </div>
        <div class="mb-3">
            <label for="agama" class="form-label">Agama</label>
            <input type="text" class="form-control" id="agama" name="agama">
        </div>
        <div class="mb-3">
            <label for="no telpon" class="form-label">No Telpon</label>
            <input type="text" class="form-control" id="no telpon" name="no_telpon" >
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">gender</label>
            <input type="text" class="form-control" id="gender" name="gender" >
        </div>



        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>


</body>
</html>