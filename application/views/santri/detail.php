<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Data Santri
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $santri['nama']; ?></h5>
                    <p class="card-text"><?= $santri['noid']; ?></p>
                    <p class="card-text"><?= $santri['tpl']; ?>, <?= date_indo($santri['ttl']); ?></p>
                    <p class="card-text"><?= $santri['alamat']; ?></p>
                    <a href="<?= base_url(); ?>santri" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>