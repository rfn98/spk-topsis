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
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>

<!-- body-->
<body>
  <div id="app">
    <div id="content-wrapper">
    <div class="container-fluid" id="app">
          
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
                      <th scope="col" class="th-weight"><?= $v->nama_kriteria?></th>
                      <?php endforeach; ?>
                    </tr>
                    <?php $no = 1; foreach($listMatrixDecision as $k => $v): ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td class="th-alternatif"><?=$v->nama_alternatif?></td>
                      <?php foreach($header as $x => $y): ?>
                      <td class="<?= $y->nama_kriteria ?>" data-alternatif="<?= $v->nama_alternatif ?>"><?= round(json_decode($v->detail)->{$y->nama_kriteria}/$headerNormalize->{$y->nama_kriteria}, 2) * $headerWeight->{$y->nama_kriteria}?></td>
                      <?php endforeach?>
                    </tr>
                    <?php endforeach?>
                  </thead>
                </table>
              </div>
  
              <!-- button modal -->
                    <div class="modal-footer">
                        <!-- Button trigger modal hitung topsis -->
                       <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nexttopsis3">
                        Next
                        </button>
                  </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="nexttopsis3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">4. Menentukan matriks solusi ideal positif dan solusi ideal negatif</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <!-- modal body -->
              <div class="modal-body">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Solusi Ideal</th>
                      <?php foreach($header as $k => $v): ?>
                      <th scope="col"><?= $v->nama_kriteria?></th>
                      <?php endforeach; ?>
                    </tr>
                    <tr v-for="(item, index) in listIdealSolution">
                      <td>{{index + 1}}</td>
                      <td>{{item.solution}}</td>
                      <?php foreach($header as $k => $v): ?>
                      <td>{{item["<?= $v->nama_kriteria ?>"]}}</td>
                      <?php endforeach; ?>
                    </tr>
                  </thead>
                </table>
              </div>
  
              <!-- button modal -->
                    <div class="modal-footer">
                        <!-- Button trigger modal hitung topsis -->
                       <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nexttopsis4">
                        Next
                        </button>
                  </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="nexttopsis4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content" style="width: max-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">5. Menghitung jarak antara nilai alternatif dari matriks solusi ideal positif & matriks solusi ideal negatif</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <!-- modal body -->
              <div class="modal-body">
                <div class="row">
                  <div class="col">
                    <h6>Solusi Ideal Positif</h6>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Nama Alternatif</th>
                          <th scope="col">Jarak Alternatif</th>
                        </tr>
                        <tr v-for="(item, index) in listAlternatifPlus">
                          <td>{{index + 1}}</td>
                          <td>{{item.nama_alternatif}}</td>
                          <td>{{item.result_plus}}</td>
                        </tr>
                      </thead>
                    </table>
                  </div>
                  <div class="col">
                    <h6>Solusi Ideal Negatif</h6>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Nama Alternatif</th>
                          <th scope="col">Jarak Alternatif</th>
                        </tr>
                        <tr v-for="(item, index) in listAlternatifMinus">
                          <td>{{index + 1}}</td>
                          <td>{{item.nama_alternatif}}</td>
                          <td>{{item.result_minus}}</td>
                        </tr>
                      </thead>
                    </table>
                  </div>
                </div>
              </div>
  
              <!-- button modal -->
                    <div class="modal-footer">
                        <!-- Button trigger modal hitung topsis -->
                       <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#lasttopsis">
                        Next
                        </button>
                  </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="lasttopsis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">6. Menentukan nilai preferensi untuk setiap alternatif</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <!-- modal body -->
              <div class="modal-body">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama Alternatif</th>
                      <th scope="col">Nilai Preferensi</th>
                    </tr>
                    <tr v-for="(item, index) in listPreferences">
                      <td>{{index + 1}}</td>
                      <td>{{item.nama_alternatif}}</td>
                      <td>{{item.result}}</td>
                    </tr>
                  </thead>
                </table>
              </div>
  
              <!-- button modal -->
                    <div class="modal-footer">
                        <!-- Button trigger modal hitung topsis -->
                       <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ranking">
                        Next
                        </button>
                  </div>
            </div>
          </div>
        </div>
        <!-- <div class="modal fade" id="ranking" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">7. Perankingan Alternatif</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama Alternatif</th>
                      <th scope="col">Nilai</th>
                    </tr>
                    <tr v-for="(item, index) in listRanking">
                      <td>{{index + 1}}</td>
                      <td>{{item.nama_alternatif}}</td>
                      <td>{{item.result}}</td>
                    </tr>
                  </thead>
                </table>
              </div>
  
                    <div class="modal-footer">
                       <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#">
                        Next
                        </button>
                  </div>
            </div>
          </div>
        </div> -->

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
  </div>
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <script type="text/javascript">
    const vue = new Vue({
      el: '#app',
      data: {
        listIdealSolution: null,
        listAlternatifPlus: null,
        listAlternatifMinus: null,
        listPreferences: null,
        listRanking: null
      },
      async mounted() {
        const list = []
        const listAlternatifPlus = []
        const listAlternatifMinus = []
        const objPlus = {}
        const objMinus = {}
        const criteria = $('.th-weight').toArray().map(el => $(el).text())
        const alternatif = $('.th-alternatif').toArray().map(el => $(el).text())
        objPlus.solution = 'Solusi Ideal Positif (+)'
        objMinus.solution = 'Solusi Ideal Negatif (-)'
        for (const idx in criteria) objPlus[criteria[idx]] = Math.max(...$('.' + criteria[idx].replace(' ', '.')).toArray().map(e => eval($(e).text())))
        list.push(objPlus)
        for (const idx in criteria) objMinus[criteria[idx]] = Math.min(...$('.' + criteria[idx].replace(' ', '.')).toArray().map(e => eval($(e).text())))
        list.push(objMinus)
        this.listIdealSolution = list
        for (const idx in alternatif) {
          const objDetailPlus = {}
          const objDetailMinus = {}
          const objPreference = {}
          const listPlus = []
          const listMinus = []
          const testPlus = []
          const testMinus = []
          objDetailPlus.nama_alternatif = alternatif[idx]
          objDetailMinus.nama_alternatif = alternatif[idx]
          for (const x in criteria) 
            listPlus.push((eval($(`.${criteria[x].replace(' ', '.')}[data-alternatif="${alternatif[idx]}"]`).text()) - objPlus[criteria[x]])**2)
          for (const x in criteria) listMinus.push((eval($(`.${criteria[x].replace(' ', '.')}[data-alternatif="${alternatif[idx]}"]`).text()) - objMinus[criteria[x]])**2)
          objDetailPlus.result_plus = Math.sqrt(listPlus.reduce((a, b) => a + b)).toFixed(2)
          objDetailMinus.result_minus = Math.sqrt(listMinus.reduce((a, b) => a + b)).toFixed(2)
          listAlternatifPlus.push(objDetailPlus)
          listAlternatifMinus.push(objDetailMinus)
        } 
        this.listAlternatifPlus = listAlternatifPlus
        this.listAlternatifMinus = listAlternatifMinus
        this.listPreferences = this.listAlternatifPlus.map((item, i) => Object.assign({}, item, this.listAlternatifMinus[i]))
        for (const idx in this.listPreferences) this.listPreferences[idx].result = (
          eval(this.listPreferences[idx].result_minus)/(eval(this.listPreferences[idx].result_minus) + eval(this.listPreferences[idx].result_plus))
        ).toFixed(2)
        this.listPreferences.sort((a, b) => b.result - a.result)
      }
    })
  </script>
  </body>
</html>

