<div class="container py-3 my-3 text-capitalize">

  <div class="row">
    
    <div class="col-9">
          <!-- kolom kiri -->
      <div class="row">
        <div class="col">
          <div class="bg-dark text-uppercase text-white px-3 pt-2 pb-1 mb-3">
            <h6>daftar menu obat</h6>
          </div>
        </div>
      </div>

      <div class="row justify-content-between">
        <div class="col-5 text-center form-inline">
          <div class="text-uppercase mr-3">
            <a id="all"class="btn btn-outline-dark" href="<?= base_url();?>C_Pasien/menuobat" role="button" style="width:90px">ALL</a>
          </div>
          <div class="text-uppercase mr-3">
            <a id="luar" class="btn btn-outline-dark" href="<?= base_url();?>C_Pasien/filterluar" role="button" style="width:90px">luar</a>
          </div>
          <div class="text-uppercase mr-3">
            <a id="dalam" class="btn btn-outline-dark" href="<?= base_url();?>C_Pasien/filterdalam" role="button" style="width:90px">dalam</a>
          </div>
        </div>
        
        <div class="col-4">
          <?php echo form_open('C_Pasien/filternamaobat'); ?>
            <div class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="text" name="search_obat" placeholder="Masukan nama obat">
              <button type="submit" class="btn btn-outline-primary my-2 my-sm-0" type="submit"> <span class="fa fa-search"></span></button>
            </div>
          <?php echo form_close(); ?>
        </div>
        
      </div>

      <div class="row">
        <?php foreach($getdata as $data){ ?>
          <div class="col-4 text-center">
            <div class="bg-light px-3 py-1 my-2 border border-dark font-weight-bold">
              <div class="pt-1">
                <?php echo $data['nama_obat']; ?>
              </div>
              <div class="py-1">
                Rp <?php echo $data['harga_obat']; ?>.00
              </div>
              <div class="py-2 text-left">
                <!-- detil obat -->
                <a href="<?= base_url();?>C_Pasien/detilobat/<?php echo $data['kode_obat'] ?>" class="btn btn-outline-secondary" role="button" style="width:85px"><span class="fa fa-info-circle pr-2"></span>detil</a>
                <!-- beli obat -->
                <a id = "pesan_obat"href="<?= base_url();?>C_Pasien/pesankeranjang/<?php echo $data['kode_obat'] ?>" class="btn btn-outline-success float-right" role="button"style="width:85px"><span class="fa fa-shopping-cart pr-2"></span>beli</a>
              </div>
            </div>
          </div>
        <?php }?>
      </div>
      
    </div>
    


