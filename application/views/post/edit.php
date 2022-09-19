<?= form_open_multipart(); ?>
<div class="text-right mb-3">
    <a href="<?= base_url('post/data'); ?>" class="btn btn-primary">
        <i class="fa fa-arrow-left"></i> Вернуться, назад
    </a>
    <button type="submit" class="btn btn-success">
        <i class="fa fa-save"></i> Сохранить
    </button>
</div>
<div class="row">
    <div class="col-md-8 order-last order-md-first">
        <div class="card card-outline card-primary shadow-sm">
            <div class="card-header">
                <h3 class="card-title"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Опубликованный контент: </h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="post_title"><i class="fa fa-pencil-square" aria-hidden="true"></i> Заголовок поста: </label>
                    <input id="post_title" name="post_title" class="form-control" type="text" placeholder="Заголовок поста..." value="<?= set_value('post_title', $post->post_title); ?>" autocomplete="off">
                    <?= form_error('post_title'); ?>
                </div>
                <label for="summernote"><i class="fa fa-list-alt" aria-hidden="true"></i> Описание поста: </label>
                <textarea id="summernote" class="form-control" rows="6" name="post_body" placeholder="Описание поста.."><?= set_value('post_body', $post->post_body); ?></textarea>
                <?= form_error('post_body'); ?>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-outline card-primary shadow-sm">
            <div class="card-header">
                <h3 class="card-title"><i class="fa fa-info-circle" aria-hidden="true"></i> Информация об публикации: </h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="category_id"><i class="fa fa-th-large" aria-hidden="true"></i> Выберите категорию: </label>
                    <select class="form-control" id="category_id" name="category_id" aria-label="Floating label select example">
                        <option value="">Select Category</option>
                        <?php foreach ($category as $c) : ?>
                            <option value="<?= $c->category_id; ?>" <?= check($c->category_id, $post->category_id, "selected"); ?>><?= $c->category_name; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('category_id'); ?>
                </div>
                <div class="form-group">
                    <label class="form-label" for="post_date"><i class="fa fa-calendar" aria-hidden="true"></i> Выберите дата/время: </label>
                    <input class="form-control gijgo" value="<?= set_value('post_date', $post->post_date); ?>" name="post_date" id="post_date" type="text" placeholder="Select a date" />
                    <?= form_error('post_date'); ?>
                </div>
                <div class="form-group">
                    <label class="form-label" for="post_thumbnail"><i class="fa fa-picture-o" aria-hidden="true"></i> Выберите картинку для публикации: </label>
                    <div class="custom-file">
                        <input accept="image/*" type="file" class="custom-file-input" id="post_thumbnail" name="post_thumbnail" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="post_thumbnail"> Выбрать файл: </label>
                    </div>
                </div>
                <?php if ($post->post_thumbnail) : ?>
                    <img src="<?= base_url('assets/dist/img/posts/') . $post->post_thumbnail; ?>" alt="Post Thumbnail" class="img-fluid w-100">
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?= form_close(); ?>
