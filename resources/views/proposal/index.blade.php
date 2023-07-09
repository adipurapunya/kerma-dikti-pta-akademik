@extends('layouts.app')

@section('title','LIST PERMOHONAN KERJA SAMA')

@section('contents')

<!-- DataTales Example -->

<div class="header-body">
	<ul class="breadcrumb col-lg-5 col-md-4 col-4">
		<li class="breadcrumb-item">
			<a href=""><i class="fas fa-home"></i></a>
		</li>
		<li class="breadcrumb-item">
			<a href="">Pengajuan Izin Kerja Sama</a>
		</li>
	</ul>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabel Daftar Kerma</h6>
    </div>
    <div class="card-body">
       
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#myModalNorm">+ Pengajuan Baru</button>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Status Pengisian</th>
                        <th>Status Berkas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @php($no = 1)    
                @foreach ($proposal as $row)
                    <tr>
                        <th>{{ $no++ }}</th>
                        <td> <div class="text-wrap width-200">{{ $row->judul }}</div></td>
                        <td>{{ $row->tanggal_pengajuan }}</td>
                        <td>{{ $row->status_pengisian }}</td>
                        <td>{{ $row->status_berkas }}</td>
                        <td>
                            <a href="{{ route('proposal.viewBab1')}}" class="btn btn-success">View</a>
                            <a href="{{ route('proposal.editBab1', encrypt($row->id))}}" class="btn btn-warning">Edit</a>
                            <a href="#" id="hapus" data-id = "{{ route('proposal.hapus', encrypt($row->id))}}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                @endforeach   
                </tbody>     
                
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModalNorm" tabindex="-1" role="dialog"  aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"> Pengajuan Ijin Kerja Sama Baru</h4>
            </div>
            <form role="form" action="{{route('proposal.tambah.simpan')}}" method="post">
            @csrf
            <!-- Modal Body -->
            <div class="modal-body">
                
                  <div class="form-group">
                    <label for="nama_universitas">Nama Universitas Asal</label>
                      <input type="text" name="nama_universitas" value="{{auth()->user()->universitas->nama_universitas}}" class="form-control" disabled/>
                  </div>
                  <div class="form-group">
                    <label for="jenis_kerja_sama">Jenis Kerja Sama</label>
                        <select class="form-control" name="id_jenis_kerjasama" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            <option value="" selected disabled hidden>--Pilih Skema Kerja Sama--</option>
							@foreach($kerjasama as $row)
                                <option value="{{ $row->id }}">{{$row->jenis_kerjasama}}</option>
                            @endforeach
					    </select>  
                  </div>
                  <div class="form-group">
                    <label for="nama_prodi_PT_dalam_negeri">Nama Prodi Perguruan Tinggi Asal</label>
                      <input type="text" name="prodi_pt_dalam_negeri" class="form-control"/>
                  </div>
                  <div class="form-group">
                    <label for="jenis_kerja_sama">Nama Perguruan Tinggi Mitra</label>
                      <input type="text" name="pt_mitra_negeri" class="form-control"/>
                  </div>
                  <div class="form-group">
                    <label for="jenis_kerja_sama">Nama Prodi Perguruan Tinggi Mitra</label>
                      <input type="text" name="prodi_pt_mitra_negeri" class="form-control"/>
                  </div>
                  <div class="form-group">
                    <label for="jenis_kerja_sama">Judul</label>
                      <textarea name="judul" class="form-control"> </textarea>
                  </div>
                
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>

        </div>
    </div>
</div>


@endsection