<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <!-- MY CSS -->
        <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">
        <title><?php echo $judul ?>Login Page</title>
        <link rel="icon" href="<?= base_url(); ?>/images/logo.png" type="image/ico">
        <style></style>

    </head>
    <body class="text-center">
    <div class="container my-5">
        <div class="row justify-content-center py-4">
            <div class="col-md-4 bg-light pt-4 rounded border">
                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Akun <strong>berhasil</strong> <?= $this->session->flashdata('success'); ?>.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <?php if (validation_errors() || $this->session->flashdata('result_login')) { ?>
                    <div class="alert alert-error">
                        <strong style="color:red">Warning!</strong><br>
                        <?php echo validation_errors(); ?>
                        <?php echo $this->session->flashdata('result_login'); ?>
                    </div>    
                <?php } ?>

                <?php echo form_open('C_Home/login_process'); ?>
                    <img class="mb-4 rounded-circle" src="<?= base_url(); ?>/images/patient.png" alt="" width="72" height="72">
                    <h1 class="h3 mb-3 font-weight-normal">Please Sign In</h1>
                    <div class="form-group">
                        <input id="username_p" type="text" class="form-control" name="username_c" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input id= "password_p"type="password" class="form-control" name="password" placeholder="Password">
                    </div>

                    <button id="button_login" type="submit" class="btn btn-primary float-right">Sign in</button>
                <?php echo form_close(); ?>
                    <a class="btn btn-outline-primary float-left" href="<?= base_url()?>C_Home/signup">Sign up</a>
                    <div class="form-group pt-5">
                        <a class="btn font-italic" href="<?= base_url()?>C_Home" style="color:blue">Home Maridoc</a>
                    </div>
            </div>
        </div>
    </div>

</body>
</html>