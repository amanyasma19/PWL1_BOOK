<!DOCTYPE html>
<html>
  <head>
    <!-- Kode head -->
    <title>Hello HTML</title>
  </head>
  <body>
    <h1>Halo dunia HTML</h1>
    <ul>
    @foreach($nama as $n)
    <li>{{$n}}</li>
    @endforeach
    </ul>
  </body>
</html>