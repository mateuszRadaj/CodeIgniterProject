<?= $this->extend('default') ?>

<?= $this->section('content') ?>

<div class="container text-center">
    <h3 class="fw-bold py-5 text-success"><?= esc($message) ?></h3>

    <p class="btn btn-light"><?= anchor('form', 'Try it again!') ?></p>
    <div class="my-3"></div>
    <a href="/">
        <button type="button" class="btn btn-info my-4" hre>SEE ALL NOTES</button>
    </a>
</div>

<?= $this->endSection() ?>