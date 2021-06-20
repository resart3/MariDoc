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

        <title><?php echo $judul ?></title>
        <link rel="icon" href="<?= base_url(); ?>/images/logo.png" type="image/ico">
        <style></style>
  </head>
  <body>
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-6 bg-light my-4 rounded border pb-4">
      <h2 class="alert alert-primary text-center mt-5 ">FORMULIR REGISTRASI MARIDOC</h2>
      <?php if ($this->session->flashdata('ada')) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Username <strong>Sudah</strong> <?= $this->session->flashdata('ada'); ?>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
      <?php endif; ?>
      <?php if ($this->session->flashdata('lengkap')) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Isi <strong>Data</strong> dengan <?= $this->session->flashdata('lengkap'); ?>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
      <?php endif; ?>
      
      <?php echo form_open('C_Home/signup_process'); ?>
        <div class="form-group">
          <label>Nama Lengkap</label>
          <input type="text" name="nama" class="form-control" placeholder="Masukkan nama lengkap anda">
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Tempat Lahir</label>
              <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan tempat lahir anda">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Tanggal Lahir</label>
              <input type="date" name="tgl_lahir" class="form-control">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label>Jenis Kelamin</label>
          <div class="form-check">
            <input type="radio" class="form-check-input" name="jk" id="radio2" value="L">
            <label>Laki-Laki</label>
          </div>

          <div class="form-check">
            <input type="radio" class="form-check-input" name="jk" id="radio2" value="P">
            <label>Perempuan</label>
          </div>
        </div>

        <div class="form-group">
          <label> Alamat </label>
          <input type="textarea" name="alamat" class="form-control" placeholder="Masukkan Alamat anda">
        </div>

        <div class="form-group">
          <label>Username</label>
          <input type="text" name="username_c" class="form-control" placeholder="Masukkan Username anda">
        </div>

        <div class="form-group">
          <label>Password</label>
          <input type="Password" name="password" class="form-control" placeholder="Masukkan Password anda">
          <!-- <small>Password minimal terdiri dari 10 karakter</small> -->
        </div>

        <!-- <div class="form-group">
          <label>Konfirmasi Password</label>
          <input type="Password" name="password_acc" class="form-control" placeholder="Konfirmasi Password anda">
        </div> -->

        <button type="submit" class="btn btn-primary float-right">SAVE</button>
      <?php echo form_close(); ?>
        <a class="btn btn-outline-primary float-right mx-4" href="<?= base_url()?>C_Home/login_p ">Back</a>





         
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
                </form>
            </div>
        </div>
    </div>
</body>
</html>