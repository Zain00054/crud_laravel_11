@extends('layout')

@section('konten')

<div class="form-container">
<h3>Silahkan Lakukan Pembaruan Data</h3>
<h4>Masukkan data anda dengan baik dan benar

jika ada kesalahan silahkan di isi ulang kembali</h4>


<form action="{{route ('siswa.update',$siswa->id)}}" method="post">
    @csrf
    <div class="form-container">
            <label>NIS</label>
            <input type="number" name="nis" value="{{$siswa->nis}}" class="from-control mmb-3">
    </div>
    <div class="form-container">
            <label>Nama</label>
            <input type="text" name="nama" value="{{$siswa->nama}}" class="from-control mb-3">
    </div>
    <div class="form-container">
            <label>Alamat</label>
            <input type="text" name="alamat" value="{{$siswa->alamat}}"  class="from-control mb-3">
    </div>
    <div class="form-container">
            <label>No Hp</label>
            <input type="text" name="no_hp" value="{{$siswa->no_hp}}"  class="from-control mb-3">
    </div>
    <div class="form-container">
            <label>Jenis Kelamin</label>
            <input type="text" name="jenis_kelamin" value="{{$siswa->jenis_kelamin}}"  class="from-control mb-3">
    </div>
    <div class="form-container">
            <label>HOBI</label>
            <input type="text" name="hobi" value="{{$siswa->hobi}}"  class="from-control mb-3">
    </div>
    <button class="btn btn-primary">SAVE</button>
</form>
</div>
@endsection