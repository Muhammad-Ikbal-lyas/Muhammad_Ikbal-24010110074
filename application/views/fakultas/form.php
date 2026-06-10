<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0"><?php echo $button == 'Simpan' ? 'Tambah Fakultas' : 'Ubah Fakultas'; ?></h5>
        </div>
        <div class="card-body">
            <form action="<?php echo $action; ?>" method="post">

                <?php if ($button == 'Simpan'): ?>
                <!-- Field ID hanya muncul saat tambah (ID manual) -->
                <div class="mb-3">
                    <label for="fakultas_id" class="form-label">ID Fakultas</label>
                    <input type="number"
                           name="fakultas_id"
                           id="fakultas_id"
                           class="form-control <?php echo form_error('fakultas_id') ? 'is-invalid' : (isset($_POST['fakultas_id']) ? 'is-valid' : ''); ?>"
                           value="<?php echo set_value('fakultas_id', isset($fakultas['fakultas_id']) ? $fakultas['fakultas_id'] : ''); ?>"
                           placeholder="Masukkan ID fakultas">
                    <?php if (form_error('fakultas_id')): ?>
                        <div class="invalid-feedback"><?php echo form_error('fakultas_id'); ?></div>
                    <?php endif; ?>
                </div>
                <?php endif; ?>

                <div class="mb-3">
                    <label for="fakultas_name" class="form-label">Nama Fakultas</label>
                    <input type="text"
                           name="fakultas_name"
                           id="fakultas_name"
                           class="form-control <?php echo form_error('fakultas_name') ? 'is-invalid' : (isset($_POST['fakultas_name']) ? 'is-valid' : ''); ?>"
                           value="<?php echo set_value('fakultas_name', isset($fakultas['fakultas_name']) ? $fakultas['fakultas_name'] : ''); ?>"
                           placeholder="Masukkan nama fakultas">
                    <?php if (form_error('fakultas_name')): ?>
                        <div class="invalid-feedback"><?php echo form_error('fakultas_name'); ?></div>
                    <?php endif; ?>
                </div>

                <a href="<?php echo base_url('fakultas'); ?>" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-primary"><?php echo $button; ?></button>

            </form>
        </div>
    </div>
</div>