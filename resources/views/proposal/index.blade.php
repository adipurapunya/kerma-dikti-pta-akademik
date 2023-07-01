@extends('layouts.app')

@section('title','LIST PERMOHONAN KERJA SAMA')

@section('contents')

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabel Daftar Kerma</h6>
    </div>
    <div class="card-body">
        <!--<a href="{{ route('proposal.tambah') }}" class="btn btn-primary mb-3">+ Pengajuan Baru</a> -->
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
                    <tr>
                        <th>1</th>
                        <td>Judul percobaan</td>
                        <td>26 Juni 2023</td>
                        <td>Belum Lengkap</td>
                        <td>Belum Lengkap</td>
                        <td>
                            <a href="{{ route('proposal.viewBab1')}}" class="btn btn-success">View</a>
                            <a href="{{ route('proposal.editBab1')}}" class="btn btn-warning">Edit</a>
                            <a href="" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>   
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
            
            <!-- Modal Body -->
            <div class="modal-body">
                
                <form role="form">
                  <div class="form-group">
                    <label for="nama_universitas">Nama Universitas</label>
                      <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                    <label for="jenis_kerja_sama">Jenis Kerja Sama</label>
                      <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                    <label for="nama_prodi_PT_dalam_negeri">Nama Prodi PT Dalam Negeri</label>
                      <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                    <label for="jenis_kerja_sama">Nama PT Mitra Negeri</label>
                      <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                    <label for="jenis_kerja_sama">Nama Prodi PT Mitra Negeri</label>
                      <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                    <label for="jenis_kerja_sama">Judul</label>
                      <textarea class="form-control"> </textarea>
                  </div>
                
                </form>
                
                
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">
                            Batal
                </button>
                <button type="button" class="btn btn-primary">
                    Simpan
                </button>
            </div>
        </div>
    </div>
</div>


@endsection