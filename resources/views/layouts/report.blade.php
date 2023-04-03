<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>SIP_BSI</title>

        <!-- Custom fonts for this template-->
        <link href="{{ url('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="{{ url('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css"
            rel="stylesheet">
        <!-- Custom styles for this page -->
        <link href="{{ url('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

        <!-- Datatable -->
        <link href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
    
</head>

<body>
    @yield('content')

                <!-- Bootstrap core JavaScript-->
                <script src="{{ url('assets/vendor/jquery/jquery.min.js') }}"></script>
                <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
                <!-- Core plugin JavaScript-->
                <script src="{{ url('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
                <!-- Custom scripts for all pages-->
                <script src="{{ url('assets/js/sb-admin-2.min.js') }}"></script>
                <!-- Page level plugins -->
                <script src="{{ url('assets/vendor/chart.js/Chart.min.js') }}"></script>
                <!-- Page level custom scripts -->
                <script src="{{ url('assets/js/demo/chart-area-demo.js') }}"></script>
                <script src="{{ url('assets/js/demo/chart-pie-demo.js') }}"></script>
                <!-- Page level plugins -->
                <script src="{{ url('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
                <script src="{{ url('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
                <!-- Page level custom scripts -->
                <script src="{{ url('assets/js/demo/datatables-demo.js') }}"></script>
                <script src="{{ url('assets/custom/js/validation.js') }}"></script>
                {{-- datePicker --}}
                <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
                {{-- custom dataTable --}}
                <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js" type="text/javascript"></script>
                <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js" type="text/javascript"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="text/javascript"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" type="text/javascript"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" type="text/javascript"></script>
                <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js" type="text/javascript"></script>
                <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js" type="text/javascript"></script>
                <script src="{{ url('assets/js/akm.js') }}"></script>
                <script src="https://kit.fontawesome.com/36128c1511.js" crossorigin="anonymous"></script>
                <script>
                    $(document).ready(function () {
                $('#example').DataTable();
            });
                </script>
</body>

