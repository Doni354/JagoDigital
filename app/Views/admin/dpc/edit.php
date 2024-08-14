<?= $this->extend('admin/template/template'); ?>
<?= $this->Section('content'); ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Edit DPC</h1>
        <hr class="mb-4">
        <div class="row g-4 settings-section">
            <div class="col-12 col-md-8">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <div class="card-body">
                        <form action="<?= base_url('admin/dpc/proses_edit/' . $dpcData->id_dpc) ?>" method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <!-- Dropdown untuk memilih kategori -->
                                        <label class="form-label" for="kategori">Nama DPD</label>
                                        <select class="form-control" id="id_dpd" name="id_dpd">
                                            <?php foreach ($dpdData as $dpd) : ?>
                                                <option value="<?= $dpd->id_dpd; ?>" <?php echo ($dpd->id_dpd == $dpcData->id_dpd) ? 'selected' : ''; ?>>
                                                    <?= $dpd->nama_dpd; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <small>*Dropdown DPD</small>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Nama DPC</label>
                                        <input type="text" class="form-control" id="nama_dpc" name="nama_dpc" value="<?= $dpcData->nama_dpc; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Wilayah Kerja DPC</label>
                                        <input type="text" class="form-control" id="wilayah_kerja_dpc" name="wilayah_kerja_dpc" value="<?= $dpcData->wilayah_kerja_dpc; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                                <div class="col">
                                    <?php if (!empty(session()->getFlashdata('success'))) : ?>
                                        <div class="alert alert-success" role="alert">
                                            <?php echo session()->getFlashdata('success') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!--//app-card-->

            </div>
        </div><!--//row-->

        <hr class="my-4">
    </div><!--//container-fluid-->
</div><!--//app-content-->

<?= $this->endSection('content') ?>