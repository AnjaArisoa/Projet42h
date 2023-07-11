<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url().'/assets/css/accueil.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'/assets/css/completion.css'?>">
    <title>Navbar</title>
</head>
<body>
    <main>
    <form method="GET" action= <?php echo site_url('AdminCrud/insert_niveau')?>>

    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Nom Sport</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="nom" value="" />
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Description</label>
        <div class="col-sm-6">
        <input type="text" class="form-control" name="description" value="" />
        </div>

            <button type="submit" class="btn btn-primary">Envoyer</button>
</form>

    </main>
</body>
</html>
