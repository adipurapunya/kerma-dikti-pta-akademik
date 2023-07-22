@extends('layouts.app') 

@section('title','TAMPILAN BAB 1') 

@section('contents')

<div class="header-body">
	<ul class="breadcrumb col-lg-5 col-md-4 col-4">
		<li class="breadcrumb-item">
			<a href=""><i class="fas fa-home"></i></a>
		</li>
		<li class="breadcrumb-item">
			<a href="{{ route('proposal')}}">Pengajuan Izin Kerja Sama</a>
		</li>
		<li class="breadcrumb-item">Tampilan Proposal BAB 1</li>
	</ul>
</div>
	
<!-- Header -->
<div class="card-header shadow">
	<div class="container-fluid">
		<div class="header-body">
			<input type="hidden" id="statusView" value="N">
			<ul class="nav nav-pills nav-fill flex-column flex-sm-row" id="tabs-text" role="tablist">
				<li class="nav-item tab_up">
					<a style="font-size: 1rem;" class="nav-link tab_up mb-sm-3 mb-md-0 active" id="tabs-text-1-tab" href="{{ route('proposal.viewBab1', encrypt($proposal->id))}}">BAB 1<br>PROFIL PERGURUAN<br>TINGGI</a>
				</li>
				<li class="nav-item tab_up">
					<a style="font-size: 1rem;" class="nav-link tab_up mb-sm-3 mb-md-0 " id="tabs-text-1-tab" href="{{ route('proposal.viewBab2', encrypt($proposal->id))}}">BAB 2<br>DOKUMEN KERJA SAMA</a>
				</li>
				<li class="nav-item tab_up">
					<a style="font-size: 1rem;" class="nav-link tab_up mb-sm-3 mb-md-0 " id="tabs-text-1-tab" href="{{ route('proposal.viewBab3', encrypt($proposal->id))}}">BAB 3<br>KESIAPAN SUMBER DAYA</a>
				</li>
				<li class="nav-item tab_up">
					<a style="font-size: 1rem;" class="nav-link tab_up mb-sm-3 mb-md-0 " id="tabs-text-1-tab" href="{{ route('proposal.viewBab4', encrypt($proposal->id))}}">BAB 4<br>RENCANA PELAKSANAAN<br>KERJA SAMA</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<br>
