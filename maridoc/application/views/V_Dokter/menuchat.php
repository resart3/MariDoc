<div class="container py-3 my-3 text-capitalize">

  <div class="row">
    <div class="col-9">
          <!-- kolom kiri -->
      <div class="row">
        <div class="col bg-dark py-0 my-0 mx-3">
          <div class=" text-uppercase text-white px-3 float-left">
            <h6 class="mt-2">Chat</h6>
          </div>
          <!-- <?php echo form_open(''); ?>
            <div class="form-inline my-2 my-lg-0 float-right ">
              <input class="form-control mr-sm-2" type="text" name="search_obat" placeholder="Cari Nama">
              <button type="submit" class="btn btn-primary my-2 my-sm-0" type="submit"> <span class="fa fa-search"></span></button>
            </div>
          <?php echo form_close(); ?> -->
        </div> 
      </div>


      <div class="row mt-3">
      <?php foreach($getdata as $data){ ?>
          <div class="col-12 btn">
            <a href="<?= base_url(); ?>C_Dokter/detilchat/<?php echo $data['username_c']; ?>" role="button" class="nav-item nav-link btn py-0">
              <div class="bg-light px-3 py-1 my-2 border border-dark ">
  
                  <div class="media">
                      <img src="<?= base_url();?>/images/patient.png" class="align-self-center mr-3 rounded-circle" style="width:20px" >
                      <div class="media-body text-justify">
                          <p class="font-weight-bold mt-3"><?php echo $data['username_c']; ?></p>
                      </div>
                  </div>

              </div>
            </a>
          </div>
        <?php }?>
      </div>
      
    </div>
