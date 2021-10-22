<html>
<head>
    <title>Form Input Sepatu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/view-form-matakuliah.css">
</head>
<body class="bg-light">
    <div class="container ">
        <h2 class="mb-4 mt-4">Form Input Sepatu</h2>
        <form action="<?= base_url('transaksi/cetak'); ?>" method="POST">
            <div class="row m-auto d-flex justify-content-around align-items-center p-4 bg-white shadow-sm">
                <div class="form-input col-md-5 mb-2">
                    <label class="col-sm-5 col-form-label">Nama Pembeli</label>
                    <input class="form-control" type="text" placeholder="Nama Pembeli" name="nama">
                    <?= form_error('nama','<small class="text-danger pl-3">','</small> '); ?>
                </div>
                <div class="form-input col-md-5 mb-2">
                    <label class="col-sm-5 col-form-label">No Hp</label>
                    <input class="form-control" type="text" placeholder="No Handphone" name="no_hp">
                    <?= form_error('no_hp','<small class="text-danger pl-3">','</small> '); ?>
                </div>
                <div class="form-input col-md-5 mb-2">
                    <label class="col-sm-5 col-form-label">Sepatu</label>
                    <select name="merek" id="Sepatu" class="form-select">
                        <option selected value="" >Pilih Sepatu</option>
                        <option value="Nike">Nike</option>
                        <option value="Adidas">Adidas</option>
                        <option value="Kickers">Kickers</option>
                        <option value="Eiger">Eiger</option>
                    </select>
                    <?= form_error('merek','<small class="text-danger pl-3">','</small> '); ?>
                </div>
                <div class="form-input col-md-5 mb-2">
                    <label class="col-sm-5 col-form-label">No Sepatu</label>
                    <select name="ukuran" id="Sepatu" class="form-select">
                        <option selected value="" >Ukuran</option>

                        <?php for($i=32; $i <= 44; $i++) :?> 
                        <option value="<?= $i; ?>"><?= $i; ?></option>
                        <?php endfor;?>


                    </select>
                    <?= form_error('ukuran','<small class="text-danger pl-3">','</small> '); ?>
                </div>
                <div class="form-input col-5 mb-2 text-center">
                    <input type="submit" value="Submit" class="btn btn-primary">
                </div>  
            </div>

        </form>
    </div>
</body>
</html>