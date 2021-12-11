<?= $this->extend('Layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            </br>
            <h1>List of devices</h1>
            </br>
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">device_name</th>
                        <th scope="col">device_brand</th>
                        <th scope="col">device_quantity</th>
                        <th scope="col">device_status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($perangkat as $p) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $p['device_name']; ?></td>
                            <td><?= $p['device_brand']; ?></td>
                            <td><?= $p['device_quantity']; ?></td>
                            <td><?= $p['device_status']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>