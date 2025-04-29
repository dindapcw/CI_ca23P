<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           <h1>FORM MATA KULIAH</h1>

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
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Mata Kuliah</h3>
          <style>
        select, input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box; /* Agar padding tidak menambah lebar */
        }
    </style>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="box-body">
            <form action ="<?php echo base_url(). "matakuliah/insert";?>" method="POST">
            <div class="box-body">
                <div class="form-group">
                    <label for="kodemk">Kode Mata Kuliah</label>
                    <input type="text" class="form-control" name="kodemk" id="kodemk" placeholder="Kode Mata Kuliah" required>
                </div>
                <div class="form-group">
                    <label for="namamk">Nama Mata Kuliah</label>
                    <input type="text" class="form-control" name="namamk" id="namamk" placeholder="Nama Mata Kuliah" required>
                </div>
                <div class="form-group">
                    <label for="sks">SKS</label><br>
                    <select id="sks" name="sks" required>
                        <option value="">-- Pilihan --</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="semester">Semester</label><br>
                    <select id="semester" name="semester" required>
                        <option value="">-- Pilihan --</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jenis">Jenis</label><br>
                    <select id="jenis" name="jenis" required>
                        <option value="">-- Pilihan --</option>
                        <option value="Umum">Umum</option>
                        <option value="Wajib">Wajib</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="prodi">Program Studi</label><br>
                    <select id="prodi" name="prodi" required>
                        <option value="">-- PILIH --</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknologi Informasi">Teknologi Informasi</option>
                        <option value="Komputerisasi Akuntansi">Komputerisasi Akuntansi</option>
                    </select>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
    <div class="card-footer">
    </div>
</div>
</section>
</div>