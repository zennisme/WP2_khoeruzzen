<html>
<head>
    <title>Data Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/view-form-matakuliah.css">
</head>
<body class="bg-light">

    <div class="container ">

      <h2 class="mb-4 mt-4">Data Transaksi</h2>

      <div class="row m-auto d-flex justify-content-between align-items-center ">
        <div class="col-md-6 bg-white p-4 shadow-sm">
          <div class="kode">
            <label class="col-sm-5 col-form-label">Nama Pembeli</label>
              <label><?= $nama; ?></label>
          </div>
          
          <div class="merek">
            <label class="col-sm-5 col-form-label">Merek</label>
            <label><?= $merek; ?></label>
          </div>
          <div class="merek ">
            <label class="col-sm-5 col-form-label">Harga</label>
            <label><?= $harga; ?></label>
          </div>
          <div class="ukuran mb-4 ">
            <label class="col-sm-5 col-form-label">Ukuran</label>
            <label><?= $ukuran; ?></label>
          </div>
          <div class="link ">
            <a href="<?= base_url('transaksi');?>" class="btn btn-primary">Kembali</a>
          </div>
    
        </div>
      </div>  

    </div>


</body>
</html>