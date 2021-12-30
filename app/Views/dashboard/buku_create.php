<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="col-md-10">
 <!-- general form elements -->
 <div class="card card-primary">
 <div class="card-header">
 <h3 class="card-title">Tambah Data Buku</h3>
 </div>
 <!-- /.card-header -->
 <!-- form start -->
 <?php if (!empty(session()->getFlashdata('error'))) : ?>
 <div class="alert alert-light alert-dismissible fade show"
role="alert">
 <h4 class="alert-heading">Periksa Entrian Form</h4>
 </hr />
 <?php echo session()->getFlashdata('error'); ?>
 <button type="button" class="close" data-dismiss="alert" arialabel="Close">
 <span aria-hidden="true">&times;</span>
 </button>
 </div>
 <?php endif; ?>
 <form class="form-horizontal" method="post" action="<?=
base_url('buku/store') ?> "enctype="multipart/form-data">
 <?= csrf_field(); ?>
 <div class="card-body">
 <div class="form-group row">
 <label for="id_buku" class="col-sm-2 col-formlabel">ID Buku</label>
 <div class="col-sm-6">
 <input type="text" class="form-control" id="id_buku"
name="id_buku" placeholder="Id_buku" value="<?= old('id_buku'); ?>">
 </div>
 </div>
 <div class="form-group row">
 <label for="title" class="col-sm-2 col-formlabel">Title</label>
 <div class="col-sm-6">
 <input type="text" class="form-control" id="title"
name="title" value="<?= old('title'); ?>">
 </div>
 </div>
 <div class="form-group row">
 <label for="penerbit" class="col-sm-2 col-formlabel">Penerbit</label>
 <div class="col-sm-6">
 <input type="text" class="form-control" id="penerbit"
name="penerbit" value="<?= old('penerbit'); ?>">
 </div>
 </div>
 <div class="form-group row">
 <label for="tahun_terbit" class="col-sm-2 col-form-label">Tahun Terbit</label>
 <div class="col-sm-6">
 <input type="text" class="form-control" id="tahun_terbit"
name="tahun_terbit" value="<?= old('tahun_terbit') ?>" />
 </div>
 </div>
 <div class="form-group row">
 <label for="stok_buku" class="col-sm-2 col-formlabel">Stok Buku</label>
 <div class="col-sm-6">
 <input type="text" class="form-control" id="stok_buku"
name="stok_buku" value="<?= old('stok_buku') ?>" />
 </div>
 </div>
 <div class="form-group row">
 <label for="foto" class="col-sm-2 col-form-label">Foto Buku</label>
 <div class="custom-file col-sm-6">
 <input type="file" class="custom-file-input" id="foto" name="foto">
 <label class="custom-file-label" for="foto">Pilih Foto Buku</label>
 </div>
 </div>
 </div>
 <!-- /.card-body -->
 <div class="card-footer">
 <button type="submit" class="btn btn-primary">Simpan</button>
 </div>
 <!-- /.card-footer -->
 </form>
 </div>
 <!-- /.card -->
</div>
<?= $this->endSection('content'); ?>
