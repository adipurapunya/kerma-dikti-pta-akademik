@extends('layouts.app')

@section('title','Data kategori Universitas')

@section('contents')
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data kategori Universitas</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('kategori.tambah') }}" class="btn btn-primary mb-3">Tambah kategori</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kategori Universitas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @php($no = 1)    
                @foreach ($kategori as $row)
                    <tr>
                        <th>{{ $no++ }}</th>
                        <td>{{ $row->nama }}</td>
                        <td>
                            <a href="{{ route('kategori.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ route('kategori.hapus', $row->id) }}" class="btn btn-danger">hapus</a>
                        </td>
                    </tr>   
                @endforeach
                </tbody>     
                
            </table>
        </div>
    </div>
</div>

@endsection