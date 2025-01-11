@extends('layout')

@section('konten')


<h3>Tambah Data Mahasiswa</h3>

<div class="form-container">
<h4>Silahkan tambah data mahasiswa baru
harap perhatikan data agar tidak terjadi kesalahan</h4>
<form action="{{route ('siswa.submit')}}" method="post">
    @csrf
    
        <label>NIS</label>
        <input type="number" name="nis"  placeholder="Masukkan Nim">
    
   
        <label>NAMA</label>
        <input type="text" name="nama" placeholder="Masukkan Nama">
    
   
        <label>ALAMAT</label>
        <input type="text" name="alamat" placeholder="Masukkan Alamat">
     
       
        <label>NO HP</label>
        <input type="text" name="no_hp" placeholder="Masukkan No hp">

  
        <label>JENIS KELAMIN</label>
        <input type="text" name="jenis_kelamin"placeholder="Masukkan Jenis Kelamin">

        <label>HOBI</label>
        <input type="text" name="hobi" placeholder="Masukkan Hobi">
   

    <button class="form-container button">SAVE</button>
</form>

</div>
@endsection