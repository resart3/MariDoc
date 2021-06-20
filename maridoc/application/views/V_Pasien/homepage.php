<div class="container py-3 my-3 text-capitalize">

  <div class="row">
    <div class="col-9">
          <!-- kolom kiri -->
      <div class="row">
        <div class="col">
          <div class="bg-dark text-uppercase text-white px-3 pt-2 pb-1 mb-3">
            <h6>daftar dokter</h6>
          </div>
        </div>
      </div>

      <div class="row justify-content-between">
        <div class="col-5 text-center form-inline">
          <div class="text-uppercase mr-3">
            <a class="btn btn-outline-dark" href="<?= base_url();?>C_Pasien" role="button" style="width:90px">ALL</a>
          </div>
        </div>

        <div class="col-4">
          <?php echo form_open('C_Pasien/filternamadokter'); ?>
            <div class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="text" name="search_obat" placeholder="Masukan nama dokter">
              <button type="submit" class="btn btn-outline-primary my-2 my-sm-0" type="submit"> <span class="fa fa-search"></span></button>
            </div>
          <?php echo form_close(); ?>
        </div>
      </div>

      <div class="row">
        <?php foreach($getdata as $data){ ?>
          <div class="col-6">
            <div class="bg-light px-3 py-1 my-2 border border-dark ">
              <div class="pt-1">

                <div class="media">
                    <img src="<?= base_url();?>/images/doctor.png" class="align-self-center mr-3 rounded-circle" style="width:100px" >
                    <div class="media-body text-justify">
                        <p class="font-weight-bold"><?php echo $data['gelar']; ?>. <?php echo $data['nama']; ?></p>
                        <p> <?php echo $data['ket_gelar']; ?></p>
                        <p><?php echo $data['alamat']; ?></p>
                    </div>
                </div>

              </div>
              <div class="py-2 mx-2">
                <a class="btn my-3"></a>
                <!-- <a class="btn btn-outline-secondary" href="" role="button" style="width:85px"><span class="fa fa-info-circle pr-2"></span>detil</a> -->
                <a class="btn btn-outline-primary float-right" href="<?= base_url();?>C_Pasien/chat/<?php echo $data['username_d']; ?>" role="button"style="width:85px"><span class="fa fa-wechat pr-2"></span>chat</a>
              </div>
            </div>
          </div>
        <?php }?>
      </div>
      
    </div>



