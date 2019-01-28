<div class="container">
    <div class="row-mt-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Form Tambah Data Surat Masuk
                    </div>
                    <div class="card-body">
                        <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        <?php endif; ?>
                        </div>
                    <form action="" method='post'>
                        <div class="form-group">
                            <label for="nomor_surat">Nomor Surat</label>
                            <input type="text" name="nomor_surat" class="form-control" id="nomor_surat">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_surat">Tanggal Surat</label>
                            <input type="text" name="tanggal_surat" class="form-control" id="tanggal_surat">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat">
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>