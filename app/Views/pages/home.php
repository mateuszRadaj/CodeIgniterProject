<?= $this->extend('Views/default') ?>

<?= $this->section('content') ?>

<div class="page-content page-container" id="page-content">
  <div class="padding">
    <div class="container d-flex justify-content-center">
      <div class="col-lg-8 grid-margin stretch-card">
        <div class="card border-success-subtle border-4 rounded">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <tr>
                  <th>note title</th>
                  <th>note content</th>
                  <th>note created at</th>
                  <th>edit note</th>
                  <th>delete note</th>
                </tr>
                <?php foreach ($notes as $note)
                {
                ?>
                  <tr>
                    <td><?= $note['note_title']?></td>
                    <td><?= $note['note_content']?></td>
                    <td><?= $note['note_created_at']?></td>
                    <td>
                      <a href="notes/<?= $note['note_id'] ?>" method="get">
                        <button type="button" class="btn btn-outline-warning btn-sm">EDIT NOTE</button>
                      </a>
                    </td>
                    <td>
                        <form action="delete_note" method="post">
                          <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                          <input type="hidden" name="note_id" value=" <?= $note['note_id'] ?> ">
                          <button type="submit" class="btn btn-outline-danger btn-sm">DELETE NOTE</button>
                      </form>
                    </td>
                  </tr>
                <?php
                }
                ?>
              </table>
            </div>
          </div>
        </div>
      </div>      
    </div>
  </div>
</div>

<div class="container-fluid text-center">
  <a href="form">
    <button type="button" class="btn btn-primary my-4" hre>ADD NOTE</button>
  </a>
</div>

<?= $this->endSection() ?>