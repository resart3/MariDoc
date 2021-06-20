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

    <body class="d-flex flex-column">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <a class="navbar-brand" href="">
                <img src="<?= base_url(); ?>/images/logo.png" width="35" height="35">
            </a>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url(); ?>C_Pasien"><span class="fa fa-home pr-2"></span>Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url(); ?>C_Pasien/menuobat"><span class="fa fa-book pr-2"></span>Menu Obat</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url(); ?>C_Pasien/tabkeranjang"><span class="fa fa-shopping-cart pr-2"></span>Keranjang</a>
                    </li>
                    
                </ul>
                <?php ?>


                <div class="form-inline">
                    <?php foreach($user as $data){ ?>
                        <a class="nav-item nav-link active text-uppercase" style="color:white" href=""><span class="fa fa-user-circle pr-1"></span> <?php echo $data['username_c']; ?></a>                        
                        <a class="nav-item nav-link active text-uppercase" style="color:white" href=""><span class="fa fa-dollar pr-1"></span> <?php echo $data['saldo']; ?></a>                        
                        
                    <?php }?>

                    <a class="nav-item nav-link active " style="color:white" href="<?= base_url(); ?>C_Home/login_p"><span class="fa fa-sign-out pr-2"></span>Logout</a>
                </div>
            </div>
        </nav>
