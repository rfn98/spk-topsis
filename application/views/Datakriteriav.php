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
            <li class="breadcrumb-item active" aria-current="page">Data Kriteria</li>
            </ol>
         </nav>
          
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                      <label for="kodekriteria" class="col-sm-2 col-form-label">Kode Kriteria</label>
                        <div class="col-auto">
                        <input type="text" class="form-control" id="inputkodekriteria">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="namakriteria" class="col-sm-2 col-form-label">Nama Kriteria</label>
                        <div class="col-auto">
                          <input type="text" class="form-control" id="inputnamakriteria">
                        </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="bobotkriteria" class="col-sm-2 col-form-label">Bobot Kriteria</label>
                        <div class="col-auto">
                          <input type="text" class="form-control" id="inputbobotkriteria">
                        </div>
                    </div>
              </div>

              <div class="container-lg">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Tambah Data SubKriteria
                </button>

                <!--table modal--> 
                  <table class="table table-striped">
                      <thead>
                        <tr>
                            <th scope="col">No</th>
                              <th scope="col">Nama SubKriteria</th>
                              <th scope="col">Nilai Rating</th>
                            <th scope="col">Aksi</th>
                          </tr>
                            <tr>
                              <th scope="row"></th>
                              <td></td>
                              <td></td>
                              <td>
                                <button type="button" class="btn btn-info">Tambah</button>
                              </td>
                            </tr>
                        </thead>
                    </table>

              <!-- button modal -->
                    <div class="modal-footer">
                            <button type="button" class="btn btn-success">Simpan</button>
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                    </div>
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
              <th scope="col">Kode Kriteria</th>
              <th scope="col">Nama Kriteria</th>
              <th scope="col">Bobot Kriteria</th>
              <th scope="col">Aksi</th>
            </tr>
            <?php $no = 1; foreach($data as $k => $v): ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $v->kd_kriteria ?></td>
              <td><?= $v->nama_kriteria ?></td>
              <td><?= $v->bobot_kriteria ?></td>
              <td><button type="button" class="btn btn-warning">Ubah</button>
              <button type="button" class="btn btn-danger">Hapus</button>
              </td>
            </tr>
            <?php endforeach?>
          </thead>
        </table>
  </body>
</html>

