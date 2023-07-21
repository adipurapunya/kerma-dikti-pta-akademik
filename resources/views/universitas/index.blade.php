@extends('layouts.app')

@section('title','DATA PERGURUAN TINGGI AKADEMIK SE INDONESIA')

@section('contents')

<!-- DataTales Example -->

<div class="header-body">
	<ul class="breadcrumb col-lg-5 col-md-4 col-4">
		<li class="breadcrumb-item">
			<a href=""><i class="fas fa-home"></i></a>
		</li>
		<li class="breadcrumb-item">
			<a href="">Data Perguruan Tinggi Akademik</a>
		</li>
	</ul>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabel Perguruan Tinggi Akademik</h6>
    </div>
    
    <div class="card-body">
       
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#myModalNorm">+ Tambah PT Manual</button>

        <div class="form-row align-items-center">
            
            <table border="0" width="100%" class="">
            <tr>
                <td width="9.5%">Tampilkan data</td>

                <td width="8%">
                  
                    <select class="custom-select" id="showDataUniversitas" name="testAjax">
                            <option value="5" {{ isset($universitas) ? ($lastPagination == 5 ? 'selected' : '') :'' }} >5</option>
                            <option value="10" {{ isset($universitas) ? ($lastPagination == 10 ? 'selected' : '') :'' }} >10</option>
                            <option value="10" {{ isset($universitas) ? ($lastPagination == 15 ? 'selected' : '') :'' }} >15</option>
                            <option value="20" {{ isset($universitas) ? ($lastPagination == 20 ? 'selected' : '') :'' }} >20</option>
                            <option value="30" {{ isset($universitas) ? ($lastPagination == 30 ? 'selected' : '') :'' }} >30</option>
                            <option value="50" {{ isset($universitas) ? ($lastPagination == 50 ? 'selected' : '') :'' }} >50</option>
                            <option value="100" {{ isset($universitas) ? ($lastPagination == 100 ? 'selected' : '') :'' }} >100</option>
                    </select>
               
                </td>
                
                <td></td>

                <td width="5%">Filter by</td>

                <td width="15%">
                  
                    <select class="custom-select" id="" name="">
                            <option value="" >Nama PT</option>
                            <option value="" >Kode Universitas</option>
                            
                    </select>
               
                </td>
                <td width="15%"><input type="text" name="" class="form-control"> </td>
                <td width="4.5%"><button type="submit" class="btn btn-primary">Cari</button></td>
            </tr>
            </table>
        </div>
            
        <br>
        <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Perguruan Tinggi</th>
                        <th>Kode</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @if(!empty($universitas) && $universitas->count())    
                @php($no = 1)    
                @foreach ($universitas as $row)
                    <tr>
                        <th>{{ $no++ }}</th>
                        <td> <div class="text-wrap width-200">{{ $row->nama_universitas }}</div></td> 
                        <td> <div class="">{{ $row->kode_universitas }}</div></td> 
                        <td>
                            <a href="" class="btn btn-success btn-sm">View</a>
                            <a href="" class="btn btn-warning btn-sm">Edit</a>
                            <a href="#" id="hapus" data-id = "" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                @endforeach   
                @else
                    <tr>
                        <td colspan="7"> there is no data. </td>
                    </tr>
                @endif
                </tbody>     
            </table>
            <div class="pagination-wrap">&nbsp &nbsp &nbsp {{$universitas->links('vendor.pagination.bootstrap-5')}}</div>
        </div>

    </div>
</div>




@endsection