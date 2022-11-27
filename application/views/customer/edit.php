<div class="row justify-content-center">

<div class="col-lg-6">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4"><?= $title; ?></h1>
                        </div>
                        <form class="user" method="post" action="<?= base_url('Customer/register'); ?>">
                        <input type="hidden" name="id" value="<?= $barang['id']; ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="nama_perusahaan" name="nama_perusahaan" value="<?= set_value('nama_perusahaan'); ?>"
                                    placeholder="Nama Perusahaan">
                                    <?= form_error('nama_perusahaan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="alamat_perusahaan" name="alamat_perusahaan" value="<?= set_value('alamat_perusahaan'); ?>"
                                    placeholder="Alamat Perusahaan">
                                    <?= form_error('alamat_perusahaan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="no_telp" name="no_telp" value="<?= set_value('no_telp'); ?>"
                                    placeholder="No. Telpn">
                                    <?= form_error('no_telp', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="no_fax" name="no_fax" value="<?= set_value('no_fax'); ?>"
                                    placeholder="No. Fax">
                                    <?= form_error('no_fax', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="sektor_usaha" name="sektor_usaha" value="<?= set_value('sektor_usaha'); ?>"
                                    placeholder="Sektor Usaha">
                                    <?= form_error('sektor_usaha', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="negara" name="negara" value="<?= set_value('negara'); ?>"
                                    placeholder="Negara">
                                    <?= form_error('negara', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="lokasi" name="lokasi" value="<?= set_value('lokasi'); ?>"
                                    placeholder="Lokasi">
                                    <?= form_error('lokasi', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Ubah Data
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('customer'); ?>">kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


</div>