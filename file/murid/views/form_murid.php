<div class="card">
    <div class="card-header">
        <h4>Form Murid</h4>
    </div>
    <div class="card-body">
        <form method="post" action="admin.php?target=murid&action=input" data-parsley-validate class="form-horizontal form-label-left">
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Nama Siswi
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="nm_siswi" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Kd Pelajaran
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="kd_pelajaran" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Nilai
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="nilai" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <label class="control-label col-md-3 col-sm-3 col-lg-12" for="first-name">
                    Nama Ustadzah
                </label>
                <div class="col-md-6 col-sm-6 col-lg-12">
                    <input type="text" name="nm_ustadzah" class="form-control" />
                </div>
            </div>
            <div class="mb-3">
                <div class="col-md-6 col-sm-6 col-lg-12">
                <button type="submit" class="btn btn-success btn-sm" id="simpan" name="simpan">
                    <i class="fa-solid fa-floppy-disk"></i> simpan
                </button>
                    <!-- <input type="submit" class="btn btn-success btn-sm" value="Simpan"> -->
                    <a class="btn btn-danger btn-sm" href="admin.php?target=murid"><i class="fa-solid fa-circle-arrow-left"></i>Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>