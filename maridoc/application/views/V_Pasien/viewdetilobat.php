<div class="container py-3 my-3 text-capitalize">

  <div class="row">
    <div class="col-9">
      <?php foreach($getdata as $data){ ?>
        <!-- kolom kiri -->
        <div class="row">
          <div class="col text-center">
            <div class="bg-dark text-uppercase text-white px-3 pt-2 pb-1 mb-3">
              <h6>obat <?php echo $data['nama_obat']; ?></h6>
            </div>
          </div>
        </div>



        <div class="row">
          <div class="col ">
            <table class="table table-striped">
              <tbody>
                <tr>
                  <th scope="row">Kategori</th>
                  <td>: Obat <?php echo $data['katagori']; ?></td>
                </tr>
                <tr>
                  <th scope="row">kode</th>
                  <td>: <?php echo $data['kode_obat']; ?></td>
                </tr>
                <tr>
                  <th scope="row">nama</th>
                  <td>: <?php echo $data['nama_obat']; ?></td>
                </tr>
                <tr>
                  <th scope="row">harga</th>
                  <td>: Rp <?php echo $data['harga_obat']; ?>,00</td>
                </tr>
              </tbody>
            </table>
              <div class="text-center">
                <a class="btn btn-outline-success" href="<?= base_url();?>C_Pasien/belidetil/<?php echo $data['kode_obat'] ?>" role="button"style="width:85"><span class="fa fa-shopping-cart pr-2"></span>beli</a>
              </div>

          </div>
        </div>
      <?php }?>
    </div>