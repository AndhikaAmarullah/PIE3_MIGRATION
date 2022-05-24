<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jurnal</title>
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
                  <th scope="col">Title</th>
                  <th scope="col">Pencipta</th>
                  <th scope="col">Years</th>
               
                </tr>
                @foreach ($data as $d)
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>{{ $d->title }}</td>
                <td>{{ $d->pencipta }}</td>
                <td>{{ $d->years }}</td>
              
                <td>
                <form action="{{route('jurnal.edit', $d->id) }}" method="GET">
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