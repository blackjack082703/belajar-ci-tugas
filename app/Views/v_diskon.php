<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="pagetitle">
  <h1>Manajemen Diskon</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
      <li class="breadcrumb-item active">Diskon</li>
    </ol>
  </nav>
</div>

<?php if (session()->getFlashdata('success')): ?>
  <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
<?php endif ?>
<?php if (session()->getFlashdata('error')): ?>
  <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
<?php endif ?>

<div class="card">
  <div class="card-body pt-3">
    <a href="<?= base_url('diskon/create') ?>" class="btn btn-primary mb-3">Tambah Diskon</a>
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Tanggal</th>
          <th>Nominal</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($diskon as $i => $d): ?>
          <tr>
            <td><?= $i + 1 ?></td>
            <td><?= $d['tanggal'] ?></td>
            <td>Rp <?= number_format($d['nominal'], 0, ',', '.') ?></td>
            <td>
              <a href="<?= base_url('diskon/edit/' . $d['id']) ?>" class="btn btn-sm btn-success">Edit</a>
              <a href="<?= base_url('diskon/delete/' . $d['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus diskon ini?')">Hapus</a>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>

<?= $this->endSection() ?>
