<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style type="text/css">
.swal-icon--error{border-color:#f27474;-webkit-animation:animateErrorIcon .5s;animation:animateErrorIcon .5s}.swal-icon--error__x-mark{position:relative;display:block;-webkit-animation:animateXMark .5s;animation:animateXMark .5s}.swal-icon--error__line{position:absolute;height:5px;width:47px;background-color:#f27474;display:block;top:37px;border-radius:2px}.swal-icon--error__line--left{-webkit-transform:rotate(45deg);transform:rotate(45deg);left:17px}.swal-icon--error__line--right{-webkit-transform:rotate(-45deg);transform:rotate(-45deg);right:16px}@-webkit-keyframes animateErrorIcon{0%{-webkit-transform:rotateX(100deg);transform:rotateX(100deg);opacity:0}to{-webkit-transform:rotateX(0deg);transform:rotateX(0deg);opacity:1}}@keyframes animateErrorIcon{0%{-webkit-transform:rotateX(100deg);transform:rotateX(100deg);opacity:0}to{-webkit-transform:rotateX(0deg);transform:rotateX(0deg);opacity:1}}@-webkit-keyframes animateXMark{0%{-webkit-transform:scale(.4);transform:scale(.4);margin-top:26px;opacity:0}50%{-webkit-transform:scale(.4);transform:scale(.4);margin-top:26px;opacity:0}80%{-webkit-transform:scale(1.15);transform:scale(1.15);margin-top:-6px}to{-webkit-transform:scale(1);transform:scale(1);margin-top:0;opacity:1}}@keyframes animateXMark{0%{-webkit-transform:scale(.4);transform:scale(.4);margin-top:26px;opacity:0}50%{-webkit-transform:scale(.4);transform:scale(.4);margin-top:26px;opacity:0}80%{-webkit-transform:scale(1.15);transform:scale(1.15);margin-top:-6px}to{-webkit-transform:scale(1);transform:scale(1);margin-top:0;opacity:1}}.swal-icon--warning{border-color:#f8bb86;-webkit-animation:pulseWarning .75s infinite alternate;animation:pulseWarning .75s infinite alternate}.swal-icon--warning__body{width:5px;height:47px;top:10px;border-radius:2px;margin-left:-2px}.swal-icon--warning__body,.swal-icon--warning__dot{position:absolute;left:50%;background-color:#f8bb86}.swal-icon--warning__dot{width:7px;height:7px;border-radius:50%;margin-left:-4px;bottom:-11px}@-webkit-keyframes pulseWarning{0%{border-color:#f8d486}to{border-color:#f8bb86}}@keyframes pulseWarning{0%{border-color:#f8d486}to{border-color:#f8bb86}}.swal-icon--success{border-color:#a5dc86}.swal-icon--success:after,.swal-icon--success:before{content:"";border-radius:50%;position:absolute;width:60px;height:120px;background:#fff;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.swal-icon--success:before{border-radius:120px 0 0 120px;top:-7px;left:-33px;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:60px 60px;transform-origin:60px 60px}.swal-icon--success:after{border-radius:0 120px 120px 0;top:-11px;left:30px;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:0 60px;transform-origin:0 60px;-webkit-animation:rotatePlaceholder 4.25s ease-in;animation:rotatePlaceholder 4.25s ease-in}.swal-icon--success__ring{width:80px;height:80px;border:4px solid hsla(98,55%,69%,.2);border-radius:50%;box-sizing:content-box;position:absolute;left:-4px;top:-4px;z-index:2}.swal-icon--success__hide-corners{width:5px;height:90px;background-color:#fff;padding:1px;position:absolute;left:28px;top:8px;z-index:1;-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.swal-icon--success__line{height:5px;background-color:#a5dc86;display:block;border-radius:2px;position:absolute;z-index:2}.swal-icon--success__line--tip{width:25px;left:14px;top:46px;-webkit-transform:rotate(45deg);transform:rotate(45deg);-webkit-animation:animateSuccessTip .75s;animation:animateSuccessTip .75s}.swal-icon--success__line--long{width:47px;right:8px;top:38px;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-animation:animateSuccessLong .75s;animation:animateSuccessLong .75s}@-webkit-keyframes rotatePlaceholder{0%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}5%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}12%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}to{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}}@keyframes rotatePlaceholder{0%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}5%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}12%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}to{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}}@-webkit-keyframes animateSuccessTip{0%{width:0;left:1px;top:19px}54%{width:0;left:1px;top:19px}70%{width:50px;left:-8px;top:37px}84%{width:17px;left:21px;top:48px}to{width:25px;left:14px;top:45px}}@keyframes animateSuccessTip{0%{width:0;left:1px;top:19px}54%{width:0;left:1px;top:19px}70%{width:50px;left:-8px;top:37px}84%{width:17px;left:21px;top:48px}to{width:25px;left:14px;top:45px}}@-webkit-keyframes animateSuccessLong{0%{width:0;right:46px;top:54px}65%{width:0;right:46px;top:54px}84%{width:55px;right:0;top:35px}to{width:47px;right:8px;top:38px}}@keyframes animateSuccessLong{0%{width:0;right:46px;top:54px}65%{width:0;right:46px;top:54px}84%{width:55px;right:0;top:35px}to{width:47px;right:8px;top:38px}}.swal-icon--info{border-color:#c9dae1}.swal-icon--info:before{width:5px;height:29px;bottom:17px;border-radius:2px;margin-left:-2px}.swal-icon--info:after,.swal-icon--info:before{content:"";position:absolute;left:50%;background-color:#c9dae1}.swal-icon--info:after{width:7px;height:7px;border-radius:50%;margin-left:-3px;top:19px}.swal-icon{width:80px;height:80px;border-width:4px;border-style:solid;border-radius:50%;padding:0;position:relative;box-sizing:content-box;margin:20px auto}.swal-icon:first-child{margin-top:32px}.swal-icon--custom{width:auto;height:auto;max-width:100%;border:none;border-radius:0}.swal-icon img{max-width:100%;max-height:100%}.swal-title{color:rgba(0,0,0,.65);font-weight:600;text-transform:none;position:relative;display:block;padding:13px 16px;font-size:27px;line-height:normal;text-align:center;margin-bottom:0}.swal-title:first-child{margin-top:26px}.swal-title:not(:first-child){padding-bottom:0}.swal-title:not(:last-child){margin-bottom:13px}.swal-text{font-size:16px;position:relative;float:none;line-height:normal;vertical-align:top;text-align:left;display:inline-block;margin:0;padding:0 10px;font-weight:400;color:rgba(0,0,0,.64);max-width:calc(100% - 20px);overflow-wrap:break-word;box-sizing:border-box}.swal-text:first-child{margin-top:45px}.swal-text:last-child{margin-bottom:45px}.swal-footer{text-align:right;padding-top:13px;margin-top:13px;padding:13px 16px;border-radius:inherit;border-top-left-radius:0;border-top-right-radius:0}.swal-button-container{margin:5px;display:inline-block;position:relative}.swal-button{background-color:#7cd1f9;color:#fff;border:none;box-shadow:none;border-radius:5px;font-weight:600;font-size:14px;padding:10px 24px;margin:0;cursor:pointer}.swal-button:not([disabled]):hover{background-color:#78cbf2}.swal-button:active{background-color:#70bce0}.swal-button:focus{outline:none;box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(43,114,165,.29)}.swal-button[disabled]{opacity:.5;cursor:default}.swal-button::-moz-focus-inner{border:0}.swal-button--cancel{color:#555;background-color:#efefef}.swal-button--cancel:not([disabled]):hover{background-color:#e8e8e8}.swal-button--cancel:active{background-color:#d7d7d7}.swal-button--cancel:focus{box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(116,136,150,.29)}.swal-button--danger{background-color:#e64942}.swal-button--danger:not([disabled]):hover{background-color:#df4740}.swal-button--danger:active{background-color:#cf423b}.swal-button--danger:focus{box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(165,43,43,.29)}.swal-content{padding:0 20px;margin-top:20px;font-size:medium}.swal-content:last-child{margin-bottom:20px}.swal-content__input,.swal-content__textarea{-webkit-appearance:none;background-color:#fff;border:none;font-size:14px;display:block;box-sizing:border-box;width:100%;border:1px solid rgba(0,0,0,.14);padding:10px 13px;border-radius:2px;transition:border-color .2s}.swal-content__input:focus,.swal-content__textarea:focus{outline:none;border-color:#6db8ff}.swal-content__textarea{resize:vertical}.swal-button--loading{color:transparent}.swal-button--loading~.swal-button__loader{opacity:1}.swal-button__loader{position:absolute;height:auto;width:43px;z-index:2;left:50%;top:50%;-webkit-transform:translateX(-50%) translateY(-50%);transform:translateX(-50%) translateY(-50%);text-align:center;pointer-events:none;opacity:0}.swal-button__loader div{display:inline-block;float:none;vertical-align:baseline;width:9px;height:9px;padding:0;border:none;margin:2px;opacity:.4;border-radius:7px;background-color:hsla(0,0%,100%,.9);transition:background .2s;-webkit-animation:swal-loading-anim 1s infinite;animation:swal-loading-anim 1s infinite}.swal-button__loader div:nth-child(3n+2){-webkit-animation-delay:.15s;animation-delay:.15s}.swal-button__loader div:nth-child(3n+3){-webkit-animation-delay:.3s;animation-delay:.3s}@-webkit-keyframes swal-loading-anim{0%{opacity:.4}20%{opacity:.4}50%{opacity:1}to{opacity:.4}}@keyframes swal-loading-anim{0%{opacity:.4}20%{opacity:.4}50%{opacity:1}to{opacity:.4}}.swal-overlay{position:fixed;top:0;bottom:0;left:0;right:0;text-align:center;font-size:0;overflow-y:auto;background-color:rgba(0,0,0,.4);z-index:10000;pointer-events:none;opacity:0;transition:opacity .3s}.swal-overlay:before{content:" ";display:inline-block;vertical-align:middle;height:100%}.swal-overlay--show-modal{opacity:1;pointer-events:auto}.swal-overlay--show-modal .swal-modal{opacity:1;pointer-events:auto;box-sizing:border-box;-webkit-animation:showSweetAlert .3s;animation:showSweetAlert .3s;will-change:transform}.swal-modal{width:478px;opacity:0;pointer-events:none;background-color:#fff;text-align:center;border-radius:5px;position:static;margin:20px auto;display:inline-block;vertical-align:middle;-webkit-transform:scale(1);transform:scale(1);-webkit-transform-origin:50% 50%;transform-origin:50% 50%;z-index:10001;transition:opacity .2s,-webkit-transform .3s;transition:transform .3s,opacity .2s;transition:transform .3s,opacity .2s,-webkit-transform .3s}@media (max-width:500px){.swal-modal{width:calc(100% - 20px)}}@-webkit-keyframes showSweetAlert{0%{-webkit-transform:scale(1);transform:scale(1)}1%{-webkit-transform:scale(.5);transform:scale(.5)}45%{-webkit-transform:scale(1.05);transform:scale(1.05)}80%{-webkit-transform:scale(.95);transform:scale(.95)}to{-webkit-transform:scale(1);transform:scale(1)}}@keyframes showSweetAlert{0%{-webkit-transform:scale(1);transform:scale(1)}1%{-webkit-transform:scale(.5);transform:scale(.5)}45%{-webkit-transform:scale(1.05);transform:scale(1.05)}80%{-webkit-transform:scale(.95);transform:scale(.95)}to{-webkit-transform:scale(1);transform:scale(1)}}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
<meta name="author" content="Creative Tim">
<title>Forgot Password | Dikti</title>

<!-- Favicon -->

<!-- Fonts -->

<!-- Icons -->


<!-- Argon CSS -->

    <link href="{{ asset('Login_Dikti_files/logo_ristekdikti.png') }}" rel="icon" type="image/png">
    <link href="{{ asset('Login_Dikti_files/css') }}" rel="stylesheet">
    <link href="{{ asset('Login_Dikti_files/nucleo.css') }}" rel="stylesheet">
    <link href="{{ asset('Login_Dikti_files/all.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{asset('Login_Dikti_files/argon.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

<style type="text/css">
  .form-control{
    font-size: 1rem;
  }
  h4{
    font-weight: 400;
  }
</style>
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
						<a href="#"><img src="{{ asset('Login_Dikti_files/logo_ristekdikti.png') }}"></a>
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
					<span class="nav-link-inner--text">Buat Akun Baru</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link nav-link-icon" href="">
					<i class="fas fa-key"></i>
					<span class="nav-link-inner--text">Login</span>
					</a>
				</li>
				
			</ul>
		</div>
	</div>
	</nav>
	<!-- Header -->
	<div class="header bg-gradient-light py-7 py-lg-6">
		<div class="container">
			<div class="header-body text-center mb-7">
				<div class="row justify-content-center">
					<div class="col-lg-5 col-md-8">
						<center>
						<img style="margin-bottom: 10px;" width="130" height="120" src="{{ asset('Login_Dikti_files/logo_ristekdikti.png') }}">
						</center>
						<p class="text-lead h2 text-black pb-2 pt-2">
							Direktorat Jenderal Pendidikan Tinggi, Riset dan Teknologi
						</p>
						<h2 class="text-white">Layanan Izin Kerja Sama<br>Perguruan Tinggi Akademik</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Page content -->
	<div class="container mt--8 pb-5">
		<div class="row justify-content-center">
			<div class="col-lg-5 col-md-7">
				<div class="card bg-secondary shadow border-0">
					<div class="card-body px-lg-5 py-lg-5">
						<div class="text-center text-muted mb-4">
							<large class="h2">Forgot your password?</large>
						</div>
						<div class="text-center text-muted mb-5">
							<h4><strong>Info!</strong> Masukkan username berupa alamat email anda dari akun yang aktif dan kami akan mengirimkan link untuk melakukan reset password</h4>
						</div>
						<form role="form" method="post" id="forgot_form" action="">
							<div class="form-group mb-3">
								<small class="h4">Username Email<em style="color:red;">*</em></small>
								<div class="input-group input-group-alternative">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-envelope"></i></span>
									</div>
									<input class="form-control isian" id="email" style="text-transform: lowercase" placeholder="universitas@mail.com" name="email" type="text">
									<input type="hidden" name="iduser" id="iduser" class="isian"></div>
								<small id="message"></small>
								<br>
								<small id="message2"></small>
							</div>
							<div class="text-center">
								<button type="submit" class="btn btn-success my-4" id="submit_form" disabled="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Isi semua field terlebih dahulu">Kirim</button>
							</div>
						</form>
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
				 © 2023 Direktorat Jenderal Pendidikan Tinggi, Riset dan Teknologi
			</div>
		</div>
		<div class="col-xl-6">
			<div class="copyright text-center text-xl-right text-muted">
				<h5 class="text-white">Informasi kontak yang bisa dihubungi.</h5>
				<p class="text-white text-xl-right">
					<span class="u-icon u-text-palette-4-base"><i class="fas fa-envelope"></i></span>&nbsp;&nbsp;izinkerma@kemdikbud.go.id
				</p>
				
			</div>
		</div>
	</div>
</div>
</footer>
<!-- Modal -->
<div class="modal fade" id="loading_bar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document" style="width:100%;">
		<div class="modal-content" style="width:100%;">
			<div class="modal-body loading-body"></div>
		</div>
	</div>
</div>
<!-- Argon Scripts -->
<!-- Core -->

<!-- Argon JS -->


<script src="{{ asset('Login_Dikti_files/jquery.min.js.download') }}"></script>
    <script src="{{ asset('Login_Dikti_files/bootstrap.bundle.min.js.download') }}"></script>
    <script type="text/javascript" src="{{ asset('Login_Dikti_files/sweetalert.js.download') }}"></script>
    <script src="{{ asset('Login_Dikti_files/argon.js.download') }}"></script>
    <script type="text/javascript" src="{{ asset('Login_Dikti_files/select2.min.js.download') }}"></script>
    <script src="{{ asset('Login_Dikti_files/jquery.form.min.js.download') }}"></script>

<script type="text/javascript">
  $(document).ready(function () {
    //VALIDATION FORM
    $('#forgot_form .isian').bind('input', function (e) {
      validate_email();      
    });
    $("#submit_form").click(function(e){
      $("#submit_form").hide();
      initial_loading();
      $("#loading_bar").modal('show');
      xhr = new window.XMLHttpRequest();
      $('#forgot_form').ajaxForm({
        xhr: function(){            
          //Upload progress, request sending to server
          xhr.upload.addEventListener("progress", function(evt){
            console.log("in Upload progress");
            console.log("Upload Done");
          }, false);
          //Download progress, waiting for response from server
          xhr.addEventListener("progress", function(e){
            console.log("in Download progress");
            e.preventDefault();
            if (e.lengthComputable) {
              var percentComplete = parseInt( (e.loaded / e.total * 100), 10);
              $("#div-progress")
                .css("width", percentComplete + "%")
                .attr("aria-valuenow", percentComplete);
              $("#current-progress").text(percentComplete + "%");
              progress(percentComplete,'start');
            }else{
              $("#div-progress")
                .css("width", "100%")
                .attr("aria-valuenow", 100);
              $("#current-progress").text("100%");
              progress(100,'start');
            }
          }, false);
          xhr.addEventListener("abort", function(evt){
            $("#loading_bar").modal('hide');  
              console.log("The transfer has been canceled by the user.");
              idx++;
          }, false);
          return xhr;
        },
        beforeSend: function () {
          progress(1,'start');
        },
        complete: function (data) {
          if($("#div-progress").attr('aria-valuenow')==100){
            setTimeout(function () {
              $("#loading_bar").modal('hide');
              $("#submit_form").show();
              if(data.responseText == 'SUCCESS'){
                swal("Berhasil", "Silakan cek email untuk mengakses link reset password", "success");
              }else{
                swal("Gagal", "Data gagal terkirim. Silakan ulangi kembali", "error");                
              } 
            }, 1000);
          }        
        }
      });
    });
  });
  // function validate_form(){
  //   //VALIDATION FORM
  //   var $nonempty = $('.isian').filter(function() {
  //     return this.value != ''
  //   });
  //   var count = $(".isian").length;
  //   if ($nonempty.length == count) {
  //     $("#submit_form").removeAttr('disabled');
  //     $('#submit_form').tooltip('dispose');
  //   }else{
  //     $("#submit_form").attr('disabled','disabled');
  //   }
  //   console.log($nonempty.length);
  // }
  function validate_email() {
    const $result = $("#message");
    const $result2 = $("#message2");
    const email = $("#email").val();
    $result.text("");
    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    //return re.test(email);
    if(re.test(email)){
      $result.text("Email is valid");
      $result.css("color", "green");
      $.ajax({
        url: "https://izinkerma.kemdikbud.go.id/akademik/index.php/MainMenu/validateUserEmail",
        type: "POST",
        data:{
          'email' : $("#email").val()
        },
        success: function (data) { 
          var datax = JSON.parse(data);
          if(datax.status == 'SUCCESS'){ 
            $("#iduser").val(datax.iduser);
            $result2.text("Email anda terdaftar dan akun anda aktif");
            $result2.css("color", "green");
            $("#submit_form").removeAttr('disabled');
            $('#submit_form').tooltip('dispose');
          }else{
            $("#iduser").val('');
            $result2.text("Email anda tidak terdaftar atau akun anda tidak aktif");
            $result2.css("color", "red");
            $("#submit_form").attr('disabled','disabled');
          }
        }
      });      
    }else{
      $result.text("Email is not valid");
      $result.css("color", "red");
      $("#iduser").val('');
      $("#submit_form").attr('disabled','disabled');
    }
    return false;
  }
  function progress(current_progress, status){
    if(status=='stop'){
      return false;
    }else{
      var interval = setInterval(function() {
        if ($("#div-progress").attr('aria-valuenow') == 100){
          clearInterval(interval);
          return;
        }else{
          $("#div-progress")
            .css("width", current_progress + "%")
            .attr("aria-valuenow", current_progress);
          $("#current-progress").text(current_progress + "%");
          if(current_progress<100){
            current_progress += 1;
          }
        }
      }, 1000);
    }    
  }
  function initial_loading(){
    var body = '<div class="progress-wrapper">'
      +'<div class="progress-info">'
      +'<div class="progress-label">'
      +'<span>Loading</span>'
      +'</div>'
      +'<div class="progress-percentage">'
      +'<span id="current-progress">0%</span>'
      +'</div>'
      +'</div>'
      +'<div class="progress">'
      +'<div id="div-progress" class="progress-bar bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>'
      +'</div>'
      +'</div>';
    $(".loading-body").empty();
    $(".loading-body").append(body);
  }
</script>
</body>
</html>