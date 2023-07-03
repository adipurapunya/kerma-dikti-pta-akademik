@extends('layouts.app') 

@section('title','EDIT BAB 1') 

@section('contents')
<!--
<style type="text/css">
.swal-icon--error{border-color:#f27474;-webkit-animation:animateErrorIcon .5s;animation:animateErrorIcon .5s}.swal-icon--error__x-mark{position:relative;display:block;-webkit-animation:animateXMark .5s;animation:animateXMark .5s}.swal-icon--error__line{position:absolute;height:5px;width:47px;background-color:#f27474;display:block;top:37px;border-radius:2px}.swal-icon--error__line--left{-webkit-transform:rotate(45deg);transform:rotate(45deg);left:17px}.swal-icon--error__line--right{-webkit-transform:rotate(-45deg);transform:rotate(-45deg);right:16px}@-webkit-keyframes animateErrorIcon{0%{-webkit-transform:rotateX(100deg);transform:rotateX(100deg);opacity:0}to{-webkit-transform:rotateX(0deg);transform:rotateX(0deg);opacity:1}}@keyframes animateErrorIcon{0%{-webkit-transform:rotateX(100deg);transform:rotateX(100deg);opacity:0}to{-webkit-transform:rotateX(0deg);transform:rotateX(0deg);opacity:1}}@-webkit-keyframes animateXMark{0%{-webkit-transform:scale(.4);transform:scale(.4);margin-top:26px;opacity:0}50%{-webkit-transform:scale(.4);transform:scale(.4);margin-top:26px;opacity:0}80%{-webkit-transform:scale(1.15);transform:scale(1.15);margin-top:-6px}to{-webkit-transform:scale(1);transform:scale(1);margin-top:0;opacity:1}}@keyframes animateXMark{0%{-webkit-transform:scale(.4);transform:scale(.4);margin-top:26px;opacity:0}50%{-webkit-transform:scale(.4);transform:scale(.4);margin-top:26px;opacity:0}80%{-webkit-transform:scale(1.15);transform:scale(1.15);margin-top:-6px}to{-webkit-transform:scale(1);transform:scale(1);margin-top:0;opacity:1}}.swal-icon--warning{border-color:#f8bb86;-webkit-animation:pulseWarning .75s infinite alternate;animation:pulseWarning .75s infinite alternate}.swal-icon--warning__body{width:5px;height:47px;top:10px;border-radius:2px;margin-left:-2px}.swal-icon--warning__body,.swal-icon--warning__dot{position:absolute;left:50%;background-color:#f8bb86}.swal-icon--warning__dot{width:7px;height:7px;border-radius:50%;margin-left:-4px;bottom:-11px}@-webkit-keyframes pulseWarning{0%{border-color:#f8d486}to{border-color:#f8bb86}}@keyframes pulseWarning{0%{border-color:#f8d486}to{border-color:#f8bb86}}.swal-icon--success{border-color:#a5dc86}.swal-icon--success:after,.swal-icon--success:before{content:"";border-radius:50%;position:absolute;width:60px;height:120px;background:#fff;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.swal-icon--success:before{border-radius:120px 0 0 120px;top:-7px;left:-33px;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:60px 60px;transform-origin:60px 60px}.swal-icon--success:after{border-radius:0 120px 120px 0;top:-11px;left:30px;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:0 60px;transform-origin:0 60px;-webkit-animation:rotatePlaceholder 4.25s ease-in;animation:rotatePlaceholder 4.25s ease-in}.swal-icon--success__ring{width:80px;height:80px;border:4px solid hsla(98,55%,69%,.2);border-radius:50%;box-sizing:content-box;position:absolute;left:-4px;top:-4px;z-index:2}.swal-icon--success__hide-corners{width:5px;height:90px;background-color:#fff;padding:1px;position:absolute;left:28px;top:8px;z-index:1;-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.swal-icon--success__line{height:5px;background-color:#a5dc86;display:block;border-radius:2px;position:absolute;z-index:2}.swal-icon--success__line--tip{width:25px;left:14px;top:46px;-webkit-transform:rotate(45deg);transform:rotate(45deg);-webkit-animation:animateSuccessTip .75s;animation:animateSuccessTip .75s}.swal-icon--success__line--long{width:47px;right:8px;top:38px;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-animation:animateSuccessLong .75s;animation:animateSuccessLong .75s}@-webkit-keyframes rotatePlaceholder{0%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}5%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}12%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}to{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}}@keyframes rotatePlaceholder{0%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}5%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}12%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}to{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}}@-webkit-keyframes animateSuccessTip{0%{width:0;left:1px;top:19px}54%{width:0;left:1px;top:19px}70%{width:50px;left:-8px;top:37px}84%{width:17px;left:21px;top:48px}to{width:25px;left:14px;top:45px}}@keyframes animateSuccessTip{0%{width:0;left:1px;top:19px}54%{width:0;left:1px;top:19px}70%{width:50px;left:-8px;top:37px}84%{width:17px;left:21px;top:48px}to{width:25px;left:14px;top:45px}}@-webkit-keyframes animateSuccessLong{0%{width:0;right:46px;top:54px}65%{width:0;right:46px;top:54px}84%{width:55px;right:0;top:35px}to{width:47px;right:8px;top:38px}}@keyframes animateSuccessLong{0%{width:0;right:46px;top:54px}65%{width:0;right:46px;top:54px}84%{width:55px;right:0;top:35px}to{width:47px;right:8px;top:38px}}.swal-icon--info{border-color:#c9dae1}.swal-icon--info:before{width:5px;height:29px;bottom:17px;border-radius:2px;margin-left:-2px}.swal-icon--info:after,.swal-icon--info:before{content:"";position:absolute;left:50%;background-color:#c9dae1}.swal-icon--info:after{width:7px;height:7px;border-radius:50%;margin-left:-3px;top:19px}.swal-icon{width:80px;height:80px;border-width:4px;border-style:solid;border-radius:50%;padding:0;position:relative;box-sizing:content-box;margin:20px auto}.swal-icon:first-child{margin-top:32px}.swal-icon--custom{width:auto;height:auto;max-width:100%;border:none;border-radius:0}.swal-icon img{max-width:100%;max-height:100%}.swal-title{color:rgba(0,0,0,.65);font-weight:600;text-transform:none;position:relative;display:block;padding:13px 16px;font-size:27px;line-height:normal;text-align:center;margin-bottom:0}.swal-title:first-child{margin-top:26px}.swal-title:not(:first-child){padding-bottom:0}.swal-title:not(:last-child){margin-bottom:13px}.swal-text{font-size:16px;position:relative;float:none;line-height:normal;vertical-align:top;text-align:left;display:inline-block;margin:0;padding:0 10px;font-weight:400;color:rgba(0,0,0,.64);max-width:calc(100% - 20px);overflow-wrap:break-word;box-sizing:border-box}.swal-text:first-child{margin-top:45px}.swal-text:last-child{margin-bottom:45px}.swal-footer{text-align:right;padding-top:13px;margin-top:13px;padding:13px 16px;border-radius:inherit;border-top-left-radius:0;border-top-right-radius:0}.swal-button-container{margin:5px;display:inline-block;position:relative}.swal-button{background-color:#7cd1f9;color:#fff;border:none;box-shadow:none;border-radius:5px;font-weight:600;font-size:14px;padding:10px 24px;margin:0;cursor:pointer}.swal-button:not([disabled]):hover{background-color:#78cbf2}.swal-button:active{background-color:#70bce0}.swal-button:focus{outline:none;box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(43,114,165,.29)}.swal-button[disabled]{opacity:.5;cursor:default}.swal-button::-moz-focus-inner{border:0}.swal-button--cancel{color:#555;background-color:#efefef}.swal-button--cancel:not([disabled]):hover{background-color:#e8e8e8}.swal-button--cancel:active{background-color:#d7d7d7}.swal-button--cancel:focus{box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(116,136,150,.29)}.swal-button--danger{background-color:#e64942}.swal-button--danger:not([disabled]):hover{background-color:#df4740}.swal-button--danger:active{background-color:#cf423b}.swal-button--danger:focus{box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(165,43,43,.29)}.swal-content{padding:0 20px;margin-top:20px;font-size:medium}.swal-content:last-child{margin-bottom:20px}.swal-content__input,.swal-content__textarea{-webkit-appearance:none;background-color:#fff;border:none;font-size:14px;display:block;box-sizing:border-box;width:100%;border:1px solid rgba(0,0,0,.14);padding:10px 13px;border-radius:2px;transition:border-color .2s}.swal-content__input:focus,.swal-content__textarea:focus{outline:none;border-color:#6db8ff}.swal-content__textarea{resize:vertical}.swal-button--loading{color:transparent}.swal-button--loading~.swal-button__loader{opacity:1}.swal-button__loader{position:absolute;height:auto;width:43px;z-index:2;left:50%;top:50%;-webkit-transform:translateX(-50%) translateY(-50%);transform:translateX(-50%) translateY(-50%);text-align:center;pointer-events:none;opacity:0}.swal-button__loader div{display:inline-block;float:none;vertical-align:baseline;width:9px;height:9px;padding:0;border:none;margin:2px;opacity:.4;border-radius:7px;background-color:hsla(0,0%,100%,.9);transition:background .2s;-webkit-animation:swal-loading-anim 1s infinite;animation:swal-loading-anim 1s infinite}.swal-button__loader div:nth-child(3n+2){-webkit-animation-delay:.15s;animation-delay:.15s}.swal-button__loader div:nth-child(3n+3){-webkit-animation-delay:.3s;animation-delay:.3s}@-webkit-keyframes swal-loading-anim{0%{opacity:.4}20%{opacity:.4}50%{opacity:1}to{opacity:.4}}@keyframes swal-loading-anim{0%{opacity:.4}20%{opacity:.4}50%{opacity:1}to{opacity:.4}}.swal-overlay{position:fixed;top:0;bottom:0;left:0;right:0;text-align:center;font-size:0;overflow-y:auto;background-color:rgba(0,0,0,.4);z-index:10000;pointer-events:none;opacity:0;transition:opacity .3s}.swal-overlay:before{content:" ";display:inline-block;vertical-align:middle;height:100%}.swal-overlay--show-modal{opacity:1;pointer-events:auto}.swal-overlay--show-modal .swal-modal{opacity:1;pointer-events:auto;box-sizing:border-box;-webkit-animation:showSweetAlert .3s;animation:showSweetAlert .3s;will-change:transform}.swal-modal{width:478px;opacity:0;pointer-events:none;background-color:#fff;text-align:center;border-radius:5px;position:static;margin:20px auto;display:inline-block;vertical-align:middle;-webkit-transform:scale(1);transform:scale(1);-webkit-transform-origin:50% 50%;transform-origin:50% 50%;z-index:10001;transition:opacity .2s,-webkit-transform .3s;transition:transform .3s,opacity .2s;transition:transform .3s,opacity .2s,-webkit-transform .3s}@media (max-width:500px){.swal-modal{width:calc(100% - 20px)}}@-webkit-keyframes showSweetAlert{0%{-webkit-transform:scale(1);transform:scale(1)}1%{-webkit-transform:scale(.5);transform:scale(.5)}45%{-webkit-transform:scale(1.05);transform:scale(1.05)}80%{-webkit-transform:scale(.95);transform:scale(.95)}to{-webkit-transform:scale(1);transform:scale(1)}}@keyframes showSweetAlert{0%{-webkit-transform:scale(1);transform:scale(1)}1%{-webkit-transform:scale(.5);transform:scale(.5)}45%{-webkit-transform:scale(1.05);transform:scale(1.05)}80%{-webkit-transform:scale(.95);transform:scale(.95)}to{-webkit-transform:scale(1);transform:scale(1)}}
</style>
-->
<!-- Top navbar -->

<div class="header-body">
	<ul class="breadcrumb col-lg-5 col-md-4 col-4">
		<li class="breadcrumb-item">
			<a href=""><i class="fas fa-home"></i></a>
		</li>
		<li class="breadcrumb-item">
			<a href="">Pengajuan Izin Kerja Sama</a>
		</li>
		<li class="breadcrumb-item">Edit Proposal BAB 1</li>
	</ul>
</div>
	
<!-- Header -->
<div class="card-header shadow">
	<div class="container-fluid">
		<div class="header-body">
			<input type="hidden" id="statusView" value="N">
			<ul class="nav nav-pills nav-fill flex-column flex-sm-row" id="tabs-text" role="tablist">
				<li class="nav-item tab_up">
					<a style="font-size: 1rem;" class="nav-link tab_up mb-sm-3 mb-md-0 active" id="tabs-text-1-tab" href="{{ route('proposal.editBab1',$proposal->id) }}">BAB 1<br>PROFIL PERGURUAN<br>TINGGI</a>
				</li>
				<li class="nav-item tab_up">
					<a style="font-size: 1rem;" class="nav-link tab_up mb-sm-3 mb-md-0 " id="tabs-text-1-tab" href="{{ route('proposal.editBab2',$proposal->id) }}">BAB 2<br>DOKUMEN KERJA SAMA</a>
				</li>
				<li class="nav-item tab_up">
					<a style="font-size: 1rem;" class="nav-link tab_up mb-sm-3 mb-md-0 " id="tabs-text-1-tab" href="{{ route('proposal.editBab3', $proposal->id) }}">BAB 3<br>KESIAPAN SUMBER DAYA</a>
				</li>
				<li class="nav-item tab_up">
					<a style="font-size: 1rem;" class="nav-link tab_up mb-sm-3 mb-md-0 " id="tabs-text-1-tab" href="{{ route('proposal.editBab4', $proposal->id) }}">BAB 4<br>RENCANA PELAKSANAAN<br>KERJA SAMA</a>
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
					<form role="form" method="post" id="edit_bab_form" enctype="multipart/form-data" action="{{route('proposal.editBab1.tambah.update',$proposal->id)}}" onkeydown="return event.key != &#39;Enter&#39;;">
						@csrf
						<input type="hidden" name="idProposal" value="{{$proposal->id}}">
						<input type="hidden" name="idBab1" value="{{$bab1->id}}">
						
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
								<textarea name="nama_pt" value="" class="readonly form-control field " placeholder="" readonly="" maxlength="1000">{{ $bab1->nama_pt }}</textarea>
							</td>
						</tr>
						<tr class="topborder done" style="background: rgb(163, 255, 188);">
							<td class="item block">
								Alamat PT<em style="color:red;">*</em>
							</td>
							<td class="block" width="60%">
								<textarea name="alamat_pt" class=" form-control field " placeholder="" maxlength="1000" id="mce_0" aria-hidden="true">{{ $bab1->alamat_pt }}</textarea>
							</td>
						</tr>
						<tr class="topborder done" style="background: rgb(163, 255, 188);">
							<td class="item block">
								Izin Operasional PT<em style="color:red;">*</em>
							</td>
							<td class="block" width="60%">
								<span>Izin Operasional</span><br>
								<!--<div class="char_count" style="text-align:right">1/1000</div>-->
								<textarea name="ijin_operasional_pt" class=" form-control field " placeholder="Izin Operasional" maxlength="1000" id="mce_2" aria-hidden="true">{{ $bab1->ijin_operasional_pt }}</textarea>
								<br>
								<span>Scan Izin Operasional</span><br>
								<input type="file" name="scan_ijin_operasional_pt"  class="form-control" data-size="2 MB"><small class="keterangan" style="color:red;">Maks. 2 MB</small>
								<input type="hidden" name="scan_ijin_operasional_pt_hidden" value="{{$bab1->scan_ijin_operasional_pt}}">
								<br>
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
								<select class="form-control" name="id_status_akreditasi_institusi" data-select2-id="1" tabindex="-1" aria-hidden="true">
									<option value="" selected disabled hidden>--Pilih Status Akreditasi Institusi--</option>
									@foreach($statusAkreditasi as $row)
                                		<option value="{{ $row->id }}" {{ isset($bab1) ? ($bab1->id_status_akreditasi_institusi == $row->id ? 'selected' : '') :'' }}>{{$row->status}}</option>
                            		@endforeach
								</select>
								<br>
								<span>Scan SK Akreditasi Institusi</span><br>
								<input type="file" name="scan_status_akreditasi_institusi" class="form-control" data-size="2 MB"><small class="keterangan" style="color:red;">Maks. 2 MB</small>
								<input type="hidden" name="scan_status_akreditasi_institusi_hidden" value="{{$bab1->scan_status_akreditasi_institusi}}">
								<br>
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
								<textarea name="nama_pt_mitra" class=" form-control field " placeholder="" maxlength="1000" id="mce_3" aria-hidden="true">{{$bab1->nama_pt_mitra}}</textarea>
							</td>
						</tr>
						<tr class="topborder done" style="background: rgb(163, 255, 188);">
							<td class="item block">
								Alamat PT<em style="color:red;">*</em>
							</td>
							<td class="block" width="60%">
								<!--<div class="char_count" style="text-align:right">1/1000</div> -->
								<textarea name="alamat_pt_mitra" class=" form-control field " placeholder="" maxlength="1000" id="mce_4" aria-hidden="true">{{$bab1->alamat_pt_mitra}}</textarea>
							</td>
						</tr>
						<tr class="topborder done" style="background: rgb(163, 255, 188);">
							<td class="item block">Negara</td>
							<td class="block" width="50%">
								<select class="form-control selectpicker" name="id_negara_mitra" id="list_univ" data-live-search="true">
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
								<textarea name="ijin_operasional_pt_mitra" class=" form-control field " placeholder="Izin Operasional" maxlength="1000" id="mce_5" aria-hidden="true">{{$bab1->ijin_operasional_pt_mitra}}</textarea>
								<br>
								<span>Scan Izin Operasional</span><br>
								<input type="file" name="scan_ijin_operasional_pt_mitra" value="" class="form-control" data-size="2 MB">
								<input type="hidden" name="scan_ijin_operasional_pt_mitra_hidden" value="{{$bab1->scan_ijin_operasional_pt}}">
								<small class="keterangan" style="color:red;">Maks. 2 MB</small>
								<br>
								@if($bab1->scan_ijin_operasional_pt_mitra)
								<span><a href="{{url('').$bab1->scan_ijin_operasional_pt_mitra}}" target="_blank">File yang sudah diupload</a></span>
								@endif
							</td>
						</tr>
						<tr class="topborder done" style="background: rgb(163, 255, 188);">
							<td class="item block">Status Akreditasi Institusi</td>
							<td class="block" width="60%">
								<span>Status Akreditasi Institusi</span>
								<select class="form-control" name="id_status_akreditasi_institusi_mitra" data-select2-id="10" tabindex="-1" aria-hidden="true">
									<option value="" selected disabled hidden>--Pilih Status Akreditasi--</option>
										@foreach($statusAkreditasi as $row)
                                		<option value="{{ $row->id }}" {{ isset($bab1) ? ($bab1->id_status_akreditasi_institusi_mitra == $row->id ? 'selected' : '') :'' }}>{{$row->status}}</option>
                            			@endforeach
									</select>
								<br>
								<span>Scan SK Akreditasi Institusi</span><br>
								<input type="file" name="scan_status_akreditasi_institusi_mitra" value="" class="form-control" data-size="2 MB">
								<input type="hidden" name="scan_status_akreditasi_institusi_mitra_hidden" value="{{$bab1->scan_status_akreditasi_institusi_mitra}}">
								<small class="keterangan" style="color:red;">Maks. 2 MB</small>
								<br>
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
								<textarea name="peringkat_internasional_mitra" class=" form-control field " placeholder="" maxlength="1000" id="mce_7" aria-hidden="true">{{$bab1->peringkat_internasional_mitra}}</textarea>
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
								<!--{{$bab1->nama_prodi}}-->
								<!--
								<select class="form-control" data-live-search="true" name="nama_prodi">
									<option value="">--Pilih Nama Prodi--</option>
									<option value="47201_S1 Kimia">S1 Kimia</option>
									<option value="22104_S1 Teknik Rekayasa Infrastruktur dan Lingkungan">S1 Teknik Rekayasa Infrastruktur dan Lingkungan</option>
									<option value="51201_S1 Geografi">S1 Geografi</option>
									<option value="21201_S1 Teknik Mesin">S1 Teknik Mesin</option>
									<option value="13201_S1 Kesehatan Masyarakat">S1 Kesehatan Masyarakat</option>
									<option value="85209_S1 Pendidikan Vokasional Teknik">S1 Pendidikan Vokasional Teknik</option>
								</select>
								-->
								<textarea name="nama_prodi" class="form-control" placeholder="" maxlength="1000" id="mce_8" aria-hidden="true">{{$bab1->nama_prodi}}</textarea>
								
								<td class="block" width="30%">
									<textarea name="nama_prodi_mitra" class="form-control" placeholder="" maxlength="1000" id="mce_8" aria-hidden="true">{{$bab1->nama_prodi_mitra}}</textarea>
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
									<select class="form-control" name="id_akreditasi_prodi" data-select2-id="10" tabindex="-1" aria-hidden="true">
									<option value="" selected disabled hidden>--Pilih Status Akreditasi--</option>
										@foreach($statusAkreditasi as $row)
                                		<option value="{{ $row->id }}" {{ isset($bab1) ? ($bab1->id_akreditasi_prodi == $row->id ? 'selected' : '') :'' }}>{{$row->status}}</option>
                            			@endforeach
									</select>
								<td class="block" width="30%">
								<select class="form-control" name="id_akreditasi_prodi_mitra" data-select2-id="10" tabindex="-1" aria-hidden="true">
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
									<span>Scan SK Akreditasi Prodi</span><br>
									<input type="file" name="scan_sk_akreditasi_prodi" value="" class="form-control" data-size="">
									<input type="hidden" name="scan_sk_akreditasi_prodi_hidden" value="{{$bab1->scan_sk_akreditasi_prodi}}">
									<br>
									@if($bab1->scan_sk_akreditasi_prodi)
									<span><a href="{{url('').$bab1->scan_sk_akreditasi_prodi}}" target="_blank">File yang sudah diupload</a></span>
									@endif
								</td>
								<td class="block" width="30%">
									<span>Scan SK Akreditasi Prodi</span><br>
									<input type="file" name="scan_sk_akreditasi_prodi_mitra" value="" class="form-control" data-size="">
									<input type="hidden" name="scan_sk_akreditasi_prodi_mitra_hidden" value="{{$bab1->scan_sk_akreditasi_prodi_mitra}}">
									<br>
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
									<input type="file" name="scan_ijin_operasional_prodi" value="" class="form-control" data-size="">
									<input type="hidden" name="scan_ijin_operasional_prodi_hidden" value="{{$bab1->scan_ijin_operasional_prodi}}">
									<br>
									@if($bab1->scan_ijin_operasional_prodi)
									<span><a href="{{url('').$bab1->scan_ijin_operasional_prodi}}" target="_blank">File yang sudah diupload</a></span>
									@endif
								</td>
								<td class="block" width="30%">
									<span>Scan Izin Operasional Prodi</span><br>
									<input type="file" name="scan_ijin_operasional_prodi_mitra" value="" class="form-control" data-size="">
									<input type="hidden" name="scan_ijin_operasional_prodi_mitra_hidden" value="{{$bab1->scan_ijin_operasional_prodi_mitra}}">
									<br>
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
									<input type="file" name="proposal_usulan_kerjsama" value="" class="form-control" data-size="20 MB"><small class="keterangan" style="color:red;">Maks. 20 MB</small>
									<input type="hidden" name="proposal_usulan_kerjsama_hidden" value="{{$bab1->proposal_usulan_kerjsama}}">
									<br>
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
									<button type="submit" class="btn btn-success mt-4 float-right mx-2" id="submit_form">SIMPAN &amp; LANJUTKAN</button>
                                    <a href="" type="button" class="btn btn-default mt-4 float-right text-white" name="submit">KEMBALI KE MENU</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
   
	
@endsection