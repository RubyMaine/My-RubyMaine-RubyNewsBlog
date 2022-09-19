<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h5 class="card-title"><i class="bi bi-gear-wide-connected"></i> Настройка аккаунта </h5>
                <div class="card-tools">
                    <a href="<?= base_url('dashboard'); ?>" class="btn btn-sm btn-default bg-danger"><i class="fa fa-times" aria-hidden="true"></i> Отменит </a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <?= $this->session->flashdata('msg'); ?>
                <?= form_open_multipart(); ?>
                <div class="form-group">
                    <label for="fullname"><i class="bi bi-person-bounding-box"></i> Имя аккаунта </label>
                    <input placeholder="Name" value="<?= set_value('fullname', userdata()->fullname); ?>" type="text" name="fullname" id="fullname" class="form-control">
                    <?= form_error('fullname'); ?>
                </div>
                <div class="form-group">
                    <label for="username"><i class="bi bi-person-badge"></i> Логин аккаунта </label>
                    <input placeholder="Username" value="<?= set_value('username', userdata()->username); ?>" type="text" name="username" id="username" class="form-control">
                    <?= form_error('username'); ?>
                </div>
                <div class="form-group">
                    <label for="avatar"><i class="bi bi-image"></i> Картинка аккаунта </label>
                    <div class="custom-file">
                        <input type="file" name="avatar" class="custom-file-input" id="avatar" accept="image/x-png,image/gif,image/jpeg,image/jpg">
                        <label class="custom-file-label" for="avatar" data-browse="Browse">Choose File ...</label>
                    </div>
                    <?= form_error('avatar'); ?>
                </div>
                <button type="submit" class="btn bg-success btn-block"><i class="fa fa-floppy-o" aria-hidden="true"></i> Сохранить </button>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>
