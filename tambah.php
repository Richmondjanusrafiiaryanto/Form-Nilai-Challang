<?php
include 'aset/header.php';
?>
<div class="container">
  <div class="row mt-4">
    <div class="col-md-9">
      <div class="card bg-dark">
        <div class="card-header">
          <h2 class="card-title text-white"><i class="fas fa-edit"></i>Tambahkan Data Nilai Siswa</h2>
        </div>
        <div class="card-body">
          <form method="post" action="proses-tambah.php">
            <div class="form-group text-white">
              <label for="NIS">NIS</label>
              <input type="text" class="form-control" name="NIS" id="NIS" placeholder="Masukkan NIS">
            </div>
            <div class="form-group text-white">
              <label for="Nama">Nama</label>
              <input type="text" class="form-control" name="Nama" id="Nama" placeholder="Masukkan Nama">
            </div>
            <div class="form-group text-white">
              <label for="Jurusan">Jurusan</label>
              <select name="Jurusan" class="form-control">
                <option value="RPL">RPL</option>
                <option value="TKJ">TKJ</option>
                <option value="MM">MM</option>
              </select>
            </div>
            <div class="form-group text-white">
              <label for="kelas">Kelas</label>
              <select name="Kelas" class="form-control">
                <option value="X">X</option>
                <option value="XI">XI</option>
                <option value="XII">XII</option>
              </select>
            </div>
            <div class="form-group text-white">
              <label for="Alamat">Alamat</label>
              <input type="text" class="form-control" name="Alamat" id="Alamat" placeholder="Masukkan Alamat">
            </div>
            <div class="form-group text-white">
              <label for="Nilai_Web">Nilai Web</label>
              <input type="text" class="form-control" name="Nilai_Web" id="Nilai_Web" placeholder="Masukkan Nilai Web">
            </div>
            <div class="form-group text-white">
              <label for="Nilai_PBO">Nilai PBO</label>
              <input type="text" class="form-control" name="Nilai_PBO" id="Nilai_PBO" placeholder="Masukkan Nilai Pbo">
            </div>
            <div class="form-group text-white">
              <label for="Nilai_Basdat">Nilai Basdat</label>
              <input type="text" class="form-control" name="Nilai_Basdat" id="Nilai_Basdat" placeholder="Masukkan Nilai Basdat">
            </div>
            <div class="form-group text-white">
              <label for="Nilai_Desain">Nilai Desain</label>
              <input type="text" class="form-control" name="Nilai_Desain" id="Nilai_Desain" placeholder="Masukkan Nilai Desain">
            </div>
            <div class="form-group text-white">
              <label for="Nilai_Progdas">Nilai Progdas</label>
              <input type="text" class="form-control" name="Nilai_Progdas" id="Nilai_Progdas" placeholder="Masukkan Nilai Progdas">
            </div>

            <button type="submit" class="btn btn-primary" name="input">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include 'aset/footer.php';
?>
