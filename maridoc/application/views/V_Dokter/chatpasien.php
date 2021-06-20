<div class="container py-3 my-3 text-capitalize">

  <div class="row">
    <div class="col-9">
          <!-- kolom kiri -->
      <div class="row">
        <div class="col">
          <div class="bg-dark text-uppercase text-white px-3 pt-2 pb-1 mb-3">
            <?php foreach($getdata as $data){ ?>
                <h6><span class="fa fa-wechat"> <?php echo $data['username_c']; ?></h6>
                <?php $usc = $data['username_c'] ?>
            <?php }?>
          </div>
        </div>
      </div>
      <?php foreach($pesan as $data){ ?>
      <div class="row justify-content-center">
        
          <div class="col-10 mx-3">
            <div class="text-right">
                <span class="badge badge-pill badge-success"><?php echo $data['pesan_d']; ?></span>
            </div>
            <div class=""></div>
                <span class="badge badge-pill badge-light"><?php echo $data['pesan_c']; ?></span>
            </div>
        
      </div>
      <?php }?>

      <div class="row mt-5">
        <div class="col">
            <?php echo form_open('C_Dokter/kirimchat/'.$usc); ?>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" class="form-control rounded-pill" placeholder="Ketik pesan" name="pesan_d">
                    <div class="input-group-prepend">
                    
                    <button class="btn" type="submit"><span class="fa fa-send mx-2" id="inputGroup-sizing-sm"></span></button>
                    </div>
                </div>
            <?php echo form_close(); ?>
        </div>
      </div>

    </div>



