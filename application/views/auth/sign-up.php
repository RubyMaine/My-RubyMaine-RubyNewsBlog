<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?= $title; ?></title>
    <!-- CSS files -->
    <link href="<?= base_url(); ?>assets/dist/css/tabler.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/tabler-flags.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/tabler-payments.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/tabler-vendors.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/demo.min.css" rel="stylesheet" />
	<!-- Bootstrap 5-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

	<!-- Font Google -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            display: none;
        }
    </style>
</head>

<body class="antialiased border-top-wide border-primary d-flex flex-column">
    <div class="flex-fill d-flex flex-column justify-content-center py-4">
        <div class="container-tight py-6">
            <div class="text-center mb-4">
				<img src="<?= base_url(); ?>assets/dist/img/rubynewsblog.png" alt="Logo" class="brand-image">
				<small class="text-muted">от: <strong> RubyMaine </strong></small>
            </div>
            <?= form_open('', ['class' => 'card card-md', 'autocomplete' => 'off']); ?>
            <div class="card-body">
                <?= $this->session->flashdata('msg'); ?>
                <h2 class="card-title text-center mb-4"><i class="fa fa-id-card-o" aria-hidden="true"></i> Зарегистрироваться </h2>
                <div class="mb-3">
                    <label class="form-label"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Введите свое полное Ф.И.О: </label>
                    <input autofocus onfocus="this.select()" value="<?= set_value('fullname'); ?>" name="fullname" type="text" class="form-control" placeholder="Введите свое полное Ф.И.О">
                    <?= form_error('fullname'); ?>
                </div>
                <div class="mb-3">
                    <label class="form-label"><i class="fa fa-address-card-o" aria-hidden="true"></i> Придумайте логин: </label>
                    <input value="<?= set_value('username'); ?>" name="username" type="text" class="form-control" placeholder="Придумайте логин:">
                    <?= form_error('username'); ?>
                </div>
                <div class="mb-2">
                    <label class="form-label"><i class="fa fa-key" aria-hidden="true"></i> Введите пароль: </label>
                    <div class="input-group input-group-flat">
                        <input name="password" type="password" class="form-control" placeholder="Введите пароль:" autocomplete="off">
                        <span class="input-group-text">
                            <a href="#" class="link-secondary" title="Show password" data-toggle="tooltip"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <circle cx="12" cy="12" r="2" />
                                    <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                            </a>
                        </span>
                    </div>
                    <?= form_error('password'); ?>
                </div>
                <div class="mb-2">
                    <label class="form-label"><i class="fa fa-lock" aria-hidden="true"></i> Подтвердите Пароль: </label>
                    <div class="input-group input-group-flat">
                        <input name="password2" type="password" class="form-control" placeholder="Подтвердите Пароль:" autocomplete="off">
                        <span class="input-group-text">
                            <a href="#" class="link-secondary" title="Show password" data-toggle="tooltip"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <circle cx="12" cy="12" r="2" />
                                    <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                            </a>
                        </span>
                    </div>
                    <?= form_error('password2'); ?>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-success w-100"> Зарегистрировать  <i class="fa fa-external-link" aria-hidden="true"></i></button>
                </div>
            </div>
            <?= form_close(); ?>
            <div class="text-center text-muted mt">
				У вас уже есть аккаунт? <a href="<?= base_url("signin"); ?>" tabindex="-1"> Войти <i class="fa fa-sign-in" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <!-- Libs JS -->
    <script src="<?= base_url(); ?>assets/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Tabler Core -->
    <script src="<?= base_url(); ?>assets/dist/js/tabler.min.js"></script>
    <script>
        document.body.style.display = "block"
    </script>
</body>

</html>
