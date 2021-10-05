<html>
<head>
    <title>Form Data Matakuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/view-form-matakuliah.css">
</head>
<body class="bg-light">

    <div class="container ">

      <h2 class="mb-4 mt-4">Form Data Matakuliah</h2>

      <div class="row m-auto d-flex justify-content-between align-items-center ">
        <div class="col-md-6 bg-white p-4 shadow-sm">
          <div class="kode">
            <label class="col-sm-5 col-form-label">Kode Matakuliah</label>
              <label><?= $kode; ?></label>
          </div>
          <div class="nama">
            <label class="col-sm-5 col-form-label">Nama Matakuliah</label>
            <label> <?= $nama; ?></label>
          </div>
          <div class="sks mb-4 ">
            <label class="col-sm-5 col-form-label">SKS</label>
            <label><?= $sks; ?></label>
          </div>
          <div class="link ">
            <a href="<?= base_url('matakuliah');?>" class="btn btn-primary">Kembali</a>
          </div>
    
        </div>
      </div>  

    </div>


</body>
</html>