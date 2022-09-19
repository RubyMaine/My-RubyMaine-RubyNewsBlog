<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3><?= count($category); ?></h3>
                <p><i class="bi bi-tags-fill"></i> Группы & Категория </p>
            </div>
            <div class="icon">
				<i class="fa fa-tags" aria-hidden="true"></i>
            </div>
            <a href="<?= base_url('category'); ?>" class="small-box-footer"> Больше информации <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3><?= count($posts); ?></h3>
                <p><i class="fa fa-newspaper-o" aria-hidden="true"></i> Посты & Новости </p>
            </div>
            <div class="icon">
				<i class="fa fa-newspaper-o" aria-hidden="true"></i>
            </div>
            <a href="<?= base_url('post/data'); ?>" class="small-box-footer"> Больше информации <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-primary">
            <div class="inner">
                <h3><?= count($members); ?></h3>
                <p><i class="fa fa-users" aria-hidden="true"></i> Админ и Пользователи </p>
            </div>
            <div class="icon">
				<i class="fa fa-users" aria-hidden="true"></i>
            </div>
            <a href="<?= base_url('member'); ?>" class="small-box-footer"> Больше информации <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-secondary">
            <div class="inner">
                <h3><?= count($comments); ?></h3>
                <p><i class="fa fa-comments" aria-hidden="true"></i> Комментарии </p>
            </div>
            <div class="icon">
				<i class="fa fa-comments" aria-hidden="true"></i>
            </div>
            <a href="<?= base_url('comment'); ?>" class="small-box-footer"> Больше информации <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
</div>
