
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-6 bg-light my-4 rounded border pb-4">
      <h2 class="alert alert-primary text-center mt-5 ">FORMULIR REGISTRASI DOKTER</h2>
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
      
      <?php echo form_open('C_Admin/adddokter'); ?>
        <div class="form-group">
          <label>Nama Lengkap</label>
          <input type="text" name="nama" class="form-control" placeholder="Masukkan nama lengkap Dokter" required>
        </div>

        <div class="form-group">
            <label>Nomor Ijin Praktek</label>
            <div class="row">
                <div class="col-md-2">
                    <input type="text" name="no_ijin_prak" class="form-control"required>
                </div>
            </div>
        </div>
        

        <div class="form-group">
          <label> Gelar </label>
          <input type="textarea" name="gelar" class="form-control" placeholder="Masukkan Gelar Dokter" required>
        </div>

        <div class="form-group">
          <label>Keterangan gelar</label>
          <input type="text" name="ket_gelar" class="form-control" placeholder="Masukkan Keterangan Gelar Dokter" required>
        </div>

        <div class="form-group">
          <label>Alamat</label>
          <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat Dokter" required>
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

        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" name="ttl" class="form-control" required>
                </div>
            </div>
        </div>

        <div class="form-group">
          <label>Username</label>
          <input type="text" name="username_d" class="form-control" placeholder="Masukkan Username Dokter" required>
        </div>

        <div class="form-group">
          <label>Password</label>
          <input type="Password" name="password" class="form-control" placeholder="Masukkan Password Dokter" required>
        </div>

        <button type="submit" class="btn btn-primary float-right">SAVE</button>
      <?php echo form_close(); ?>
      <a class="btn btn-outline-primary float-right mx-4" href="<?= base_url()?>C_Admin/dokter">Back</a>
         
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
                </form>
            </div>
        </div>
    </div>