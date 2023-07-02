@extends('layouts.app') @section('title','EDIT BAB 3') @section('contents')
<div class="header-body">
	<ul class="breadcrumb col-lg-5 col-md-4 col-4">
		<li class="breadcrumb-item">
			<a href=""><i class="fas fa-home"></i></a>
		</li>
		<li class="breadcrumb-item">
			<a href="">Pengajuan Izin Kerja Sama</a>
		</li>
		<li class="breadcrumb-item">Edit Proposal BAB 3</li>
	</ul>
</div>
<!-- Header -->
<div class="card-header shadow">
	<div class="container-fluid">
		<div class="header-body">
			<input type="hidden" id="statusView" value="N">
			<ul class="nav nav-pills nav-fill flex-column flex-sm-row" id="tabs-text" role="tablist">
				<li class="nav-item tab_up">
					<a style="font-size: 1rem;" class="nav-link tab_up mb-sm-3 mb-md-0" id="tabs-text-1-tab" href="{{ route('proposal.editBab1')}}">BAB 1<br>
					PROFIL PERGURUAN<br>TINGGI</a>
				</li>
				<li class="nav-item tab_up">
					<a style="font-size: 1rem;" class="nav-link tab_up mb-sm-3 mb-md-0 " id="tabs-text-1-tab" href="{{ route('proposal.editBab2')}}">BAB 2<br>DOKUMEN KERJA SAMA</a>
				</li>
				<li class="nav-item tab_up">
					<a style="font-size: 1rem;" class="nav-link tab_up mb-sm-3 mb-md-0 active" id="tabs-text-1-tab" href="{{ route('proposal.editBab3')}}">BAB 3<br>KESIAPAN SUMBER DAYA</a>
				</li>
				<li class="nav-item tab_up">
					<a style="font-size: 1rem;" class="nav-link tab_up mb-sm-3 mb-md-0 " id="tabs-text-1-tab" href="{{ route('proposal.editBab4')}}">BAB 4<br>
					RENCANA PELAKSANAAN<br>KERJA SAMA</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<br>
