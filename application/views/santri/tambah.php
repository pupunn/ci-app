<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Form Tambah Data Santri
            </div>
            <div class="card-body">
            <form action="" method="post">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
                <small class="form-text text-danger"> <?= form_error('nama'); ?></small>
            </div> 
            <div class="form-group">
                <label for="noid">No. Induk</label>
                <input type="text" class="form-control" id="noid" name="noid">
                <small class="form-text text-danger"> <?= form_error('noid'); ?></small>
            </div> 
            <div class="form-group">
                <label for="tpl">Tempat Lahir</label>
                <input type="text" class="form-control" id="tpl" name="tpl">
                <small class="form-text text-danger"> <?= form_error('tpl'); ?></small>
            </div> 
            <div class="form-group">
                <label for="ttl">Tanggal Lahir</label>
                <input type="date" class="form-control" id="ttl" name="ttl">
                <small class="form-text text-danger"> <?= form_error('ttl'); ?></small>
            </div> 
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
                <small class="form-text text-danger"> <?= form_error('alamat'); ?></small>
            </div>
            <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
            </div>
            </div>
            </form>
        </div>
    </div>
</div>