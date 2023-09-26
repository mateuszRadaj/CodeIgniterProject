<?= $this->extend('default') ?>

<?= $this->section('content') ?>

<div class="container width-50 text-center">

    <?= validation_list_errors() ?>

    <?= form_open('form') ?>
    <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
        
        <div class="row mt-3 w-50 mx-auto">
            <h5 class="text-center">note title</h5>
            <input type="text" name="note_title">
        </div>
        <div class="row mt-3">
            <h5 class="text-center">note content</h5>
            <textarea name="note_content" rows="5" cols="100"></textarea>
        </div>

    <input type="submit" value="SAVE NOTE" class="btn btn-primary mt-4">
    <?= form_close() ?>

</div>

<div class="container text-center">
    <a href="/">
        <button type="button" class="btn btn-info my-4">SEE ALL NOTES</button>
    </a>
</div>

<?= $this->endSection() ?>