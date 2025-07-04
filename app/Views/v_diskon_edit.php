<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="pagetitle">
  <h1>Edit Diskon</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="<?= base_url('diskon') ?>">Diskon</a></li>
      <li class="breadcrumb-item active">Edit</li>
    </ol>
  </nav>
</div>

<div class="card">
  <div class="card-body pt-3">
    <form action="<?= base_url('diskon/update/' . $diskon['id']) ?>" method="post">
      <div class="mb-3">
        <label for="tanggal">Tanggal</label>
        <input type="date" name="tanggal" readonly class="form-control" value="<?= $diskon['tanggal'] ?>">
      </div>
      <div class="mb-3">
        <label for="nominal">Nominal Diskon</label>
        <input type="number" name="nominal" required class="form-control" value="<?= $diskon['nominal'] ?>">
      </div>
      <button type="submit" class="btn btn-success">Update</button>
      <a href="<?= base_url('diskon') ?>" class="btn btn-secondary">Kembali</a>
    </form>
  </div>
</div>

<?= $this->endSection() ?>
