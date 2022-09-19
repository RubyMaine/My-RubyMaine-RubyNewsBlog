<?= $this->session->flashdata('msg'); ?>
<div class="row">
    <div class="col-md-3 mb-4">
        <?= form_open('', '', ['category_id' => '']); ?>
        <div class="card card-outline card-primary shadow-sm">
            <div class="card-header">
                <h3 class="card-title" id="form-title"><i class="fa fa-th-large" aria-hidden="true"></i> Новая категория </h3>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="category_name" class="form-label required"><i class="fa fa-th-list" aria-hidden="true"></i> Название категории </label>
                    <input value="<?= set_value('category_name'); ?>" type="text" name="category_name" id="category_name" class="form-control" placeholder="Название категории...">
                    <?= form_error('category_name'); ?>
                </div>
                <div class="mb-3">
                    <label for="category_desc" class="form-label"><i class="fa fa-list-alt" aria-hidden="true"></i> Описание категории </label>
                    <textarea name="category_desc" id="category_desc" rows="3" class="form-control" placeholder="Описание категории..."><?= set_value('category_desc'); ?></textarea>
                    <?= form_error('category_desc'); ?>
                </div>
            </div>
            <div class="card-footer text-right">
                <button type="reset" id="btn-cancel" class="btn btn-danger"><i class="fa fa-paint-brush" aria-hidden="true"></i> Очистить </button>
                <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Сохранить </button>
            </div>
        </div>
        <?= form_close(); ?>
    </div>
    <div class="col-md-9">
        <div class="card card-outline card-primary shadow-sm">
            <div class="card-header">
                <h3 class="card-title"><i class="fa fa-check-square-o" aria-hidden="true"></i> Опубликованные контенты </h3>
            </div>
            <div class="card-body p-0 table-responsive">
                <table class="table card-table table-vcenter text-nowrap datatable">
                    <thead>
                        <tr>
                            <th> № </th>
                            <th><i class="fa fa-th-list" aria-hidden="true"></i> Категория </th>
                            <th><i class="fa fa-list-alt" aria-hidden="true"></i> Описание </th>
                            <th><i class="fa fa-gg" aria-hidden="true"></i> Действия </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $n = 1;
                        if ($category) :
                            foreach ($category as $row) :
                        ?>
                                <tr>
                                    <td><?= $n++; ?>.</td>
                                    <td><?= $row->category_name; ?></td>
                                    <td><?= $row->category_desc; ?></td>
                                    <td class="text-right" width="180">
                                        <div class="btn-group">
                                            <button type="button" data-id="<?= $row->category_id ?>" data-name="<?= $row->category_name ?>" data-desc="<?= $row->category_desc ?>" class="btn btn-warning btn-sm btn-edit"><i class="fa fa-edit"></i> Редактировать </button>
                                            <a href="<?= base_url('category/delete/') . $row->category_id; ?>" onclick="return confirm('Конечно хочу удалить ?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Удалить </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr>
                                <td class="text-center" colspan="4">No Data</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('body').on('click', '.btn-edit', function() {
            let id = $(this).data('id'),
                name = $(this).data('name'),
                desc = $(this).data('desc');

            $('#form-title').text('Edit Category - ID#' + id);
            $('[name=category_id]').val(id);
            $('#category_name').val(name).select();
            $('#category_desc').val(desc);

            document.querySelector('#form-title').scrollIntoView({
                behavior: 'smooth'
            });
        });

        $('body').on('click', '#btn-cancel', function() {
            $('#form-title').text('New Category');
            $('[name=category_id]').val('');
            $('#category_name').val('').select();
            $('#category_desc').val('');
        });
    });
</script>
