<div class="container">
    <div class="row-mt-3">
        <div class="col-md-6">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <p class="card-text"><?= $surat_keluar['nomor_surat']; ?></p>
                    <h5 class="card-title"><?= $surat_keluar['tanggal_surat']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $surat_keluar['dari']; ?></h6>
                    <a href="<?= base_url(); ?>surat_keluar/" class="card-link">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>