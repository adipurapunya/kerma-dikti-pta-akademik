@extends('layouts.app')

@section('title','Data User')

@section('contents')
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('addUser') }}" class="btn btn-primary mb-3">Tambah User</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @php($no = 1)    
                
                @foreach ($user as $row)
                    <tr>
                        <th>{{ $no++ }}</th>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->email}}</td>
                        <td>{{ $row->level}}</td>
                        <td>
                            <a href="{{ route('editUser', $row->id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ route('hapusUser', $row->id) }}" class="btn btn-danger">hapus</a>
                        </td>
                    </tr>   
                @endforeach
                </tbody>     
                
            </table>
        </div>
    </div>
</div>

@endsection