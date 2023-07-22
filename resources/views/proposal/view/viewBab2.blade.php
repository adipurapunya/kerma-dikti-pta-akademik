@extends('layouts.app')

@section('title','TAMPILAN BAB 2')
   
@section('contents')

	
			<div class="header-body">
				<ul class="breadcrumb col-lg-5 col-md-4 col-4">
					<li class="breadcrumb-item">
						<a href=""><i class="fas fa-home"></i></a>
					</li>
					<li class="breadcrumb-item">
						<a href="{{ route('proposal')}}">Pengajuan Izin Kerja Sama</a>
					</li>
					<li class="breadcrumb-item">Tampilan Proposal BAB 2</li>
				</ul>
			</div>
			

	<!-- Header -->
	<div class="card-header shadow">
		<div class="container-fluid">
			<div class="header-body">
				<input type="hidden" id="statusView" value="N">
				<ul class="nav nav-pills nav-fill flex-column flex-sm-row" id="tabs-text" role="tablist">
					<li class="nav-item tab_up">
						<a style="font-size: 1rem;" class="nav-link tab_up mb-sm-3 mb-md-0 " id="tabs-text-1-tab" href="{{ route('proposal.viewBab1', encrypt($proposal->id)) }}">BAB 1<br>PROFIL PERGURUAN<br>TINGGI</a>
					</li>
					<li class="nav-item tab_up">
						<a style="font-size: 1rem;" class="nav-link tab_up mb-sm-3 mb-md-0 active" id="tabs-text-1-tab" href="{{ route('proposal.viewBab2', encrypt($proposal->id)) }}">BAB 2<br>DOKUMEN KERJA SAMA</a>
					</li>
					<li class="nav-item tab_up">
						<a style="font-size: 1rem;" class="nav-link tab_up mb-sm-3 mb-md-0 " id="tabs-text-1-tab" href="{{ route('proposal.viewBab3', encrypt($proposal->id)) }}">BAB 3<br>KESIAPAN SUMBER DAYA</a>
					</li>
					<li class="nav-item tab_up">
						<a style="font-size: 1rem;" class="nav-link tab_up mb-sm-3 mb-md-0 " id="tabs-text-1-tab" href="{{ route('proposal.viewBab4', encrypt($proposal->id)) }}">BAB 4<br>RENCANA PELAKSANAAN<br>KERJA SAMA</a>
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
							<td style="padding-bottom: 0; padding-top: 0.5;" width="75%">{{$proposal->id}}</td>
						</tr>
						<tr>
							<td style="padding-bottom: 0; padding-top: 0;" width="20%">
								<h4>Judul Kerma</h4>
							</td>
							<td style="padding-bottom: 0; padding-top: 0;" width="5%">:</td>
							<td style="padding-bottom: 0; padding-top: 0;" width="75%">
								{{$proposal->judul}}
							</td>
						</tr>
						</tbody>
						</table>
					</div>
					<div class="card-body border-bottom-info ">
                    

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
									<textarea class="tiny form-control field" name="ringkasan_mou" placeholder="Ringkasan MoU" readonly="true" maxlength="1800" >{{$bab2->ringkasan_mou}}</textarea>
									<small class="keterangan" style="color:red;">Maks. 1800 Karakter</small>
								</td>
							</tr>
                            <tr class="topborder done" style="background: rgb(163, 255, 188);">
								<td class="item block">UNGGAH FILE MOU</td>
								<td class="block" width="60%" colspan="2">
									
									@if($bab2->file_mou)
									<span><a href="{{url('').$bab2->file_mou}}" target="_blank">File yang sudah diupload</a></span>
									@endif
								</td>
							</tr>
                            <tr class="topborder done" style="background: rgb(163, 255, 188);">
								<td class="item block">
									NO MOA<em style="color:red;">*</em>
								</td>
								<td class="block" width="60%" colspan="2">
									<!--<div class="char_count" style="text-align:right">1/1000</div>-->
									<textarea name="no_moa" class=" form-control field " placeholder="" readonly="true" maxlength="1000" id="mce_0" style="display: true;" aria-hidden="true">{{$bab2->no_moa}}</textarea>
								</td>
							</tr>
                            <tr class="topborder done" style="background: rgb(163, 255, 188);">
								<td class="item block">
									DESKRIPSI SINGKAT MOA<em style="color:red;">*</em>
								</td>
								<td class="block" width="60%" colspan="2">
									<textarea class = "form-control tinymce" rows="5" id="" readonly="true" name="deskripsi_singkat_moa" >{{$bab2->deskripsi_singkat_moa}}</textarea>
									<small class="keterangan" style="color:red;">Maks. 1800 Karakter</small>
								</td>
							</tr>
                            <tr class="topborder done" style="background: rgb(163, 255, 188);">
								<td class="item block">TANGGAL</td>
								<td class="block" width="35%">
									<span>Tanggal Dimulai MOA</span><br>
                                    <div class="input-group date" id="datepicker">
                                        <input type="text" class="form-control" readonly="true" name="tanggal_dimulai_moa" value="{{$bab2->tanggal_dimulai_moa}}">
                                        <span class="input-group-append"><span class="input-group-text bg-white"><i class="fa fa-calendar"></i></span></span>
                                    </div>
									</td>
								<td class="block" width="35%">
									<span>Tanggal Berakhir MOA</span><br>
                                    <div class="input-group date" id="datepickerAkhir">
                                        <input type="text" class="form-control" readonly="true" name="tanggal_berakhir_moa" value="{{$bab2->tanggal_berakhir_moa}}">
                                        <span class="input-group-append"><span class="input-group-text bg-white"><i class="fa fa-calendar"></i></span></span>
                                    </div>
                                </td>
							</tr>
							<tr class="topborder done" style="background: rgb(163, 255, 188);">
								<td class="item block">UNGGAH FILE MOA</td>
								<td class="block" colspan="2">
									
									@if($bab2->file_moa)
									<span><a href="{{url('').$bab2->file_moa}}" target="_blank">File yang sudah diupload</a></span>
									@endif
								</td>
							</tr>
                            <tr class="topborder done" style="background: rgb(163, 255, 188);">
								<td class="item block">
									MISI PROGRAM KERJA SAMA<em style="color:red;">*</em>
								</td>
								<td class="block" width="60%" colspan="2">
									<!--<div class="char_count" style="text-align:right">1/1800</div> -->
									<textarea rows="4" cols="70" class="tiny form-control field" readonly="true" name="misi_program_kerjasama" placeholder="" maxlength="1800" id="mce_4" style="display: true;" aria-hidden="true">{{$bab2->misi_program_kerjasama}}</textarea>
									<small class="keterangan" style="color:red;">Maks. 1800 Karakter</small>
								</td>
							</tr>
                            <tr class="topborder done" style="background: rgb(163, 255, 188);">
								<td class="item block">
									TARGET PROGRAM KERJA SAMA<em style="color:red;">*</em>
								</td>
								<td class="block" width="60%" colspan="2">
									<!--<div class="char_count" style="text-align:right">1/1800</div>-->
									<textarea rows="4" cols="70" class=" tiny form-control field" readonly="true" name="target_program_kerjasama" placeholder="" maxlength="1800" id="mce_5" style="display: true;" aria-hidden="true">{{$bab2->target_program_kerjasama}}</textarea>
									<small class="keterangan" style="color:red;">Maks. 1800 Karakter</small>
								</td>
							</tr>
                            <tr class="topborder done" style="background: rgb(163, 255, 188);">
								<td class="item block">
									ALASAN PEMILIHAN MITRA<em style="color:red;">*</em>
								</td>
								<td class="block" width="60%" colspan="2">
									<textarea rows="4" cols="70" class=" tiny form-control field" readonly="true" name="alasan_pemilihan_mitra" placeholder="" maxlength="1800" id="mce_6" style="display: true;" aria-hidden="true">{{$bab2->alasan_pemilihan_mitra}}</textarea>
									<small class="keterangan" style="color:red;">Maks. 1800 Karakter</small>
								</td>
							</tr>
                            <tr class="topborder done" style="background: rgb(163, 255, 188);">
								<td class="item block">
									PRINSIP KERJA SAMA<em style="color:red;">*</em>
								</td>
								<td class="block" width="60%" colspan="2">
									<textarea rows="4" cols="70" class=" tiny form-control field" readonly="true" name="prinsip_kerjasama" placeholder="" maxlength="1800" id="mce_7" style="display: true;" aria-hidden="true">{{$bab2->prinsip_kerjasama}}</textarea>
									<small class="keterangan" style="color:red;">Maks. 1800 Karakter</small>
								</td>
							</tr>
                            <tr class="topborder done" style="background: rgb(163, 255, 188);">
								<td class="item block">
									MANFAAT KERJA SAMA<em style="color:red;">*</em>
								</td>
								<td class="block" width="60%" colspan="2">
									<textarea rows="4" cols="70" class=" tiny form-control field" readonly="true" name="manfaat_kerjasama" placeholder="" maxlength="1800" id="mce_8" style="display: true;" aria-hidden="true">{{$bab2->manfaat_kerjasama}}</textarea>
									<small class="keterangan" style="color:red;">Maks. 1800 Karakter</small>
								</td>
							</tr>
                            <tr class="topborder done" style="background: rgb(163, 255, 188);">
								<td class="item block">
									TANTANGAN PELAKSANAAN KERJA SAMA<em style="color:red;">*</em>
								</td>
								<td class="block" width="60%" colspan="2">
									<textarea rows="4" cols="70" class=" tiny form-control field" readonly="true" name="tantangan_pelaksanaan_kerjasama" placeholder="" maxlength="1800" id="mce_9" style="display: true;" aria-hidden="true">{{$bab2->tantangan_pelaksanaan_kerjasama}}</textarea>
									<small class="keterangan" style="color:red;">Maks. 1800 Karakter</small>
								</td>
							</tr>
                            <tr class="topborder done" style="background: rgb(163, 255, 188);">
								<td class="item block">
									KEPEMILIKAN HAK CIPTA DAN ATAU<br>
									 PATEN<em style="color:red;">*</em>
								</td>
								<td class="block" width="60%" colspan="2">
									<textarea rows="4" cols="70" class=" tiny form-control field" readonly="true" name="kepemilikan_hak_cipta_paten" placeholder="" maxlength="1800" id="mce_10" style="display: true;" aria-hidden="true">{{$bab2->kepemilikan_hak_cipta_paten}}</textarea>
									<small class="keterangan" style="color:red;">Maks. 1800 Karakter</small>
								</td>
							</tr>
                            <tr class="topborder done" style="background: rgb(163, 255, 188);">
								<td class="item block">
									MEKANISME RESIPROKAL<em style="color:red;">*</em>
								</td>
								<td class="block" width="60%" colspan="2">
									<textarea rows="4" cols="70" class=" tiny form-control field" readonly="true" name="mekanisme_resiprokal" placeholder="" maxlength="1800" id="mce_11" style="display: true;" aria-hidden="true">{{$bab2->mekanisme_resiprokal}}</textarea>
									<small class="keterangan" style="color:red;">Maks. 1800 Karakter</small>
								</td>
							</tr>
                            <tr class="topborder done" style="background: rgb(163, 255, 188);">
								<td class="item block">
									KEBERLANJUTAN KERJA SAMA<em style="color:red;">*</em>
								</td>
								<td class="block" width="60%" colspan="2">
									<textarea rows="4" cols="70" class=" tiny form-control field" readonly="true" name="keberlanjutan_kerjsama" placeholder="" maxlength="1800" id="mce_12" style="display: true;" aria-hidden="true">{{$bab2->keberlanjutan_kerjsama}}</textarea>
									<small class="keterangan" style="color:red;">Maks. 1800 Karakter</small>
								</td>
							</tr>
                            <tr class="topborder done" style="background: rgb(163, 255, 188);">
								<td class="item block">
									HAK DAN KEWAJIBAN<em style="color:red;">*</em>
								</td>
								<td class="block" width="60%" colspan="2">
									<textarea rows="4" cols="70" class=" tiny form-control field" readonly="true" name="hak_dan_kewajiban" placeholder="" maxlength="1800" id="mce_13" style="display: true;" aria-hidden="true">{{$bab2->hak_dan_kewajiban}}</textarea>
									<small class="keterangan" style="color:red;">Maks. 1800 Karakter</small>
								</td>
							</tr>
                            <tr class="topborder done" style="border-bottom: 0.1px solid rgb(173, 181, 189); background: rgb(163, 255, 188);">
								<td class="item block">Hak Tercantum</td>
								<td class="block" width="60%" colspan="2">
									Apakah hal tersebut tercantum dalam MOA? <br>
									<input type="radio" class="field" name="hak_tercantum" disabled value="1" @if($bab2->hak_tercantum == 1) checked @endif>Ya<br>
									<input type="radio" class="field" name="hak_tercantum" disabled value="0" @if($bab2->hak_tercantum == 0) checked @endif>Tidak</td>
							</tr>
                            </tbody>
                            </table>
                            <div class="row">
								<div class="form-group col-md-6"></div>
								<div class="form-group col-md-6">
                                    <a href="{{ route('proposal') }}" class="btn btn-warning mt-4 float-right">KEMBALI KE MENU UTAMA</a>
                                    <a href="{{ route('proposal.viewBab3', encrypt($proposal->id))}}" class="btn btn-success mt-4 float-right">LANJUTKAN BAB 3</a>
								</div>
							</div>
                   
						
					</div>
				</div>
			</div>
		</div>
@endsection