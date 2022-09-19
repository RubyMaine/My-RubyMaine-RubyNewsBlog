<?= $this->session->flashdata('pesan'); ?>
<div class="card card-outline card-primary">
    <div class="card-header">
        <h5 class="card-title"><i class="fa fa-comments" aria-hidden="true"></i>  Все Комментарии </h5>
    </div>
    <div class="card-body p-0 table-responsive">
        <table class="table table-striped datatable">
            <thead>
                <th> № </th>
				<th><i class="fa fa-picture-o" aria-hidden="true"></i> Картина </th>
				<th><i class="fa fa-pencil-square" aria-hidden="true"></i> Имя </th>
                <th><i class="fa fa-comments" aria-hidden="true"></i> Комментарии </th>
                <th><i class="fa fa-calendar" aria-hidden="true"></i> Дата/время </th>
                <th><i class="fa fa-gg" aria-hidden="true"></i> Действия </th>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($comment as $row) : ?>
                    <tr>
                        <td width="50" class="align-middle"><?= $no++; ?></td>
                        <td width="100" class="align-middle">
                            <?php $avatar = $row->avatar ? $row->avatar : $this->config->item('user_avatar_default'); ?>
                            <img src="<?= base_url('assets/dist/img/users/') . $avatar ?>" alt="User Image" class="rounded" style="height: 50px;width: 50px;">
                        </td>
                        <td width="150" class="align-middle"><?= $row->fullname; ?></td>
                        <td class="align-middle"><?= $row->comment_body; ?></td>
                        <td width="100" class="align-middle"><?= $row->comment_date; ?></td>
                        <td width="180" class="align-middle text-right">
                            <div class="btn-group">
                                <?php
                                $view = base_url("post/view/") . $row->post_slug . "#c" . $row->comment_id;
                                ?>
                                <a target="_blank" href="<?= $view; ?>" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> Просмотр </a>
                                <a href="<?= base_url('comment/delete/') . $row->comment_id; ?>" onclick="return confirm('Confirm Delete ?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Удалить </a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
