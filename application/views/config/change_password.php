<?= form_open(); ?>
<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h5 class="card-title"><i class="bi bi-unlock-fill"></i> Форма Изменить пароль </h5>
                <div class="card-tools">
                    <a href="<?= base_url('dashboard'); ?>" class="btn btn-sm btn-default bg-danger"><i class="fa fa-times" aria-hidden="true"></i> Отменит </a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <?= form_open(); ?>
                <?= $this->session->flashdata('msg'); ?>
                <div class="form-group">
                    <label for="old_password"><i class="bi bi-key"></i> Старый пароль </label>
                    <input placeholder="Старый пароль" type="password" name="old_password" id="old_password" class="form-control">
                    <?= form_error('old_password'); ?>
                </div>
                <div class="form-group">
                    <label for="new_password"><i class="bi bi-key-fill"></i> Новый пароль </label>
                    <input placeholder="Новый пароль" type="password" name="new_password" id="new_password" class="form-control">
                    <?= form_error('new_password'); ?>
                </div>
                <div class="form-group">
                    <label for="password"><i class="bi bi-key-fill"></i> Введите пароль еще раз </label>
                    <input placeholder="Введите пароль еще раз" type="password" name="password" id="password" class="form-control">
                    <?= form_error('password'); ?>
                </div>
				<button type="submit" class="btn bg-success btn-block"><i class="fa fa-floppy-o" aria-hidden="true"></i> Сохранить </button>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>
<?= form_close(); ?>
