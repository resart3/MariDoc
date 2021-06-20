<div class="container py-3 my-3 text-capitalize">
  <div class="row">
    <div class="col-9">
          <!-- kolom kiri -->
      <div class="row">
        <div class="col">
          <div class="bg-dark text-uppercase text-white px-3 pt-2 pb-1 mb-3">
            <h6>daftar pemesanan</h6>
          </div>
        </div>
      </div>
      <div class="row text-center">
        <div class="col">

        <?php if ($this->session->flashdata('titem')) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Tidak ada <strong>Item</strong> <?= $this->session->flashdata('titem'); ?>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('item')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Pembayaran <strong>Item</strong> <?= $this->session->flashdata('item'); ?>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php endif; ?>

          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">no.</th>
                <th scope="col">nama</th>
                <th scope="col">kategori</th>
                <th scope="col">harga</th>
                <th scope="col">status</th>
              </tr>
            </thead>
            <tbody>
            <?php $i = 0;
              foreach($getdata as $data){
              $i = $i + 1;
            ?>
              <tr>
                <td> <?php echo $i?> </td>
                <td> <?php echo $data['nama_obat'];?> </td>
                <td> <?php echo $data['katagori'];?> </td>
                <td> <?php echo $data['harga_obat'];?> </td>
                <td> <a class="btn btn-outline-danger" href="<?= base_url(); ?>C_Pasien/deleteitem/<?php echo $data['id_pemesanan'];?>" role="button"style=""><span class="fa fa-trash pr-2"></span>hapus</a> </td>
              </tr>
            <?php }?>
            </tbody>
            <tfoot>
              <tr>
                <!-- <th colspan="3">jumlah</th> -->
                <?php foreach($sum as $data){ ?>
                  <th colspan="6">jumlah - Rp <?php echo $data; ?>,00</th>
                <?php }?>
              </tr>
              <tr>
                <th id="beli_obat" colspan="5"><a class="btn btn-primary" href="<?= base_url(); ?>C_Pasien/bayar" role="button"style=""><span class="fa fa-check-square pr-2"></span>bayar</a> </th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div> 
    </div>

      
