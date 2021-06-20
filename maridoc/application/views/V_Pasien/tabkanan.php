    <!-- kolom kanan -->
    <div class="col-3">
      <div class="border boder-dark">
        <div class="bg-dark text-uppercase text-white text-center px-3 pt-2 pb-1">
          <h6>keranjang</h6>
        </div>
    
        <div class="py-2 text-capitalize font-weight-bold pl-4 my-3" style="font-size:14px">
          <table>
            <?php foreach($count as $data){ ?>
              <tr>
                <td>Jumlah</td>
                <td>: <?php echo $data; ?> pcs</td>
              </tr>
            <?php }?>
            <?php foreach($sum as $data){ ?>
              <tr>
                <td>Total</td>
                <td>: Rp <?php echo $data; ?>,00</td>
              </tr>
            <?php }?>
          </table>
        </div>

        <div class="pb-3 text-center">
            <a id="keranjang" class="btn btn-outline-success" href="<?= base_url(); ?>C_Pasien/tabkeranjang" role="button"style=""><span class="fa fa-shopping-cart pr-2"></span>keranjang</a>
        </div>
      </div>

      <div class="border boder-dark mt-4">
        <div class="bg-dark text-uppercase text-white text-center px-3 pt-2 pb-1">
          <h6>tentang kami</h6>
        </div>
        <div class="py-2 text-lowercase pl-4 my-3" style="font-size:14px">
            <p class="my-0"> <span class="fa fa-envelope pr-2"></span>muzakkialfarisi@gmail.com</p>
            <p class="my-0"> <span class="fa fa-phone pr-2"></span>0 8 7 7 1 1 9 9 3 8 5 5</p>
            <p class="my-0"> <span class="fa fa-instagram pr-2"></span>m u z a k k i a l f a r i s i</p>
            <p class="my-0"> <span class="fa fa-twitter pr-2"></span>m u z a k k i a l f a r i s</p>
        </div>
      </div>

      <!-- iklan -->
      <div class="border boder-dark mt-4">
        <div class="bg-dark text-uppercase text-white text-center px-3 pt-2 pb-1">
          <h6>information</h6>
        </div>
        <div class="py-2 text-lowercase px-4 my-3" style="font-size:14px">
       
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="<?= base_url(); ?>/images/iklan_1.png" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url(); ?>/images/iklan_2.png" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url(); ?>/images/iklan_3.png" alt="Third slide">
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>