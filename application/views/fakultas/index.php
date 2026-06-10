<div class="container-fluid">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Data Fakultas</h5>
            <a href="<?php echo base_url('fakultas/tambah'); ?>" class="btn btn-primary btn-sm">
                <i class="bi bi-plus-circle"></i> Tambah
            </a>
        </div>
        <div class="card-body">
            <table id="datatable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Fakultas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach ($fakultas as $f): ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $f['fakultas_name']; ?></td>
                        <td>
                            <a href="<?php echo base_url('fakultas/ubah/' . $f['fakultas_id']); ?>" class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>
                            <a href="<?php echo base_url('fakultas/hapus/' . $f['fakultas_id']); ?>" class="btn btn-danger btn-sm btn-hapus">
                                <i class="bi bi-trash"></i> Hapus
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>