<!-- Page content -->

	<!-- Table -->
	<!-- Dark table -->
	<div class="row">
		<div class="col">
			<div class="card mb-4 shadow">
				
                <div class="card-header" style="padding-bottom: 0 !important;">
					<h2 class="">BAB 1. PROFIL PERGURUAN TINGGI</h2>
					<table class="table" style="width: 100% !important;">
					<tbody>
					<tr>
						<td style="padding-bottom: 0; padding-top: 0.5;" width="20%">
							<h4>No Berkas</h4>
						</td>
						<td style="padding-bottom: 0; padding-top: 0.5;" width="5%">:</td>
						<td style="padding-bottom: 0; padding-top: 0.5;" width="75%">{{$proposal->id}}</td>
					</tr>
					<tr>
						<td style="padding-bottom: 0; padding-top: 0;" width="20%">
							<h4>Judul Kerma</h4>
						</td>
						<td style="padding-bottom: 0; padding-top: 0;" width="5%">:</td>
						<td style="padding-bottom: 0; padding-top: 0;" width="75%">{{$proposal->judul}}</td>
					</tr>
					</tbody>
					</table>
				</div>
				<div class="card-body border-bottom-info">
					
						
						<table width="100%" class="table">
						<thead class="bg-info">
						<tr>
							<th style="font-size:0.8rem;" colspan="2" class="text-center ">PROFIL PERGURUAN TINGGI</th>
						</tr>
						</thead>
						<tbody>
						<tr class="topborder done" style="background: rgb(163, 255, 188);">
							<td class="item block">
								Nama PT<em style="color:red;">*</em>
							</td>
							<td class="block" width="60%">
								<textarea name="nama_pt" value="{{auth()->user()->universitas->nama_universitas}}" class="readonly form-control field " placeholder="" readonly="true" maxlength="1000">{{auth()->user()->universitas->nama_universitas}}</textarea>
							</td>
						</tr>
						<tr class="topborder done" style="background: rgb(163, 255, 188);">
							<td class="item block">
								Alamat PT<em style="color:red;">*</em>
							</td>
							<td class="block" width="60%">
								<textarea name="alamat_pt" class=" form-control field " placeholder="" readonly="true" maxlength="1000" id="mce_0" aria-hidden="true">{{ $bab1->alamat_pt }}</textarea>
							</td>
						</tr>
						<tr class="topborder done" style="background: rgb(163, 255, 188);">
							<td class="item block">
								Izin Operasional PT<em style="color:red;">*</em>
							</td>
							<td class="block" width="60%">
								<span>Izin Operasional</span><br>
								<!--<div class="char_count" style="text-align:right">1/1000</div>-->
								<textarea name="ijin_operasional_pt" class=" form-control field " placeholder="Izin Operasional" readonly="true" maxlength="1000" id="mce_2" aria-hidden="true">{{ $bab1->ijin_operasional_pt }}</textarea>
								<br>
								<span>File Scan Izin Operasional</span><br>
								
								@if($bab1->scan_ijin_operasional_pt)
								<span><a href="{{url('').$bab1->scan_ijin_operasional_pt}}" target="_blank">File yang sudah diupload</a></span>
								@endif
							</td>
						</tr>
						<tr class="topborder done" style="background: rgb(163, 255, 188);">
							<td class="item block">
								Status Akreditasi Institusi<em style="color:red;">*</em>
							</td>
							<td class="block" width="60%">
								<span>Status Akreditasi Institusi</span><br>
								<select class="form-control" name="id_status_akreditasi_institusi" readonly="true" data-select2-id="1" tabindex="-1" aria-hidden="true">
									<option value="" selected disabled hidden>--Pilih Status Akreditasi Institusi--</option>
									@foreach($statusAkreditasi as $row)
                                		<option value="{{ $row->id }}" {{ isset($bab1) ? ($bab1->id_status_akreditasi_institusi == $row->id ? 'selected' : '') :'' }}>{{$row->status}}</option>
                            		@endforeach
								</select>
								<br>
								<span>File Scan SK Akreditasi Institusi</span><br>
								
								@if($bab1->scan_status_akreditasi_institusi)
								<span><a href="{{url('').$bab1->scan_status_akreditasi_institusi}}" target="_blank">File yang sudah diupload</a></span>
								@endif
							</td>
						</tr>
						</tbody>
						</table>
						<table width="100%" class="table">
						<thead class="bg-info">
						<tr>
							<th style="font-size:0.8rem;" colspan="2" class="text-center ">PROFIL PERGURUAN TINGGI MITRA</th>
						</tr>
						</thead>
						<tbody>
						<tr class="topborder done" style="background: rgb(163, 255, 188);">
							<td class="item block">
								Nama PT<em style="color:red;">*</em>
							</td>
							<td class="block" width="60%">
								<!--<div class="char_count" style="text-align:right">1/1000</div>-->
								<textarea name="nama_pt_mitra" class=" form-control field " placeholder="" readonly="true" maxlength="1000" id="mce_3" aria-hidden="true">{{$bab1->nama_pt_mitra}}</textarea>
							</td>
						</tr>
						<tr class="topborder done" style="background: rgb(163, 255, 188);">
							<td class="item block">
								Alamat PT<em style="color:red;">*</em>
							</td>
							<td class="block" width="60%">
								<!--<div class="char_count" style="text-align:right">1/1000</div> -->
								<textarea name="alamat_pt_mitra" class=" form-control field " placeholder="" readonly="true" maxlength="1000" id="mce_4" aria-hidden="true">{{$bab1->alamat_pt_mitra}}</textarea>
							</td>
						</tr>
						<tr class="topborder done" style="background: rgb(163, 255, 188);">
							<td class="item block">Negara</td>
							<td class="block" width="50%">
								<select class="form-control selectpicker" name="id_negara_mitra" readonly="true" id="list_univ" data-live-search="true">
								<option value="" selected disabled hidden>--Pilih Negara--</option>
										@foreach($negara as $row)
                                		<option value="{{ $row->id }}" {{ isset($bab1) ? ($bab1->id_negara_mitra == $row->id ? 'selected' : '') :'' }}>{{$row->nicename}}</option>
                            			@endforeach
									</select>
								</select>
							</td>
						</tr>
						<tr class="topborder done" style="background: rgb(163, 255, 188);">
							<td class="item block">Izin Operasional PT</td>
							<td class="block" width="60%">
								<span>Izin Operasional</span><br>
								<!--<div class="char_count" style="text-align:right">1/1000</div> -->
								<textarea name="ijin_operasional_pt_mitra" class=" form-control field " placeholder="Izin Operasional" readonly="true" maxlength="1000" id="mce_5" aria-hidden="true">{{$bab1->ijin_operasional_pt_mitra}}</textarea>
								<br>
								<span>File Scan Izin Operasional</span><br>
								
								@if($bab1->scan_ijin_operasional_pt_mitra)
								<span><a href="{{url('').$bab1->scan_ijin_operasional_pt_mitra}}" target="_blank">File yang sudah diupload</a></span>
								@endif
							</td>
						</tr>
						<tr class="topborder done" style="background: rgb(163, 255, 188);">
							<td class="item block">Status Akreditasi Institusi</td>
							<td class="block" width="60%">
								<span>Status Akreditasi Institusi</span>
								<select class="form-control" name="id_status_akreditasi_institusi_mitra" readonly="true" data-select2-id="10" tabindex="-1" aria-hidden="true">
									<option value="" selected disabled hidden>--Pilih Status Akreditasi--</option>
										@foreach($statusAkreditasi as $row)
                                		<option value="{{ $row->id }}" {{ isset($bab1) ? ($bab1->id_status_akreditasi_institusi_mitra == $row->id ? 'selected' : '') :'' }}>{{$row->status}}</option>
                            			@endforeach
									</select>
								<br>
								<span>File Scan SK Akreditasi Institusi</span><br>
								
								@if($bab1->scan_status_akreditasi_institusi_mitra)
								<span><a href="{{url('').$bab1->scan_status_akreditasi_institusi_mitra}}" target="_blank">File yang sudah diupload</a></span>
								@endif
							</td>
						</tr>
						<tr class="topborder done" style="background: rgb(163, 255, 188);">
							<td class="item block">
								Peringkat International<em style="color:red;">*</em>
							</td>
							<td class="block" width="60%">
								<!--<div class="char_count" style="text-align:right">1/1000</div>-->
								<textarea name="peringkat_internasional_mitra" class=" form-control field " placeholder="" readonly="true" maxlength="1000" id="mce_7" aria-hidden="true">{{$bab1->peringkat_internasional_mitra}}</textarea>
							</td>
						</tr>
						</tbody>
						</table>
						<table width="100%" class="table">
						<thead class="bg-info">
						<tr>
							<th style="font-size:0.8rem;" colspan="3" class="text-center ">PROFIL PROGRAM STUDI</th>
						</tr>
						</thead>
						<tbody>
						<tr class="topborder done" style="background: rgb(163, 255, 188);">
							<td class="item block">
								Nama Prodi<em style="color:red;">*</em>
							</td>
							<td class="block bottomborder" width="30%">PT:</td>
							<td class="block bottomborder" width="30%">PT Mitra:</td>
						</tr>
						<tr class="bottomborder done" style="background: rgb(163, 255, 188);">
							<td class="item block"></td>
							<td class="block" width="30%">
								<textarea name="nama_prodi" class="form-control" placeholder="" readonly="true" maxlength="1000" id="mce_8" aria-hidden="true">{{$bab1->nama_prodi}}</textarea>
								
								<td class="block" width="30%">
									<textarea name="nama_prodi_mitra" class="form-control" placeholder="" readonly="true" maxlength="1000" id="mce_8" aria-hidden="true">{{$bab1->nama_prodi_mitra}}</textarea>
								</td>
							</tr>
							<tr class="topborder done" style="background: rgb(163, 255, 188);">
								<td class="item block">
									Akreditasi Prodi<em style="color:red;">*</em>
								</td>
								<td class="block bottomborder" width="30%">PT:</td>
								<td class="block bottomborder" width="30%">PT Mitra:</td>
							</tr>
							<tr class="bottomborder done" style="background: rgb(163, 255, 188);">
								<td class="item block"></td>
								<td class="block" width="30%">
									<select class="form-control" name="id_akreditasi_prodi" data-select2-id="10" readonly="true" tabindex="-1" aria-hidden="true">
									<option value="" selected disabled hidden>--Pilih Status Akreditasi--</option>
										@foreach($statusAkreditasi as $row)
                                		<option value="{{ $row->id }}" {{ isset($bab1) ? ($bab1->id_akreditasi_prodi == $row->id ? 'selected' : '') :'' }}>{{$row->status}}</option>
                            			@endforeach
									</select>
								<td class="block" width="30%">
								<select class="form-control" name="id_akreditasi_prodi_mitra" data-select2-id="10" readonly="true" tabindex="-1" aria-hidden="true">
									<option value="" selected disabled hidden>--Pilih Status Akreditasi--</option>
										@foreach($statusAkreditasi as $row)
                                		<option value="{{ $row->id }}" {{ isset($bab1) ? ($bab1->id_akreditasi_prodi_mitra == $row->id ? 'selected' : '') :'' }}>{{$row->status}}</option>
                            			@endforeach
									</select>
								</td>
							</tr>
							<tr class="topborder done" style="background: rgb(163, 255, 188);">
								<td class="item block">
									SK Akreditasi Prodi<em style="color:red;">*</em>
								</td>
								<td class="block bottomborder" width="30%">PT:</td>
								<td class="block bottomborder" width="30%">PT Mitra:</td>
							</tr>
							<tr class="bottomborder done" style="background: rgb(163, 255, 188);">
								<td class="item block"></td>
								<td class="block" width="30%">
									<span>File Scan SK Akreditasi Prodi</span><br>
									
									@if($bab1->scan_sk_akreditasi_prodi)
									<span><a href="{{url('').$bab1->scan_sk_akreditasi_prodi}}" target="_blank">File yang sudah diupload</a></span>
									@endif
								</td>
								<td class="block" width="30%">
									<span>File Scan SK Akreditasi Prodi</span><br>
									
									@if($bab1->scan_sk_akreditasi_prodi_mitra)
									<span><a href="{{url('').$bab1->scan_sk_akreditasi_prodi_mitra}}" target="_blank">File yang sudah diupload</a></span>
									@endif
								</td>
							</tr>
							<tr class="topborder done" style="background: rgb(163, 255, 188);">
								<td class="item block">
									Izin Operasional Prodi<em style="color:red;">*</em>
								</td>
								<td class="block bottomborder" width="30%">PT:</td>
								<td class="block bottomborder" width="30%">PT Mitra:</td>
							</tr>
							<tr class="bottomborder done" style="background: rgb(163, 255, 188);">
								<td class="item block"></td>
								<td class="block" width="30%">
									<span>Scan Izin Operasional Prodi</span><br>
									
									@if($bab1->scan_ijin_operasional_prodi)
									<span><a href="{{url('').$bab1->scan_ijin_operasional_prodi}}" target="_blank">File yang sudah diupload</a></span>
									@endif
								</td>
								<td class="block" width="30%">
									<span>Scan Izin Operasional Prodi</span><br>
									
									@if($bab1->scan_ijin_operasional_prodi_mitra)
									<span><a href="{{url('').$bab1->scan_ijin_operasional_prodi_mitra}}" target="_blank">File yang sudah diupload</a></span>
									@endif
								</td>
							</tr>
							</tbody>
							</table>
							<table width="100%" class="table">
							<thead class="bg-info">
							<tr>
								<th style="font-size:0.8rem;" colspan="2" class="text-center ">DOKUMEN KERJASAMA</th>
							</tr>
							</thead>
							<tbody>
							<tr class="topborder done" style="border-bottom: 0.1px solid rgb(173, 181, 189); background: rgb(163, 255, 188);">
								<td class="item block">
									Proposal Usulan Kerja Sama<br>
									Perguruan Tinggi<em style="color:red;">*</em>
								</td>
								<td class="block" width="60%">
									
									@if($bab1->proposal_usulan_kerjsama)
									<span><a href="{{url('').$bab1->proposal_usulan_kerjsama}}" target="_blank">File yang sudah diupload</a></span>
									@endif
								</td>
							</tr>
							</tbody>
							</table>
							
                            <div class="row">
								<div class="form-group col-md-6"></div>
								<div class="form-group col-md-6">
                                    <a href="{{ route('proposal') }}" class="btn btn-warning mt-4 float-right">KEMBALI KE MENU UTAMA</a> 
                                    <a href="{{ route('proposal.viewBab2', encrypt($proposal->id)) }}" class="btn btn-success mt-4 float-right">LANJUTKAN BAB 2</a>
                                </div>
							</div>
					</div>
				</div>
			</div>
		</div>
   
	
@endsection