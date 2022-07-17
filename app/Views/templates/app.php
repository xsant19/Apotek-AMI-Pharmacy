<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - Apotek Ami Pharmacy </title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('/assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('/assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
        <?= $this->include('templates/sidebar') ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <?= $this->include('templates/navbar') ?>
                <?= $this->renderSection('content') ?>
            </div>
            <?= $this->include('templates/footer') ?>
            <!-- Bootstrap core JavaScript-->
            <script src="<?= base_url('/assets/vendor/jquery/jquery.min.js') ?>"></script>
            <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

            <!-- Core plugin JavaScript-->
            <script src="<?= base_url('/assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

            <!-- Custom scripts for all pages-->
            <script src="<?= base_url('/assets/js/sb-admin-2.min.js') ?>"></script>

            <!-- Page level plugins -->
            <script src="<?= base_url('assets/vendor/chart.js/Chart.min.js') ?>"></script>

            <!-- Page level custom scripts -->
            <script src="<?= base_url('/assets/js/demo/chart-area-demo.js') ?>"></script>
            <script src="<?= base_url('/assets/js/demo/chart-pie-demo.js') ?>"></script>
            <script>
                $(function() {
                    $('#example2').DataTable({
                        "paging": true,
                        "lengthChange": false,
                        "searching": false,
                        "ordering": false,
                        "info": true,
                        "autoWidth": true,
                        "responsive": false,
                    });
                    //Initialize Select2 Elements
                    $('.select2').select2()

                    //Initialize Select2 Elements
                    $('.select2bs4').select2({
                        theme: 'bootstrap4'
                    })
                });

                $(".pilih-obat").change(function() {
                    let harga = $(this).find(':selected').data('harga');
                    $(".jml-obat").change(function() {
                        let jml_obat = $(".jml-obat").val();
                        $(".total-harga").val(harga * jml_obat);
                    });
                });
            </script>
</body>