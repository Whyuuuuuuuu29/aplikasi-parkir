<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Aplikasi  Parkir</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              Tambah  Aplikasi Parkir
            </div>
            <div class="card-body">
              <form action="simpan-parkir.php" method="POST">
                
                <div class="form-group">
                <div class="form-group">
                  <label>JENIS KENDARAAN</label><br>
                  <select class ="form-control" name="jenis_kendaraan" id="jenis_kendaraan">
                    <option value="Motor">Motor</option>
                    <option value="Mobil">Mobil</option>

                  <label>NOMOR PLAT</label>
                  <input type="text" name="nomor_plat" placeholder="Masukkan No Plat" class ="form-control">
                </div>

                
              
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>



