<!DOCTYPE html>
<html>
<head>
    <title>Input Data Mahasiswa</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Input Data Mahasiswa
    </div>
    <a href=/read class="btn btn-success">Tampilkan Data</a>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-mahasiswa')}}">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">NIM</label>
          <input type="text" id="nim" name="nim" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Nama</label>
          <input type="text" id="nama" name="nama" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Umur</label>
          <input type="text" id="umur" name="umur" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Alamat</label>
          <textarea name="alamat" class="form-control" required=""></textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Kota</label>
          <input type="text" id="kota" name="kota" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Kelas</label>
          <input type="text" id="kelas" name="kelas" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Jurusan</label>
          <input type="text" id="jurusan" name="jurusan" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>