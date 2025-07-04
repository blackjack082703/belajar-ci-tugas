<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="pagetitle">
  <h1>Tambah Diskon</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="<?= base_url('diskon') ?>">Diskon</a></li>
      <li class="breadcrumb-item active">Tambah</li>
    </ol>
  </nav>
</div>

<?php if (session()->getFlashdata('error')): ?>
  <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
<?php endif ?>

<div class="card">
  <div class="card-body pt-3">
    <form action="<?= base_url('diskon/store') ?>" method="post">
      <div class="mb-3">
        <label for="tanggal">Tanggal</label>
        <input type="date" name="tanggal" required class="form-control" value="<?= old('tanggal') ?>">
      </div>
      <div class="mb-3">
        <label for="nominal">Nominal Diskon</label>
        <input type="number" name="nominal" required class="form-control" value="<?= old('nominal') ?>">
      </div>
      <button type="submit" class="btn btn-success">Simpan</button>
      <a href="<?= base_url('diskon') ?>" class="btn btn-secondary">Kembali</a>
    </form>
  </div>
</div>

<?= $this->endSection() ?>
