<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SPEK VPS</title>

    <!-- Link asset-->
    <link rel="stylesheet" type="text/css" href="asset/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="asset/bootstrap5/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="asset/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="asset/fontawesome/css/brands.css">
    <link rel="stylesheet" type="text/css" href="asset/fontawesome/css/solid.css">
    <link rel="stylesheet" type="text/css" href="asset/bootstrap5/css/stickyfooter.css">
    <script type="text/javascript" src="asset/bootstrap5/js/bootstrap.js"></script>
    <script type="text/javascript" src="asset/bootstrap5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="asset/bootstrap5/js/bootstrap.bundle.min.js"></script>
</head>

<!-- body-->
<body>
  <div id="content-wrapper">
    <div class="container-fluid">
          
        <!-- Breadcrumbs -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="Menu">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Alternatif</li>
            </ol>
         </nav>
          
        <!-- Button trigger modal tambah data -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahdata">
        Tambah
        </button>
        <!-- Button trigger modal hitung topsis -->
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#hitungtopsis">
        Hitung TOPSIS
        </button>

        <!-- Modal tambah -->
        <div class="modal fade" id="tambahdata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kriteria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <!-- modal body -->
              <div class="modal-body">
              <!-- form input modal-->
                    <div class="mb-3 row">
                      <label for="kodealternatif" class="col-sm-2 col-form-label">Kode Alternatif</label>
                        <div class="col-auto">
                        <input type="text" class="form-control" id="inputkodekriteria">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="namaalternatif" class="col-sm-2 col-form-label">Nama Alternatif</label>
                        <div class="col-auto">
                          <input type="text" class="form-control" id="inputnamaalternatif">
                        </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="namakriteria" class="col-sm-2 col-form-label">Nama Kriteria</label>
                        <div class="col-auto">
                          <input type="text" class="form-control" id="inputnamakriteria">
                        </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="namakriteria" class="col-sm-2 col-form-label">Nama Kriteria</label>
                        <div class="col-auto">
                          <input type="text" class="form-control" id="inputnamakriteria">
                        </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="namakriteria" class="col-sm-2 col-form-label">Nama Kriteria</label>
                        <div class="col-auto">
                          <input type="text" class="form-control" id="inputnamakriteria">
                        </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="namakriteria" class="col-sm-2 col-form-label">Nama Kriteria</label>
                        <div class="col-auto">
                          <input type="text" class="form-control" id="inputnamakriteria">
                        </div>
                    </div>
                </div>

              
              <!-- button modal -->
                    <div class="modal-footer">
                            <button type="button" class="btn btn-success">Simpan</button>
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
          </div>
        </div>

        <!-- Modal hitung topsis -->
        <div class="modal fade" id="hitungtopsis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">1. Data Matriks Keputusan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <!-- modal body -->
              <div class="modal-body">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Alternatif</th>
                      <?php foreach($header as $k => $v): ?>
                      <th scope="col"><?= $v->nama_kriteria?></th>
                      <?php endforeach; ?>
                    </tr>
                    <?php $no = 1; foreach($listMatrixDecision as $k => $v): ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?=$v->nama_alternatif?></td>
                      <?php foreach($header as $x => $y): ?>
                      <td><?= json_decode($v->detail)->{$y->nama_kriteria}?></td>
                      <?php endforeach?>
                    </tr>
                    <?php endforeach?>
                  </thead>
                </table>
              </div>
  
              <!-- button modal -->
                    <div class="modal-footer">
                        <!-- Button trigger modal hitung topsis -->
                       <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nexttopsis">
                        Next
                        </button>
                  </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="nexttopsis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">2. Data Matriks Keputusan Ternormalisasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <!-- modal body -->
              <div class="modal-body">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Alternatif</th>
                      <?php foreach($header as $k => $v): ?>
                      <th scope="col"><?= $v->nama_kriteria?></th>
                      <?php endforeach; ?>
                    </tr>
                    <?php $no = 1; foreach($listMatrixDecision as $k => $v): ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?=$v->nama_alternatif?></td>
                      <?php foreach($header as $x => $y): ?>
                      <td><?= round(json_decode($v->detail)->{$y->nama_kriteria}/$headerNormalize->{$y->nama_kriteria}, 2)?></td>
                      <?php endforeach?>
                    </tr>
                    <?php endforeach?>
                  </thead>
                </table>
              </div>
  
              <!-- button modal -->
                    <div class="modal-footer">
                        <!-- Button trigger modal hitung topsis -->
                       <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nexttopsis2">
                        Next
                        </button>
                  </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="nexttopsis2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">3. Data Matriks Keputusan Ternormalisasi Terbobot</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <!-- modal body -->
              <div class="modal-body">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Alternatif</th>
                      <?php foreach($header as $k => $v): ?>
                      <th scope="col"><?= $v->nama_kriteria?></th>
                      <?php endforeach; ?>
                    </tr>
                    <?php $no = 1; foreach($listMatrixDecision as $k => $v): ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?=$v->nama_alternatif?></td>
                      <?php foreach($header as $x => $y): ?>
                      <td><?= round(json_decode($v->detail)->{$y->nama_kriteria}/$headerNormalize->{$y->nama_kriteria}, 2) * $headerWeight->{$y->nama_kriteria}?></td>
                      <?php endforeach?>
                    </tr>
                    <?php endforeach?>
                  </thead>
                </table>
              </div>
  
              <!-- button modal -->
                    <div class="modal-footer">
                        <!-- Button trigger modal hitung topsis -->
                       <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#">
                        Next
                        </button>
                  </div>
            </div>
          </div>
        </div>

        <!-- end of modal -->
        <!-- tabel -->
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Alternatif</th>
              <?php foreach($header as $k => $v): ?>
              <th scope="col"><?= $v->nama_kriteria?></th>
              <?php endforeach; ?>
              <th scope="col">Aksi</th>
            </tr>
            <?php $no = 1; foreach($listAlternatif as $k => $v): ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?=$v->nama_alternatif?></td>
              <?php foreach($header as $x => $y): ?>
              <td><?= json_decode($v->detail)->{$y->nama_kriteria}?></td>
              <?php endforeach?>
              <td><button type="button" class="btn btn-warning">Ubah</button>
              <button type="button" class="btn btn-danger">Hapus</button>
              </td>
            </tr>
            <?php endforeach?>
          </thead>
        </table>
  </body>
</html>

