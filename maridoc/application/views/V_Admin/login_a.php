<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous"> -->
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
        <!-- MY CSS --> 
        <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
        
        <title><?php echo $judul ?></title>
        <link rel="icon" href="<?= base_url(); ?>/images/logo.png" type="image/ico">
        <style></style>
    </head>
    <body class="text-center">
    <div class="container my-5">
        <div class="row justify-content-center py-4">
            <div class="col-md-4 bg-light pt-4 rounded border">

                <?php if (validation_errors() || $this->session->flashdata('result_login')) { ?>
                    <div class="alert alert-error">
                        <strong style="color:red">Warning!</strong><br>
                        <?php echo validation_errors(); ?>
                        <?php echo $this->session->flashdata('result_login'); ?>
                    </div>    
                <?php } ?>

                <?php echo form_open('C_Admin/login_process'); ?>
                    <h1>Admin</h1>
                    <h1 class="h3 mb-3 font-weight-normal pt-3">Please Sign In</h1>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nip" placeholder="NIP">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary float-right mb-3">Sign in</button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</body>
</html>