<!doctype html>
<html>
<head>
    <title> MyNotebook </title>
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>" type="text/css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo base_url('bootstrap/js/bootstrap.js')?>"><</script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/script.js')?>"><</script>
</head>
<body>
    <h1 class="text-center pt-5 pb">My Notebook</h1>

    <?= $this->renderSection('content') ?>

    <div class="container-fluid text-center fixed-bottom">
        <em>&copy; 2023</em>
    </div>
</body>
</html>