<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
    <form action="{{ route('pinjaman.store')  }}" method="POST">
        @csrf
          <div class="mb-3">
            <label for="id_buku" class="form-label">id buku</label>
            <input type="text" class="form-control" id="id_buku" name="nama"{{ $data->nama }} >
        </div>
        <div class="mb-3">
            <label for="id_pinjaman" class="form-label">id pinjaman</label>
            <input type="text" class="form-control" name="id_pinjaman" id="id pinjaman">
        </div>
        <div class="mb-3">
            <label for="id_jurnal" class="form-label">id jurnal </label>
            <input type="text" class="form-control" id="id_jurnal" name="id_jurnal"  >
        </div>
        <div class="mb-3">
            <label for="id_karya" class="form-label">id karya</label>
            <input type="text" class="form-control" id="id_karya" name="id_karya"  >
        </div>
        <div class="mb-3">
            <label for="denda" class="form-label">denda</label>
            <input type="text" class="form-control" id="denda" name="denda">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">status</label>
            <input type="text" class="form-control" id="status" name="status" >
        </div>
        <div class="mb-3">
            <label for="tanggal_kembali" class="form-label">tanggal kembali</label>
            <input type="text" class="form-control" id="tanggal_kembali" name="gender" >
        </div>



        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>


</body>
</html>