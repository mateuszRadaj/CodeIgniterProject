<?= $this->extend('default') ?>

<?= $this->section('content') ?>

<div class="container w-50 text-center mt-5">

    <h2>note title:</h2>
    <h3 class="mb-3"> <?= $notes['note_title'] ?> </h2>
    <h2>note content:</h2>
    <h3 class="mt-3"> <?= $notes['note_content'] ?> </h5>

</div>

<div class="container w-50 text-center mt-5">

    <form action="edit_note" method="post">
        <label for=" <?= $notes['note_title'] ?> ">edit note title</label>
        <input type="text" name=" <?= $notes['note_title'] ?> ">

        <label for=" <?= $notes['note_content'] ?> " class="ms-4 mt-4">edit note content</label>
        <textarea name=" <?= $notes['note_content'] ?> " cols="50" rows="5" class="mt-3"></textarea>
    </form>

</div>

<?= $this->endSection() ?>



    