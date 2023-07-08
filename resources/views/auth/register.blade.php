<!DOCTYPE html>
<!-- saved from url=(0074)https://izinkerma.kemdikbud.go.id/akademik/index.php/MainMenu/registration -->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style type="text/css">
        .swal-icon--error {
            border-color: #f27474;
            -webkit-animation: animateErrorIcon .5s;
            animation: animateErrorIcon .5s
        }

        .swal-icon--error__x-mark {
            position: relative;
            display: block;
            -webkit-animation: animateXMark .5s;
            animation: animateXMark .5s
        }

        .swal-icon--error__line {
            position: absolute;
            height: 5px;
            width: 47px;
            background-color: #f27474;
            display: block;
            top: 37px;
            border-radius: 2px
        }

        .swal-icon--error__line--left {
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            left: 17px
        }

        .swal-icon--error__line--right {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            right: 16px
        }

        @-webkit-keyframes animateErrorIcon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0
            }

            to {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                opacity: 1
            }
        }

        @keyframes animateErrorIcon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0
            }

            to {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                opacity: 1
            }
        }

        @-webkit-keyframes animateXMark {
            0% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }

            50% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }

            80% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15);
                margin-top: -6px
            }

            to {
                -webkit-transform: scale(1);
                transform: scale(1);
                margin-top: 0;
                opacity: 1
            }
        }

        @keyframes animateXMark {
            0% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }

            50% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }

            80% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15);
                margin-top: -6px
            }

            to {
                -webkit-transform: scale(1);
                transform: scale(1);
                margin-top: 0;
                opacity: 1
            }
        }

        .swal-icon--warning {
            border-color: #f8bb86;
            -webkit-animation: pulseWarning .75s infinite alternate;
            animation: pulseWarning .75s infinite alternate
        }

        .swal-icon--warning__body {
            width: 5px;
            height: 47px;
            top: 10px;
            border-radius: 2px;
            margin-left: -2px
        }

        .swal-icon--warning__body,
        .swal-icon--warning__dot {
            position: absolute;
            left: 50%;
            background-color: #f8bb86
        }

        .swal-icon--warning__dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            margin-left: -4px;
            bottom: -11px
        }

        @-webkit-keyframes pulseWarning {
            0% {
                border-color: #f8d486
            }

            to {
                border-color: #f8bb86
            }
        }

        @keyframes pulseWarning {
            0% {
                border-color: #f8d486
            }

            to {
                border-color: #f8bb86
            }
        }

        .swal-icon--success {
            border-color: #a5dc86
        }

        .swal-icon--success:after,
        .swal-icon--success:before {
            content: "";
            border-radius: 50%;
            position: absolute;
            width: 60px;
            height: 120px;
            background: #fff;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg)
        }

        .swal-icon--success:before {
            border-radius: 120px 0 0 120px;
            top: -7px;
            left: -33px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 60px 60px;
            transform-origin: 60px 60px
        }

        .swal-icon--success:after {
            border-radius: 0 120px 120px 0;
            top: -11px;
            left: 30px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 0 60px;
            transform-origin: 0 60px;
            -webkit-animation: rotatePlaceholder 4.25s ease-in;
            animation: rotatePlaceholder 4.25s ease-in
        }

        .swal-icon--success__ring {
            width: 80px;
            height: 80px;
            border: 4px solid hsla(98, 55%, 69%, .2);
            border-radius: 50%;
            box-sizing: content-box;
            position: absolute;
            left: -4px;
            top: -4px;
            z-index: 2
        }

        .swal-icon--success__hide-corners {
            width: 5px;
            height: 90px;
            background-color: #fff;
            padding: 1px;
            position: absolute;
            left: 28px;
            top: 8px;
            z-index: 1;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        .swal-icon--success__line {
            height: 5px;
            background-color: #a5dc86;
            display: block;
            border-radius: 2px;
            position: absolute;
            z-index: 2
        }

        .swal-icon--success__line--tip {
            width: 25px;
            left: 14px;
            top: 46px;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            -webkit-animation: animateSuccessTip .75s;
            animation: animateSuccessTip .75s
        }

        .swal-icon--success__line--long {
            width: 47px;
            right: 8px;
            top: 38px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-animation: animateSuccessLong .75s;
            animation: animateSuccessLong .75s
        }

        @-webkit-keyframes rotatePlaceholder {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }

            to {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
        }

        @keyframes rotatePlaceholder {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }

            to {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
        }

        @-webkit-keyframes animateSuccessTip {
            0% {
                width: 0;
                left: 1px;
                top: 19px
            }

            54% {
                width: 0;
                left: 1px;
                top: 19px
            }

            70% {
                width: 50px;
                left: -8px;
                top: 37px
            }

            84% {
                width: 17px;
                left: 21px;
                top: 48px
            }

            to {
                width: 25px;
                left: 14px;
                top: 45px
            }
        }

        @keyframes animateSuccessTip {
            0% {
                width: 0;
                left: 1px;
                top: 19px
            }

            54% {
                width: 0;
                left: 1px;
                top: 19px
            }

            70% {
                width: 50px;
                left: -8px;
                top: 37px
            }

            84% {
                width: 17px;
                left: 21px;
                top: 48px
            }

            to {
                width: 25px;
                left: 14px;
                top: 45px
            }
        }

        @-webkit-keyframes animateSuccessLong {
            0% {
                width: 0;
                right: 46px;
                top: 54px
            }

            65% {
                width: 0;
                right: 46px;
                top: 54px
            }

            84% {
                width: 55px;
                right: 0;
                top: 35px
            }

            to {
                width: 47px;
                right: 8px;
                top: 38px
            }
        }

        @keyframes animateSuccessLong {
            0% {
                width: 0;
                right: 46px;
                top: 54px
            }

            65% {
                width: 0;
                right: 46px;
                top: 54px
            }

            84% {
                width: 55px;
                right: 0;
                top: 35px
            }

            to {
                width: 47px;
                right: 8px;
                top: 38px
            }
        }

        .swal-icon--info {
            border-color: #c9dae1
        }

        .swal-icon--info:before {
            width: 5px;
            height: 29px;
            bottom: 17px;
            border-radius: 2px;
            margin-left: -2px
        }

        .swal-icon--info:after,
        .swal-icon--info:before {
            content: "";
            position: absolute;
            left: 50%;
            background-color: #c9dae1
        }

        .swal-icon--info:after {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            margin-left: -3px;
            top: 19px
        }

        .swal-icon {
            width: 80px;
            height: 80px;
            border-width: 4px;
            border-style: solid;
            border-radius: 50%;
            padding: 0;
            position: relative;
            box-sizing: content-box;
            margin: 20px auto
        }

        .swal-icon:first-child {
            margin-top: 32px
        }

        .swal-icon--custom {
            width: auto;
            height: auto;
            max-width: 100%;
            border: none;
            border-radius: 0
        }

        .swal-icon img {
            max-width: 100%;
            max-height: 100%
        }

        .swal-title {
            color: rgba(0, 0, 0, .65);
            font-weight: 600;
            text-transform: none;
            position: relative;
            display: block;
            padding: 13px 16px;
            font-size: 27px;
            line-height: normal;
            text-align: center;
            margin-bottom: 0
        }

        .swal-title:first-child {
            margin-top: 26px
        }

        .swal-title:not(:first-child) {
            padding-bottom: 0
        }

        .swal-title:not(:last-child) {
            margin-bottom: 13px
        }

        .swal-text {
            font-size: 16px;
            position: relative;
            float: none;
            line-height: normal;
            vertical-align: top;
            text-align: left;
            display: inline-block;
            margin: 0;
            padding: 0 10px;
            font-weight: 400;
            color: rgba(0, 0, 0, .64);
            max-width: calc(100% - 20px);
            overflow-wrap: break-word;
            box-sizing: border-box
        }

        .swal-text:first-child {
            margin-top: 45px
        }

        .swal-text:last-child {
            margin-bottom: 45px
        }

        .swal-footer {
            text-align: right;
            padding-top: 13px;
            margin-top: 13px;
            padding: 13px 16px;
            border-radius: inherit;
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        .swal-button-container {
            margin: 5px;
            display: inline-block;
            position: relative
        }

        .swal-button {
            background-color: #7cd1f9;
            color: #fff;
            border: none;
            box-shadow: none;
            border-radius: 5px;
            font-weight: 600;
            font-size: 14px;
            padding: 10px 24px;
            margin: 0;
            cursor: pointer
        }

        .swal-button:not([disabled]):hover {
            background-color: #78cbf2
        }

        .swal-button:active {
            background-color: #70bce0
        }

        .swal-button:focus {
            outline: none;
            box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(43, 114, 165, .29)
        }

        .swal-button[disabled] {
            opacity: .5;
            cursor: default
        }

        .swal-button::-moz-focus-inner {
            border: 0
        }

        .swal-button--cancel {
            color: #555;
            background-color: #efefef
        }

        .swal-button--cancel:not([disabled]):hover {
            background-color: #e8e8e8
        }

        .swal-button--cancel:active {
            background-color: #d7d7d7
        }

        .swal-button--cancel:focus {
            box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(116, 136, 150, .29)
        }

        .swal-button--danger {
            background-color: #e64942
        }

        .swal-button--danger:not([disabled]):hover {
            background-color: #df4740
        }

        .swal-button--danger:active {
            background-color: #cf423b
        }

        .swal-button--danger:focus {
            box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(165, 43, 43, .29)
        }

        .swal-content {
            padding: 0 20px;
            margin-top: 20px;
            font-size: medium
        }

        .swal-content:last-child {
            margin-bottom: 20px
        }

        .swal-content__input,
        .swal-content__textarea {
            -webkit-appearance: none;
            background-color: #fff;
            border: none;
            font-size: 14px;
            display: block;
            box-sizing: border-box;
            width: 100%;
            border: 1px solid rgba(0, 0, 0, .14);
            padding: 10px 13px;
            border-radius: 2px;
            transition: border-color .2s
        }

        .swal-content__input:focus,
        .swal-content__textarea:focus {
            outline: none;
            border-color: #6db8ff
        }

        .swal-content__textarea {
            resize: vertical
        }

        .swal-button--loading {
            color: transparent
        }

        .swal-button--loading~.swal-button__loader {
            opacity: 1
        }

        .swal-button__loader {
            position: absolute;
            height: auto;
            width: 43px;
            z-index: 2;
            left: 50%;
            top: 50%;
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
            text-align: center;
            pointer-events: none;
            opacity: 0
        }

        .swal-button__loader div {
            display: inline-block;
            float: none;
            vertical-align: baseline;
            width: 9px;
            height: 9px;
            padding: 0;
            border: none;
            margin: 2px;
            opacity: .4;
            border-radius: 7px;
            background-color: hsla(0, 0%, 100%, .9);
            transition: background .2s;
            -webkit-animation: swal-loading-anim 1s infinite;
            animation: swal-loading-anim 1s infinite
        }

        .swal-button__loader div:nth-child(3n+2) {
            -webkit-animation-delay: .15s;
            animation-delay: .15s
        }

        .swal-button__loader div:nth-child(3n+3) {
            -webkit-animation-delay: .3s;
            animation-delay: .3s
        }

        @-webkit-keyframes swal-loading-anim {
            0% {
                opacity: .4
            }

            20% {
                opacity: .4
            }

            50% {
                opacity: 1
            }

            to {
                opacity: .4
            }
        }

        @keyframes swal-loading-anim {
            0% {
                opacity: .4
            }

            20% {
                opacity: .4
            }

            50% {
                opacity: 1
            }

            to {
                opacity: .4
            }
        }

        .swal-overlay {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            text-align: center;
            font-size: 0;
            overflow-y: auto;
            background-color: rgba(0, 0, 0, .4);
            z-index: 10000;
            pointer-events: none;
            opacity: 0;
            transition: opacity .3s
        }

        .swal-overlay:before {
            content: " ";
            display: inline-block;
            vertical-align: middle;
            height: 100%
        }

        .swal-overlay--show-modal {
            opacity: 1;
            pointer-events: auto
        }

        .swal-overlay--show-modal .swal-modal {
            opacity: 1;
            pointer-events: auto;
            box-sizing: border-box;
            -webkit-animation: showSweetAlert .3s;
            animation: showSweetAlert .3s;
            will-change: transform
        }

        .swal-modal {
            width: 478px;
            opacity: 0;
            pointer-events: none;
            background-color: #fff;
            text-align: center;
            border-radius: 5px;
            position: static;
            margin: 20px auto;
            display: inline-block;
            vertical-align: middle;
            -webkit-transform: scale(1);
            transform: scale(1);
            -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
            z-index: 10001;
            transition: opacity .2s, -webkit-transform .3s;
            transition: transform .3s, opacity .2s;
            transition: transform .3s, opacity .2s, -webkit-transform .3s
        }

        @media (max-width:500px) {
            .swal-modal {
                width: calc(100% - 20px)
            }
        }

        @-webkit-keyframes showSweetAlert {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            1% {
                -webkit-transform: scale(.5);
                transform: scale(.5)
            }

            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05)
            }

            80% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }

            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @keyframes showSweetAlert {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            1% {
                -webkit-transform: scale(.5);
                transform: scale(.5)
            }

            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05)
            }

            80% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }

            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }
    </style>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Registration | Dikti</title>
    <!-- Favicon -->

    <link href="{{ asset('Login_Dikti_files/logo_ristekdikti.png') }}" rel="icon" type="image/png">
    <link href="{{ asset('Login_Dikti_files/css') }}" rel="stylesheet">
    <link href="{{ asset('Login_Dikti_files/nucleo.css') }}" rel="stylesheet">
    <link href="{{ asset('Login_Dikti_files/all.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{asset('Login_Dikti_files/argon.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('Login_Dikti_files/select2.min.css') }}">


