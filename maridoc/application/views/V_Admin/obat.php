<div class="container py-3 my-3 text-capitalize">

  <div class="row">
    <div class="col">
          <!-- kolom kiri -->
      <div class="row">
        <div class="col">
          <div class="bg-dark text-uppercase text-white px-3 pt-2 pb-1 mb-3">
            <h6>daftar obat</h6>
          </div>
        </div>
      </div>

        <div class="row">
            <div class="col">
            <?php if ($this->session->flashdata('success')) : ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                  Obat <strong>Berhasil </strong> <?= $this->session->flashdata('success'); ?>.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
            <?php endif; ?>

            <?php if ($this->session->flashdata('berhasil')) : ?>
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  Obat <strong>Berhasil </strong> <?= $this->session->flashdata('berhasil'); ?>.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
            <?php endif; ?>

            <div class="pb-3 text-center">
            <a class="btn btn-outline-primary" href="<?= base_url(); ?>C_Admin/tambahobat" role="button"style=""><span class="fa fa-plus pr-2"></span>Tambah Obat</a>
            </div>
            
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">Kode Obat</th>
                    <th scope="col">Nama Obat</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Harga Obat</th>
                    <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($getdata as $data){ ?>
                    <tr>
                    <td><?= $data['kode_obat'];?></td>
                    <td><?= $data['nama_obat'];?></td>
                    <td><?= $data['katagori'];?></td>
                    <td><?= $data['harga_obat'];?></td>
                    <td> <a class="btn btn-outline-danger" href="<?= base_url(); ?>C_Admin/deleteobat/<?php echo $data['kode_obat'];?>" role="button"style=""><span class="fa fa-trash pr-2"></span>hapus</a> </td>
                    </tr>
                    <?php }?>
                </tbody>
                </table>
                
            </div>
        </div>
                    
      
    </div>
</div>