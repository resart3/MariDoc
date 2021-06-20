    <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-6 bg-light my-4 rounded border pb-4">
      <h2 class="alert alert-primary text-center mt-5 ">TAMBAH STOCK OBAT</h2>
      <?php if ($this->session->flashdata('ada')) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Kode Obat <strong>Sudah</strong> <?= $this->session->flashdata('ada'); ?>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
      <?php endif; ?>
      
      <?php echo form_open('C_Admin/addobat'); ?>
        <div class="form-group">
          <label>Kode Obat</label>
          <input type="text" name="kode_obat" class="form-control" placeholder="Masukkan kode obat" required>
        </div>

        <div class="form-group">
            <label>Nama Obat</label>
            <input type="text" name="nama_obat" class="form-control" placeholder="Masukkan nama obat" required>
        </div>
          

        <div class="form-group">
          <label>Kategori</label>
          <div class="form-check">
            <input type="radio" class="form-check-input" name="katagori" id="radio2" value="luar" >
            <label>Luar</label>
          </div>

          <div class="form-check">
            <input type="radio" class="form-check-input" name="katagori" id="radio2" value="dalam" >
            <label>Dalam</label>
          </div>
        </div>

        <div class="form-group">
            <label>Harga Obat</label>
            <input type="text" name="harga_obat" class="form-control" placeholder="Masukkan nama obat" required>
        </div>

        <button type="submit" class="btn btn-primary float-right">TAMBAH</button>
      <?php echo form_close(); ?>
        <a class="btn btn-outline-primary float-right mx-4" href="<?= base_url()?>C_Admin/obat ">Back</a>