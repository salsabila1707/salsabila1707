<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1> Tambah siswa</h1>
  <a href="{{ route('siswa.index') }}">kembali</a><br><br>

  @if ($errors->any())
  <div class="alert alert-danger">
    <li>{{ $error }}</li>
    @endoreach
  </ul>
  </div>
  @endif


  <from action="{{ route('siswa.store') }}"method="POST"enctype"multipart/form-data">
    @csrf <!--{{ csrf_field }} -->
    <h2>akun siswa</h2>
    <label>nama lengkap</label>
    <input type="text"id="name"value="{{ ld('name') }}">
    <br><br>
    <label>email Address</label><br>
    <input type="email"id="email"name="email">
    <label>passwoard</label><br>
    <input type="passwoard"id="email"name="passwoard">
    <br><br>

    <label for="passwoard_confirmation" class="col-md-4 col-form-label text-md-end text-start">confirm passwoard</label>
    <div class="col-md-6">
      <input type="passwoard" class="form-control"id="passwoard_confirmation"name="passwoard_confirmation">
    </div>
    <br><br>

    <h2>data siswa</h2>
    <label>foto siswa</label><br>
    <input type="text"name="image" accept="image/*" required>
    <br><br>

    <label>Nis siswa</label><br>
    <input type="text"name="nis" value="{{ old('nis') }}" required>
    <br><br>

    <label>tingkatan</label><br>
    <select  name="tingkatan" requied>
      <option value="">pilih tingkatan</option>
      <option value="X">X</option>
      <option value="XI">XI</option>
      <option value="XII">XII</option>
    </select>
    <br><br>

    <label>jurusan</label><br>
    <select  name="jurusan" requied>
      <option value="">pilih jurusan</option>
      <option value="TBSM">TBSM</option>
      <option value="TJKT">TJKT</option>
      <option value="PPLG">PPLG</option>
      <option value="DKV">DKV</option>
      <option value="TOI">TOI</option>
    </select>
    <br><br>

    <label>KELAS</label><br>
    <select  name="kelas" requied>
      <option value="">pilih jurusan</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
    </select>
    <br><br>
    
    <label>no hp</label><br>
    <input type="text"name="hp" value="{{ old('hp') }}"required>
    <br><br>

    <button type="submit">SIMPAN DATA</button>
    <button type="reset">RESET FPRM</button>
  </from>

</body>
</html>