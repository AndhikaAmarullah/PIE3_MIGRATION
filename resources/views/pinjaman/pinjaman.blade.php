<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container p-5 ">
        <table class="table">
            <thead>
               
                <tr>
                  <th scope="col">NO</th>
                  <th scope="col">id_buku</th>
                  <th scope="col">id_pinjaman</th>
                  <th scope="col">id_jurnal</th>
                  <th scope="col">id_karya</th>
                  <th scope="col">denda</th>
                  <th scope="col">status</th>
                  <th scope="col">tanggal_kembali</th>
                </tr>
                @foreach ($data as $d)
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>{{ $d->id_buku }}</td>
                <td>{{ $d->id_pinjaman }}</td>
                <td>{{ $d->id_jurnal }}</td>
                <td>{{ $d->id_karya }}</td>
                <td>{{ $d->denda }}</td>
                <td>{{ $d->status }}</td>
                <td>{{ $d->tanggal_kembali }}</td>
                <td>
                <form action="{{route('pinjamanan.edit', $d->id) }}" method="GET">
                  <button type="submit" class="btn btn-primary">Edit</button>
                </form>
                <button class="btn btn-danger">Delate</button>
            </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>

</body>
</html>