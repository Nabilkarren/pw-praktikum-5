<?= $this->extend('Layout/template'); ?>

<?= $this->section('content'); ?>
<header class="py-5 bg-image-full" style="background-image: url('https://source.unsplash.com/ACWCQs6KXcw/1600x900')">
    <div class="text-center my-5">
        <img class="img-fluid rounded-circle mb-4" src="../images/28cropped.jpg" width="170" alt=" ">
        <h1 class=" text-white fs-3 fw-bolder">Nabil Karren Y</h1>
        <p class="text-white-50 fs-5 mb-0">105219056</p>
    </div>
</header>
<!-- Content section-->
<section class="py-5">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h2>Keterangan</h2>
                <p class="lead">Website ini dibuat untuk melakukan monitoring terhadap perangkat IoT pada kantor ABC dan untuk memenuhi tugas praktikum 5</p>
                <p class="mb-0">Website ini dapat memantau berbagai device IoT di kantor yang sedang menyala atau mati</p>
            </div>
        </div>
    </div>
</section>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<?= $this->endSection(); ?>