<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->


<!-- Mirrored from sierra.kemdikbud.go.id/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 May 2023 10:25:38 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <base #href="">
    <title>IZINKERMA: APLIKASI IZIN KERJA SAMA</title>
    <meta charset="utf-8" />
    <meta name="description" content=""
    />
    <meta name="keywords" content=""
    />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Ssitem E-Rekognisi Pembelajaran Lampau" />
    <meta property="og:url" content="index.html" />
    <meta property="og:site_name" content="SIERRA DIREKTORAT PEMBELAJARAN DAN KEMAHASISWAAN DIKTIRISTEK" />
    <link rel="canonical" href="index.html" />
    <link rel="shortcut icon" href="assets/media/logos/logo-polos.png" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <!--add form izin kerma-->
    
    <!--end :: izin kerma-->
    <style>
        .dropbtn {
          background-color: #04AA6D;
          color: white;
          padding: 16px;
          font-size: 16px;
          border: none;
        }
        
        .dropdown {
          position: relative;
          display: inline-block;
        }
        
        .dropdown-content {
          display: none;
          position: absolute;
          border-radius: 0.475rem;
            background-color: #fff;
            box-shadow: 0 0 50px 0 rgb(82 63 105 / 15%);
          min-width: 200px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
          transform: translate(0px, 61px);
        }
        
        .dropdown-content a {
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
        }
        
        .dropdown-content a:hover {
            background-color: #ddd;
            color: blue;
        }
        
        .dropdown:hover .dropdown-content {display: block;}
        
        .dropdown:hover .dropbtn {background-color: #3e8e41;}

        /*accordion style */
        /* Style the buttons that are used to open and close the accordion panel */
        .accordion {
            background-color: #eeeeee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            text-align: left;
            border: none;
            outline: none;
            transition: 0.4s;
        }

        /* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
        .active, .accordion:hover {
            background-color: #cccccc;
        }

        /* Style the accordion panel. Note: hidden by default */
        .panel {
            padding: 0 18px;
            background-color: white;
            display: none;
            overflow: hidden;
        }

        .accordion:after {
            content: '\002B'; /* Unicode character for "plus" sign (+) */
            font-size: 13px;
            color: #777;
            float: right;
            margin-left: 5px;
        }
        
        /* end accordion style */

    </style>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" data-bs-offset="200" class="bg-white position-relative">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Header Section-->
        <div class="mb-0" id="home">
            <!--begin::Wrapper-->
            <div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg" style="background-image: url(assets/media/svg/illustrations/landing.svg)">
                <!--begin::Header-->
                <div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center justify-content-between">
                            <!--begin::Logo-->
                            <div class="d-flex align-items-center flex-equal">
                                <!--begin::Mobile menu toggle-->
                                <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
										<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
										<span class="svg-icon svg-icon-2hx">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
												<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
                                <!--end::Mobile menu toggle-->
                               
                            </div>
                            <!--end::Logo-->
                            <!--begin::Menu wrapper-->
                            <div class="d-lg-block" id="kt_header_nav_wrapper">
                                <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle"
                                    data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
                                    <!--begin::Menu-->
                                    <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-bold" id="kt_landing_menu">
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link active py-3 px-4 px-xxl-6 " href="#kt_body" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Beranda</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6 " href="#persyaratan" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Persyaratan</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6 " href="#dokumen" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Dokumen</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->                                        
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6 " href="#daftar" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Daftar PT</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6 " href="#alur" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Alur Kerja</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6 " href="#faq" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">FAQ</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                            </div>
                            <!--end::Menu wrapper-->
                            <!--begin::Toolbar-->
                            <div class="flex-equal text-end ms-1">
                                                                <a href="{{ route('login') }}" class="btn btn-success">Sign In</a>
                                    
                                                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->
                <!--begin::Landing hero-->
                <div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
                    <!--begin::Heading-->
                    <div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
                        <!--begin::Title-->
                        <h1 class="text-white lh-base fw-bolder fs-2x fs-lg-3x mb-15">IZIN KERMA
                            <br />
                            <span style="background: linear-gradient(to right, #12CE5D 0%, #FFD80C 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
								<span id="kt_landing_hero_text">APLIKASI IZIN KERJA SAMA </span>
                            </span>
                        </h1>
                        <!--end::Title-->
                        <div class="text-center mb-17">
                            <!--begin::Title-->
                            
                            
                            <!--end::Title-->
                            <!--begin::Text-->
                            <div class="fs-5 text-muted fw-bold"> Aplikasi untuk pengajuan izin kerja sama yang dilakukan oleh universitas dan vokasi.
                        </div>
                        <!--end::Heading-->
                        
                        <!--begin::Product slider-->
                        
                    </div>
                    <!--end::Heading-->
                    <!--begin::Clients-->
                    <div class="d-flex flex-center flex-wrap position-relative px-5">
                        <!--begin::Client-->
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Kemdikbudristek">
                            <img src="assets/media/logos/logo-putih.png" class="mh-30px mh-lg-40px" alt="" />
                        </div>
                        <!--end::Client-->
                        
                        <!--begin::Client-->
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="MBKM">
                            <img src="assets/media/logos/mbkm.png" class="mh-30px mh-lg-40px" alt="" />
                        </div>
                        <!--end::Client-->
                        <!--begin::Client-->
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="PD Dikti">
                            <img src="assets/media/logos/pddikti.png" class="mh-30px mh-lg-40px" alt="" />
                        </div>
                        <!--end::Client-->
                    </div>
                    <!--end::Clients-->
                </div>
                <!--end::Landing hero-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Curve bottom-->
            <div class="landing-curve landing-dark-color mb-10 mb-lg-20">
                <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
					</svg>
            </div>
            <!--end::Curve bottom-->
        </div>
        <!--end::Header Section-->
        <!--begin::How It Works Section-->
        <div class="mb-n10 mb-lg-n20 z-index-2">
            <!--begin::Container-->
            
            <div class="container">
                <!--begin::Heading-->
                
                <div class="text-center mt-15 mb-14" id="persyaratan" data-kt-scroll-offset="{default: 100, lg: 150}">
                    <!--begin::Title: Persyaratan-->
                    <h3 class="fs-2hx text-black fw-bolder mb-5" >PERSYARATAN PENGAJUAN IZIN KERJA SAMA</h3>
                    <!--end::Title-->
                    <!--begin::Description-->
                    
                    <div class="row">
                        <div class="col-md-7 px-4">
                            <div class="text-center mb-10 mb-md-0">
                                
                                
                                <br>
                                <div class="fw-bold fs-6 fs-lg-4 text-muted " style="text-align:justify">
                                    <b>Dalam mengajukan izin kerja sama terdapat beberapa persyaratan yang harus dipenuhi</b><b style="color: black;">
                                    <br>
                                    <br>
                                    <ol>
                                        <li>IZIN OPERASIONAL PRODI - SCAN IZIN OPERASIONAL PRODI PT DALAM NEGERI</li>    
                                        <li>IZIN OPERASIONAL PRODI - SCAN IZIN OPERASIONAL PRODI PT MITRA NEGERI</li> 
                                        <li>IZIN OPERASIONAL PT - SCAN IZIN OPERASIONAL DALAM NEGERI</li>
                                        <li>IZIN OPERASIONAL PT - SCAN IZIN OPERASIONAL MITRA NEGERI</li>
                                        <li>PROPOSAL USULAN KERJA SAMA PERGURUAN TINGGI</li>
                                        <li>SK AKREDITASI PRODI - SCAN SK AKREDITASI PRODI PT DALAM NEGERI</li>
                                        <li>SK AKREDITASI PRODI - SCAN SK AKREDITASI PRODI PT MITRA NEGERI</li>
                                        <li>STATUS AKREDITASI INSTITUSI - SCAN SK AKREDITASI INSTITUSI PT DALAM NEGERI</li>
                                        <li>STATUS AKREDITASI INSTITUSI - SCAN SK AKREDITASI INSTITUSI PT MITRA NEGERI</li>
                                        <li>UNGGAH FILE MOA</li>
                                        <li>UNGGAH FILE MOU</li>   
                                        <li>DAFTAR DATA DOSEN YANG TERLIBAT SESUAI FORMAT TERLAMPIR PT DALAM NEGERI</li>
                                        <li>DAFTAR DATA DOSEN YANG TERLIBAT SESUAI FORMAT TERLAMPIR PT MITRA NEGERI</li>
                                        <li>LAMPIRAN DATA SARANA DAN PRASARANA YANG DIMILIKI PT DALAM NEGERI</li>
                                        <li>LAMPIRAN DATA SARANA DAN PRASARANA YANG DIMILIKI PT MITRA NEGERI</li>
                                        <li>DESAIN KURIKULUM - KURIKULUM PRODI PT DALAM NEGERI</li>
                                        <li>DESAIN KURIKULUM - KURIKULUM PRODI PT GABUNGAN NEGERI</li>
                                        <li>DESAIN KURIKULUM - KURIKULUM PRODI PT MITRA NEGERI</li>
                                        <li>PENJADWALAN PROGRAM KERJASAMA</li>
                                        <li>SURAT KETERANGAN PENDAMPING IJAZAH (SKPI)</li>

                                    </ol>
                                    </b>

                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                
            </div>
            <!--end::Container-->
        </div>
        <!--end::How It Works Section-->
        <!--begin::Statistics Section-->
        <div class="mt-sm-n10">
            <!--begin::Curve top-->
            <div class="landing-curve landing-dark-color">
                <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
					</svg>
            </div>
            <!--end::Curve top-->
            <!--begin::Wrapper-->
            <div class="pb-15 pt-18 landing-dark-bg">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Heading-->
                    
                    <div class="text-left mb-14">
                        <!--begin::Title-->
                        <h3 class="fs-2hx text-white mb-5 text-center"  id="dokumen" data-kt-scroll-offset="{default: 100, lg: 150}">CONTOH DOKUMEN </h3>
                        <!--end::Title-->
                        <!--begin::Sub-title-->
                        <h3 class="fs-2hx text-white fw-bolder text-center mb-5" >PERSYARATAN PENGAJUAN IZIN KERJA SAMA</h3><b style="color: white;">
                            <br>
                            <br>
                            <ol>
                                <a href="assets/media/izin_operasional.pdf" target="_blank" class="text-white opacity-50 text-hover-primary fs-5 mb-6"><li>IZIN OPERASIONAL PT - SCAN IZIN OPERASIONAL DALAM NEGERI</li> </a>
                                <a href="assets/media/proposal_usulan.pdf" target="_blank" class="text-white opacity-50 text-hover-primary fs-5 mb-6"><li>PROPOSAL USULAN KERJA SAMA PERGURUAN TINGGI</li></a> 
                                <a href="assets/media/sk_akreditasi.pdf" target="_blank" class="text-white opacity-50 text-hover-primary fs-5 mb-6"><li>SK AKREDITASI PRODI - SCAN SK AKREDITASI PRODI PT DALAM NEGERI</li></a>
                                <a href="assets/media/sk_akreditasi_pt.pdf" target="_blank" class="text-white opacity-50 text-hover-primary fs-5 mb-6"><li>STATUS AKREDITASI INSTITUSI - SCAN SK AKREDITASI INSTITUSI PT DALAM NEGERI</li></a>
                                <a href="assets/media/desain_kurikulum.pdf" target="_blank" class="text-white opacity-50 text-hover-primary fs-5 mb-6"><li>DESAIN KURIKULUM - KURIKULUM PRODI PT DALAM NEGERI</li></a>
                                <a href="assets/media/desain_kurikulum_gabungan.pdf" target="_blank" class="text-white opacity-50 text-hover-primary fs-5 mb-6"><li>DESAIN KURIKULUM - KURIKULUM PRODI PT GABUNGAN NEGERI</li></a>
                                <a href="assets/media/desain_kurikulum_mitra.pdf" target="_blank" class="text-white opacity-50 text-hover-primary fs-5 mb-6"><li>DESAIN KURIKULUM - KURIKULUM PRODI PT MITRA NEGERI</li></a>
                               
    
                            </ol>
                            </b>
                        <!--end::Sub-title=-->
                    </div>


                    <!--end::Heading-->
                    <!--begin::Testimonial-->
                    
                </div>
                <!--end::Container-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Curve bottom-->
            <div class="landing-curve landing-dark-color">
                <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
					</svg>
            </div>
            <!--end::Curve bottom-->
        </div>
        <!--end::Statistics Section-->
        <!--begin::Team Section-->
        <div class="py-10 py-lg-20">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Heading-->
                
                <div class="container">
                    <!--begin::Plans-->
                    <div class="d-flex flex-column container pt-lg-20">
                    <!--add list univ-->
                    <div class="text-center mb-12">
                            <!--begin::Title-->
                            <h3 class="fs-2hx text-dark mb-5" id="daftar" data-kt-scroll-offset="{default: 100, lg: 150}">Data Universitas Pelaksanaan Rekognisi Pembelajaran Lampau </h3>
                            <!--end::Title-->
                            <!--begin::Sub-title-->
                            <div class="fs-5 text-muted fw-bold">Berikut list Universitas dengan status pelaksanaan RPL</div>
                            <!--end::Sub-title=-->
                        </div>
                        <div class="col-md-12">
                            <div class="card shadow">
                              <div class="card-header border-0">
                                <table style="width: 70% !important; white-space: nowrap;" class="table_new mb-4">
                                  <tbody>
                                    <tr>
                                      <div class="alert alert-info" role="alert" style="width: 100%;">
                                        <span class="alert-text">Download user manual aplikasi dan contoh format pengajuan kerma&nbsp;<a class="btn btn-sm btn-warning text-white" href="../../../bs/izinkerma/dashboard/panduan/Front_Panduan_Universitas.pdf" target="_blank" data-toggle="tooltip" data-placement="top" title="Download user manual" style="float: right;"><i class="ni ni-cloud-download-95"></i></a> </span>
                                      </div>
                                    </tr>
                                    <tr >
                                    <td style="width: 15% !important;">Nama PT Dalam Negeri</td>
                                    <td style="width: 5% !important;">:</td>
                                    <td colspan="3">
                                      <select class="form-control select2" id="ptdalam">
                                        <option value="">Pilih Nama PT Dalam Negeri</option>
                                        <option value="<p>Universitas Bina Nusantara</p>"><p>Universitas Bina Nusantara</p></option><option value="<p>Universitas Udayana</p>"><p>Universitas Udayana</p></option><option value="Institut Bio Scientia Internasional Indonesia">Institut Bio Scientia Internasional Indonesia</option><option value="Institut Komunikasi Dan Bisnis LSPR">Institut Komunikasi Dan Bisnis LSPR</option><option value="Institut Teknologi Adhi Tama Surabaya">Institut Teknologi Adhi Tama Surabaya</option><option value="Universitas Bina Nusantara">Universitas Bina Nusantara</option><option value="Universitas Brawijaya">Universitas Brawijaya</option><option value="Universitas Internasional Batam">Universitas Internasional Batam</option><option value="Universitas Islam Indonesia">Universitas Islam Indonesia</option><option value="Universitas Katolik Indonesia Atma Jaya">Universitas Katolik Indonesia Atma Jaya</option><option value="Universitas Katolik Soegijapranata">Universitas Katolik Soegijapranata</option><option value="Universitas Kristen Petra">Universitas Kristen Petra</option><option value="Universitas Muhammadiyah Malang">Universitas Muhammadiyah Malang</option><option value="Universitas Pendidikan Nasional">Universitas Pendidikan Nasional</option><option value="Universitas Pertamina">Universitas Pertamina</option><option value="Universitas Sebelas Maret">Universitas Sebelas Maret</option>                    </select>
                                    </td>
                                  </tr>
                                  <tr >
                                    <td style="width: 15% !important;">Nama PT Luar Negeri</td>
                                    <td style="width: 5% !important;">:</td>
                                    <td colspan="3">
                                      <select class="form-control select2" id="ptluar">
                                        <option value="">Pilih Nama PT Luar Negeri</option>
                                        <option value="<p><strong>Providence University </strong><strong>(PU)</strong></p>"><p><strong>Providence University </strong><strong>(PU)</strong></p></option><option value="<p>Burgundy School of Business</p>"><p>Burgundy School of Business</p></option><option value="<p>Department of Law College of Creative Human Resources, Youngsan University</p>"><p>Department of Law College of Creative Human Resources, Youngsan University</p></option><option value="<p>Dongseo University</p>"><p>Dongseo University</p></option><option value="<p>Kunsan National University, South Korea</p>"><p>Kunsan National University, South Korea</p></option><option value="<p>Northumbria University at Newcastle</p>"><p>Northumbria University at Newcastle</p></option><option value="<p>Saxion University of Applied Sciences</p>"><p>Saxion University of Applied Sciences</p></option><option value="<p>Sun Moon University, Korea Selatan</p>"><p>Sun Moon University, Korea Selatan</p></option><option value="<p>University of Technology Sydney</p>"><p>University of Technology Sydney</p></option><option value="<p>Victoria University of Wellington</p>"><p>Victoria University of Wellington</p></option><option value="<p>Yamaguchi University</p>"><p>Yamaguchi University</p></option><option value="Asia University, Taiwan">Asia University, Taiwan</option><option value="Bournemouth University">Bournemouth University</option><option value="Chung Yuan Christian University (CYCU)">Chung Yuan Christian University (CYCU)</option><option value="De Montfort University&nbsp;">De Montfort University&nbsp;</option><option value="DONGSEO UNIVERSITY">DONGSEO UNIVERSITY</option><option value="FONTYS UNIVERSITY OF APPLIED SCIENCES">FONTYS UNIVERSITY OF APPLIED SCIENCES</option><option value="HELP University">HELP University</option><option value="I-SHOU UNIVERSITY (I-SHOU)">I-SHOU UNIVERSITY (I-SHOU)</option><option value="INTERNATIONAL MANAGEMENT INSTITUTE (IMI)">INTERNATIONAL MANAGEMENT INSTITUTE (IMI)</option><option value="Kunsan National University">Kunsan National University</option><option value="Macquarie University">Macquarie University</option><option value="Nanjing Xiaozhuang University">Nanjing Xiaozhuang University</option><option value="National Central University">National Central University</option><option value="National Taiwan University of Science and Technology (NTUST)">National Taiwan University of Science and Technology (NTUST)</option><option value="Northumbria University at Newcastle">Northumbria University at Newcastle</option><option value="Providence University">Providence University</option><option value="Providence University Taiwan">Providence University Taiwan</option><option value="Queensland Unviersity of Technology">Queensland Unviersity of Technology</option><option value="SAXION UNIVERSITY OF APPLIED SCIENCES">SAXION UNIVERSITY OF APPLIED SCIENCES</option><option value="Universiti Teknologi Petronas">Universiti Teknologi Petronas</option><option value="University of Dundee">University of Dundee</option><option value="University of Wollongong">University of Wollongong</option><option value="UNSW">UNSW</option><option value="WENZAO URSULINE UNIVERSITY OF LANGUAGES
                                        &nbsp;">WENZAO URSULINE UNIVERSITY OF LANGUAGES
                                        &nbsp;</option>                    </select>
                                    </td>
                                  </tr>
                                  <tr >
                                    <td style="width: 15% !important;">Tanggal Pengantar Dikti</td>
                                    <td style="width: 5% !important;">:</td>
                                    <td >
                                      <input type="text" class="form-control datepicker" id="tgl_mulai">
                                    </td>
                                    <td >
                                      <input type="text" class="form-control datepicker" id="tgl_selesai">
                                    </td>
                                    <td >
                                      <button class="btn btn-success filter" disabled="disabled">FILTER</button>
                                    </td>
                                  </tr>
                                  </tbody>                
                                </table>
                              </div>
                              <div class="card-body">
                                <h2>Tabel Daftar Kerma yang Diterima</h2>
                                <div class="table-responsive py-4">
                                  <table id="tabel_pengajuan" class="table align-items-center" >
                                    <thead class="thead-light">
                                      <tr>
                                        <th scope="col" width="5%" style="font-size: 90%;" class="text-center">No</th>
                                        <th scope="col" width="20%" style="font-size: 90%;" class="text-center">Judul Kerma</th>
                                        <th scope="col" width="15%" style="font-size: 90%;" class="text-center">Nama PT Dalam Negeri</th>
                                        <th scope="col" width="15%" style="font-size: 90%;" class="text-center">Nama PT Luar Negeri</th>
                                        <!-- <th scope="col" width="15%" style="font-size: 90%;" class="text-center">No Surat</th> -->
                                        <th scope="col" width="10%" style="font-size: 90%;" class="text-center">Tanggal<br>Pengantar<br>Dikti</th>
                                        <!-- <th scope="col" width="5%" style="font-size: 90%;" class="text-center">Surat<br>Pengantar</th> -->
                                      </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                        </div>

                        <!--end list univ-->
                                              
                  
                    <!--end::Plans-->
                    </div>
                <!--end::Heading-->
               
            </div>
            <!--end::Container-->
        </div>
        <!--end::Team Section-->

        <div class="landing-curve landing-dark-color">
                <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
					</svg>
            </div>
            <!--end::Curve top-->
            <!--begin::Wrapper-->
            <div class="pb-15 pt-18 landing-dark-bg">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Heading-->
                    
                    <div class="text-left mb-14">
                        <!--begin::Title-->
                        <h3 class="fs-2hx text-white mb-5 text-center"  id="alur" data-kt-scroll-offset="{default: 100, lg: 150}">ALUR KERJA IZIN KERMA</h3>
                        <!--end::Title-->
                        <!--begin::Sub-title-->
                        
                            <br>
                            <br>
                            <div class="tns tns-default">
                            <!--begin::Slider-->
                            
                                <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                                    <img src="assets/Skema_RPL_Tipe_A_page_0001.jpg" class="card-rounded shadow mw-100" alt="" />
                                </div>
                                <!--end::Item-->
                                
                            
                        </div>
                            </b>
                        <!--end::Sub-title=-->
                    </div>


                    <!--end::Heading-->
                    <!--begin::Testimonial-->
                    
                </div>
                <!--end::Container-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Curve bottom-->
            <div class="landing-curve landing-dark-color">
                <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
					</svg>
            </div>


        <div class="py-10 py-lg-20">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Heading-->
                
                <div class="container">
                    <!--begin::Plans-->
                    <div class="d-flex flex-column container pt-lg-20">
                   
                        
                        
                    <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <h1 class="fs-2hx fw-bolder text-black mb-5" id="faq" data-kt-scroll-offset="{default: 100, lg: 150}"> Frequently Asked Questions</h1>
                            <div class="text-black-600 fw-bold fs-5">Yang banyak ditanyakan</div>
                        </div>
                        <!--end::Heading-->
                        
                        <!--add faq-->
                        <button class="accordion fw-bold" >Kerja sama apa saja yang perlu persetujuan?</button>
                        <div class="panel">
                            <p>Kerja sama yang perlu persetujuan dan perlu di laporkan adalah kerja 
                                sama yang sifatnya degree atau kerja sama yang menghasilkan ijazah dan sertifikat.</p>
                        </div>

                        <button class="accordion fw-bold">Saya punya masalah teknis, siapa yang bisa kami hubungi?</button>
                        <div class="panel">
                            <p>Terkait masalah teknis silakan hubungi Kontak yang ada pada section kontak di bawah halaman ini.</p>
                        </div>

                        <button class="accordion fw-bold">Dimana kita mendapatkan Usermanual aplikasi dan daftar dokumen u
                            ntuk kelengkapan yang perlu disiapkan untuk mengajukan kerjasama?</button>
                        <div class="panel">
                            <p>Untuk informasi usermanual aplikasi dan kelengkapan yang perlu disiapkan 
                                untuk akademik silakan buka halaman "ini" , dan untuk vokasi di halaman "ini" .</p>
                        </div>
                        <br>
                        <br>
                        <!--end faq-->

                        
                    </div>
                    <!--end::Plans-->
                    </div>
                <!--end::Heading-->
               
            </div>
            <!--end::Container-->
        </div>



        <!--begin::Pricing Section-->
        <div class="mt-sm-n20">
            <!--begin::Curve top-->
            <div class="landing-curve landing-dark-color">
                <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
					</svg>
            </div>
            <!--end::Curve top-->
            <!--begin::Wrapper-->
            <div class="py-20 landing-dark-bg">
                <!--begin::Container-->
                
                <!--end::Container-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Curve bottom-->
           
            <!--end::Curve bottom-->
        </div>
        <!--end::Pricing Section-->
        <!--begin::Testimonials Section-->
        
        <!--end::Testimonials Section-->
        <!--begin::Footer Section-->
        
            
            <!-- <h5 class="u-align-right u-custom-font u-font-montserrat u-text u-text-body-alt-color u-text-2">- Jeff Bezos -</h5> -->
         
            <!--end::Curve top-->
            <!--begin::Wrapper-->
            <div class="landing-dark-bg pt-20">
                <!--begin::Container-->
                <div class="container">
                    <h4 class="u-custom-font u-font-montserrat u-text u-text-body-alt-color text-white u-text-2" style="text-align: left;">Visi Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi Indonesia</h4>
            <p class="u-custom-font u-font-montserrat u-text u-text-body-alt-color text-white u-text-1">Kementerian Pendidikan dan Kebudayaan mendukung Visi dan Misi Presiden untuk mewujudkan Indonesia Maju yang berdaulat, mandiri, dan berkepribadian melalui terciptanya Pelajar Pancasila yang bernalar kritis, kreatif, mandiri, beriman, bertakwa kepada Tuhan Yang Maha Esa, dan berakhlak mulia, bergotong royong, dan berkebinekaan global.&nbsp;</p>
                    <!--begin::Row-->
                    <div class="row py-10 py-lg-20">
                        <!--begin::Col-->
                        <div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
                            <!--begin::Block-->
                            <div class="rounded landing-dark-border p-9 mb-10">
                                <!--begin::Title-->
                                <h2 class="text-white">Kontak</h2>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <span class="fw-normal fs-4 text-gray-700">Direktorat Jenderal Pendidikan Tinggi Kementerian Pendidikan dan Kebudayaan Republik Indonesia </span>
								
                                <!--end::Text-->
                            </div>
                            <!--end::Block-->
                            <!--begin::Block-->
                            <div class="rounded landing-dark-border p-9">
                                <!--begin::Title-->
                                <h2 class="text-white">Alamat</h2>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <span class="fw-normal fs-4 text-gray-700">Gedung D, Jalan Jenderal Sudirman, Pintu 1 Senayan, Jakarta Pusat 10270</span>
                                <!--end::Text-->
                            </div>
                            <!--end::Block-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-6 ps-lg-16">
                            <!--begin::Navs-->
                            <div class="d-flex justify-content-center">
                                <!--begin::Links-->
                                <div class="d-flex fw-bold flex-column me-20">
                                    <!--begin::Subtitle-->
                                    <h4 class="fw-bolder text-gray-400 mb-6">Tautan Penting</h4>
                                    <!--end::Subtitle-->
                                    <!--begin::Link-->
                                    <a href="https://dikti.kemdikbud.go.id/" target="_blank" class="text-white opacity-50 text-hover-primary fs-5 mb-6">PDDIKTI</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="http://spmi.kemdikbud.go.id/" target="_blank" class="text-white opacity-50 text-hover-primary fs-5 mb-6">SPMI</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://banpt.or.id/" target="_blank" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Akreditasi</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://dikti.kemdikbud.go.id/" target="_blank" class="text-white opacity-50 text-hover-primary fs-5 mb-6">DIKTI</a>
                                    <!--end::Link-->
                                    
                                    <!--end::Link-->
                                    
                                </div>
                                <!--end::Links-->
                                <!--begin::Links-->
                                <div class="d-flex fw-bold flex-column ms-lg-20">
                                    <!--begin::Subtitle-->
                                    <h4 class="fw-bolder text-gray-400 mb-6">jejaring Sosial</h4>
                                    <!--end::Subtitle-->
                                    <!--begin::Link-->
                                    <a href="https://www.facebook.com/dikti" target="_blank" class="mb-6">
                                        <img src="assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-2" alt="" />
                                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Facebook</span>
                                    </a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://twitter.com/dikti" target="_blank" class="mb-6">
                                        <img src="assets/media/svg/brand-logos/twitter.svg" class="h-20px me-2" alt="" />
                                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Twitter</span>
                                    </a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://dribbble.com/dikti" target="_blank" class="mb-6">
                                        <img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="h-20px me-2" alt="" />
                                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Dribbble</span>
                                    </a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://www.instagram.com/dikti" target="_blank" class="mb-6">
                                        <img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="h-20px me-2" alt="" />
                                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Instagram</span>
                                    </a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Links-->
                            </div>
                            <!--end::Navs-->
                            <!--begin::Block-->
                           
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Container-->
                <!--begin::Separator-->
                <div class="landing-dark-separator"></div>
                <!--end::Separator-->
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
                        <!--begin::Copyright-->
                        <div class="d-flex align-items-center order-2 order-md-1">
                            <!--begin::Logo-->
                           
                            <!--end::Logo image-->
                            <!--begin::Logo image-->
                            <span class="mx-5 fs-6 fw-bold text-gray-600 pt-1" href="#">Copyright © 2023 Direktorat Pembelajaran dan Kemahasiswaan DIKTIRISTEK</span>
                            <!--end::Logo image-->
                        </div>
                        <!--end::Copyright-->

                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Footer Section-->
        <!--begin::Scrolltop-->
        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
            <span class="svg-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
						<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
					</svg>
				</span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Scrolltop-->
    </div>
    <!--end::Root-->
    <!--end::Main-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/index.html";
    </script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="assets/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
    <script src="assets/plugins/custom/typedjs/typedjs.bundle.js"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="assets/js/custom/landing.js"></script>
    <script src="assets/js/custom/pages/pricing/general.js"></script>
    <!--end::Page Custom Javascript-->
    
    <script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="assets/js/custom/documentation/documentation.js"></script>
    <script src="assets/js/custom/documentation/search.js"></script>
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Javascript-->
    <script>
        /*add accordian js */
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
            panel.style.display = "none";
            } else {
            panel.style.display = "block";
            }
        });
        }

        /*end accordian js */
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('')
                }
            });
            getdata();
        });
        function getdata(){
            // console.log(tahun);
            var table = $('#tabel').DataTable();
            table.destroy();
            var semester = $("#semesterpage").val();
            var table = $('#tabel').DataTable({
            processing: true,
            serverSide: true,
            ajax:{
                "url": "/perguruan-tinggi-landing",
                "dataType": "json",
                "type": "GET",
                "data":{ _token: "E6BfYCRhfVXuLX4evSRaY8mSbPhPAxDKwCEbOhVZ",semester}
            },
            columns: [
                {
                    data: 'DT_RowIndex', 
                    name: 'DT_RowIndex',
                        className: "text-center"
                },
                {data: 'nama', name: 'nama'},
                // {data: 'prodi', name: 'prodi',},
                // {data: 'akre', name: 'akre',},
                {data: 'layak', name: 'layak',},
                // {data: 'belum', name: 'belum',},
                {data: 'action', name: 'action', orderable: false, searchable: false,visible: true,className:"text-center"},
            ],
            language:{paginate:{
                previous:"<i class='mdi mdi-chevron-left'>",
                next:"<i class='mdi mdi-chevron-right'>"
            }},
            drawCallback:function(){
                $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
            },
            "fnCreatedRow": function( nRow, aData, iDataIndex ) {
                $(nRow).attr('id', 'tr'+aData['id']);
                // console.log(aData);
                // console.log(iDataIndex);
            },
            "language": {
                "lengthMenu": "Show _MENU_",
            },
            "dom":
                "<'row'" +
                "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                ">" +
                "<'table-responsive'tr>" +
                "<'row'" +
                "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                ">"
            });
            // table.draw( true );

            $('.dataTables_length').addClass('bs-select');
            $('[data-toggle="select2"]').select2();
            // ("#nik").select2();
        }
        function viewProdi(idSP,idTR,id) {
            var a = $("#btnPT"+id).attr('value');
            if (a == "0"){
                $("#tablePTDiv").removeClass("col-sm-12").addClass("col-sm-7");
                $("#tableProdiDiv").removeClass("d-none");
                getdataProdi(idSP);
                $('tr.bg-success').removeClass('bg-success');
                $('#'+idTR).addClass('bg-success');

                $("button[value='1']").html('<span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Navigation/Angle-double-right.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"/><path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "/></g></svg><!--end::Svg Icon--></span>');
                $("button[value='1']").attr('value','0')

                $("#btnPT"+id).attr('value','1');
                $("#btnPT"+id).html('<span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Navigation/Angle-double-left.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) "/><path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) "/></g></svg><!--end::Svg Icon--></span>');
            }else{
                $("#tablePTDiv").removeClass("col-sm-7").addClass("col-sm-12");
                $("#tableProdiDiv").addClass("d-none");
                $('tr.bg-success').removeClass('bg-success');
                $("#btnPT"+id).attr('value','0');

                $("#btnPT"+id).html('<span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Navigation/Angle-double-right.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"/><path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "/></g></svg><!--end::Svg Icon--></span>');
            }
        }
        function getdataProdi(idSP){
            // console.log(tahun);
            var table = $('#tabelProdi').DataTable();
            table.destroy();
            var table = $('#tabelProdi').DataTable({
            processing: true,
            serverSide: true,
            ajax:{
                "url": "/program-studi-landing",
                "dataType": "json",
                "type": "GET",
                "data":{ _token: "E6BfYCRhfVXuLX4evSRaY8mSbPhPAxDKwCEbOhVZ", idSP}
            },
            columns: [
                {
                    data: 'DT_RowIndex', 
                    name: 'DT_RowIndex',
                        className: "text-center"
                },
                {data: 'nama', name: 'nama'},
                {data: 'layak', name: 'layak',},
                // {data: 'action', name: 'action', orderable: false, searchable: false,visible: true,},
            ],
            language:{paginate:{
                previous:"<i class='mdi mdi-chevron-left'>",
                next:"<i class='mdi mdi-chevron-right'>"
            }},
            drawCallback:function(){
                $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
            },
            "language": {
                "lengthMenu": "Show _MENU_",
            },
            "dom":
                "<'row'" +
                "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                ">" +
                "<'table-responsive'tr>" +
                "<'row'" +
                "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                ">"
            });
            $('.dataTables_length').addClass('bs-select');
            $('[data-toggle="select2"]').select2();
        }
        function cekApi() {
            $.ajax({
            type: "POST",
            url: "https://sierra.kemdikbud.go.id/cek-manAkses",
            data: { _token: "E6BfYCRhfVXuLX4evSRaY8mSbPhPAxDKwCEbOhVZ"},
            dataType:"json",
            success: function(data) {
                if (data.status == true) {
                // getDataAjuan();
                    // var table = $('#tabelAjuan').DataTable();
                    // table.row(this).remove().draw(false);
                    toastr.success("Data berhasil disimpan...", 'Berhasil', {
                        timeOut: 5000
                    });
                    return false;
                } else{
                    toastr.error(data.message, 'Error', {
                        timeOut: 5000
                    });
                    return false;
                }
            },
            });
        }
        
        $(".cari-sertifikat").click(function() {
            var id = $("#idCert").val();
            window.open('verifikasi/'+ id);
        });
        function getProdi() {
            var id = $("#pt").val();
            $.get("https://sierra.kemdikbud.go.id/get-prodi-landing" +'/' + id +'', function (data) {
                
                // const myArray = data.kategori.split("|");
                // const a = [];
                // $("#prodiSelect").select2("destroy").select2();
                // $("#prodiSelect").select2();
                $('#prodiSelect').empty().trigger("change");
                var option = new Option("Pilih Program Studi", '0', false, false);
                $("#prodiSelect").append(option);
                for (let index = 0; index < data.data.length; index++) {
                    // const element = array[index];
                    // console.log(data);
                    option = new Option(data.data[index]['nama']+ " - " + data.data[index]['jenjang'], data.data[index]['id_sms'], false, false);
                        $("#prodiSelect").append(option);
                }
                $("#divProdiSelect").removeClass('d-none');
                // data.forEach(element => {
                //     if (element !== null){
                //         option = new Option(element.nama+ " - " + element.jenjang, element.id_sms, false, false);
                //         $("#prodiSelect").append(option);
                //         $("#divProdiSelect").removeClass('d-none');
                //         // console.log(element);
                //     }
                // });
                // $('#prodiSelect').trigger('change');
            })
        }
        function checkEligible() {
            $("#statusEligible").html('');
            var id = $("#pt").val();
            var idSms = $("#prodiSelect").val();
            var prodiName = $("#prodiSelect option:selected").text();
            // $("#yourdropdownid option:selected").text();
            if (idSms !== null && idSms !== '0'){
                $("#btnEligible").html("<i class='fas fa-sync-alt mt-0 fa-spin'></i> Loading");
                $("#btnEligible").addClass('bg-warning');
                $("#btnEligible").removeClass("btn-outline-white");
                $.get("https://sierra.kemdikbud.go.id/get-eligible-prodi" +'/' + id +'/' + idSms +'/'+ prodiName+'/', function (data) {
                    $("#statusEligible").html(data.message);
                    $("#btnEligible").html('<span class="svg-icon svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path opacity="0.3" d="M3.20001 5.91897L16.9 3.01895C17.4 2.91895 18 3.219 18.1 3.819L19.2 9.01895L3.20001 5.91897Z" fill="currentColor"/><path opacity="0.3" d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21C21.6 10.9189 22 11.3189 22 11.9189V15.9189C22 16.5189 21.6 16.9189 21 16.9189H16C14.3 16.9189 13 15.6189 13 13.9189ZM16 12.4189C15.2 12.4189 14.5 13.1189 14.5 13.9189C14.5 14.7189 15.2 15.4189 16 15.4189C16.8 15.4189 17.5 14.7189 17.5 13.9189C17.5 13.1189 16.8 12.4189 16 12.4189Z" fill="currentColor"/><path d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21V7.91895C21 6.81895 20.1 5.91895 19 5.91895H3C2.4 5.91895 2 6.31895 2 6.91895V20.9189C2 21.5189 2.4 21.9189 3 21.9189H19C20.1 21.9189 21 21.0189 21 19.9189V16.9189H16C14.3 16.9189 13 15.6189 13 13.9189Z" fill="currentColor"/></svg></span><span class="d-flex flex-column align-items-start ms-2"><span class="fs-3 fw-bolder">Cek Kelayakan</span><span class="fs-7">Program Studi</span></span>');
                    $("#btnEligible").removeClass('bg-warning');
                    // $(".btnEligible").removeClass("btn-outline-white");
                    
                    // $("#messageEligible").html(data.message);
                })
            }else{
                toastr.error("Data Perguruan Tinggi dan Program Studi Tidak boleh Kosong", 'Error', {
                    timeOut: 5000
                });
            }
        }
                
    </script>
</body>
<!--end::Body-->


<!-- Mirrored from sierra.kemdikbud.go.id/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 May 2023 10:25:50 GMT -->
</html>