<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Daftar Permohonan Kerma</title>

    <!-- Custom fonts for this template-->
    
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="{{ asset('Login_Dikti_files/logo_ristekdikti.png') }}" rel="icon" type="image/png">
    <!-- Custom styles for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet"> 

    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-datepicker.min.css') }}" >

    <link rel="stylesheet" href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" >

    

    
    
    <!--
    <link href="{{ asset('Login_Dikti_files/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Login_Dikti_files/nucleo.css') }}" rel="stylesheet">  
    
    -->
    <!--<link type="text/css" rel="stylesheet" href="{{ asset('Login_Dikti_files/all.min.css') }}">-->

    <!--
    <link type="text/css" href="{{ asset('Login_Dikti_files/select2.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('Login_Dikti_files/preloader.css') }}" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="{{ asset('Login_Dikti_files/all.min.css') }}">
    <link type="text/css" rel="stylesheet" id="mce-u0" href=" {{ asset('Login_Dikti_files/skin.min.css') }}">
-->
    
    <!--<link type="text/css" href=" {{asset('Login_Dikti_files/argon.css') }}" rel="stylesheet"> 
    <link href="{{ asset('Login_Dikti_files/css') }}" rel="stylesheet">
    
    -->

<!--
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
-->
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('layouts.navbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
                        <!--<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>                    
                    @yield('contents')
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('layouts.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!--
    <script src="{{ asset('Login_Dikti_files/jquery.min.js.download') }}"></script>
    
    <script src="{{ asset('Login_Dikti_files/argon.js.download') }}"></script>
    <script src="{{ asset('Login_Dikti_files/jquery.form.min.js.download') }}"></script>
    -->
    
    <!--<script src="{{ asset('Login_Dikti_files/bootstrap.bundle.min.js.download') }}"></script>-->
    
    
    <!--
    -->
    <!--
    <script type="text/javascript" src="{{ asset('Login_Dikti_files/select2.min.js.download') }}"></script> 
    <script type="text/javascript" src="{{ asset('Login_Dikti_files/sweetalert.js.download') }}"></script> -->

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-datepicker.min.js') }}"></script>

    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!--
    <script>
    $(document).ready(function () {
        $('#dataTable').DataTable({
            //"info": false,
            //"paging": false,
            //"dom": 'rtip'
        });
    });
    </script>
    -->
    
    
    <!-- Core plugin JavaScript-->
    <!-- Custom scripts for all pages-->
    

    <!-- Page level plugins 
    
    -->
    <!--
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    
-->
    <script type="text/javascript">
            $(function() {
                $('#datepicker').datepicker({
                    inline: true,
                    format: 'yyyy-mm-dd'
                });
                $('#datepickerAkhir').datepicker({
                    inline: true,
                    format: 'yyyy-mm-dd'
                });
            });
    </script>

    <script src="{{ asset('Login_Dikti_files/sweetalert2@11') }}"></script>

    <script type="text/javascript">
        $(function(){
            $(document).on('click','#hapus', function(e){
                //e.preventDefault();
                var link = $(this).attr("data-id");
                Swal.fire({
                        title: 'Apakah anda yakin untuk menghapus data ini ?',
                        text: "data yang sudah dihapus tidak dapat kembali !",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, Hapus'
                        }).then((result) => {
                            if (result.isConfirmed) {
                            //Swal.fire('Terhapus !','Proposal anda telah kami hapus.','success')}
                            window.location = link
                            }
                        });
            });

            $(document).on('click','#ajukanProposal', function(e){
                //e.preventDefault();
                var link = $(this).attr("data-id");
                Swal.fire({
                        title: 'Apakah anda sudah yakin untuk mengajukan proposal ini ?',
                        text: "proposal yang sudah diajukan, tidak dapat diubah kembali !",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, Ajukan'
                        }).then((result) => {
                            if (result.isConfirmed) {
                            //Swal.fire('Terhapus !','Proposal anda telah kami hapus.','success')}
                            window.location = link
                            }
                        });
            });
        });
    </script>

    <script type="text/javascript">
        $("#showData").change(function(){
            //console.log(); 
            var id = $(this).val();
            var url = '{{ route("proposal.showAjax", ":id") }}';
            url = url.replace(':id', id);

            location.href = url;
        
        });

        $("#showDataUniversitas").change(function(){
            //console.log(); 
            var id = $(this).val();
            var url = '{{ route("universitas.showAjax", ":id") }}';
            url = url.replace(':id', id);
            location.href = url;
        
        });

        $(document).on("click", ".open-AddBookDialog", function () {
        var judul = $(this).data('id');
        var idProposal = $(this).data('id2');
        $(".modal-body #judul").val( judul );       
        $(".modal-body #idProposal").val( idProposal );
        });

    </script>

    <div class="modal fade" id="warningModal" tabindex="-1" role="dialog"  aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Masih Proses Pengerjaan, sedikit lagi beres !</h4>
                </div>
            </div>
        </div>
    </div>

@include('sweetalert::alert')
</body>

</html>