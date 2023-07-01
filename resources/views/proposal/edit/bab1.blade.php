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
					<a style="font-size: 1rem;" class="nav-link tab_up mb-sm-3 mb-md-0 active" id="tabs-text-1-tab" href="{{ route('proposal.editBab1')}}">BAB 1<br>PROFIL PERGURUAN<br>TINGGI</a>
				</li>
				<li class="nav-item tab_up">
					<a style="font-size: 1rem;" class="nav-link tab_up mb-sm-3 mb-md-0 " id="tabs-text-1-tab" href="{{ route('proposal.editBab2')}}">BAB 2<br>DOKUMEN KERJA SAMA</a>
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
					<h2 class="">BAB 1. PROFIL PERGURUAN TINGGI</h2>
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
				<div class="card-body border-bottom-info">
					<form role="form" method="post" id="edit_bab_form" enctype="multipart/form-data" action="" onkeydown="return event.key != &#39;Enter&#39;;">
						<input type="hidden" name="idkerma" value="2305140001.1">
						<input type="hidden" id="kodeuniv" value="001029">
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
								<textarea name="" class="readonly form-control field " placeholder="" readonly="" maxlength="1000">Universitas Halu Oleo</textarea>
							</td>
						</tr>
						<tr class="topborder done" style="background: rgb(163, 255, 188);">
							<td class="item block">
								Alamat PT<em style="color:red;">*</em>
							</td>
							<td class="block" width="60%">
								<textarea name="" class=" form-control field " placeholder="" maxlength="1000" id="mce_0" aria-hidden="true">Kampus Bumi Tridharma</textarea>
							</td>
						</tr>
						<tr class="topborder done" style="background: rgb(163, 255, 188);">
							<td class="item block">
								Izin Operasional PT<em style="color:red;">*</em>
							</td>
							<td class="block" width="60%">
								<span>Izin Operasional</span><br>
								<!--<div class="char_count" style="text-align:right">1/1000</div>-->
								<textarea name="" class=" form-control field " placeholder="Izin Operasional" maxlength="1000" id="mce_2" aria-hidden="true"></textarea>
								<br>
								<span>Scan Izin Operasional</span><br>
								<input type="file" name="" value="" class="form-control" data-size="2 MB"><small class="keterangan" style="color:red;">Maks. 2 MB</small>
							</td>
						</tr>
						<tr class="topborder done" style="background: rgb(163, 255, 188);">
							<td class="item block">
								Status Akreditasi Institusi<em style="color:red;">*</em>
							</td>
							<td class="block" width="60%">
								<span>Status Akreditasi Institusi</span><br>
								<select class="form-control" name="" data-select2-id="1" tabindex="-1" aria-hidden="true">
									<option value="" disabled="">--Pilih Status Akreditasi Institusi--</option>
									<option value="194">A (Unggul)</option>
									<option value="195">B ( Baik Sekali )</option>
								</select>
								<br>
								<span>Scan SK Akreditasi Institusi</span><br>
								<input type="file" name="" value="" class="form-control" data-size="2 MB"><small class="keterangan" style="color:red;">Maks. 2 MB</small>
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
								<textarea name="field_8" class=" form-control field " placeholder="" maxlength="1000" id="mce_3" aria-hidden="true"></textarea>
							</td>
						</tr>
						<tr class="topborder done" style="background: rgb(163, 255, 188);">
							<td class="item block">
								Alamat PT<em style="color:red;">*</em>
							</td>
							<td class="block" width="60%">
								<!--<div class="char_count" style="text-align:right">1/1000</div> -->
								<textarea name="field_9" class=" form-control field " placeholder="" maxlength="1000" id="mce_4" aria-hidden="true"></textarea>
							</td>
						</tr>
						<tr class="topborder done" style="background: rgb(163, 255, 188);">
							<td class="item block">Negara</td>
							<td class="block" width="50%">
								<select class="form-control selectpicker" name="field_10" id="list_univ" data-live-search="true">
									<option value="">--Pilih Negara--</option>
									<option value="1">Afganistan</option><option value="2">Afrika Selatan</option><option value="3">Afrika Tengah</option><option value="4">Albania</option>
									<option value="5">Aljazair</option><option value="6">Amerika Serikat</option><option value="7">Andorra</option><option value="8">Angola</option>
									<option value="9">Antigua dan Barbuda</option><option value="10">Arab Saudi</option><option value="11">Argentina</option><option value="12">Armenia</option>
									<option value="13">Australia</option><option value="14">Austria</option><option value="15">Azerbaijan</option><option value="16">Bahama</option>
									<option value="17">Bahrain</option><option value="18">Bangladesh</option><option value="19">Barbados</option><option value="20">Belanda</option>
									<option value="21">Belarus</option><option value="22">Belgia</option><option value="23">Belize</option><option value="24">Benin</option>
									<option value="25">Bhutan</option><option value="26">Bolivia</option><option value="27">Bosnia dan Herzegovina</option><option value="28">Botswana</option><option value="29">Brasil</option>
									<option value="30">Britania Raya</option><option value="31">Brunei Darussalam</option><option value="32">Bulgaria</option><option value="33">Burkina Faso</option><option value="34">Burundi</option><option value="35">Ceko</option>
									<option value="36">Chad</option><option value="37">Chili</option><option value="38">China</option><option value="39">Denmark</option><option value="40">Djibouti</option><option value="41">Dominika</option>
									<option value="42">Ekuador</option><option value="43">El Salvador</option><option value="44">Eritrea</option><option value="45">Estonia</option><option value="46">Ethiopia</option><option value="47">Fiji</option>
									<option value="48">Filipina</option>
									<option value="49">Finlandia</option>
									<option value="50">Gabon</option>
									<option value="51">Gambia</option>
									<option value="52">Georgia</option>
									<option value="53">Ghana</option>
									<option value="54">Grenada</option>
									<option value="55">Guatemala</option>
									<option value="56">Guinea</option>
									<option value="57">Guinea Bissau</option>
									<option value="58">Guinea Khatulistiwa</option>
									<option value="59">Guyana</option>
									<option value="60">Haiti</option>
									<option value="61">Honduras</option>
									<option value="62">Hongaria</option>
									<option value="63">India</option>
									<option value="64">Indonesia</option>
									<option value="65">Irak</option>
									<option value="66">Iran</option>
									<option value="67">Irlandia</option>
									<option value="68">Islandia</option>
									<option value="69">Israel</option>
									<option value="70">Italia</option>
									<option value="71">Jamaika</option>
									<option value="72">Jepang</option>
									<option value="73">Jerman</option>
									<option value="74">Kamboja</option>
									<option value="75">Kamerun</option>
									<option value="76">Kanada</option>
									<option value="77">Kazakhstan</option>
									<option value="78">Kenya</option>
									<option value="79">Kirgizstan</option>
									<option value="80">Kiribati</option>
									<option value="81">Kolombia</option>
									<option value="82">Komoro</option>
									<option value="83">Republik Kongo</option>
									<option value="84">Korea Selatan</option>
									<option value="85">Korea Utara</option>
									<option value="86">Kosta Rika</option>
									<option value="87">Kroasia</option>
									<option value="88">Kuba</option>
									<option value="89">Kuwait</option>
									<option value="90">Laos</option>
									<option value="91">Latvia</option>
									<option value="92">Lebanon</option>
									<option value="93">Lesotho</option>
									<option value="94">Liberia</option>
									<option value="95">Libya</option>
									<option value="96">Liechtenstein</option>
									<option value="97">Lituania</option>
									<option value="98">Luksemburg</option>
									<option value="99">Madagaskar</option>
									<option value="100">Makedonia</option>
									<option value="101">Maladewa</option>
									<option value="102">Malawi</option>
									<option value="103">Malaysia</option>
									<option value="104">Mali</option>
									<option value="105">Malta</option>
									<option value="106">Maroko</option>
									<option value="107">Marshall</option>
									<option value="108">Mauritania</option>
									<option value="109">Mauritius</option>
									<option value="110">Meksiko</option>
									<option value="111">Mesir</option>
									<option value="112">Mikronesia</option>
									<option value="113">Moldova</option>
									<option value="114">Monako</option>
									<option value="115">Mongolia</option>
									<option value="116">Montenegro</option>
									<option value="117">Mozambik</option>
									<option value="118">Myanmar</option>
									<option value="119">Namibia</option>
									<option value="120">Nauru</option>
									<option value="121">Nepal</option>
									<option value="122">Niger</option>
									<option value="123">Nigeria</option>
									<option value="124">Nikaragua</option>
									<option value="125">Norwegia</option>
									<option value="126">Oman</option>
									<option value="127">Pakistan</option>
									<option value="128">Palau</option>
									<option value="129">Panama</option>
									<option value="130">Pantai Gading</option>
									<option value="131">Papua Nugini</option>
									<option value="132">Paraguay</option>
									<option value="133">Perancis</option>
									<option value="134">Peru</option>
									<option value="135">Polandia</option>
									<option value="136">Portugal</option>
									<option value="137">Qatar</option>
									<option value="138">Republik Demokratik Kongo</option>
									<option value="139">Republik Dominika</option>
									<option value="140">Rumania</option>
									<option value="141">Rusia</option>
									<option value="142">Rwanda</option>
									<option value="143">Saint Kitts and Nevis</option>
									<option value="144">Saint Lucia</option>
									<option value="145">Saint Vincent and the Grenadines</option>
									<option value="146">Samoa</option>
									<option value="147">San Marino</option>
									<option value="148">Sao Tome and Principe</option>
									<option value="149">Selandia Baru</option>
									<option value="150">Senegal</option>
									<option value="151">Serbia</option>
									<option value="152">Seychelles</option>
									<option value="153">Sierra Leone</option>
									<option value="154">Singapura</option>
									<option value="155">Siprus</option>
									<option value="156">Slovenia</option>
									<option value="157">Slowakia</option>
									<option value="158">Solomon</option>
									<option value="159">Somalia</option>
									<option value="160">Spanyol</option>
									<option value="161">Sri Lanka</option>
									<option value="162">Sudan</option>
									<option value="163">Sudan Selatan</option>
									<option value="164">Suriah</option>
									<option value="165">Suriname</option>
									<option value="166">Swaziland</option>
									<option value="167">Swedia</option>
									<option value="168">Swiss</option>
									<option value="169">Tajikistan</option>
									<option value="170">Tanjung Verde</option>
									<option value="171">Tanzania</option>
									<option value="172">Thailand</option>
									<option value="173">Timor Leste</option>
									<option value="174">Togo</option>
									<option value="175">Tonga</option>
									<option value="176">Trinidad and Tobago</option>
									<option value="177">Tunisia</option>
									<option value="178">Turki</option>
									<option value="179">Turkmenistan</option>
									<option value="180">Tuvalu</option>
									<option value="181">Uganda</option>
									<option value="182">Ukraina</option>
									<option value="183">Uni Emirat Arab</option>
									<option value="184">Uruguay</option>
									<option value="185">Uzbekistan</option>
									<option value="186">Vanuatu</option>
									<option value="187">Venezuela</option>
									<option value="188">Vietnam</option>
									<option value="189">Yaman</option>
									<option value="190">Yordania</option>
									<option value="191">Yunani</option>
									<option value="192">Zambia</option>
									<option value="193">Zimbabwe</option>
									<option value="206">Taiwan</option>
								</select>
							</td>
						</tr>
						<tr class="topborder done" style="background: rgb(163, 255, 188);">
							<td class="item block">Izin Operasional PT</td>
							<td class="block" width="60%">
								<span>Izin Operasional</span><br>
								<!--<div class="char_count" style="text-align:right">1/1000</div> -->
								<textarea name="" class=" form-control field " placeholder="Izin Operasional" maxlength="1000" id="mce_5" aria-hidden="true"></textarea>
								<br>
								<span>Scan Izin Operasional</span><br>
								<input type="file" name="" value="" class="form-control" data-size="2 MB">
								<small class="keterangan" style="color:red;">Maks. 2 MB</small>
							</td>
						</tr>
						<tr class="topborder done" style="background: rgb(163, 255, 188);">
							<td class="item block">Status Akreditasi Institusi</td>
							<td class="block" width="60%">
								<span>Status Akreditasi Institusi</span>
								<!--<div class="char_count" style="text-align:right">1/1000</div>-->
								<textarea name="" class=" form-control field " placeholder="Status Akreditasi Institusi" maxlength="1000" id="mce_6" aria-hidden="true"></textarea>
								<br>
								<span>Scan SK Akreditasi Institusi</span><br>
								<input type="file" name="" value="" class="form-control" data-size="2 MB"><small class="keterangan" style="color:red;">Maks. 2 MB</small>
							</td>
						</tr>
						<tr class="topborder done" style="background: rgb(163, 255, 188);">
							<td class="item block">
								Peringkat International<em style="color:red;">*</em>
							</td>
							<td class="block" width="60%">
								<!--<div class="char_count" style="text-align:right">1/1000</div>-->
								<textarea name="" class=" form-control field " placeholder="" maxlength="1000" id="mce_7" aria-hidden="true"></textarea>
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
								<select class="form-control" data-live-search="true" name="field_10">
									<option value="">--Pilih Nama Prodi--</option>
									<option value="47201_S1 Kimia">S1 Kimia</option>
									<option value="22104_S1 Teknik Rekayasa Infrastruktur dan Lingkungan">S1 Teknik Rekayasa Infrastruktur dan Lingkungan</option>
									<option value="51201_S1 Geografi">S1 Geografi</option>
									<option value="21201_S1 Teknik Mesin">S1 Teknik Mesin</option>
									<option value="13201_S1 Kesehatan Masyarakat">S1 Kesehatan Masyarakat</option>
									<option value="85209_S1 Pendidikan Vokasional Teknik">S1 Pendidikan Vokasional Teknik</option>
								</select>
								<td class="block" width="30%">
									<!--<div class="char_count" style="text-align:right">1/1000</div> -->
									<textarea name="" class="form-control" placeholder="" maxlength="1000" id="mce_8" aria-hidden="true"></textarea>
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
									<select class="form-control" name="" data-select2-id="10" tabindex="-1" aria-hidden="true">
										<option value="" data-select2-id="12">--Pilih--</option>
										<option value="197" >Unggul</option>
										<option value="198" >Baik Sekali</option>
										<option value="207" >Baik</option>
										<option value="208" >A</option>
										<option value="209" >B</option>
									</select>
									<!--
                                    <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="11" style="width: 326.475px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-field_17-16-container"><span class="select2-selection__rendered" id="select2-field_17-16-container" role="textbox" aria-readonly="true" title="Pilih ">Pilih</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span><br>
									<small id="message17"></small><input type="hidden" name="text17" id="text17"></td>
                                    -->
								<td class="block" width="30%">
									<!--<div class="char_count" style="text-align:right">1/1000</div>-->
									<textarea name="" class=" form-control field " placeholder="" maxlength="1000" id="mce_9" aria-hidden="true"></textarea>
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
									<input type="file" name="" value="" class="form-control" data-size=""></td>
								<td class="block" width="30%">
									<span>Scan SK Akreditasi Prodi</span><br>
									<input type="file" name="" value="" class="form-control" data-size=""></td>
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
									<input type="file" name="" value="" class="form-control" data-size=""></td>
								<td class="block" width="30%">
									<span>Scan Izin Operasional Prodi</span><br>
									<input type="file" name="" value="" class="form-control" data-size=""></td>
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
									<input type="file" name="" value="" class="form-control" data-size="20 MB"><small class="keterangan" style="color:red;">Maks. 20 MB</small>
								</td>
							</tr>
							</tbody>
							</table>
							<div class="row">
								<div class="form-group col-md-6"></div>
								<div class="form-group col-md-6">
									<button type="submit" class="btn btn-success mt-4 float-right mx-2" name="submit" id="submit_form">SIMPAN &amp; LANJUTKAN</button>
                                    <a href="" type="button" class="btn btn-default mt-4 float-right text-white" name="submit">KEMBALI KE MENU</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
   
	
@endsection