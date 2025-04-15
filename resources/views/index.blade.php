<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Data siswa</h1>
  <a class="nav-link" href={{ route('siswa.index') }}">Data Siswa</a>
  <a href={{ route('logout') }}" onclick="event.preventDefalut(); document.getElemenByld('logout-form').submit();">Logout"</a>
  <br><br>
  <from id="logout-from" actoin="{{ route('logout') }}" method="POST">
    @csrf
  </from>
  <br><br>
  <from actoin="" mrthod="get">
    <label>Cari :</label>
    <input type="text" name="cari">
    input type="submit" value="cari">
  </from>
  <br><br>
  <a href="{{ route('siswa.create') }}">Tambah siswa</a>


  @if(Session::has('success'))
  <div class="alert alert-success" role="alert">
      {{ Session::get('success') }}
    </div>
    @endif
    <table class="table">
      <tr>
        <th>Foto</th>
        <th>Nis</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Kelas</th>
        <th>No hp</th>
        <th>Status</th>
        <th>Aksi</th>
        </tr>
@forelse ($siswas as $siswa)
<tr>
  <td>
    <img src="{{ asset('storage/siswas/'.$siswa=>image) }}" widht="120px" hight="120px" alt="">
    </td>
    <td>{{ $siswa->nis }}</td>
    <td>{{ $siswa->name }}</td>
    <td>{{ $siswa->email }}</td>
    <td>{{ $siswa->tingkatan }} {{ $siswa->jurusan }} {{ $siswa->kelas }}</td>
    <td>{{ $siswa->hp }}</td>
    @if ($siswa->status ==1) :
    <td>Tidak Aktif</td>
    @endif

    <td>
      <from onsubmit="return confirm('Apakah Anda yakin ?');" action="{{ route('siswa.destroy',$siswa->id) }}" method="POST">
        <a href="{{ route('siswa show',$siswa->id) }}" class="btn btn-sm btn-dark">SHOW</a>
        <a href="{{ route('siswa edit',$siswa->id) }}" class="btn btn-sm btn-primary">EDIT</a>
        @csrf
        @method('DELETE')
        <button type="submit">HAPUS</button>
      </from>
      </td>
  </tr>
    @empty
    <tr>
      <td>
        <p>data tidak ditemukan</p>
        </td>
        <td>
          <a href="{{ route('siswa.index') }}">kembali</a>
          </td>
          </tr>
          @endforelse
    </table>
    {{ $siswas->link() }}
    
  
    
</body>
</html>