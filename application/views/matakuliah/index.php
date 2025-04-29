<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           <h1>Mata Kuliah</h1>

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Mata Kuliah</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <a href="<?= base_url('matakuliah/tambah');?>" class="btn btn-primary mb-3">Create</a>
          <?php if (!empty($matakuliah)): ?>
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Kode Matakuliah</th>
                  <th>Nama Matakuliah</th>
                  <th>Jenis</th>
                  <th>Program Studi</th>
                  <th>Action</th>  
                </tr>
              </thead>
              <tbody>
                <?php foreach($matakuliah as $b): ?>
                  <tr>
                    <td><?= $b['kodemk'];?></td>
                    <td><?= $b['namamk'];?></td>
                    <td><?= $b['jenis'];?></td>
                    <td><?= $b['prodi'];?></td>
                    <td>
                      <a href="<?=base_url('matakuliah/edit/'. $b['idmatakuliah']); ?>" class="btn btn-sm btn-info">Edit</a>
                      <a href="<?=base_url('matakuliah/hapus/'. $b['idmatakuliah']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin Hapus?')">Hapus</a>
                    </td>
                  </tr>
                  <?php endforeach;?>
              </tbody>
            </table>
            <?php else: ?>
              <p> Tidak ada mata kuliah yang tersedia</p>
              <?php endif; ?>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
</div>