</head>

<body class="bg-default">
    <div class="main-content">
        <!-- Navbar -->
        <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
            <div class="container px-4">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar-collapse-main">
                    <!-- Collapse header -->
                    <div class="navbar-collapse-header d-md-none">
                        <div class="row">
                            <div class="col-6 collapse-brand">
                                <a href="">
                                    <img src="{{ asset('Login_Dikti_files/logo_ristekdikti.png') }}">
                                </a>
                            </div>
                            <div class="col-6 collapse-close">
                                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Navbar items -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="">
                                <i class="fas fa-folder"></i>
                                <span class="nav-link-inner--text">Pelaksanaan Kerma</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="">
                                <i class="fas fa-th-list"></i>
                                <span class="nav-link-inner--text">Daftar Izin Kerma</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="">
                                <i class="fas fa-user"></i>
                                <span class="nav-link-inner--text text-yellow">Buat Akun Baru</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="{{ route('login') }}">
                                <i class="fas fa-key"></i>
                                <span class="nav-link-inner--text">Login</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="header bg-gradient-light py-7 py-lg-8">
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-6">
                            <img style="margin-bottom: 10px;" src="{{ asset('Login_Dikti_files/logo_ristekdikti.png') }}" width="130" height="120">
                            <p class="text-lead h2 text-black pb-2 pt-2">Direktorat Jenderal Pendidikan Tinggi, Riset dan Teknologi</p>
                            <h2 class="text-white">Layanan Izin Kerja Sama<br>Perguruan Tinggi Akademik</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container mt--9 pb-5">
            <!-- Table -->

            <div class="col-md-12">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-center text-muted mb-4">
                                    <large class="h3">Silahkan isi data di bawah ini untuk membuat akun</large>
                                </div>
                                <form role="form" id="regis_form" method="post" action="{{ route('register.simpan') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <small class="h4"> Kode Universitas<em style="color:red;">*</em></small>
                                        <div class="input-group input-group-alternative mb-3">
                                            <div class="input-group-prepend mt-2 mb-1">
                                                <span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
                                            </div>
                                            <br>
                                            <select class="form-control" name="id_universitas">
                                                <option value="" selected disabled hidden>--Pilih Universitas--</option>
                                                @foreach($Universitas as $row)
                                                <option value="{{ $row->id }}">{{$row->nama_universitas}}</option>
                                                @endforeach
                                            </select>
                                            <input class="form-control isian" id="kode_univ" type="hidden" name="kode_univ">
                                        </div>
                                    </div>

                                    <!--
                                    <div class="form-group div-nama-univ" style="display: none;">
                                        <small class="h4"> Nama Universitas<em style="color:red;">*</em></small>
                                        <div class="input-group input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-building"></i></span>
                                            </div>
                                            <input class="form-control isian" id="nama_univ" name="nama_univ" placeholder="Universitas Telkom" type="text" readonly="">
                                        </div>
                                    </div>
                                     -->

                                    <div class="form-group">
                                        <small class="h4"> Nama Pengguna<em style="color:red;">*</em></small>
                                        <div class="input-group input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input class="form-control isian" placeholder="Saya" type="text" name="nama">
                                        </div>
                                    </div>
                                    
                                  <!--
                                    <div class="form-group">
                                        <small class="h4"> Nama Penanggung Jawab<em style="color:red;">*</em></small>
                                        <div class="input-group input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input class="form-control isian" placeholder="Penanggungjawab" type="text" name="namapj">
                                        </div>
                                    </div>
                                  -->
                                    <div class="form-group">
                                        <small class="h4"> Email<em style="color:red;">*</em></small>
                                        <div class="input-group input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                            </div>
                                            <input class="form-control" id="email" style="text-transform: lowercase" placeholder="user@mail.com" name="email" maxlength="150" type="email">
                                            <input type="hidden" id="status_email" class="isian">
                                        </div>
                                        <small id="message2"></small>
                                    </div>

                                    <div class="form-group">
                                        <small class="h4"> Password<em style="color:red;">*</em></small>
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
                                            </div>
                                            <input class="form-control isian" id="password" placeholder="*****" maxlength="150" name="password" type="password">
                                            <div class="input-group-prepend">
                                                <a class="input-group-text" onclick="show_password(this)" gofirst="password" gosecond="icon_password1"><i id="icon_password1" class="fas fa-eye-slash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lihat password"></i></a>
                                            </div>
                                        </div>
                                        <small id="rule_1_not" style="color:red;">* Password Strength: Weak</small>
                                        <small id="rule_1_ok" style="color:green; display: none;">* Password Strength: Strong</small>
                                        <br><small id="rule_2" style="color:red;">* Minimal 8 karakter</small><br>
                                        <small id="rule_3" style="color:red;">* Mengandung angka, simbol atau huruf kapital</small>
                                    </div>
                                    <!--
                                    <div class="form-group">
                                        <small class="h4">Confirm Password<em style="color:red;">*</em></small>
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
                                            </div>
                                            <input class="form-control isian" id="confirm_password" placeholder="*****" maxlength="150" name="confirm_password" type="password">
                                            <div class="input-group-prepend">
                                                <a class="input-group-text" onclick="show_password(this)" gofirst="confirm_password" gosecond="icon_password2"><i id="icon_password2" class="fas fa-eye-slash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lihat password"></i></a>
                                            </div>
                                        </div>
                                        <small id="message"></small>
                                    </div>

                                    <div class="form-group">
                                        <small class="h4"> No. HP<em style="color:red;">*</em></small>
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone-square"></i></span>
                                            </div>
                                            <input class="form-control isian" placeholder="08xxxxxxxxxx" name="kontak" oninput="validate_number(this)" maxlength="15" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <small class="h4"> Alamat Pengguna<em style="color:red;">*</em></small>
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-map-marker"></i></span>
                                            </div>
                                            <textarea class="form-control isian" name="alamat"></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <small class="h4"> Upload Surat Permohonan dari PT <span class="text-primary font-weight-700">(PDF, Max 2 MB)</span><em style="color:red;">*</em></small>
                                        <br>
                                        <small>Download template surat:&nbsp;<a target="_blank" href="https://izinkerma.kemdikbud.go.id/bs//izinkerma/template/Format_Surat_Permohonan_Pembuatan_dan_Pengaktifan_Akun_Izin_Kerma.pdf">Download</a></small>
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-cloud-upload-alt"></i></span>
                                            </div>
                                            <input class="form-control isian" placeholder="file" type="file" name="file_surat">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <small class="h4"> Berapa jumlah <span class="text-danger font-weight-700" style="font-size:200%;" id="ask_captcha">5 + 3</span> ?<em style="color:red;">*</em></small>
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-check"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Masukkan jawaban anda" type="text" name="answer_captcha" id="answer_captcha" oninput="validate_number(this)">
                                            <input type="button" class="btn btn-success" id="submit_captcha" name="submit_captcha" value="Send" data-toggle="tooltip" data-placement="top" title="" data-original-title="Kirim jawaban captcha">
                                            <input type="hidden" class="isian" id="status_captcha">
                                        </div>
                                    </div>
                                    -->

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary mt-4" id="submit_form" data-toggle="tooltip" data-placement="top" title="" data-original-title="Isi semua field terlebih dahulu">Buat Akun</button>
                                    </div>
                                </form>
                            </div>

                            <div class="col-md-1 border-right">
                            </div>

                            <div class="col-md-5 justify-content-center ">
                                <img class="probis" src=" {{ asset('Login_Dikti_files/Probis_Registrasi.jpg') }}" style="max-width: 90%; float:right; height: auto; position: relative; margin: auto; top: 0; right: 0; bottom: 0;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="py-5">
            <div class="container">
                <div class="row align-items-center justify-content-xl-between">
                    <div class="col-xl-6">
                        <div class="copyright text-center text-xl-left text-muted">
                            © 2023 Direktorat Jenderal Pendidikan Tinggi, Riset dan Teknologi </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="copyright text-center text-xl-right text-muted">
                            <h5 class="text-white">Informasi kontak yang bisa dihubungi.</h5>
                            <p class="text-white text-xl-right"><span class="u-icon u-text-palette-4-base"><i class="fas fa-envelope"></i></span>&nbsp;&nbsp;izinkerma@kemdikbud.go.id</p>
                            <!-- <p class="text-muted text-xl-right"><span class="u-icon u-text-palette-4-base"><i class="ni ni-mobile-button"></i></span>&nbsp;&nbsp;+62 813-8707-9911</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="modal fade" id="loading_bar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" style="width:100%;">
            <div class="modal-content" style="width:100%;">
                <div class="modal-body loading-body">

                </div>
            </div>
        </div>
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->

    <!--
  <script src="./Registration _ Dikti_files/jquery.min.js.download"></script>
  <script src="./Registration _ Dikti_files/bootstrap.bundle.min.js.download"></script>
  <script src="./Registration _ Dikti_files/argon.js.download"></script>
  <script type="text/javascript" src="./Registration _ Dikti_files/sweetalert.js.download"></script>

  <script type="text/javascript" src="./Registration _ Dikti_files/select2.min.js.download"></script>
  <script src="./Registration _ Dikti_files/jquery.form.min.js.download"></script>
  
  -->

    <script src="{{ asset('Login_Dikti_files/jquery.min.js.download') }}"></script>
    <script src="{{ asset('Login_Dikti_files/bootstrap.bundle.min.js.download') }}"></script>
    <script type="text/javascript" src="{{ asset('Login_Dikti_files/sweetalert.js.download') }}"></script>
    <script src="{{ asset('Login_Dikti_files/argon.js.download') }}"></script>
    <script type="text/javascript" src="{{ asset('Login_Dikti_files/select2.min.js.download') }}"></script>
    <script src="{{ asset('Login_Dikti_files/jquery.form.min.js.download') }}"></script>

    <!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script> -->

    <script type="text/javascript">
        $(document).ready(function() {
            $(".div-nama-univ").hide();
            // google.maps.event.addDomListener(window, 'load', initialize);

            //TOOLTIP
            $('[data-toggle="tooltip"]').tooltip();

            $("#list_univ").select2({
                width: '90%',
                matcher: function(params, data) {
                    if ($.trim(params.term) === '') {
                        return data;
                    }
                    if (typeof data.text === 'undefined') {
                        return null;
                    }

                    var q = params.term.toLowerCase();
                    if (data.text.toLowerCase().indexOf(q) > -1 || data.id.toLowerCase().indexOf(q) > -1) {
                        return $.extend({}, data, true);
                    }
                    return null;
                }
            });

            $(".select2-container").addClass("mt-2");

            //CAPTCHA
            refresh_captcha();
            $("#submit_captcha").click(function() {
                if (eval($("#ask_captcha").text()) == $("#answer_captcha").val()) {
                    swal("Ok! You are human!");
                    $("#status_captcha").val('OK');
                } else {
                    $("#answer_captcha").val('');
                    $("#status_captcha").val('');
                    swal("Error");
                }
                validate_form();
            });

            $('#password, #confirm_password').bind('keyup', function(e) {
                validateSpace($('#password'));
                validateSpace($('#confirm_password'));
                if (check_strength($('#password').val())) {
                    if ($('#password').val() == $('#confirm_password').val()) {
                        $('#message').html('Matching').css('color', 'green');
                        validate_form();
                    } else {
                        $('#message').html('Not Matching').css('color', 'red');
                        $("#submit_form").attr('disabled', 'disabled');
                        $('#submit_form').tooltip('enable');
                    }
                } else {
                    $("#submit_form").attr('disabled', 'disabled');
                    $('#submit_form').tooltip('enable');
                }

            });

            //VALIDATE EMAIL
            $('#email').bind('input', function() {
                validate_email(true);
            });

            $("#list_univ").change(function() {
                if ($(this).val() == '') {
                    $(".div-nama-univ").hide();
                } else {
                    var tamp = $("#list_univ option:selected").text();
                    var datap = tamp.split(" - ");
                    var kodeuniv = datap[0];
                    validateUniv(kodeuniv);
                }
            });

            $('#regis_form [type="file"]').bind('change', function(e) {
                var ext = $(this).val().split('.').pop().toLowerCase();
                if ($.inArray(ext, ['pdf']) == -1) {
                    swal("Gagal", "Mohon maaf format file yang diperbolehkan hanya pdf!", "error");
                    $(this).val('');
                } else {
                    var FileSize = this.files[0].size / 1024 / 1024;
                    if (FileSize > 2) {
                        swal("Gagal", "Mohon maaf ukuran file terlalu besar! Maks 2Mb", "error");
                        $(this).val('');
                    }
                }
                validate_form();
                e.stopImmediatePropagation();
            });

            //VALIDATION FORM
            $('#regis_form .isian:not(#email)').bind('change', function(e) {
                validate_form();
            });

            $('#regis_form #answer_captcha').bind('input', function(e) {
                if ($(this).val() == '') {
                    $("#status_captcha").val('');
                }
                validate_form();
            });

            $('#regis_form .isian:not(#email)').bind('input', function(e) {
                validate_form();
            });

            $("#submit_form").click(function(e) {
                //alert();
                $("#submit_form").hide(); // $("#submit_form").attr('disabled','disabled');
                // // var me = $(this);
                // // if ( me.data('requestRunning') ) {
                // //   return false;
                // // }
                // // me.data('requestRunning', true);
                //e.preventDefault();
                initial_loading();
                $("#loading_bar").modal('show');
                xhr = new window.XMLHttpRequest();
                $('#regis_form').ajaxForm({
                    xhr: function() {
                        //Upload progress, request sending to server
                        xhr.upload.addEventListener("progress", function(evt) {
                            console.log("in Upload progress");
                            console.log("Upload Done");
                        }, false);
                        //Download progress, waiting for response from server
                        xhr.addEventListener("progress", function(e) {
                            console.log("in Download progress");
                            e.preventDefault();
                            if (e.lengthComputable) {
                                var percentComplete = parseInt((e.loaded / e.total * 100), 10);
                                $("#div-progress")
                                    .css("width", percentComplete + "%")
                                    .attr("aria-valuenow", percentComplete);
                                $("#current-progress").text(percentComplete + "%");
                                progress(percentComplete, 'start');
                            } else {
                                $("#div-progress")
                                    .css("width", "100%")
                                    .attr("aria-valuenow", 100);
                                $("#current-progress").text("100%");
                                progress(100, 'start');
                            }
                        }, false);
                        xhr.addEventListener("abort", function(evt) {
                            $("#loading_bar").modal('hide');
                            console.log("The transfer has been canceled by the user.");
                            idx++;
                        }, false);
                        return xhr;
                    },
                    beforeSend: function() {

                    },
                    complete: function(data) {
                        if ($("#div-progress").attr('aria-valuenow') == 100) {
                            setTimeout(function() {
                                $("#loading_bar").modal('hide');
                                if (data.responseText == 'SUCCESS') {
                                    swal("Berhasil", "Data registrasi berhasil ditambah. Data akan diverifikasi dahulu oleh admin. Silakan menunggu, hasil verifikasi akan dikirim melalui email. Terimakasih.", "success")
                                        .then((value) => {
                                            window.open("{{ route('login') }}", '_self'); //location.reload();
                                        });
                                    //$('#regis_form')[0].reset();
                                } else {
                                    swal("Gagal", "Data registrasi gagal ditambah!", "error");
                                    refresh_captcha();
                                    $("#submit_form").show();
                                }
                            }, 1000);
                        }
                        //me.data('requestRunning', false);                   
                    }
                });
            });
        });

        function refresh_captcha() {
            var n1 = Math.round(Math.random() * 10 + 1);
            var n2 = Math.round(Math.random() * 10 + 1);
            $("#ask_captcha").text(n1 + " + " + n2);
        }

        function validate_number(root) {
            var reet = root.value;
            var arr1 = reet.length;
            var ruut = reet.charAt(arr1 - 1);
            if (reet.length > 0) {
                var regex = /[0-9]|\./;
                if (!ruut.match(regex)) {
                    var reet = reet.slice(0, -1);
                    $(root).val(reet);
                }
            }
        }

        function validate_form() {
            //VALIDATION FORM
            var $nonempty = $('.isian').filter(function() {
                return this.value != ''
            });
            var count = $('.isian').length;
            if ($nonempty.length == count) {
                $("#submit_form").removeAttr('disabled');
                $('#submit_form').tooltip('disable');
            } else {
                $("#submit_form").attr('disabled', 'disabled');
                $('#submit_form').tooltip('enable');
            }
            console.log($nonempty.length + ' ' + count);
        }

        function validate_email(status) {
            const $result = $("#message2");
            const email = $("#email").val();
            $result.text("");

            const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            //return re.test(email);
            if (re.test(email)) {
                $result.text("Email is valid");
                $result.css("color", "green");
                $("#status_email").val('ok');
                if (status) {
                    validate_user(email);
                }

                validate_form();
            } else {
                $result.text("Email is not valid");
                $result.css("color", "red");
                $("#status_email").val('');
                $("#submit_form").attr('disabled', 'disabled');
                $('#submit_form').tooltip('enable');
            }
            return false;
        }

        function show_password(root) {
            var gofirst = root.getAttribute('gofirst');
            var gosecond = root.getAttribute('gosecond');
            //console.log(gofirst+" "+gosecond);
            if ($("#" + gofirst).attr("type") === "password") {
                $("#" + gofirst).attr("type", "text");
                $("#" + gosecond).attr('class', 'fas fa-eye');
                $("#" + gosecond).tooltip('disable');
            } else {
                $("#" + gofirst).attr("type", "password");
                $("#" + gosecond).attr('class', 'fas fa-eye-slash');
                $("#" + gosecond).tooltip('enable');
            }
        }

        function progress(current_progress, status) {
            if (status == 'stop') {
                return false;
            } else {
                var interval = setInterval(function() {
                    if ($("#div-progress").attr('aria-valuenow') == 100) {
                        clearInterval(interval);
                        return;
                    } else {
                        $("#div-progress")
                            .css("width", current_progress + "%")
                            .attr("aria-valuenow", current_progress);
                        $("#current-progress").text(current_progress + "%");
                        if (current_progress < 100) {
                            current_progress += 1;
                        }
                    }
                }, 1000);
            }
        }

        function initial_loading() {
            var body = '<div class="progress-wrapper">' +
                '<div class="progress-info">' +
                '<div class="progress-label">' +
                '<span>Loading</span>' +
                '</div>' +
                '<div class="progress-percentage">' +
                '<span id="current-progress">0%</span>' +
                '</div>' +
                '</div>' +
                '<div class="progress">' +
                '<div id="div-progress" class="progress-bar bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                '</div>' +
                '</div>';
            $(".loading-body").empty();
            $(".loading-body").append(body);
        }

        function validate_user(email) {
            $.ajax({
                url: "https://izinkerma.kemdikbud.go.id/akademik/index.php/MainMenu/validateUserEmail",
                type: "POST",
                data: {
                    email: email
                },
                success: function(data) {
                    var datax = JSON.parse(data);
                    //console.log(datax);
                    if (datax.status == 'SUCCESS') {
                        $("#email").val('');
                        swal("Gagal", "Email sudah terpakai, mohon untuk mengganti email", "error");
                    }
                    validate_email(false);
                }
            });
        }

        function check_strength(password) {
            var count_true = 0;
            // rule 2 check
            if (password.length >= 8) {
                $("#rule_2_icon").addClass('ni-check-bold').removeClass('ni-fat-remove');
                $("#rule_2").css("color", "green");
                count_true++;
            } else {
                $("#rule_2_icon").addClass('ni-fat-remove').removeClass('ni-fat-bold');
                $("#rule_2").css("color", "red");
                count_true--;
            }
            // rule 3 check
            var hasSymbol = /[|\\/~^:,;?!&%$@*+]/;
            var hasNumber = /\d/;
            var hasUppercase = /[A-Z]/;
            if (hasNumber.test(password) || hasSymbol.test(password) || hasUppercase.test(password)) {
                $("#rule_3_icon").addClass('ni-check-bold').removeClass('ni-fat-remove');
                $("#rule_3").css("color", "green");
                count_true++;
            } else {
                $("#rule_3_icon").addClass('ni-fat-remove').removeClass('ni-fat-bold');
                $("#rule_3").css("color", "red");
                count_true--;
            }
            // rule 1 check
            if (count_true == 2) {
                $("#rule_1_not").hide();
                $("#rule_1_ok").show();
                return true;
            } else {
                $("#rule_1_ok").hide();
                $("#rule_1_not").show();
                return false;
            }
        }

        function validateSpace(root) {
            var reet = root.val();
            var arr1 = reet.length;
            var ruut = reet.charAt(arr1 - 1);
            if (reet.length > 0) {
                var regex = /\s/g;
                if (ruut.match(regex)) {
                    var reet = reet.slice(0, -1);
                    root.val(reet);
                }
            }
        }

        function validateUniv(kodeuniv) {
            $.ajax({
                url: "https://izinkerma.kemdikbud.go.id/akademik/index.php/MainMenu/validateUniv",
                type: "POST",
                data: {
                    kodeuniv: kodeuniv
                },
                success: function(data) {
                    var datax = JSON.parse(data);
                    if (datax == 'FAILED') {
                        $("#list_univ").val('');
                        $("#kode_univ").val('');
                        $("#nama_univ").val('');
                        swal("Status perguruan tinggi yang anda pilih tidak aktif", {
                            icon: "error",
                        });
                        $('.isian:not(#list_univ)').attr('disabled', 'disabled');
                        $('#answer_captcha').attr('disabled', 'disabled');
                        $('#submit_captcha').attr('disabled', 'disabled');
                        $('#email').attr('disabled', 'disabled');
                        validate_form();
                    } else {
                        validateUser(kodeuniv);
                    }
                }
            });
        }

        function validateUser(kodeuniv) {
            $.ajax({
                url: "https://izinkerma.kemdikbud.go.id/akademik/index.php/MainMenu/validateUserMapping",
                type: "POST",
                data: {
                    kodeuniv: kodeuniv
                },
                success: function(data) {
                    var datax = JSON.parse(data);
                    if (datax == 'SUCCESS') {
                        $(".div-nama-univ").show();
                        $("#nama_univ").val($("#list_univ").val());
                        $("#kode_univ").val(kodeuniv);
                        $('.isian').removeAttr('disabled');
                        $('#answer_captcha').removeAttr('disabled');
                        $('#submit_captcha').removeAttr('disabled');
                        $('#email').removeAttr('disabled');
                    } else {
                        $("#list_univ").val('');
                        $("#kode_univ").val('');
                        $("#nama_univ").val('');
                        $(".div-nama-univ").hide();
                        swal("Gagal! Mohon maaf penanggungjawab/pengguna aktif dari universitas ini sudah ada", {
                            icon: "error",
                        });
                        $('.isian:not(#list_univ)').attr('disabled', 'disabled');
                        $('#answer_captcha').attr('disabled', 'disabled');
                        $('#submit_captcha').attr('disabled', 'disabled');
                        $('#email').attr('disabled', 'disabled');
                    }
                    validate_form();
                }
            });
        }
    </script>
</body>

</html>