<?= $this->extend('Layout/_main') ?>
<?= $this->section('content') ?>
<div class="main-content">
    <h1>Categories assignment</h1>
    <select class="form-control" id="root-select">
        <option value="">Select</option>
    </select>
</div>

<?= $this->endSection() ?>
<?= $this->section('script') ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="module" src="<?php echo base_url(); ?>/js/categories.js"></script>
<script>

</script>
<?= $this->endSection() ?>
