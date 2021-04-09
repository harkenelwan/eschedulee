<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>


<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">

</head>

<body>


    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table100 ver1 m-b-110">
                    <table data-vertable="ver1">
                        <thead>
                            <tr class="row100 head">
                                <th class="column100 column1" data-column="column1">HARI/TANGGALs</th>
                                <th class="column100 column2" data-column="column2">JAM</th>
                                <th class="column100 column3" data-column="column3">ACARA</th>
                                <th class="column100 column4" data-column="column4">TERUNDANG</th>
                                <th class="column100 column5" data-column="column5">MENGUNDANG</th>
                                <th class="column100 column6" data-column="column6">TEMPAT</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($jadwal as $key => $value) { ?>

                                <tr class="row100">
                                    <td class="column100 column1" data-column="column1">
                                        <p class=".fs-3 text-center"><?php echo date('D', strtotime($value['waktu'])); ?></p>
                                        <h1 class="text-center"> <?php echo date('d', strtotime($value['waktu'])); ?> </h1>
                                        <p class=".fs-3 text-center"> <?php echo date('M', strtotime($value['waktu'])); ?></p>
                                    </td>
                                    <td class="column100 column2" data-column="column2">
                                        <h5> <?php echo date('H:i', strtotime($value['waktu'])); ?> WITA</h5>
                                    </td>
                                    <td class="column100 column3" data-column="column3">
                                        <h5><?= $value['nama_acara']; ?></h5>
                                    </td>
                                    <td class="column100 column4" data-column="column4">
                                        <h5><?= $value['nama_terundang']; ?></h5>
                                    </td>
                                    <td class="column100 column5" data-column="column5">
                                        <h5><?= $value['nama_pendamping']; ?></h5>
                                    </td>
                                    <td class="column100 column6" data-column="column6">
                                        <h5><?= $value['tempat']; ?> </h5>
                                    </td>


                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="js/main.js"></script>

    <?= $this->endSection(); ?>