<?php
echo $this->extend('dataView/layout');
echo $this->section('konten');
?>
<main class="flex-shrink-0">
  <div class="container">
    <div class="row mt-3">
      <div class="col-lg-4">
        <table class="table">
          <h3>Tabel 1</h3>
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">JK</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Mata Kuliah</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $i = 1;
            foreach ($dataMatkulDenganJumlah as $my): ?>
              <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $my['jk'] ?></td>
                <td><?= $my['jumlah_mahasiswa'] ?></td>
                <td><?= $my['mata_kuliah'] ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

      <div class="col-lg-4">
        <table class="table">
          <h3>Tabel 2</h3>
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">SKS</th>
              <th scope="col">Mata Pelajaran</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $i = 1;
            foreach ($dataMakul as $my): ?>
              <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $my['sks'] ?></td>
                <td><?= $my['mata_kuliah'] ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

      <div class="col-lg-4">
        <table class="table">
          <h3>Tabel 3</h3>
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">JK</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Mata Pelajaran</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $i = 1;
            foreach ($dataMakulJumlahHasil as $my): ?>
              <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $my['jk'] ?></td>
                <td><?= $my['jumlah_mahasiswa'] ?></td>
                <td><?= $my['mata_kuliah'] ?></td>
                <td><?= $my['status'] ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

    </div>
  </div>
</main>

<?php
echo $this->endSection();
?>