<div class="row">
	<div class="col">
		<div class="card mb-4 shadow">
			<div class="card-header" style="padding-bottom: 0 !important;">
				<h2 class="">BAB 3. KESIAPAN SUMBER DAYA</h2>
				<table class="table" style="width: 100% !important;">
				<tbody>
				<tr>
					<td style="padding-bottom: 0; padding-top: 0.5;" width="20%">
						<h4>No Berkas</h4>
					</td>
					<td style="padding-bottom: 0; padding-top: 0.5;" width="5%">:</td>
					<td style="padding-bottom: 0; padding-top: 0.5;" width="75%">2305140001.1</td>
				</tr>
				<tr>
					<td style="padding-bottom: 0; padding-top: 0;" width="20%">
						<h4>Judul Kerma</h4>
					</td>
					<td style="padding-bottom: 0; padding-top: 0;" width="5%">:</td>
					<td style="padding-bottom: 0; padding-top: 0;" width="75%">
						 Gelar Ganda (Double Degree) Universitas Halu Oleo S1 Teknik Rekayasa Infrastruktur dan Lingkungan dengan ddd ssss
					</td>
				</tr>
				</tbody>
				</table>
			</div>
			<div class="card-body border-bottom-info ">
				<form role="form" method="post" id="edit_bab_form" enctype="multipart/form-data" action="" onkeydown="return event.key != &#39;Enter&#39;;">
					<input type="hidden" name="idkerma" value="2305140001.1">
					<input type="hidden" id="kodeuniv" value="001029">
					<table width="100%" class="table">
					<thead class="bg-info">
					<tr>
						<th style="font-size:0.8rem;" colspan="3" class="text-center ">KESIAPAN KERJA SAMA DARI SEGI SDM</th>
					</tr>
					</thead>
					<tbody>
					<tr class="topborder done" style="background: rgb(163, 255, 188);">
						<td class="item block">
							 DESKRIPSI SINGKAT KESIAPAN SDM<em style="color:red;">*</em>
						</td>
						<td class="block bottomborder" width="30%">PT:</td>
						<td class="block bottomborder" width="30%">PT Mitra:</td>
					</tr>
					<tr class="bottomborder done" style="background: rgb(163, 255, 188);">
						<td class="item block"></td>
						<td class="block" width="30%">
							<textarea rows="4" cols="40" class=" tiny form-control field" name="field_42" placeholder="" maxlength="1800" id="mce_3" style="display: true;" aria-hidden="true"></textarea>
							<small class="keterangan" style="color:red;">Maks. 1800 Karakter</small>
						</td>
						<td class="block" width="30%">
							<textarea rows="4" cols="40" class=" tiny form-control field" name="field_43" placeholder="" maxlength="1800" id="mce_4" style="display: true;" aria-hidden="true"></textarea>
							<small class="keterangan" style="color:red;">Maks. 1800 Karakter</small>
						</td>
					</tr>
					<tr class="topborder done" style="background: rgb(163, 255, 188);">
						<td class="item block">
							 JUMLAH DOSEN YANG TERLIBAT<em style="color:red;">*</em>
						</td>
						<td class="block bottomborder" width="30%">PT:</td>
						<td class="block bottomborder" width="30%">PT Mitra:</td>
					</tr>
					<tr class="bottomborder done" style="background: rgb(163, 255, 188);">
						<td class="item block"></td>
						<td class="block" width="30%">
							<textarea name="field_44" class=" form-control field " placeholder="" maxlength="1000" id="mce_0" style="display: true;" aria-hidden="true"></textarea>
						</td>
						<td class="block" width="30%">
							<textarea name="field_45" class=" form-control field " placeholder="" maxlength="1000" id="mce_2" style="display: true;" aria-hidden="true"></textarea>
						</td>
					</tr>
					<tr class="topborder done" style="background: rgb(163, 255, 188);">
						<td class="item block">
							 DAFTAR DATA DOSEN YANG TERLIBAT<br>
							 SESUAI FORMAT TERLAMPIR<em style="color:red;">*</em>
						</td>
						<td class="block bottomborder" width="30%">PT:</td>
						<td class="block bottomborder" width="30%">PT Mitra:</td>
					</tr>
					<tr class="bottomborder done" style="background: rgb(163, 255, 188);">
						<td class="item block"></td>
						<td class="block" width="30%">
							<input type="file" name="file_46" value="" class="form-control field " data-size="2 MB"><small class="keterangan" style="color:red;">Maks. 2 MB</small>
						</td>
						<td class="block" width="30%">
							<input type="file" name="file_68" value="" class="form-control field " data-size="2 MB"><small class="keterangan" style="color:red;">Maks. 2 MB</small>
						</td>
					</tr>
					</tbody>
					</table>
					<table width="100%" class="table">
					<thead class="bg-info">
					<tr>
						<th style="font-size:0.8rem;" colspan="3" class="text-center ">KESIAPAN KERJA SAMA DARI SEGI SARANA</th>
					</tr>
					</thead>
					<tbody>
					<tr class="topborder done" style="background: rgb(163, 255, 188);">
						<td class="item block">
							 DESKRIPSI SINGKAT PT<em style="color:red;">*</em>
						</td>
						<td class="block bottomborder" width="30%">PT:</td>
						<td class="block bottomborder" width="30%">PT Mitra:</td>
					</tr>
					<tr class="bottomborder done" style="background: rgb(163, 255, 188);">
						<td class="item block"></td>
						<td class="block" width="30%"><textarea rows="4" cols="40" class=" tiny form-control field" name="field_49" placeholder="" maxlength="1800" id="mce_5" style="display: true;" aria-hidden="true"></textarea>
							<small class="keterangan" style="color:red;">Maks. 1800 Karakter</small>
						</td>
						<td class="block" width="30%">
							<textarea rows="4" cols="40" class=" tiny form-control field" name="field_50" placeholder="" maxlength="1800" id="mce_6" style="display: true;" aria-hidden="true"></textarea>
							<small class="keterangan" style="color:red;">Maks. 1800 Karakter</small>
						</td>
					</tr>
					<tr class="topborder done" style="background: rgb(163, 255, 188);">
						<td class="item block">
							 LAMPIRAN DATA SARANA DAN PRASARANA<br>
							 YANG DIMILIKI<em style="color:red;">*</em>
						</td>
						<td class="block bottomborder" width="30%">PT:</td>
						<td class="block bottomborder" width="30%">PT Mitra:</td>
					</tr>
					<tr class="bottomborder done" style="border-bottom: 0.1px solid rgb(173, 181, 189); background: rgb(163, 255, 188);">
						<td class="item block"></td>
						<td class="block" width="30%">
							<input type="file" name="file_51" value="" class="form-control field " data-size="2 MB"><small class="keterangan" style="color:red;">Maks. 2 MB</small>
						</td>
						<td class="block" width="30%">
							<input type="file" name="file_52" value="" class="form-control field " data-size="2 MB"><small class="keterangan" style="color:red;">Maks. 2 MB</small>
						</td>
					</tr>
					</tbody>
					</table>
					<div class="row">
						<div class="form-group col-md-6"></div>
						<div class="form-group col-md-6">
							<button type="submit" class="btn btn-success mt-4 float-right mx-2" name="submit" id="submit_form">SIMPAN &amp; LANJUTKAN</button><a href="https://izinkerma.kemdikbud.go.id/akademik/index.php/Univ/editBab/2/2305140001.1" type="button" class="btn btn-default mt-4 float-right text-white" name="submit">KEMBALI</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection