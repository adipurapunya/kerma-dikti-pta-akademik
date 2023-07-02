@extends('layouts.app')

@section('title','EDIT BAB 2')
   
@section('contents')

	
			<div class="header-body">
				<ul class="breadcrumb col-lg-5 col-md-4 col-4">
					<li class="breadcrumb-item">
						<a href=""><i class="fas fa-home"></i></a>
					</li>
					<li class="breadcrumb-item">
						<a href="">Pengajuan Izin Kerja Sama</a>
					</li>
					<li class="breadcrumb-item">Edit Proposal BAB 2</li>
				</ul>
			</div>
	
	<!-- Header -->
	<div class="card-header shadow">
		<div class="container-fluid">
			<div class="header-body">
				<input type="hidden" id="statusView" value="N">
				<ul class="nav nav-pills nav-fill flex-column flex-sm-row" id="tabs-text" role="tablist">
					<li class="nav-item tab_up">
						<a style="font-size: 1rem;" class="nav-link tab_up mb-sm-3 mb-md-0 " id="tabs-text-1-tab" href="{{ route('proposal.editBab1','')}}">BAB 1<br>PROFIL PERGURUAN<br>TINGGI</a>
					</li>
					<li class="nav-item tab_up">
						<a style="font-size: 1rem;" class="nav-link tab_up mb-sm-3 mb-md-0 active" id="tabs-text-1-tab" href="{{ route('proposal.editBab2','')}}">BAB 2<br>DOKUMEN KERJA SAMA</a>
					</li>
					<li class="nav-item tab_up">
						<a style="font-size: 1rem;" class="nav-link tab_up mb-sm-3 mb-md-0 " id="tabs-text-1-tab" href="{{ route('proposal.editBab3')}}">BAB 3<br>KESIAPAN SUMBER DAYA</a>
					</li>
					<li class="nav-item tab_up">
						<a style="font-size: 1rem;" class="nav-link tab_up mb-sm-3 mb-md-0 " id="tabs-text-1-tab" href="{{ route('proposal.editBab4')}}">BAB 4<br>RENCANA PELAKSANAAN<br>KERJA SAMA</a>
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
						<h2 class="">BAB 2. DOKUMEN KERJA SAMA</h2>
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
								<th style="font-size:0.8rem;" colspan="3" class="text-center ">MOU &amp; MOA</th>
							</tr>
							</thead>
							<tbody>
							<tr class="topborder done" style="background: rgb(163, 255, 188);">
								<td class="item block">
									RINGKASAN MOU<em style="color:red;">*</em>
								</td>
								<td class="block" width="60%" colspan="2">
									<!--<div class="char_count" style="text-align:right">1/1800</div>-->
									<textarea class="tiny form-control field" name="" placeholder="Ringkasan MoU" maxlength="1800" ></textarea>
									<small class="keterangan" style="color:red;">Maks. 1800 Karakter</small>
								</td>
							</tr>
                            <tr class="topborder done" style="background: rgb(163, 255, 188);">
								<td class="item block">UNGGAH FILE MOU</td>
								<td class="block" width="60%" colspan="2">
									<input type="file" name="file_25" value="" class="form-control field " data-size="2 MB"><small class="keterangan" style="color:red;">Maks. 2 MB</small>
								</td>
							</tr>
                            <tr class="topborder done" style="background: rgb(163, 255, 188);">
								<td class="item block">
									NO MOA<em style="color:red;">*</em>
								</td>
								<td class="block" width="60%" colspan="2">
									<!--<div class="char_count" style="text-align:right">1/1000</div>-->
									<textarea name="field_26" class=" form-control field " placeholder="No MoA" maxlength="1000" id="mce_0" style="display: true;" aria-hidden="true"></textarea>
								</td>
							</tr>
                            <tr class="topborder done" style="background: rgb(163, 255, 188);">
								<td class="item block">
									DESKRIPSI SINGKAT MOA<em style="color:red;">*</em>
								</td>
								<td class="block" width="60%" colspan="2">
									<textarea class = "form-control tinymce" rows="5" id="" name="" ></textarea>
									<small class="keterangan" style="color:red;">Maks. 1800 Karakter</small>
								</td>
							</tr>
                            <tr class="topborder done" style="background: rgb(163, 255, 188);">
								<td class="item block">TANGGAL</td>
								<td class="block" width="35%">
									<span>Tanggal Dimulai MOA</span><br>
                                    <div class="input-group date" id="datepicker">
                                        <input type="text" class="form-control">
                                        <span class="input-group-append"><span class="input-group-text bg-white"><i class="fa fa-calendar"></i></span></span>
                                    </div>
									</td>
								<td class="block" width="35%">
									<span>Tanggal Berakhir MOA</span><br>
                                    <div class="input-group date" id="datepickerAkhir">
                                        <input type="text" class="form-control">
                                        <span class="input-group-append"><span class="input-group-text bg-white"><i class="fa fa-calendar"></i></span></span>
                                    </div>
                                </td>
							</tr>
							<tr class="topborder done" style="background: rgb(163, 255, 188);">
								<td class="item block">UNGGAH FILE MOA</td>
								<td class="block" colspan="2">
									<input type="file" name="" value="" class="form-control field " data-size="2 MB"><small class="keterangan" style="color:red;">Maks. 2 MB</small>
								</td>
							</tr>
                            <tr class="topborder done" style="background: rgb(163, 255, 188);">
								<td class="item block">
									MISI PROGRAM KERJA SAMA<em style="color:red;">*</em>
								</td>
								<td class="block" width="60%" colspan="2">
									<!--<div class="char_count" style="text-align:right">1/1800</div> -->
									<textarea rows="4" cols="70" class="tiny form-control field" name="field_31" placeholder="" maxlength="1800" id="mce_4" style="display: true;" aria-hidden="true"></textarea>
									<small class="keterangan" style="color:red;">Maks. 1800 Karakter</small>
								</td>
							</tr>
                            <tr class="topborder done" style="background: rgb(163, 255, 188);">
								<td class="item block">
									TARGET PROGRAM KERJA SAMA<em style="color:red;">*</em>
								</td>
								<td class="block" width="60%" colspan="2">
									<!--<div class="char_count" style="text-align:right">1/1800</div>-->
									<textarea rows="4" cols="70" class=" tiny form-control field" name="" placeholder="" maxlength="1800" id="mce_5" style="display: true;" aria-hidden="true"></textarea>
									<small class="keterangan" style="color:red;">Maks. 1800 Karakter</small>
								</td>
							</tr>
                            <tr class="topborder done" style="background: rgb(163, 255, 188);">
								<td class="item block">
									ALASAN PEMILIHAN MITRA<em style="color:red;">*</em>
								</td>
								<td class="block" width="60%" colspan="2">
									<textarea rows="4" cols="70" class=" tiny form-control field" name="field_33" placeholder="" maxlength="1800" id="mce_6" style="display: true;" aria-hidden="true"></textarea>
									<small class="keterangan" style="color:red;">Maks. 1800 Karakter</small>
								</td>
							</tr>
                            <tr class="topborder done" style="background: rgb(163, 255, 188);">
								<td class="item block">
									PRINSIP KERJA SAMA<em style="color:red;">*</em>
								</td>
								<td class="block" width="60%" colspan="2">
									<textarea rows="4" cols="70" class=" tiny form-control field" name="field_34" placeholder="" maxlength="1800" id="mce_7" style="display: true;" aria-hidden="true"></textarea>
									<small class="keterangan" style="color:red;">Maks. 1800 Karakter</small>
								</td>
							</tr>
                            <tr class="topborder done" style="background: rgb(163, 255, 188);">
								<td class="item block">
									MANFAAT KERJA SAMA<em style="color:red;">*</em>
								</td>
								<td class="block" width="60%" colspan="2">
									<textarea rows="4" cols="70" class=" tiny form-control field" name="field_35" placeholder="" maxlength="1800" id="mce_8" style="display: true;" aria-hidden="true"></textarea>
									<small class="keterangan" style="color:red;">Maks. 1800 Karakter</small>
								</td>
							</tr>
                            <tr class="topborder done" style="background: rgb(163, 255, 188);">
								<td class="item block">
									TANTANGAN PELAKSANAAN KERJA SAMA<em style="color:red;">*</em>
								</td>
								<td class="block" width="60%" colspan="2">
									<textarea rows="4" cols="70" class=" tiny form-control field" name="field_36" placeholder="" maxlength="1800" id="mce_9" style="display: true;" aria-hidden="true"></textarea>
									<small class="keterangan" style="color:red;">Maks. 1800 Karakter</small>
								</td>
							</tr>
                            <tr class="topborder done" style="background: rgb(163, 255, 188);">
								<td class="item block">
									KEPEMILIKAN HAK CIPTA DAN ATAU<br>
									 PATEN<em style="color:red;">*</em>
								</td>
								<td class="block" width="60%" colspan="2">
									<textarea rows="4" cols="70" class=" tiny form-control field" name="field_37" placeholder="" maxlength="1800" id="mce_10" style="display: true;" aria-hidden="true"></textarea>
									<small class="keterangan" style="color:red;">Maks. 1800 Karakter</small>
								</td>
							</tr>
                            <tr class="topborder done" style="background: rgb(163, 255, 188);">
								<td class="item block">
									MEKANISME RESIPROKAL<em style="color:red;">*</em>
								</td>
								<td class="block" width="60%" colspan="2">
									<textarea rows="4" cols="70" class=" tiny form-control field" name="field_38" placeholder="" maxlength="1800" id="mce_11" style="display: true;" aria-hidden="true"></textarea>
									<small class="keterangan" style="color:red;">Maks. 1800 Karakter</small>
								</td>
							</tr>
                            <tr class="topborder done" style="background: rgb(163, 255, 188);">
								<td class="item block">
									KEBERLANJUTAN KERJA SAMA<em style="color:red;">*</em>
								</td>
								<td class="block" width="60%" colspan="2">
									<textarea rows="4" cols="70" class=" tiny form-control field" name="field_39" placeholder="" maxlength="1800" id="mce_12" style="display: true;" aria-hidden="true"></textarea>
									<small class="keterangan" style="color:red;">Maks. 1800 Karakter</small>
								</td>
							</tr>
                            <tr class="topborder done" style="background: rgb(163, 255, 188);">
								<td class="item block">
									HAK DAN KEWAJIBAN<em style="color:red;">*</em>
								</td>
								<td class="block" width="60%" colspan="2">
									<textarea rows="4" cols="70" class=" tiny form-control field" name="field_40" placeholder="" maxlength="1800" id="mce_13" style="display: true;" aria-hidden="true"></textarea>
									<small class="keterangan" style="color:red;">Maks. 1800 Karakter</small>
								</td>
							</tr>
                            <tr class="topborder done" style="border-bottom: 0.1px solid rgb(173, 181, 189); background: rgb(163, 255, 188);">
								<td class="item block">Hak Tercantum</td>
								<td class="block" width="60%" colspan="2">
									Apakah hal tersebut tercantum dalam MOA? <br>
									<input type="radio" class="field " name="field_71" value="Ya"> Ya<br>
									<input type="radio" class="field " name="field_71" value="Tidak">Tidak</td>
							</tr>
                            </tbody>
                            </table>
                            <div class="row">
								<div class="form-group col-md-6"></div>
								<div class="form-group col-md-6">
									<button type="submit" class="btn btn-success mt-4 float-right mx-2" name="submit" id="submit_form">SIMPAN &amp; LANJUTKAN</button><a href="https://izinkerma.kemdikbud.go.id/akademik/index.php/Univ/editBab/1/2305140001.1" type="button" class="btn btn-default mt-4 float-right text-white" name="submit">KEMBALI</a>
								</div>
							</div>
                    </form>
						
					</div>
				</div>
			</div>
		</div>
@endsection