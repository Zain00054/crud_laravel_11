@extends('layout')


@section('konten')

<div class="d-flax">
    <h3>Daftar Mahasiswa</h3>
    <h4>Selamat datang di aplikasi CRUD silahkan Gunakan fitur yang tersedia dengan bijak</h4>
    <div class="ms-auto">
        <a class="btn btn-success" href="{{route('siswa.tambah')}}">Tambah siswa</a>
    </div>
</div>
<table class="table">
    <tr>
        <th>NO</th>
        <th>NIS</th>
        <th>NAMA</th>
        <th>ALAMAT</th> 
        <th>NO HP</th>  
        <th>JENIS KELAMIN</th>
        <th>HOBI</th>
        <th>AKSI</th>
    </tr>
    @foreach ($siswa as $no=>$data )
    <tr>
        <td>{{ $no+1 }}</td>
        <td>{{ $data->nis}}</td>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->alamat }}</td> 
        <td>{{ $data->no_hp }}</td>  
        <td>{{ $data->jenis_kelamin }}</td>
        <td>{{ $data->hobi }} </td>
        <td>
            <a href="{{route('siswa.edit',$data->id)}}"class="btn btn-sm btn-edit">Edit</a>
            <form action="{{ route('siswa.delete',$data->id)}}"method="post">
                    @csrf
                    <button class="btn btn-sm btn-hapus">Delete</button>
            </form>
        </td>
    </tr> 
    @endforeach
</table>


@endsection