<div class="card shadow mt-5">
  <h5 class="card-header"><?= $title; ?></h5>
  <div class="card-body">
    <a href="<?= base_url('customer/register'); ?>" class="btn btn-primary">Tambah Data Customer</a>
    <hr>
    <a href="<?= base_url('dashboard'); ?>">kembali</a>
    <hr>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Perusahaan</th>
            <th scope="col">Alamat Perusahaan</th>
            <th scope="col">No. Telp</th>
            <th scope="col">No. Fax</th>
            <th scope="col">Sektor Usaha</th>
            <th scope="col">Negara</th>
            <th scope="col">Lokasi</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 ?>
            <?php foreach ($customer as $c) : ?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $c['nama_perusahaan']; ?></td>
                <td><?= $c['alamat_perusahaan']; ?></td>
                <td><?= $c['no_telp']; ?></td>
                <td><?= $c['no_fax']; ?></td>
                <td><?= $c['sektor_usaha']; ?></td>
                <td><?= $c['negara']; ?></td>
                <td><?= $c['lokasi']; ?></td>
                <td>
                    <a href="<?= base_url('customer/edit_cutomer/') . $c['id']; ?>" class="badge bg-success">edit</a> |
                    <a href="<?= base_url('customer/hapus_customer/') . $c['id']; ?>" class="badge bg-danger">delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
  </div>
</div>