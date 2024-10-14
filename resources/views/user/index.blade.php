<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
  <table>
    <thead>
      <th>No.</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Aksi</th>
    </thead>
    <tr>
      @foreach ($user as $d)
        <td>{{ $loop->iteration }}</td>
        <td>{{ $d->name }}</td>
        <td>{{ $d->email }}</td>
        <td>
            <a href="{{ route('user.destroy',['id' => $d->id]) }}" data-confirm-delete="true">hapus</a>
        </td>
      @endforeach
    </tr>
  </table>
  <form action="{{ route('user.store') }}" method="post">
    @csrf
    <input type="text" name="name" id="">
    <input type="text" name="email" id="">
    <input type="text" name="password" id="">
    <button type="submit">simpan</button>
  </form>
</body>
@include('sweetalert::alert')
</html>