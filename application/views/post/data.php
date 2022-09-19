<?= $this->session->flashdata('msg'); ?>
<div class="card card-outline card-primary">
    <div class="card-header">
        <h5 class="card-title"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Посты & Новости </h5>
        <div class="card-tools">
            <a href="<?= base_url('post/create'); ?>" class="btn btn-success btn-xs"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Добавить Посты & Новости </a>
        </div>
    </div>
    <div class="card-body p-0 table-responsive">
        <table class="table table-striped datatable">
            <thead>
                <th> № </th>
                <th><i class="fa fa-calendar" aria-hidden="true"></i> Дата </th>
                <th><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Заголовок </th>
                <th><i class="fa fa-id-badge" aria-hidden="true"></i> Автор </th>
                <th><i class="fa fa-th-large" aria-hidden="true"></i> Категория </th>
                <th><i class="fa fa-gg" aria-hidden="true"></i> Действия </th>
            </thead>
            <tbody>
                <?php
                $n = 1;
                foreach ($post as $row) : ?>
                    <tr>
                        <td width="50"><?= $n++; ?>.</td>
                        <td width="100"><?= $row->post_date; ?></td>
                        <td><?= $row->post_title; ?></td>
                        <td width="150"><?= $row->fullname; ?></td>
                        <td width="150"><?= $row->category_name; ?></td>
                        <td width="100" class="text-right">
                            <div class="btn-group">
                                <a href="<?= base_url('post/view/') . $row->post_slug; ?>" class="btn btn-primary btn-sm" target="_blank"><i class="fa fa-eye"></i> Просмотр </a>
                                <a href="<?= base_url('post/edit/') . $row->post_id; ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Редактировать </a>
                                <a href="<?= base_url('post/delete/') . $row->post_id; ?>" onclick="return confirm('Confirm Delete ?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Удалить </a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
